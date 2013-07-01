var global = {};
var lastFM = {};
var SHOUTcast = {};

$(document).ready(function () {
	show();
	initGlobals();
	initHandlers();
	initAutocomplete();
	if (navigator.appVersion.indexOf("Win")!=-1)
	    playStation();
});

function show() {
	$('body').show();
}

function initGlobals() {
	// Initialize globals
	global.artistRetrieved = false;
	global.stationsRetrieved = false;

	// Initialize lastFM
	lastFM.url = {};
	lastFM.url.options = {};
	lastFM.url.artist = {};
	lastFM.get = {};

	lastFM.url.options.artist = '&artist=';
	lastFM.url.options.api_key = '&api_key=435c93cef4067e23e99704d0db444ff2';
	lastFM.url.options.json = '&format=json';
	lastFM.url.options.autocorrect = '&autocorrect=1';
	lastFM.url.artist.info = "http://ws.audioscrobbler.com/2.0/?method=artist.getinfo" + lastFM.url.options.api_key + lastFM.url.options.json + lastFM.url.options.autocorrect + "&artist=";

	lastFM.artist_info = function (artist_name) {
		var search_url = lastFM.url.artist.info + artist_name;
		var result = {};
		$.getJSON(search_url, function (data) {
			result.artist = data.artist;
			handleLastFMResult(result);
		});
	}

	lastFM.get_cached_artists = function () {
		if (lastFM.cached_artists === undefined) {
			lastFM.cached_artists = [];

			$.ajax({
				url: "data/top_1000.json",
				dataType: 'json',
				async: false,
				success: function (data) {
					lastFM.cached_artists = data;
				}
			});
		}
		return lastFM.cached_artists;
	}

	// Initialize SHOUTcast
	SHOUTcast.url = {};
	SHOUTcast.url.options = {};

	SHOUTcast.stations = function (artist_name) {
		var search_url = 'http://jimi.ithaca.edu/meuse/artist?artist=' + artist_name;
		var result = [];

		$.getJSON(search_url, function (data) {
			if (data['success'] !== "False")
				result = data['data'];

			handleSHOUTcastResult(result);
		});
	}


}

function initHandlers() {
	/* search box glow */
	$('#query').on('focus', function () {
		$('#search').addClass("focus");
	});
	$('#query').on('focusout', function () {
		$('#search').removeClass("focus");
	});

	/* panel clicking*/
	$('.inner-panel').on('click', function () {
		if ($(this).hasClass("focus-panel"))
			return;

		if ($(this).hasClass("left-panel")) {
			$(this).removeClass("left-panel");
			$('.focus-panel').addClass("left-panel");
		} else {
			$(this).removeClass("right-panel");
			$('.focus-panel').addClass("right-panel");
		}

		$('.focus-panel').removeClass("focus-panel");
		$(this).addClass("focus-panel");
	});

	/* similar artist clicking */
	$('.similar-image').on('click', function (e) {
		if (jQuery.contains($('.focus-panel')[0], this)) {
			$('#query').val($('.similar-name', $(this)).text());
			search();
		}
	});

	/* arrow pressing */
	$(document).keydown(function (e) {
		if (!$('#artist-panel').hasClass('visible') || $('#query').is(":focus"))
			return;

		if (e.keyCode == 37 || e.keyCode == 39) {
			var left_panel = $('.left-panel');
			var focus_panel = $('.focus-panel');
			var right_panel = $('.right-panel');

			left_panel.removeClass("left-panel");
			focus_panel.removeClass("focus-panel");
			right_panel.removeClass("right-panel");

			if (e.keyCode == 37) {
				left_panel.addClass("right-panel");
				focus_panel.addClass("left-panel");
				right_panel.addClass("focus-panel");
			} else if (e.keyCode == 39) {
				left_panel.addClass("focus-panel");
				focus_panel.addClass("right-panel");
				right_panel.addClass("left-panel");
			}
		}
	});

	/* search submission */
	$("#search").submit(search);
}

function initAutocomplete() {
	$('#query').autocomplete({
		source: lastFM.get_cached_artists(),
		select: function (event, ui) {
			$('#search').submit();
		}
	});
}

//Function to get the attribute from query

function search() {
	$('#query').attr("placeholder", "Search for an artist...");

	global.artistRetrieved = false;
	global.stationsRetrieved = false;

	var query = $('#query').val();

	if (!query)
		return false;

	query = query.replace(/ /g, '+');

	enterResultLayout();

	$('#query').blur();

	lastFM.artist_info(query);
	SHOUTcast.stations(query);

	return false;
}

function enterResultLayout() {
	$('.ui-autocomplete').hide();

	$('body').removeClass();
	$('body').addClass("result-layout");

	bringForward($('#loading-panel'));
}

function enterSearchLayout() {
	$('.ui-autocomplete').hide();

	$('.panel').removeClass("visible");

	$('body').removeClass();
	$('body').addClass("search-layout");

	$('#banner').css("left", "50%");
}

function handleLastFMResult(result) {
	$('.left-panel').removeClass('left-panel');
	$('.focus-panel').removeClass('focus-panel');
	$('.right-panel').removeClass('right-panel');

	$('#info-panel').addClass('left-panel');
	$('#result-panel').addClass('focus-panel');
	$('#other-panel').addClass('right-panel');

	console.log(result);
	console.log("HERE");
	var artist = result['artist'];

	if (artist === undefined) {
		$('#query').attr("placeholder", "Artist not found");
		$('#query').val("");
		enterSearchLayout();
		console.log("undefined");
		return;
	}

	var name = artist['name'];
	var summary = artist['bio']['summary'];
	var image = artist['image'][3]['#text'];
	var similarArtists = artist['similar']['artist'];
	var tags = artist['tags']['tag'];

	if (summary === undefined || similarArtists === undefined) {
		$('#query').attr("placeholder", "Artist not found");
		$('#query').val("");
		enterSearchLayout();
		console.log("undefined 2");
		return;
	}

	$('#artist-header').html(name);
	$('#artist-summary').html(summary);
	$('#artist-summary a').attr('target','_blank');

	$('#artist-pic').css('background', "url(" + image + ")");
	$('#artist-pic').css('background-size', "cover");

	$.each(similarArtists, function (index, value) {
		if (index > 3)
			return;
		$('.similar-name', $('.similar-image').eq(index)).text(value['name']);
		$('.similar-image').eq(index).css('background', "url(" + value['image'][3]['#text'] + ")");
		$('.similar-image').eq(index).css('background-size', "cover");
	});

	$('#tag-cloud').html("");

	if(tags !== undefined)
	    {
		$.each(tags, function (index, value) {
			var weight = (tags.length - index) * (1 / tags.length) * 100;
			$('#tag-cloud').append("<span data-weight=\"" + weight + "\">" + value['name'] + "</span>");
		    });
	    }
	var settings = {
		"size": {
			"grid": 4,
			"factor": 2
		},
		"options": {
			"color": "random-dark",
			"printMultiplier": 3,
			"rotationRatio": 0.2
		},
		"font": "Futura, Helvetica, sans-serif",
		"shape": "square"
	};

	$("#tag-cloud canvas").remove();
	$("#tag-cloud").awesomeCloud(settings);

	global.artistRetrieved = true;
	checkData();
}

function handleSHOUTcastResult(result) {
	$('a', $('.result')).html("");
	$('a', $('.result').eq(0)).html("No Result!");
	$('h3', $('.result')).html("");
        $('h4', $('.result')).html("");
        $('h5', $('.result')).html("");
        $('h6', $('.result')).html("");
      
	var value = result;
	console.log(result);
	if (value[0] !== undefined) {
	    $.each(result, function (index) {
		//This gets each station name + station ID and creates the link to them

			$('a', $('.result').eq(index)).html(value[index][0][1]).attr("href", 'http://yp.shoutcast.com/sbin/tunein-station.pls?id=' + value[index][0][0]);

			if(value[index][0].length == 7 && value[index][0][5] != "")
			    $('h6', $('.result').eq(index)).html(value[index][0][6] + ' listeners | ' + value[index][0][5].replace("audio/", "") + ' | ' + value[index][0][4] + ' kbps');
			else
                            $('h6', $('.result').eq(index)).html("No metadata found for this station");

			//This gets the name of the current track
      			/**
			var nameOfTrack = value[index][0][3];
			if(nameOfTrack == "")
			    nameOfTrack= "No Track Information found."
			    $('h3', $('.result').eq(index)).html(nameOfTrack);

			*/
			//This concatenates the similar artists
			var simArtists = " ";
			var artists=value[index][1];
			$.each(artists, function (index) {
				simArtists = simArtists + artists[index][0];
				if(index < 2)
				    simArtists += ' | ';
			    });
			if(simArtists == "")
			    simArtist = "No Similar Artist's found";
			$('h4', $('.result').eq(index)).html(simArtists);

			//This checks if no tags were returned, and if they weren't then display that
			if (value[index][2].length != 0) {
				$('h5', $('.result').eq(index)).html(value[index][2][0] + ' | ' + value[index][2][1] + ' | ' + value[index][2][2]);
			} else {
				$('h5', $('.result').eq(index)).html("No tags found");
			}

	});
	}
	global.stationsRetrieved = true;
	checkData();
}

function checkData() {
    if (global.stationsRetrieved && global.artistRetrieved)
		bringForward($('#artist-panel'));
}

function bringForward(jqObj) {
	$('.panel').removeClass("visible");
	$(".station:gt(-1)").removeClass("play");
	jqObj.addClass("visible");
	$('#banner').css("left", "96%");
}

function playStation() {
	$(".station").on("click", function (event) {
		var p_href = $(this).attr('href');
		$('#player').replaceWith('<embed style="position:relative; height:33px; top:600px; left:540px;" hidden="yes" type="application/x-vlc-plugin" name="player" id="player" autoplay="yes" loop="no" target="' + p_href + '">');
		$(".station:gt(-1)").removeClass("play");
		$(this).addClass("play");
		console.log("color changed");
		event.preventDefault();
	});
}