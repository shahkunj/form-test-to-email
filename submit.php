<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$subject=$_POST["subject"];
$mssg=$_POST["message"];
$sendemail="creativesoftwaresolution.in";
$emailsubject="Enquiry / Contact";
$mailto="shahkunj242@gmail.com";
$body= <<<EOD
    <html>
    <body>
      <h3>Hello,</h3>
    <p>There was Enquiry from customer who visited creativesoftwaresolution.in</p>

<p><b>Name:</b> $name</p>
<p><b>Email:</b> $email</p>
<p><b>Message:</b> $mssg</p>
<p><b>Mobile:</b> $phone</p>
<p><b>Subject:</b> $subject</p>
<p>Regards, <br><b>Art Neelam</b></p>
    </body>

    </html>

EOD;

$headers="From: $sendemail\r\n";
$headers .= "BCC: shahkunj242@gmail.com\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$success = mail($mailto, $emailsubject, $body, $headers);
if (!$success) {
    $err_code = "Sorry, there was an error. Please try again."; ?> <script>alert("Please Try Again.");</script> <?php
}
else {?>
<script>alert("Successfully sent your enquiry.");</script><script>location.href = "index.html";</script>
<?php
}
?>
