<?php 

	date_default_timezone_set('Africa/Accra');
	$current_date = date('Y-m-d');
	$expiry_date = date('2024-09-06');

	//include('include/head.php');

	if($current_date>$expiry_date)
	{
		echo '</br>';
		echo '</br>';
		echo '</br>';
		echo '</br>';
		echo '</br>';
		echo '</br>';
		echo '</br>';
		echo '</br>';
		echo '</br>';
		echo "<div id='spinner' align='center' class='show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center' style='background-color:#ffffff'>
                <div class='spinner-border text-primary' style='width: 3rem; height: 3rem;'' role='status'>
                     <span class='sr-only'>Page is Updating...</span> 
               </div>
           </div>
        ";

	}else
	{
		header('Location: home.php');
	}