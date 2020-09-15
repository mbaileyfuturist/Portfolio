<?php include 'header.php' ?>

<body>

<header class=" row bg-dark">
    <div id="mySidenav" class="sidenav" style="opacity:0.9">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="text-center" href="#about">About</a>
        <a class="text-center" href="" data-toggle="modal" data-target="#exampleModal">Contact</a>
        <a class="text-center" href="portfolio.php">Portfolio</a>
        <a class="text-center" href="#services">Services</a>
        <a class="text-center" href="#design-process" >Design Process</a>
        <a class="text-center" href="index.php">Home</a>
        <!--<a class="text-center" href="#prices">prices</a>-->
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
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Need a new website?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                <a href="http://sub.mbaileyfuturist.dev" target="_BLANK"><img style="width:30rem;height:21rem;" src="static/images/RestaurantTemplate.png"></a>
              </div>
              <div class="col-sm">
                <a href="http://sub4.mbaileyfuturist.dev" target="_BLANK"><img style="width:30rem;height:21rem;" src="static/images/MikesBookStore.png"></a>
              </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm">
                    <a href="http://sub6.mbaileyfuturist.dev" target="_BLANK"><img style="width:30rem;height:21rem;" src="static/images/AutoTemplate.png"></a>
                </div>
                <div class="col-sm">
                <a href="http://sub5.mbaileyfuturist.dev" target="_BLANK"><img style="width:30rem;height:21rem;" src="static/images/InvestmentHub.png"></a>
                </div>
            </div>
          </div>
  

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
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Need a new website?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                          <script src="sidenav.js"></script>
                                          <script src="hover.js"></script>
                                          <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
                                          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                                          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                                          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                        <!--<a href="#prices"><h4 class="text-white">Prices</h4></a>-->
                    </nav>
                </div>
                <div class="col-sm">
                    
                </div>
                <div class="col-sm align-items-center">
                    <a href="https://www.linkedin.com/in/micheal-bailey-175965122/" target="_BLANK"><ion-icon class="footer-social" name="logo-linkedin"></ion-icon></a>
                    <a href="https://www.instagram.com/mbaileyfuturist/?hl=en" target="_BLANK"><ion-icon class="footer-social" name="logo-instagram"></ion-icon></a>
                    <a href="https://github.com/mbaileyfuturist" target="_BLANK"><ion-icon class="footer-social" name="logo-github"></ion-icon></a>
                </div>
            </div>
        </footer>
    </body>
<?php include 'footer.php' ?>