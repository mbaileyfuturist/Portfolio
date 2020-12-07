<?php include 'header.php'; ?>

<body>

<header class=" row bg-dark">
    <div id="mySidenav" class="sidenav" style="opacity:0.9">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="text-center" href="index.php#about">About</a>
        <a class="text-center" href="" data-toggle="modal" data-target="#exampleModal">Contact</a>
        <a class="text-center" href="index.php#services">Services</a>
        <a class="text-center" href="index.php#design-process" >Design Process</a>
        <a class="text-center" href="index.php">Home</a>
        <a class="text-center" href="index.php#prices">prices</a>
    </div>

    <div class="col mt-4">
    <ion-icon class="menu" onclick="openNav()" name="reorder-three-outline" style="color:white"></ion-icon>
    </div>

   <div class="home-div col mt-2">
        <a href="index.php"><ion-icon id="contact-icon" name="home-outline" title="home"></ion-icon></a>
        <p class="h5 text-white mr-5 icon-label">Home</p>
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
                        <textarea class="form-control" id="inputMessage" name="client_message" placeholder="message here..."></textarea>
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

        <div class="container mt-5 mb-5">
            <div class="row">
              <div class="col-sm">
                <a href="http://sub.mbaileyfuturist.dev" target="_BLANK"><img style="width:30rem;height:21rem;border: 1px solid black;border-radius: 15px;" src="static/images/RestaurantTemplate.png"></a>
                <h3 class="project-title text-center mt-3">Restaurant Template</h3>
                <h5 class="project description text-center">Mobile Responsive Restaurant Template (Developed using Bootstrap, CSS, Javascript, PHP and mySQL).</h5>
              </div>
              <div class="col-sm">
                <a href="http://sub4.mbaileyfuturist.dev" target="_BLANK"><img style="width:30rem;height:21rem;border: 1px solid black;border-radius: 15px;" src="static/images/MikesBookStore.png"></a>
                <h3 class="project-title text-center mt-3">Mikes Book Store</h3>
                <h5 class="project description text-center">Book inventory web application (Developed using Bootstrap, CSS, Javascript, PHP, and mySQL).</h5>
              </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm">
                    <a href="http://sub6.mbaileyfuturist.dev" target="_BLANK"><img style="width:30rem;height:21rem;border: 1px solid black;border-radius: 15px;" src="static/images/AutoTemplate.png"></a>
                    <h3 class="project-title text-center mt-3">Auto Shop Template</h3>
                    <h5 class="project description text-center">Mobile Responsive Auto Shop Template (Developed using Bootstrap CSS, JavaScript, PHP, and MySQL).</h5>
                </div>
                <div class="col-sm">
                    <a href="http://sub5.mbaileyfuturist.dev" target="_BLANK"><img style="width:30rem;height:21rem;border: 1px solid black;border-radius: 15px;" src="static/images/InvestmentHub.png"></a>
                    <h3 class="project-title text-center mt-3">The Investment Hub</h3>
                    <h5 class="project description text-center">A dynamic webpage animated using GSAP and scroll magic. (Developed using Bootstrap, CSS, and Javascript).</h5>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm">
                    <a href="http://sub7.mbaileyfuturist.dev/login.php" target="_BLANK"><img style="width:30rem;height:21rem;border: 1px solid black;border-radius: 15px;" src="static/images/TheFreelancer.png"></a>
                    <h3 class="project-title text-center mt-3">The Freelancer</h3>
                    <h5 class="project description text-center">A fully functioning user based website, where freelancers can go to find work and clients can go to hire for jobs. (Developed using Bootstrap, CSS, and Javascript, PHP and MySQL).</h5>
                </div>
                <div class="col-sm">
                
                </div>
            </div>
          </div>
  

          <footer class="bg-dark pt-5 pb-3">
            <div class="row">
                <div class="col-sm ml-5">
                    <nav class="footer-nav">
                        <a href="index.php#about"><h4 class="text-white"> About</h4></a>
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
                                  <form action="/action_page.php">
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
                                          <textarea class="form-control" aria-label="With textarea"></textarea>               
                                        </div>

                                      <div class="d-flex justify-content-center mb-3">
                                          <button type="button" class="btn btn-primary submit-btn" data-dismiss="modal">submit</button>
                                      </div>
                                  </form>
                              </div>  
                          </div>
                          </div>


                        <a href="index.php#services"><h4 class="text-white">Services</h4></a>
                        <a href="index.php#design-process"><h4 class="text-white">Design Process</h4></a>
                        <a href="index.php#prices"><h4 class="text-white">Prices</h4></a>
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
<?php include 'footer.php' ?>