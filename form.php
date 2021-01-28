  

<form method="POST">
<input type="text" name="name" />
<input type="text" name="email" />
<input type="text" name="message" />
<input type="submit" name="submit" />
</form>


<?php if (isset($_POST['submit'])) {
    $to = "bhartisubharti1234@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Contact Form: LewisDerbyshire.co.uk";
    $subject2 = "Copy of your form submission : LewisDerbyshire.co.uk";
    $message = $name . "wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
    $IP = "Senders IP :" . $_SERVER["REMOTE_ADDR"];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    $sent = mail($to, $subject, $message, $IP, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", I will contact you shortly.<br/>";
    if ($sent) {
        $result = 'Thank you,' . $name . ' Your message has been sent.';
        echo $result;
    } else {
        $result = 'Sorry' . $name . ', there was a problem.';
            echo $result;
    }
} ?>