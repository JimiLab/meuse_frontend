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
                              <li>Section 4.1, 4.2</li>
                                    <ul>
                                      <li>How to define a tree:</li>
                                            <ul>
                                              <li>Recursively: A tree has a root and two children, which are also trees</li>
                                            </ul>
                                      <li>Properties of a tree</li>
                                            <ul>
                                              <li>If it has N nodes</li>
                                              <li>It has N-1 edges: Each edge connects a node to parent, but root has no edge connecting it to a parent</li>
                                                    <ul>
                                                      <li>leaves: no children</li>
                                                      <li>siblings: same parent</li>
                                                      <li>path: sequence of edges. Exactly one path from in a tree.</li>                                                        
                                                      <li>depth: path from root to node</li>
                                                      <li>height: longest path from node to root</li>
                                                    </ul>
                                            </ul>
                                    </ul>
                                    <li>directory trees</li>
                                          <ul>
                                            <li>Preorder traversal: directory first</li>
                                            <li>Postorder traversal: files first - used for estimating size of directories</li>
                                          </ul>
                                    <li>Expression trees </li>
                                          <ul>
                                            <li>used to represent calculations</li>
                                            <li>preorder: prefix notation in calculators, programming</li>
                                            <li>inorder: how humans solve it</li>
                                            <li>post-order: post-fix notations</li>
                                          </ul>
                              <li>Section 4.3</li>
                                    <ul>
                                      <li>Binary Search tree</li>
                                            <ul>
                                              <li>for node x, items in left subtree are less, right sub are greater</li>
                                              <li>interface type: implements comparable</li>
                                            </ul>
                                      <li></li>
                                      <li>AVL Tree</li>
                                            <ul>
                                              <li>Balance Condition:</li>
                                              <ul>
                                                <li>Empty subtree has height -1</li>
                                                <li>Left and right subtrees can differ by 1</li>
                                                <li>4 forms of insertion</li>
                                                      <ul>
                                                        <li>right subchild of right child - 1</li>
                                                        <li>left subchild of right child - 2</li>
                                                        <li>right subchild of left child - 3</li>
                                                        <li>left subchild of left child - 4</li>
                                                      </ul>
                                                <li>Solving insertions</li>
                                                      <ul>    
                                                        <li>First form - 1 and 4 - are mirrors.</li>
                                                              <ul>
                                                                <li>Solved by one rotation</li>
                                                                <li></li>
                                                                
                                                              </ul>
                                                        <li>Second form - 2 and 3 are mirrors</li> 
                                                              <ul>
                                                                <li>Double rotation</li>
                                                                <li></li>
                                                              </ul>
                                                      </ul>
                                              </ul>
                                              <li></li>
                                            </ul>
                                      <li>Splay Tree</li>
                                            <ul>
                                              <li>Any M consecutive ops take at most O(MlogN) time.</li>
                                              <li>Since a sequence of M ops has a total worst case time of O(Mf(N)) the amortized running time is  O(f(N))</li>
                                              <li>Whenever a node is accessed it must be moved: Moved to the root by AVL rotations</li>
                                              
                                            </ul>
                                    </ul>
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
