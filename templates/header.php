<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Main Feed</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../static/style.css?v=1.1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Recursive&display=swap" rel="stylesheet">
    </head>
    <body>

        <header class=" row bg-dark">
            <div id="mySidenav" class="sidenav" style="opacity:0.9">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="text-center" href="#about">About</a>
                <a class="text-center" href="" data-toggle="modal" data-target="#exampleModal">Contact</a>
                <a class="text-center" href="portfolio.html">Portfolio</a>
                <a class="text-center" href="#services">Services</a>
                <a class="text-center" href="#design-process" >Design Process</a>
                <a class="text-center" href="#prices">prices</a>
            </div>

            <div class="col mt-4">
            <ion-icon class="menu" onclick="openNav()" name="reorder-three-outline" style="color:white"></ion-icon>
            </div>

           <div class="portfollio-div col mt-2">
               <div id="portfollio-div">
                   <a href="portfolio.html"><ion-icon id="portfollio-icon" name="folder-open-outline" title="portfolio"></ion-icon></a>
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
            </div>
           
        </header>