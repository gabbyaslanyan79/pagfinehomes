<?php

function pageContact() {
    ?>
    <div class="pag-about">
        <img src="img/pag-contact.jpg" class="img-responsive" alt="Contact Us Image">
        <div class="pag-pic-heading">Contact Us</div>
    </div>    

    <!--Input Form start-->
    <?php
    $output = '';
    $email = '';
    $name = '';
    $message = '';
    
    if (!empty($_POST['emailPosted'])) {

        $error = "";
        $name = strip_tags(htmlentities($_POST['name']));
        if (empty($_POST['name'])) {
            $error = "Name is required<br />";
        }

        $email = $_POST['email'];
        if (empty($_POST['email'])) {
            $error .= "Email is required<br />";
        } elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST['email'])) {
            $error .= "Email is invalid<br />";
        }

        $message = strip_tags(htmlentities($_POST['message']));
        if (empty($_POST['message'])) {
            $error .= "Message is required<br />";
        }
       
        if (!$error) {
            $subject = "pagfinehomes.com: message from " . $name;
            $headers = 'From: ' . $email . "\r\n" .
                    'Reply-To: ' . $email . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

            try {
                $to = "hyeghiazaryan@gmail.com";
                if (mail($to, $subject, $message, $headers)) {
                    $name = "";
                    $email = "";
                    $message = "";
                    $output = '<div class="email-sent">Email was sent, thank you.</div>';
                } else {
                    $output = '<div class="email-problem">Email delivery failed. Please try again later.</div>';
                }
            } catch (Exception $exc) {
                $output = '<div class="email-problem">Email delivery failed. Please try again later.</div>';
            }
        } else {
            $output = '<div class="email-error">' . $error . '</div>';
        }
    }
    ?>

    <form id="pagContact" method="post" action="/?page=contact">
        <div class="form-bg">

            <p>Feel free to ask us any question and we will get back to you as soon, as we can.</p>
            <?= $output ?>
            <div class="form-group form-group-lg form-size">
                <label for="usr" class="label-position">Your Name:<span class="aster">*</span></label>
                <input id="usr" type="text" name="name" value="<?= $name ?>" class="form-control form-color" placeholder="Ex: John Dough">
            </div>
            <div class="form-group form-group-lg form-size">
                <label for="email" class="label-position">Your Email:<span class="aster">*</span></label>
                <input id="email" type="text" name="email" value="<?= $email ?>" class="form-control" placeholder="Ex: johndough@someplace.com">
            </div>

            <div class="form-group form-group-lg">
                <label for="message"  class="label-position">You Message:<span class="aster">*</span></label>
                <textarea id="message" name="message" class="form-control" placeholder="Your Message Here.."><?= $message ?></textarea>
        </div>
        <p><span class="aster">*</span>All fields are required.</p>

        <button type="submit" id="submit" class="btn pag-btn">Submit</button>
        <button type="button" id="cancel" class="btn pag-btn-grey" onclick="clearContactForm()">Clear</button>
        <input type="hidden" name="emailPosted" value="1" />
        <br><br> 
    </div>
</form>
<?php } ?>