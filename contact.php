<?php

if($_POST) {
    $fname = "";
    $lname = "";
    $email = "";
    $subject = "";
    $email_body = "<div>";

    if(isset($_POST['fname'])) {
        $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$fname."</span>
                        </div>";
    }

    if(isset($_POST['lname'])) {
        $lname = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$lname."</span>
                        </div>";
    }

    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }

    if(isset($_POST['subject'])) {
        $subject = htmlspecialchars($_POST['subject']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$subject."</div>
                        </div>";
    }

    $recipient = "s.pastor16@ejm.org";

    $email_body .= "</div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";

    if(mail($recipient, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $fname. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }

} else {
    echo '<p>Something went wrong</p>';
}
?>
