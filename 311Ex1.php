<!DOCTYPE html>
<html>
<head>
  <title>Adeesha's home page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <div class="container">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  <body>
  	<?php include ('menus.php'); ?>

    <div class="row">
      <div class = "span3">
        <?php include ('notes_nav.php'); ?>
      </div> 
      <div class = "span8">
        <h1> 311 Exam 1</h1>

              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Chapter 1
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse">
                    <div class="accordion-inner">
                            <ul>
                              <li>Section 1.1</li>
                              <li>Section 1.2</li>
                              <li>Section 1.3</li>
                            </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      Chapter 2
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                            <ul>
                              <li>All sections... </li>
                            </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      Chapter 3
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse">
                    <div class="accordion-inner">
                            <ul>
                              <li>Section 3.1</li>
                              <li>Section 3.2</li>
                              <li>Section 3.3</li>
                              <li>Section 3.4</li>
                              <li>Section 3.5</li>
                            </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                      Chapter 4
                    </a>
                  </div>
                  <div id="collapseFour" class="accordion-body collapse">
                    <div class="accordion-inner">
                            <ul>
                              <li>Section 4.1</li>
                              <li>Section 4.2</li>
                              <li>Section 4.3</li>
                              <li>Section 4.4</li>
                              <li>Section 4.5</li>
                            </ul>
                    </div>
                  </div>
                </div>
              </div>

      </div>
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/menus.js"></script>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
  </html>
