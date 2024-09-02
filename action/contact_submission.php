<?php 
// include("connection.php");  
include("cren.php"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../include/PHPMailer/src/Exception.php';
require '../include/PHPMailer/src/PHPMailer.php';
require '../include/PHPMailer/src/SMTP.php';

date_default_timezone_set('Africa/Accra');

// Set response header to JSON
header('Content-Type: application/json');

// Initialize response array
$response = array(
    'status' => '',
    'message' => ''
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = strtoupper($_POST['name']);
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];
    $telephone = $_POST['telephone'];
    $date = date('Y-m-d');

    if (empty($name) || empty($email) || empty($service) || empty($message)) {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid email format.';
    } else {
                // Database insertion code (commented out)
                // $query = $dbh->prepare("INSERT INTO contacts (name, email, message, services, telephone) 
                // VALUES (:name, :email, :message, :services, :telephone)");
                // $query->execute(['name'=>$name,'email'=>$email,'message'=>$message,'services'=>$services, 'telephone'=>$telephone]);

                // Configure PHPMailer
                $mail = new PHPMailer(true);
                try {
                    //Server settings
                    $mail->isSMTP();
                    $mail->Host = $smtp_host; // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;
                    $mail->Username = $smtp_username; // SMTP username
                    $mail->Password = $smtp_pass; // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = $port_number;

                    //Recipients
                    $mail->setFrom('alhassan.mohammed@webedgetek.com', 'BELLAS PRESTIGE');
                    $mail->addAddress('alhassan.mohammed@webedgetek.com', 'CONTACT FORM'); // Add a recipient

                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = 'CONTACT FROM BELLAS PRESTIGE '.;
                    $mail->Body    = nl2br("<b>BELLAS PRESTIGE CONTACT FORM </b> \nThis mail is received from the contact form of Bellas Prestige. \n The details is as follows. \nName: <b>".$name."</b> \nTelephone: <b>".$telephone."</b> \nDate of Submission: <b>".$date"</b>\nEmail: <b>".$email."</b> \nMessage: <b>".$message."</b>\n \n\n\nSystem Generated Email\ninfo@webedgetek.com ");

                    $mail->AltBody = strip_tags("<b>BELLAS PRESTIGE CONTACT FORM </b> \nThis mail is received from the contact form of Bellas Prestige. \n The details is as follows. \nName: <b>".$name."</b> \nTelephone: <b>".$telephone."</b> \nDate of Submission: <b>".$date"</b> \nEmail: <b>".$email."</b> \nMessage: <b>".$message."</b> System Generated Email\ninfo@webedgetek.com ");

                    $mail->send();
                    $response['status'] = 'success';
                    $response['message'] = 'Message sent successfully!';

                } catch (Exception $e) {
                    $response['status'] = 'error';
                    $response['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response);
?>
