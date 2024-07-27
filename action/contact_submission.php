<?php 

date_default_timezone_set('Africa/Accra');

include("connection.php");   

// Set response header to JSON
header('Content-Type: application/json');

// $added_date = date();

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

    if (empty($name) || empty($email) || empty($subject) || empty($message)) 
    {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required.';
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid email format.';
    } 
    else 
    {

    	 $query = $dbh->prepare("INSERT INTO contacts (name, email, message, subject,telephone) 
    	 	VALUES (:name, :email, :message, :subject, :telephone)");
    	 $query->execute(['name'=>$name,'email'=>$email,'message'=>$message,'subject'=>$subject, 'telephone'=>$telephone]);
       

        $response['status'] = 'success';
        $response['message'] = 'Message sent successfully!';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response);
