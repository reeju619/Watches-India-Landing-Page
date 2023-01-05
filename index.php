
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

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    <title>Watch Store Landing Page</title>
    <style>
		.error-msg{
			color: yellow;
			font-size: 14px;
		}
	</style>
  </head>
  <body>
    <header>
        <div class="logo">
            <img src="images\logo.png" alt="">
        </div>
    </header>

    <!-- header end here -->

    <section class="banner">
        <img class="desktop_banner" src="images\banner.png" alt="">
        <img class="mobile_banner" src="images/mobile_banner_img.jpg" alt="">
            <div class="banner-text">
                <p>Lorem ipsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nisl orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla suscipit dignissim nunc ut pulvinar.</p>
            </div>
    </section>

    <!-- banner end here -->

    <section class="location-con">
        <div class="container d-flex justify-content-center">
            <div class="col-lg-6 text-center location-wrap">
                <div class="new-store">
                    
                        <span>Curabitur viverra arcu in nisi auctor imperdiet.</span>
                        <img src="images\location.png" alt="">
                                          
                </div>
                <p>Curabitur viverra arcu in nisi auctor imperdiet.</p>    
                <p>Praesent lobortis orci quis urna consectetur ultricies, 
                    In sodales erat in dolor finibus cursus.</p>
                <p>
                Proin turpis lectus, 
                venenatis in quam vitae, 
                molestie ultricies ante</p>
                <div class="coupon" data-toggle="modal" data-target="#exampleModal">
                    <span>Get Your Deal Coupon Code</span>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content form-con form-con-2">
                        <div class="modal-header">
                          <div class="modal-title" id="exampleModalLabel">
                            <p>Fill up the form</p>
                            <p>and get deal coupon code</p>
                            
                          </div>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="lead.php" method="post" onsubmit="return validateForm()">
                            <input type="text" placeholder="Name" name="name" id="name">
                            <span class="error-msg" id="nameErr"></span>
                            <input type="phone" placeholder="Phone No." name="number" id="number">
                            <span class="error-msg" id="numberErr"></span>
                            <input type="email" placeholder="Email:" name="email" id="email">
                            <span class="error-msg" id="emailErr"></span>
                           
                            <input type="hidden" name="utm_src" id="utm_src" value="<?php echo $_GET['utm_source']; ?>">
           <input type="hidden" name="utm_med" id="utm_med" value="<?php echo $_GET['utm_medium']; ?>">
           <input type="hidden" name="utm_camp" id="utm_camp" value="<?php echo $_GET['utm_campaign']; ?>">
           <input type="hidden" name="utm_term" id="utm_term" value="<?php echo $_GET['utm_term']; ?>">
           <input type="hidden" name="utm_cont" id="utm_cont" value="<?php echo $_GET['utm_content']; ?>">
           <input type="hidden" name="utm_refer" id="utm_refer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
           <input type="hidden" name="ip_add" id="ip_add" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">

                            <input type="submit" class="submit" value="Save my seat now!">
                            </form>
                        </div>
                        <div class="modal-footer">
                          
                        </div>
                      </div>
                    </div>
                </div>

                
                
            </div>                
        </div>
    </section>

    <!-- location-con end here -->

    <section class="win-con">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 bg-theme text-center">
                    <div class="win-text-1">
                        <p>WIN YOUR MOST DESIRED </p>
                        <p>Let’s</p>
                        <p>celebrate</p>
                        <p>  our birthdays  </p>
                        <p>together!</p>
                        

                    </div>
                </div>
                <div class="col-lg-6 bg-dark text-center">
                    <div class="win-text-2">
                        <p>TECHNOLOGIES  FOR PEOPLE  </p>
                        <div class="line"></div>
                        <p>Morbi tincidunt imperdiet urna. Vivamus nec metus vel nisl </p>
                        <p>Donec quam turpis, 
                            aliquam at varius non, 
                            imperdiet non odio</p>
                        <p>Ut velit erat, aliquet vel eleifend id, consequat mattis turpis</p>
                        <p>– Ut pulvinar neque ac efficitur condimentum. – molestie ultricies ante </p>
                        <p>here at our store.
                            We're going to pick three lucky customers whose</p>
                        <p>birthdays fall in May and treat
                            them to a special celebration </p>
                        <p>at our store.</p>
                        <p>So, without further ado, sign up
                            today </p>
                        <p>to spend your special day with us!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 embed-wrap">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8 ">
                            <iframe class="you-vid" width="560" height="315" src="https://www.youtube.com/watch?v=Dxya5ucIroI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </section>

    <!-- win-con end here -->

    <section class="welcome-con text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="w-store">
                        <p>Welcome to the our Store</p>
                    </div>
                    <div class="w-text">
                        <span>We are glad to announce that our store is now available in India </span>
                        <span>Browse the comprehensive range of smart watches and discover premium collections </span>
                        <span>In sodales erat in dolor finibus cursus</span>
                    </div>
                    <div class="special-offer">
                        <p>Visit our store to get special offers!</p>
                        <!-- <span>Visit our store and encash your offer</span> -->
                        <a href="#form">Avail Offer Now </a>
                    </div>
                </div>
            </div>
                
        </div>
        <img src="images\bottom-img.png" alt="">
    </section>

    <!-- welcome-con end here -->

    <section class="form-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="form-con" id="form">
                        <p>Get your</p>
                        <p>coupon</p>
                        <p>code</p>
                        <form action="lead.php" method="post" onsubmit="return validateFormtwo()">
                            <input type="text" placeholder="Name" name="name" id="nametwo">
                            <span class="error-msg" id="nameerr"></span>
                            <input type="phone" placeholder="Phone No." name="number" id="numbertwo">
                            <span class="error-msg" id="numbererr"></span>
                            <input type="email" placeholder="Email:" name="email" id="emailtwo">
                            <span class="error-msg" id="emailerr"></span>

                            <input type="hidden" name="utm_src" id="utm_src" value="<?php echo $_GET['utm_source']; ?>">
           <input type="hidden" name="utm_med" id="utm_med" value="<?php echo $_GET['utm_medium']; ?>">
           <input type="hidden" name="utm_camp" id="utm_camp" value="<?php echo $_GET['utm_campaign']; ?>">
           <input type="hidden" name="utm_term" id="utm_term" value="<?php echo $_GET['utm_term']; ?>">
           <input type="hidden" name="utm_cont" id="utm_cont" value="<?php echo $_GET['utm_content']; ?>">
           <input type="hidden" name="utm_refer" id="utm_refer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
           <input type="hidden" name="ip_add" id="ip_add" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">

                            <input type="submit" class="submit" value="Sign Up">
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-con text-center">
                        <p>Stay tuned with us on</p>
                        <p>our offical social channels</p>
                        <div class="follow-btn">
                            <img src="images\follow.png" alt="">
                            <span href="#">follow us on </span>   
                            
                            
                        </div>
                        
                        <a href="#" target="_blank">
                            <div class="facebook-btn">
                                <img src="images\facebook.png" alt="">
                                <span>Facebook</span>
                            </div>
                        </a>    
                        
                        
                        <a href="#" target="_blank">
                            <div class="instagram-btn">
                                <img src="images\instagram.png" alt="">
                                <span>Instagram</span>
                            </div>
                        </a>                           
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- form section end here -->

    <section class="tab-sec">
        <div class="container-fluid">
            <div class="tabs-x tabs-below">
                <div id="myTabContent-kv-2" class="tab-content">
                    <div class="tab-pane fade active show" id="watch-1">
                        <div class="row">
                            <div class="col-lg-6 position-relative">
                                    <div class="tab-text d-flex align-items-center text-center">
                                        <p>Ut velit erat, aliquet vel eleifend id, consequat mattis turpis. Fusce dictum blandit lectus. Sed dignissim velit ut lorem ultrices pulvinar. Proin turpis lectus, venenatis in quam vitae, molestie ultricies ante. Suspendisse dui tortor, pretium et odio vel, interdum fermentum libero.</p>
                                    </div>
                            </div>
                            <div class="tab-img">
                                <img src="images\eco-dr-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="watch-2">
                        <div class="row">
                            <div class="col-lg-6 position-relative">
                                    <div class="tab-text d-flex align-items-center text-center">
                                        <p>In hac habitasse platea dictumst. Phasellus pellentesque risus nec sem maximus, ac facilisis sapien auctor.</p>
                                    </div>
                            </div>
                            <div class="tab-img">
                                <img src="images\satellite.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="watch-3">
                        <div class="row">
                            <div class="col-lg-6 position-relative">
                                    <div class="tab-text d-flex align-items-center text-center">
                                        <p> Integer luctus id erat et aliquam. Morbi tincidunt imperdiet urna. Vivamus nec metus vel nisl congue aliquam. Fusce suscipit leo in enim egestas iaculis eget in ante.</p>
                                    </div>
                            </div>
                            <div class="tab-img">
                                <img src="images\series-8.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="watch-4">
                        <div class="row">
                            <div class="col-lg-6 position-relative">
                                    <div class="tab-text d-flex align-items-center text-center">
                                        <p>Duis et sapien id massa venenatis vestibulum non vitae sapien. Curabitur pellentesque metus eros, a consectetur tortor euismod nec. Ut pulvinar neque ac efficitur condimentum. </p>
                                    </div>
                            </div>
                            <div class="tab-img">
                                <img src="images\radio-controlled.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="watch-5">
                        <div class="row">
                            <div class="col-lg-6 position-relative">
                                    <div class="tab-text d-flex align-items-center text-center">
                                        <p>Mauris et ornare ligula. Etiam ut urna id augue semper venenatis et eu augue. Suspendisse turpis nisi, aliquam in velit sed, tincidunt consectetur magna. Aenean maximus interdum metus non iaculis.</p>
                                    </div>
                            </div>
                            <div class="tab-img">
                                <img src="images\promaster.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="watch-6">
                        <div class="row">
                            <div class="col-lg-6 position-relative">
                                    <div class="tab-text d-flex align-items-center text-center">
                                        <p>Curabitur sapien augue, ornare ut mollis a, tincidunt et est. In ut metus vitae ligula sagittis pellentesque eget vitae lacus. Mauris rhoncus orci quam, quis tincidunt tellus eleifend vel.</p>
                                    </div>
                            </div>
                            <div class="tab-img">
                                <img src="images\citizen-L.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="watch-7">
                        <div class="row">
                            <div class="col-lg-6 position-relative">
                                    <div class="tab-text d-flex align-items-center text-center">
                                        <p> Ut pulvinar neque ac efficitur condimentum. Nullam egestas luctus urna. Proin fermentum viverra ex, at faucibus magna bibendum vel.</p>
                                    </div>
                            </div>
                            <div class="tab-img">
                                <img src="images\ecodrive.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="watch-8">
                        <div class="row">
                            <div class="col-lg-6 position-relative">
                                    <div class="tab-text d-flex align-items-center text-center">
                                        <p>Curabitur sapien augue, ornare ut mollis a, tincidunt et est. In ut metus vitae ligula sagittis pellentesque eget vitae lacus. Mauris rhoncus orci quam, quis tincidunt tellus eleifend vel.</p>
                                    </div>
                            </div>
                            <div class="tab-img">
                                <img src="images\mechanical.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="watch-9">
                        <div class="row">
                            <div class="col-lg-6 position-relative">
                                    <div class="tab-text d-flex align-items-center text-center">
                                        <p>Duis et sapien id massa venenatis vestibulum non vitae sapien. Curabitur pellentesque metus eros, a consectetur tortor euismod nec.</p>
                                    </div>
                            </div>
                            <div class="tab-img">
                                <img src="images\quartz.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="w-100 bg-dark">
                    
                        <div class="container tab-list">
                            <ul id="myTab-kv-2" class="nav nav-tabs" role="tablist">
                                <li><a href="#watch-1" class="active" role="tab" data-toggle="tab" aria-selected="true"><i class="glyphicon glyphicon-home"></i> Eco-Drive one</a></li>
                                <li><a href="#watch-2" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>satellite wave GPS</a></li>
                                <li><a href="#watch-3" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>Series 8</a></li>
                                <li><a href="#watch-4" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>Radio controlled</a></li>
                                <li><a href="#watch-5" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>promaster</a></li>
                                <li><a href="#watch-6" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>citizen-L</a></li>
                                <li><a href="#watch-7" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>Eco-Drive</a></li>
                                <li><a href="#watch-8" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>Mechanical</a></li>
                                <li><a href="#watch-9" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-user"></i>QUARTZ</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
                   
            </div>
        </div>
    </section>



    <!-- tabs end here -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Copyright WATCHES INDIA PVT. LTD</span>
                </div>
                <div class="col-md-6 text-right">
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a> 
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

    <script type="text/javascript" src="script.js"></script>
	<script type="text/javascript" src="scripttwo.js"></script>
  </body>
</html>