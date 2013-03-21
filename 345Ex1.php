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
        <h1> 345 Exam 1</h1>
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                Chapter 1
              </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner">
                <ul>
                  <li>Essential attributes of good software, how to describe 'em</li>
                  <li><img src="images\Figure_1.png" alt="attributes of good software"> </li>
                  <ul>
                    <li>maintainability</li>
                    <li>dependability + security</li>
                    <li>efficiency</li>
                    <li>acceptability</li>
                  </ul>
                  <li>What is software eng? Fig 1.1: An engineering discipline that focuses on all aspects of software production</li>
                  <li>difference btw Computer Science and Systems Eng: Computer science focuses on theory and fundamentals. Software engineering is 
                    concerned with the practicalities of developing and delivering good software</li>
                  <li>How the web has changed during software eng: Led to SaaS, highly distributed service based systems. Advances in programming 
                    languages and software reuse</li>
                  <li>How ethics affect software eng</li>
                  <ul>
                    <li>Respect confidentiality of client regardless of agreement </li>
                    <li>Not misrepresent your level of confidence</li>
                    <li>aware of IP rights and work to protect them</li>
                    <li>Not use your powers for evil / not use your technical knowledge for malicious activity</li>
                    <li>reuse</li>
                    <li>changing reqs</li>
                    <li>constrained interfaces</li>
                    <li>IP rights</li>
                    <li>computer misuse</li>
                  </ul>
                  <li>the 3 case studies</li>
                        <ul>
                          <li>Embedded system: Software controlling a hardware device is embedded in it.</li>
                          <li>Information System: primarily to manage and provide access to a database </li>
                          <li>Sensor based data collection: Collect data from sensors and manage it in some way</li>
                        </ul>
                  <ul>
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
                      <li>Software process models - descibe them, similarities and differences</li>
                      <ul>
                        <li>waterfall incremental dev: Each process activity is a separate phase</li>
                        <li><img src="images/Waterfall.png" alt="Waterfall model"></li>
                        <ul>
                          <li>Plan-driven: plan all the acts before you do them</li>
                          <li>Each phase is a document to sign off</li>
                          <li>Change docs to reflect changes</li>
                          <li>Often freeze activities</li>
                          <li>Operation and maintainance phase is really long</li>
                          <li><span class="label label-success">Good</span>Easy for managers to monitor</li>
                          <li><span class="label label-warning">Bad</span>Inflexible</li>
                        </ul>
                        <li>reuse-oriented: Make a lot of reusable components. 
                          Focus on integrating them, not develop them all</li>
                          <li><img src="images/Reuse_oriented.png" alt="Reuse oriented software development"></li>
                          <ul>
                            <li>new stages</li>
                            <ul>
                              <li>Component analysis: Find out what components are available</li>
                              <li>Requirements modification: Modify reqs to fit available components</li>
                              <li>System design with reuse: Create a framework or reuse a framework...</li>
                              <li>Development and Integration: Integrate the components and develop ones that do not exist</li>              
                            </ul>
                            <li>Types of component:</li>
                            <ul>
                              <li>Web services</li>
                              <li>Object collections: (.NET packages)</li>
                              <li>Stand-alone for a particular env</li>
                            </ul>
                            <li><span class="label label-success">Good</span>Using available software, so fewer risks</li>
                            <li><span class="label label-success">Good</span>Fast delivery, because less to write</li>
                            <li><span class="label label-warning">Bad</span>Requirements have to be compromised</li>
                            <li><span class="label label-warning">Bad</span>Lose control of evolution because components are developed by independent people</li>
                          </ul>
                        </ul>
                        <li>Four fundamental acts of software eng, describe and diagram</li>
                        <ul>
                          <li>Specification: Define what does it do, constraints</li>
                          <li>Design and Implementation: Make the software</li>
                          <li>Validation: Check it does that</li>
                          <li>Evolution: Changing customer needs</li>
                        </ul>
                        <li>Know acts involved in spec and be able to describe them</li>
                        <li><img src="images/Requirements_eng" alt="Requirements engineering image"></li>
                        <ul>
                          <li>Feasibility study</li>
                          <ul>
                            <li>Can user reqs be satisfied using current technologies</li>
                            <li>Is the product cost-effective?</li>
                            <li>Can the product fit the budget</li>
                            <li>Quick and cheap</li>
                          </ul>
                          <li>Requirements elicitation</li>
                          <ul>
                            <li>Figure out reqs, looking at existing systems</li>
                            <li>Discuss with users, do task analysis</li>
                          </ul> 
                          <li>Requirements specification</li>
                          <ul>
                            <li>Translate information gathered into a doc</li>
                          </ul>
                          <li>requirements validation</li>
                          <ul>
                            <li>Check requirements for realism, consistency, and completeness</li>
                            <li>Find and correct errors</li>
                          </ul>
                        </ul>
                        <li>Know acts involved in design and implementation</li>
                        <li><img src="images/Design_process.png" alt="Design process images"></li>
                        <ul>
                          <li>architectural Design</li>
                          <ul>
                            <li>identify overall structure</li>
                            <li>principle components</li>
                            <li>relationships</li>
                            <li>distribution</li>
                          </ul>
                          <li>interface design</li>
                          <ul>
                            <li>define interfaces between components</li>
                            <li>unambiguous: all components must be able to function without knowing what other things do</li>
                            <li>components developed concurrently</li>
                          </ul>
                          <li>component design</li>
                          <ul>
                            <li>design how each component will operate</li>
                            <li>could be a list of changes to an existing construct</li>
                          </ul>
                          <li>database design</li>
                          <ul>
                            <li>represent datastructures in a database</li>
                          </ul>
                        </ul>
                        <li>Know acts involved in software validation and describe them</li>
                        <li><img src="images/Testing_stages.png" alt="Testing stages"></li>
                        <ul>
                          <li>dev testing</li>
                          <ul>
                            <li>Component testing (TDD) by devs</li>
                            <li>Without other system components</li>
                            <li>Test automation tools used</li>
                          </ul>
                          <li>system testing</li>
                          <ul>
                            <li>Integration testing? Finding errors caused by interaction of components</li>
                            <li>Testing emergent properties</li>
                          </ul>
                          <li>acceptance testing</li>
                          <ul>
                            <li>Final phase. Tested with customer data</li>
                            <li>Double check with user reqs</li>
                          </ul>
                          <li>This is what testing in a plan-driven env looks like: <img src="images/Plan_driven_testing.png" alt="Plan driven testing"></li>
                        </ul>
                        <li>Know what software evolution involves:</li>
                        <ul>
                          <li>Changes after deployment are expensive</li>
                          <li>Software changes are cheaper than hardware changes</li>
                          <li>1 process, not 2 (development and maintainance) </li>
                        </ul>
                        <li>Issues that arive in coping with change</li>
                        <ul>
                          <li>Reqs can change</li>
                          <li>New technologies - new possibilities</li>
                          <li>rework: requirements analysis has to be repeated</li>
                          <li>reduce rework - two approaches</li>
                          <ul>
                            <li>change avoidance: eg- refine design with customers before deployment</li>
                            <li>change tolerance: low cost increments to the system. Each increment is cheap </li>
                          </ul>
                        </ul>
                        <li>Prototyping, what its used for, the process model, strengths and weaknesses</li>
                        <ul>
                          <li>Prototype: Initial version to demonstrate concepts, design option, explore possible solutions to the problem</li>
                          <li>Useful for requirements engineering process and system design process</li>
                          <li>Process model</li>
                          <ol>
                            <li>Establish Objectives</li>
                            <li>Define functionality</li>
                            <li>Develop prototype</li>
                            <li>Evaluate prototype</li>
                          </ol>
                          <li><span class="label label-success">Good things</span></li>
                          <ul>
                            <li>test alternate designs</li>
                            <li>demonstrate feasibility to managers</li>
                          </ul>
                          <li><span class="label label-warning">Bad things</span></li>
                          <ul>
                            <li>Prototype is used differently from product</li>
                            <li>Throwaway prototypes are dangerous</li>
                            
                          </ul>
                        </ul>
                        <li>Incremental delivery, what it is used for, process model, strengths and weaknesses</li>
                        <ul>
                          <li>Increments are developed then deployed in a production env</li>
                          <li>Prioritized in order of importance to the customer</li>
                          <li>Requirements for the first increment are defined</li>
                          <li><span class="label label-success">Good things</span></li>
                          <ul>
                            <li>Customers can use experience of early increments to inform decisions and expectations of later incs</li>
                            <li>Customers get value from investment much sooner</li>
                            <li>Since important systems are implemented first, they get the most integration testing which means most
                              important components are most reliable</li>
                            </ul>
                            <li><span class="label label-warning">bad things</span></li>
                            <ul>
                              <li>Interfaces and common facilities for the system are hard to define in advance</li>
                              <li>Hard to use when replacing a system because new system will be crippled</li>
                              <li>Doesn't work with customer contract expectations</li>
                            </ul>
                          </ul>
                          <li>Boehm spiral, sectors, use, strengths and weaknesses</li>
                          <ul>
                            <li>Risk driven process: Combines change avoidance with change tolerance</li>
                            <li>Sectors:</li>
                            <ul>
                              <li>Objective setting: Define objectives for a phase. Identify constraints</li>
                              <li>Risk assesement and reduction for each phase</li>
                              <li>Development and validation: define developmental model for the stage</li>
                              <li>Planning: decide whether to continue. If so, make more plans!</li>
                            </ul>
                            <li><span class="label label-success">Good things</span>Risk-aware process: Fewer unexpected risks</li>
                            <li><span class="label label-warning">Bad things</span>More detailed planning requires more attention, so less 'real' work is done</li>
                          </ul>
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
                          <li>Describe Agile Software development</li>
                          <ul>
                            <li>Incremental approach to specification, development and delivery</li>
                            <li>Good for when requirements change quickly</li>
                            <li>Quickly deliver software to customers</li>
                            <li>less bureaucracy</li>
                          </ul>
                          <li>Plan driven agile, draw figure 3.2, strengths and weaknesses</li>
                          <ul>
                            <li><img src="images/Figure_3_2.png" alt="Figure 3.2"></li>
                            <li>
                              <div class="row">
                                <div class="span3"> Plan Driven       
                                  <ul>
                                    <li>Separate stages with outputs for each stage</li>
                                    <li>Formal documents to communicate progress after iteration</li>
                                    <li>Design, then implementation</li>
                                    
                                  </ul></div>
                                  <div class="span3"> Agile         
                                    <ul>
                                      <li>Design and implementation are central</li>
                                      <li>Simultaneous design and implementation</li>
                                      
                                    </ul></div>
                                  </div>
                                </li>
                                <li>Plan driven agile can have a documentation spike</li>
                                
                              </ul>
                              <li>Extreme programming, 3.3, Extreme programming practices, 3.4, strengths, weaknesses</li>
                              <ul>
                                <li><img src="images\Extreme.png" alt="Extreme programming diagram"></li>
                                <li>Properties:</li>
                                <ul>
                                  <li>Pushing good practice to extreme levels</li>  
                                  <li>Requirements are scenarios (user stories)</li>
                                  <li>Pair programming, TDD</li>
                                  <li>Quick successive releases of system</li>
                                  <li>Continuous customer engagement</li>
                                  <li>Story cards</li>
                                </ul>
                                <li><img src="images\Extreme_2.png" alt="Extreme programming diagram"></li>
                              </ul>
                              <li><span class="label label-success">Good things</span>      <ul>
                                <li>Good practices</li>
                                <li>High productivity</li>
                                <li>Lots of testing</li>
                              </ul></li>
                              <li><span class="label label-warning">Bad things</span>      <ul>
                                <li>Incremental changes degrade system structure</li>
                                <li>Refactoring is hard</li> 
                              </ul></li>
                              <li>Pair programming, strengths and weaknesses</li>
                              <ul>
                                <li>Dynamic pairs, so that everyone works with everyone</li>
                                <li></li>
                                <li><span class="label label-success">Good things</span>
                                  <ul>
                                    <li>Collective ownership of system</li>
                                    <li>Informal review process</li>
                                    <li>Supports refactoring</li>
                                    <li>Good for younger programmers</li>
                                    <li>Sharing of knowledge is greater</li>
                                  </ul>
                                </li>
                                <li><span class="label label-warning">Bad things</span>
                                  <ul>
                                    <li>Bad for experienced programmers</li>
                                  </ul>
                                </li>
                              </ul>
                              <li>How agile project management is done, what scrum is, strengths and weaknesses, 3.8</li>
                              <ul>
                                <li>make sure software is delivered on time and within budget</li>
                                <li>Scrum Approach
                                  <ul>
                                    <li>Phases:       <ul>
                                      <li>Outline: General objectives, design architecture</li>
                                      <li>Sprint cycles: Develop increment of system</li>
                                      <li>Project Closure: wrap up project, documentation</li>
                                    </ul></li>
                                    <li>Sprint cycles
                                      <ul>
                                        <li>Innovative. Work done assessed, features selected, software implemented.</li>
                                        <li>Software delivered at end of sprint</li> 
                                        <li>2-4weeks long</li>
                                        <li>No project manager - instead scrum master</li>
                                      </ul></li>
                                      <li><img src="images\Scrum.png" alt="Extreme programming diagram"></li>
                                    </ul>
                                  </li>
                                  
                                </ul>
                                <li>No 3.5</li>
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
