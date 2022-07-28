<?php
require('../Mailer/src/PHPMailer.php');
require('../Mailer/src/SMTP.php');
require('../Mailer/src/Exception.php');
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['emain'];
$contact = $_POST['contact'];
$subject = $_POST['subject'];

$mail = new PHPMailer\PHPMailer\PHPMailer();;
// A list of permitted file extensions

//Enable SMTP debugging.
$mail->SMTPDebug = 0;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "datagennotify@gmail.com";                 
$mail->Password = "nuxenapsxztxirgn";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "datagennotify@gmail.com";
$mail->FromName = "Datagen Notification";

$mail->addAddress("linet.ronquillo@datagenf.com", "Linet Ronquillo");
$mail->addAddress("businessdev@datagenf.com", "businessdev@datagenf.com");

$mail->isHTML(true);

$mail->Subject = "Marketing Website Inquiry";
$mail->Body = "There was a new Website Inquiry please see the details";
$mail->Body = "<html>
<head>
<title></title>
</head>
<body>                
<div style='height:210px;'>
<table cellspacing='0' width='100%' >
<thead>
<col width='40px' />
<col width='40px' />
<col width='40px' />
<col width='120px' />
<tr>          
<th style='color:#0A903B;text-align:left;'>Name</th>                           
<th style='color:#0A903B;text-align:left;'>Email</th>
<th style='color:#0A903B;text-align:left;'>Contact</th>    
<th style='color:#0A903B;text-align:left;'>Subject</th>                                                                         
</tr>
</thead>
<tbody>   
<tr>
<td style='text-align:left;'>" .$fname." ".$lname."</td>
<td style='text-align:left;'>" .$email."</td>
<td style='text-align:left;'>" .$contact."</td>
<td style='text-align:left;'>".$subject."</td>
</tr>
  
</tbody> 
</table>                            
</div>             
</body>
</html>";

try {
	$mail->send();
?>
    <script>
			alert('Inquiry Sent, Please wait for our response Thank you!');	
            window.location.replace("https://datagenf.com/index.php");
            </script>
<?php
}
catch (Exception $e) {
    ?>
     <script>
			alert('There is an error!, Please contact Web Master');	
            window.location.replace("https://datagenf.com/index.php");
            </script>
<?php
}
echo '{"status":"error"}';
exit;
?>


