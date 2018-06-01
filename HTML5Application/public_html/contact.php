<!DOCTYPE html>
<html>
    <head>
        <title>PAG Fine Homes Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/pagstyles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="/pagScript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container-fluid"> 
            <!--Main navigation start -->                
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="/index.php"><img  id="pag-logo" src="pag_logo.jpg" alt="Pag Fine Homes logo"></a>
                          <a href="/contact.php"><img class="media-contact" src="media-contact.png" alt="Contact Icon"></a>
                    </div>
                    <ul class="nav navbar-nav pag-nav-text">
                        <li><a href="/index.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="/work.html">OUR WORK<span class="toggle-sign">></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="/work.html/#completed">COMPLETED PROJECTS</a></li>
                                <li><a href="/work.html/#current">CURRENT PROJECTS</a></li>
                                <li><a href="/work.html/#future">FUTURE PLANS</a></li>
                            </ul>
                        </li>    
                        <li><a href="/about.html">ABOUT US</a></li>
                        <li><a href="/contact.php">CONTACT US</a></li>
                    </ul>
                </div>
            </nav>
            <!--Main navigation end --> 

            <div class="pag-about">
                <img src="img/pag-contact.jpg" class="img-responsive" alt="Contact Us Image">
                <div class="pag-pic-heading">Contact Us</div>
            </div>    
            
            <!--Input Form start-->
            <?php 
            if(!empty($_POST['emailPosted'])){
                
                $error = "";
                $name = strip_tags(htmlentities($_POST['name']));
                if (empty($_POST['name'])){
                    $error = "Name is required<br />";
                }
                
                $email = $_POST['email'];
                if (empty($_POST['email'])){
                    $error .= "Email is required<br />";
                }
                elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST['email'])){
                    $error .= "Email is invalid<br />";
                }
                
                $message = strip_tags(htmlentities($_POST['message']));
                if (empty($_POST['message'])){
                    $error .= "Message is required<br />";
                }
                
                if (!$error) {
                    $subject = "pagfinehomes.com: message from " . $name;
                    $headers = 'From: ' . $email . "\r\n" .
                            'Reply-To: ' . $email . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                    try {
                        if(mail($to, $subject, $message, $headers)){
                            $name = "";
                            $email = "";
                            $message = "";
                            $output = '<div class="email-sent">Email was sent, thank you.</div>';
                        }
                        else{
                            $output = '<div class="email-problem">Email delivery failed. Please try again later.</div>'; 
                        }
                    } catch (Exception $exc) {
                        $output = '<div class="email-problem">Email delivery failed. Please try again later.</div>'; 
                    }                    
                }
                else{
                    $output = '<div class="email-error">'.$error.'</div>'; 
                }
            } ?>
            
            <form id="pagContact" method="post" action="/contact.php">
                <div class="form-bg">
                    
                    <p>Feel free to ask us any question and we will get back to you as soon, as we can.</p>
                    <?=$output?>
                    <div class="form-group form-group-lg form-size">
                        <label for="usr" class="label-position">Your Name:<span class="aster">*</span></label>
                        <input id="usr" type="text" name="name" value="<?=$name?>" class="form-control form-color" placeholder="Ex: John Dough">
                    </div>
                    <div class="form-group form-group-lg form-size">
                        <label for="email" class="label-position">Your Email:<span class="aster">*</span></label>
                        <input id="email" type="text" name="email" value="<?=$email?>" class="form-control" placeholder="Ex: johndough@someplace.com">
                    </div>

                    <div class="form-group form-group-lg">
                        <label for="message"  class="label-position">You Message:<span class="aster">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Your Message Here.."><?=$message?></textarea>
                    </div>
                    <p><span class="aster">*</span>All fields are required.</p>

                    <button type="submit" id="submit" class="btn pag-btn">Submit</button>
                    <button type="button" id="cancel" class="btn pag-btn-grey" onclick="clearContactForm()">Clear</button>
                    <input type="hidden" name="emailPosted" value="1" />
                    <br><br> 
                </div>
            </form>
                
                <!--Footer start-->
                <div class="pag-footer container-fluid">
                    <ul class="pag-partners">
                        <li><img src="/img/partners1.png"></li>
                        <li><img src="/img/partners2.png"></li>
                        <li><img src="/img/partners3.png"></li>
                        <li><img src="/img/partners4.png"></li>
                    </ul>
                    <ul class="footer-nav">
                        <li><a >Home</a></li>
                        <li><a>Our Work</a></li>
                        <li><a>About Us</a></li>
                        <li><a>Contact Us</a></li>        
                    </ul>
                    <span>© 2018 PAG FINE HOMES LLC. ALL RIGHTS RESERVED</span>

                </div>
                <!--Footer end-->
         
         
         </div>
    </body>
</html>
