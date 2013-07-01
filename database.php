<?php
//Counting variable
$count = 1;

//stores POST request for artist
$artist = $_POST[artist];

//Opens connection to mySQL
$con = mysql_connect("localhost:/tmp/mysql.sock", "cs205user", "ithaca");

//Checks if connection was opened successfully.
if (!$con) {
                die('Could not connect: ' . mysql_error());
}

//Opens database MeUse with connection to the mySQL
mysql_select_db("MeUse", $con);

//Gets the contents
$shoutStations = file_get_contents("http://api.shoutcast.com/station/nowplaying?ct=$artist&f=json&k=**api_key**&limit=3");
$lastSimilar   = file_get_contents("http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist=$artist&api_key=**api_key**&format=json&limit=3&autocorrect=1");
$lastTags      = file_get_contents("http://ws.audioscrobbler.com/2.0/?method=artist.gettoptags&artist=$artist&api_key=**api_key**&format=json&limit=3&autocorrect=1");
$artistInfo    = file_get_contents("http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=$artist&api_key=**api_key**&format=json&autocorrect=1");

//Decode the Json into an array
$shoutStations = json_decode($shoutStations, TRUE);
$lastSimilar   = json_decode($lastSimilar, TRUE);
$lastTags      = json_decode($lastTags, TRUE);
$artistInfo    = json_decode($artistInfo, TRUE);
$a             = $artistInfo['artist']['name'];
$b             = $artistInfo['artist']['bio']['summary'];
$i             = $artistInfo['artist']['image'][3]['#text'];

/* Check if the artist is already in the Artist table
 * If the Artist is in the Artist table then sort the Station table by Score (highest to lowest)
 * Check the ArtistToStation table for stations that have id #s linked with the artist's id
 * Return the links of the highest scored stations, that are linked with the artist | Increment the scores of these stations as well
 * OTHERWISE do the following IF-ELSE
 */

$aID = mysql_query("Select id FROM Artist WHERE name='". $artist."'");

if(mysql_affected_rows() > 0)
{

                foreach ($shoutStations['response']['data']['stationlist']['station'] as $results) 
		  {
                                //Parses the title and makes it readable, stores it back in.
                                $title = $results['name'];
                                $title = explode("-", $title);
                                $title = trim($title[0]);
 	    			    $sID = mysql_query("Select id FROM Station WHERE title='". $title."' LIMIT 1");				   
				    mysql_query("Select score, shoutID FROM Station WHERE title='". $title."' ORDER BY score DESC");				   
			           mysql_query("Update Station SET score = score + 1 WHERE id='". $sID."'");
                                mysql_query("Update ArtistToStation SET score = score + 1 WHERE stationID='". $sID."' AND artistID='".$aID."'");

		}
}
//Checks if no result is found for the searched artist; otherwise executes computations to display result
if ($shoutStations['response']['statusCode'] == 462)
{
	
}
else {
                //Hits the API and returns links and the title of the stations    
                foreach ($shoutStations['response']['data']['stationlist']['station'] as $results) 
		  {
                                //Parses the title and makes it readable, stores it back in.
                                $title = $results['name'];
                                $title = explode("-", $title);
                                $title = trim($title[0]);
                                $link  = 'http://yp.shoutcast.com/sbin/tunein-station.pls?' . $results['id'];
                                $tag   = $lastTags['toptags']['tag'][$count - 1]['name'];
                                
                                /* Insert the 'title' and 'link' in the Station table, increment 'score'.
                                 * Insert the 'name' for the artist into the Artist table.
                                 * Insert 'id' for the Station as well as the 'id' for the artist into the ArtistToStation table, 
                                 * as stationID and artistID, respectively.
                                 */
				    mysql_query("INSERT INTO Station(title, shoutID, score) VALUES ('". $title."', '".$results['id']."', 1)");
				    mysql_query("INSERT INTO Artist(name) VALUES ('".$artist."')");
	    			    $sID = mysql_query("Select id FROM Station WHERE title='". $title."' LIMIT 1");				   
                                mysql_query("INSERT INTO ArtistToStation(artistID, stationID, score) VALUES ('".$aID."', '".$sID."', 1)");

                                /* Insert the 'tag' into the Tag table.
                                 * Insert the 'id' for the tag as well as the 'id' for the artist into the ArtistToTag table,
                                 * as tagID and artistID, respectively.
                                 */

				    mysql_query("INSERT INTO Tag(tagName, Score, IsActive) VALUES ('".$tag."', 1, false)");
	    			    $tID = mysql_query("Select id FROM Tag WHERE tagName='".$tag."' LIMIT 1");				   
                                mysql_query("INSERT INTO ArtistToTag(artistID, tagID, score) VALUES ('".$aID."', '".$tID."', 1)");

				    
			
                                
                                $count++;
                }
}
mysql_close($con);
?>