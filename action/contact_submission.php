<?php 
include("connection.php");  

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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $telephone = $_POST['telephone'];

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid email format.';
    } else {
        // Database insertion code (commented out)
        // $query = $dbh->prepare("INSERT INTO contacts (name, email, message, subject, telephone) 
        // VALUES (:name, :email, :message, :subject, :telephone)");
        // $query->execute(['name'=>$name,'email'=>$email,'message'=>$message,'subject'=>$subject, 'telephone'=>$telephone]);

        // Configure PHPMailer
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;
            $mail->Username = ''; // SMTP username
            $mail->Password = ''; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('alhassan.mohammedga@gmail.com', 'Bella'); // Add a recipient

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = nl2br($message.". My Details are telephone:".$telephone);
            $mail->AltBody = strip_tags($message);

            $mail->send();
            $response['status'] = 'success';
            $response['message'] = 'Message sent successfully!';

            // if(!$mail->send()){
            //     $response['status'] = 'error';
            //     $response['message'] = 'Mail not sent';
            // }else {
            //      $response['status'] = 'success';
            //     $response['message'] = 'Mail sent';
            // }
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
