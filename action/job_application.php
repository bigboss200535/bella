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
    $s_name = $_POST['s_name'];
    $s_email = $_POST['s_email'];
    $s_contact = $_POST['s_contact'];
    $job_type = $_POST['job_type'];
    $region = $_POST['region'];
    $religion = $_POST['religion'];
    $remarks = $_POST['remarks'];

    if (empty($s_name) || empty($s_email) || empty($s_contact) || empty($job_type)|| empty($region) || empty($religion)) {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required.';
    } elseif (!filter_var($s_email, FILTER_VALIDATE_EMAIL)) {
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
                    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;
                    $mail->Username = 'nsiladum@gmail.com'; // SMTP username
                    $mail->Password = ''; // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;

                    //Recipients
                    $mail->setFrom('nsiladum@gmail.com', 'Northern Security Ltd');
                    $mail->addAddress('alhassan.mohammedga@gmail.com', 'Bella'); // Add a recipient

                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = $s_name.': '.'Job Application From Bella Pretige';
                    $mail->Body    = nl2br("New Message Received with details as follows. \nName: ".$s_name." \nTelephone: ".$s_contact." \nEmail: ".$s_email." \nJob Title:".$job_type." \nRegion: ".$region."\nReligion: ".$religion." \nRemark: ".$remarks);

                    $mail->AltBody = strip_tags("New Message Received with details as follows. \nName: ".$s_name." \nTelephone: ".$s_contact." \nEmail: ".$s_email." \nJob Title:".$job_type." \nRegion: ".$region."\nReligion: ".$religion." \nRemark: ".$remarks);

                    $mail->send();
                    $response['status'] = 'success';
                    $response['message'] = 'Message sent successfully!';

                } catch (Exception $e) {
                    $response['status'] = 'error';
                    $response['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    // $response['message'] = "Message could not be sent";
                }
            }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response);
?>
