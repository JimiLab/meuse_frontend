<!DOCTYPE html>
<html>
  <head>
    <title>Tree example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <div class="container">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

  </head>
  <body>
    <body onload='main()'>

  	<?php include ('menus.php'); ?>

    <div class="row">
        <div class = "span3">
            <?php include ('notes_nav.php'); ?>
        </div> 
        <div class = "span8">
            <p>
                A tree example?



            </p>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/menus.js"></script>
    <script src="js/vivagraph.js"></script>
        <script type="text/javascript">
        function main () {
            // This demo shows how to create an SVG node which is a bit more complex
            // than single image. Do accomplish this we use 'g' element and 
            // compose group of elements to represent a node.
            var graph = Viva.Graph.graph();

            var graphics = Viva.Graph.View.svgGraphics(),
                nodeSize = 24;

            graph.addNode('1', '91bad8ceeec43ae303790f8fe238164b');
            graph.addNode('2', 'd43e8ea63b61e7669ded5b9d3c2e980f');
            graph.addLink('1', '2');
            graph.addLink('1', '3');

            graphics.node(function(node) {
              // This time it's a group of elements: http://www.w3.org/TR/SVG/struct.html#Groups
              var ui = Viva.Graph.svg('g'),
                  // Create SVG text element with user id as content
                  svgText = Viva.Graph.svg('text').attr('y', '-4px').text(node.id),
                  img = Viva.Graph.svg('image')
                     .attr('width', nodeSize)
                     .attr('height', nodeSize)
                     .link('https://secure.gravatar.com/avatar/' + node.data);

              ui.append(svgText);

              //ui.append(img);
              ui.append('svg:circle')
                .attr("r", 5)
                .attr("cx", 11)
                .attr("cy", 11)
                .attr('fill', '#17becf');
              return ui;
            }).placeNode(function(nodeUI, pos) {
                // 'g' element doesn't have convenient (x,y) attributes, instead
                // we have to deal with transforms: http://www.w3.org/TR/SVG/coords.html#SVGGlobalTransformAttribute 
                nodeUI.attr('transform', 
                            'translate(' + 
                                  (pos.x - nodeSize/2) + ',' + (pos.y - nodeSize/2) + 
                            ')');
            }); 

            // Render the graph
            var renderer = Viva.Graph.View.renderer(graph, {
                    graphics : graphics
                });
            renderer.run();
        }
    </script>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>


  </body>
</html>
