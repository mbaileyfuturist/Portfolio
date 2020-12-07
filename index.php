
<?php include 'header.php'?>

<body>

<header class=" row bg-dark">
    <div id="mySidenav" class="sidenav" style="opacity:0.9">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="text-center" href="#about">About</a>
        <a class="text-center" href="" data-toggle="modal" data-target="#exampleModal">Contact</a>
        <a class="text-center" href="portfolio.php">Portfolio</a>
        <a class="text-center" href="#services">Services</a>
        <a class="text-center" href="#design-process" >Design Process</a>
        <a class="text-center" href="#prices">Prices</a>
    </div>

    <div class="col mt-4">
    <ion-icon class="menu" onclick="openNav()" name="reorder-three-outline" style="color:white"></ion-icon>
    </div>

   <div class="portfollio-div col mt-2">
       <div id="portfollio-div">
           <a href="portfolio.php"><ion-icon id="portfollio-icon" name="folder-open-outline" title="portfolio"></ion-icon></a>
            <p class="h5 text-white mr-5 icon-label">Portfolio</p>
       </div>
   </div>
  
   <div class="github-div col mt-2">
    <a href="https://github.com/mbaileyfuturist" target="_BLANK" title="github"><ion-icon id="github-icon" name="logo-github"></ion-icon></a>
   <p class="h5 text-white icon-label">Github</p>
    </div>
   
   <div class="contact-div col mt-2" data-toggle="modal" data-target="#exampleModal">
    <ion-icon id="contact-icon" name="person-circle-outline" title="contact"></ion-icon>
    <p class="h5 text-white icon-label">Contact</p>
   </div>
   

    <!-- Contact Forum -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
            <h4 class="modal-title text-white" id="exampleModalLabel">Need help building a new website?</h4>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="header.php" method="POST">
                    <div class="row">
                        <input type="text" class="ml-3 mr-1 form-control col" placeholder="first name" id="inputFirstName" name="first_name">
                        <input type="text" class=" mr-3 ml-1 form-control col" placeholder="last name" id="inputLastName" name="last_name">
                    </div>
                    
                    <div class="form-group mt-2">
                        <input type="email" class="form-control" placeholder="example@email.com" id="inputEmail" name="email">
                    </div>

                    <div class="form-group mt-2">
                        <input type="text" class="form-control" placeholder="company name" id="inputCompanyName" name="company_name">
                    </div>

                    <div class="form-group mt-2">
                        <textarea class="form-control" id="inputMessage" name="client_message" placeholder="message here ..." rows="5"></textarea>
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" name="submit" class="btn btn-primary submitBtn" data-dismiss="modal" onClick="submitContactForm()">submit</button>
                    </div>
                </form>
            </div>  
        </div>
        </div>
    </div>
   
</header>
 
          <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
          <div id="particles-js">    
            <h3 class="home-text text-center text-dark" style="position:absolute;top:900px;left:38%;">Click anywhere to interact with particles</h3>
            <h3 class="home-text text-center text-dark" style="position:absolute;top:950px;left:46%;">Scroll to continue</h3>
            <p id="signature" class="text-dark"><strong>Created by: mbaileyfuturist</strong></p>
          </div>

            <section id="about" class=" about pt-5 bg-primary text-white row" style="width:100%;">

              <div id="about-text" class="col-sm h2 d-flex align-items-center" style="width:50%;height:1000px;margin-left:10%;">
                  <p>My passion for web development has driven me to learn how to develop for both the front-end and the back-end for websites and applications alike. I am also quite experienced in bringing webpages to life through animations. I have had the wonderful opportunity to develop full-stack mobile and web application prototypes at places like NASA and General Dynamics.</p>
              </div>

              <div class="col-sm d-flex align-items-center">
                  <img class="profile-pic" src="static/images/Portfolio.JPG" style="width:500px;height:700px">
              </div>
            </section>

          <section id="services" class=" services" style="height:1000px">
            <div class="row" style="margin-top:300px;margin-left:200px;">
                <div class="col-sm">
                    <div class="flip-card border-primary">
                        <div class="flip-card-inner bg-primary">
                          <div class="flip-card-front">
                            <ion-icon class="card-icon text-white mt-5" name="code-outline"></ion-icon>
                              <h3 class="text-white">Static Web Design</h3>
                          </div>
                          <div class="flip-card-back d-flex align-items-center">
                            <h6 class="card-desicion">Promote your brand or business with a beautiful modern website.
                            </h6>
                          </div>
                        </div>
                      </div>
                </div>
                

                <div class="col-sm">
                    <div class="flip-card border-dark">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <ion-icon class="card-icon text-dark mt-5" name="play-outline"></ion-icon>
                              <h3 class="text-dark">Dynamic Web Design</h3>
                          </div>
                          <div class="flip-card-back bg-primary d-flex align-items-center">
                            <h6 class="card-desicion text-white">Separate your brand or business from the others with outstanding web animations.</h6>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="col-sm">
                    <div class="flip-card border-primary">
                        <div class="flip-card-inner bg-primary">
                          <div class="flip-card-front">
                            <ion-icon class="card-icon text-white mt-5" name="layers-outline"></ion-icon>
                              <h3 class="text-white">Logo Design</h3>
                          </div>
                          <div class="flip-card-back d-flex align-items-center">
                            <h6 class="card-desicion">Need a logo for your brand or business? Have yours designed by the best in business.</h6>
                          </div>
                        </div>
                      </div>
                </div>
            </div>

            <div class="row" style="margin-top:100px;margin-left:200px;">
                <div class="col-sm">
                    <div class="flip-card border-dark">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <ion-icon class="card-icon text-dark mt-5" name="settings-outline"></ion-icon>
                              <h3 class="text-dark">Backend Functionality</h3>
                          </div>
                          <div class="flip-card-back d-flex align-items-center bg-primary">
                            <h6 class="card-desicion text-white">Give your website functionality with data-driven information directly from your clients.</h6>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="col-sm">
                    <div class="flip-card border-primary">
                        <div class="flip-card-inner bg-primary">
                          <div class="flip-card-front">
                            <ion-icon class="card-icon text-white mt-5" name="server-outline"></ion-icon>
                              <h3 class="text-white">Server Management</h3>
                          </div>
                          <div class="flip-card-back d-flex align-items-center">
                            <h6 class="card-desicion">Have everything on the server managed for you, including but not limited to server updating, domain registration, and encryption with HTTPS.</h6>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="col-sm">
                    <div class="flip-card border-dark">
                        <div class="flip-card-inner">
                          <div class="flip-card-front">
                            <ion-icon class="card-icon text-dark mt-5" name="images-outline"></ion-icon>
                              <h3 class="text-dark">Content Revisions</h3>
                          </div>
                          <div class="flip-card-back d-flex align-items-center bg-primary">
                            <h6 class="card-desicion text-white">Update the content on your website once a week.</h6>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
          </section>

          <section id="design-process" class="design-process" style="width:100%;height:1000px">
            
            <div class="row contact-row">
              <div class="col-sm"  style="margin-top:5%;">
                <h4 class="process-text text-white"><strong class="text-primary">Initial Contact</strong> Interested in any of the services offered above? Send me an email using the contact form to get started.</h4>
              </div>

              <div class="col-sm"  style="margin-top:5%;">
                <img src="static/images/people-outline-blue.png" style="width:100px;height:100px;margin-left:40%;">
              </div>
            </div>

            <div class="row vision-row">
              <div class="col-sm">
                <h4 class="process-text text-white"><strong class="text-primary">Vision</strong> Tell me the vision of your website for your brand or business and I will make it a reality.</h4>
              </div>

              <div class="col-sm">
                <img src="static/images/eye-outline-blue.png" style="width:100px;height:100px;margin-left:40%;">
              </div>
            </div>

            <div class="row content-delivery-row">
              <div class="col-sm">
                <h4 class="process-text text-white"><strong class="text-primary">Content Delivery</strong> Images, text, and social media links. Give me the content you want and I will package it into your website.</h4>
              </div>

              <div class="col-sm">
                <img src="static/images/images-outline-blue.png" style="width:100px;height:100px;margin-left:40%;">
              </div>
            </div>

            <div class="row development-row">
              <div class="col-sm">
                <h4 class="process-text text-white"><strong class="text-primary">Development</strong> This step is where the magic happens. After telling me about your vision and providing the content. I will combine these to create the website of your dreams. </h4>
              </div>

              <div class="col-sm">
                <img src="static/images/hammer-outline-blue.png" style="width:100px;height:100px;margin-left:40%;">
              </div>
            </div>

            <div class="row approval-row">
              <div class="col-sm">
                <h4 class="process-text text-white"><strong class="text-primary">Approval</strong> After development, I will present the website for your review for any final changes before launch. </h4>
              </div>

              <div class="col-sm">
                <img src="static/images/thumbs-up-outline-blue.png" style="width:100px;height:100px;margin-left:40%;">
              </div>
            </div>
            
            <div class="row launch-row">
              <div class="col-sm">
                <h4 class="process-text text-white"><strong class="text-primary">Launch</strong> Your big day has finally arrived where you can launch your website and have a place for your brand or business on the internet to call home. </h4>
              </div>

              <div class="col-sm">
                <img src="static/images/rocket-outline-blue.png" style="width:125px;height:125px;margin-left:40%;">
              </div>
            </div>

          </section>

          <section id="prices" class="prices d-flex align-items-center justify-content-center" style="width:100%;height:1000px">
              <div class="row">
                  <div class="col-sm mr-5">
                    <div class="card" style="width: 18rem; height:30rem;">
                        <h3 class=" bg-secondary text-white p-3">Starter</h3>
                        <div class="card-body">
                          <h2 class="card-title">$49</h2>
                          <ul>
                              <li> <strong>Static Front End Design: </strong> I will design and build a basic front end for your website.</li>
                              <li> <strong>Domain Name: </strong>I will set up and configer a domain name for your website.</li>
                              <li> <strong>Server Deployment:</strong> Once the website is finished and has been approved I will deploy it onto a server.</li>
                          </ul>
                          <a data-toggle="modal" data-target="#exampleModal1" class="btn btn-primary text-white" style="margin-left:70px; margin-top:10px;">Contact</a>
                        </div>
                      </div>
                  </div>
                  
                  <div class="col-sm">
                    <div class="card" style="width: 18rem; height:38rem;">
                        <h3 class="bg-dark text-white p-3">Essential</h3>
                        <div class="card-body">
                          <h2 class="card-title">$99</h2>
                            <ul>
                                <li> <strong>Static Front End Design: </strong> I will design and build a basic front end for your website.</li>
                                <li> <strong>Backend Functionally: </strong> I will give your website backend functionality so that it can handle data from its users.</strong></li>
                                <li> <strong>Domain Name: </strong>I will set up and configer a domain name for your website.</li>
                                <li> <strong>Server Deployment: </strong> Once the website is finished and has been approved I will deploy it onto a server.</li>
                            </ul>
                          <a data-toggle="modal" data-target="#exampleModal1" class="btn btn-primary text-white" style="margin-left:70px; margin-top:20px;">Contact</a>
                        </div>
                      </div>
                  </div>

                  <div class="col-sm ml-5">
                    <div class="card" style="width: 18rem; height:41rem;">
                        <h3 class="bg-primary text-white p-3">Premium</h3>
                        <div class="card-body">
                          <h2 class="card-title">$149</h2>
                            <ul>
                                <li> <strong>Static Front End Design: </strong> I will design and build a basic front end for your website.</li>
                                <li> <strong>Backend Functionally: </strong> I will give your website backend functionality so that it can handle data from its users.</strong></li>
                                <li> <strong>Domain Name: </strong>I will set up and configer a domain name for your website.</li>
                                <li> <strong>Server Deployment: </strong> Once the website is finished and has been approved I will deploy it onto a server.</li>
                                <li> <strong>HTTPS Encryption: </strong> I will secure your website using HTTPS encryption.</li>
                            </ul>
                          <a data-toggle="modal" data-target="#exampleModal1" class="btn btn-primary text-white" style="margin-left:70px;">Contact</a>
                        </div>
                      </div>
                  </div>
              </div>
          </section> 


          <footer class="bg-dark pt-5 pb-3">
            <div class="row">
                <div class="col-sm ml-5">
                    <nav class="footer-nav">
                        <a href="#about"><h4 class="text-white"> About</h4></a>
                        <a data-toggle="modal" data-target="#exampleModal1"><h4 class="text-white">Contact</h4></a>

                        <!-- Contact Forum -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header bg-primary">
                              <h4 class="modal-title text-white" id="exampleModalLabel">Need help building a new website?</h4>
                              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                                  <form action="header.php" method="POST">
                                      <div class="row">
                                          <input type="text" class="ml-3 mr-1 form-control col" placeholder="first name" id="first_name">
                                          <input type="text" class=" mr-3 ml-1 form-control col" placeholder="last name" id="last _name">
                                      </div>
                                      
                                      <div class="form-group mt-2">
                                          <input type="email" class="form-control" placeholder="example@email.com" id="email">
                                      </div>

                                      <div class="form-group mt-2">
                                          <input type="text" class="form-control" placeholder="company name" id="company_name">
                                      </div>

                                      <divn class="form-group mt-2">
                                          <textarea class="form-control" aria-label="With textarea" placeholder="Your message ..." rows="5"></textarea>   
                                      </div>

                                      <div class="d-flex justify-content-center mb-3">
                                          <button type="button" class="btn btn-primary submit-btn" data-dismiss="modal">submit</button>
                                      </div>
                                  </form>
                              </div>  
                          </div>
                          </div>


                        <a href="portfolio.php"><h4 class="text-white">Portfolio</h4></a>
                        <a href="#services"><h4 class="text-white">Services</h4></a>
                        <a href="#design-process"><h4 class="text-white">Design Process</h4></a>
                        <a href="#prices"><h4 class="text-white">Prices</h4></a>
                    </nav>
                </div>
                <div class="col-sm">
                    
                </div>
                <div class="col-sm align-items-center">
                    <a href="https://www.linkedin.com/in/micheal-bailey-175965122/" target="_BLANK"><ion-icon class="footer-social" name="logo-linkedin"></ion-icon></a>
                    <a href="https://github.com/mbaileyfuturist" target="_BLANK"><ion-icon class="footer-social" name="logo-github"></ion-icon></a>
                </div>
            </div>
        </footer>

        <script src="sidenav.js"></script>
        <script src="hover.js"></script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                                          
    </body>

          <?php include 'footer.php'?>

