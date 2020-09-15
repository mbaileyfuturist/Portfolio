        
    <!-- Scroll Magic -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
        
        <!-- Particles.js -->
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
        <script>
            particlesJS.load('particles-js','../static/particles.json', function(){
                console.log('particles.jason loaded...');
            })
        </script>

    <!-- Ion Icons -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
     <!-- In House JS -->
    <script src="static/sidenav.js"></script>

    <script>
        function submitContactForm(){

            //Use JQuery to grab the values from from the form by their ID, these values are in the header.
            var first_name = $('#inputFirstName').val();
            var last_name = $('#inputLastName').val();
            var email = $('#inputEmail').val();
            var company_name = $('#inputCompanyName').val();
            var client_message = $('#inputMessage').val();

            //Use AJAX to post this data.
            $.ajax({
                type:'POST',
                url:'header.php',
                data:'contactFrmSubmit=1&first_name='+first_name+'&last_name='+last_name+'&email='+email+'&company_name='+company_name+'&client_message='+client_message,
                success:function(msg){
                        
                        //Clear the input values.
                        $('#inputFirstName').val('');
                        $('#inputLastName').val('');
                        $('#inputEmail').val('');
                        $('#inputCompanyName').val('');
                        $('#inputMessage').val('');

                        //View the message.
                        console.log(msg);
                },
                error:function(){
                    console.log("An error has occured.");
                }
            });
        }
        </script>
</html>