


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- tabs -->
    <link rel="stylesheet" href="css/bootstrap-tabs-x-bs4.min.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <!-- y-box -->
    <link rel="stylesheet" href="css/yBox.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    <title>WATCHES India </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script> 
    $(function(){
      $("#includedContent").load("database.php"); 
    });
    </script>
  </head>
  <body>
    <header>
        <div class="logo">
            <img src="images\logo.png" alt="">
        </div>
    </header>

               <!-- header end here -->

               <section class="thank">
        <div class="container">
            <div class="row">
                <div class="w-100 thank-box">
                    <p>Thank You For Your Interest</p>
                    <p style="color: white;">We will get in touch with you shortly</p>
                    <p style="color: white;" class="coupon_title"><span>Your Coupon Code is:</span></p>
                   <p class="coupon_code"><span><?php echo $_GET['token']; ?></span></p>
               
                </div>
            </div>
        </div>
    </section>

    
    <footer class="thank-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Copyright WATCHES INDIA PVT. LTD</span>
                </div>
                <div class="col-md-6 text-right">
                    <div class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-pinterest"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jquery tab -->
    <script src="js/bootstrap-tabs-x.min.js"></script>

    <!-- yBox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/directive.min.js"></script>
    <script src="js/yBox.min.js"></script>

    
  </body>
</html>