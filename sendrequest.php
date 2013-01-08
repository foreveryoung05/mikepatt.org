<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $emailTo = "mikepatterson77@gmail.com";
    $emailSubject = "Code Request from "; # . $company;
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. <br />";
        echo "These errors appear below.";
        echo "<ul>" . $error . "</ul>";
        echo "Please go back and fix these errors.<br />";
        die();
    }
     
    // validation expected data exists
    $errorMessage = "";
    if(!isset($_POST["salutation"]))	$errorMessage .= "<li>Please select a salutation.</li>";
    if(strlen($_POST["name"]) == 0)		$errorMessage .= "<li>Please enter your name.</li>";
    if(strlen($_POST["email"]) == 0)	$errorMessage .= "<li>Please enter your email.</li>";
	if(strlen($_POST["company"]) == 0)	$errorMessage .= "<li>Please enter the company you work for.</li>";
    if(!isset($_POST["project"])) 		$errorMessage .= "<li>Please select the projects that you would like to view the code for.</li>";
    if(strlen($errorMessage) > 0) died($errorMessage);

	$salutation = $_POST["salutation"];
	$name = $_POST["name"];
	$emailFrom = $_POST["email"];
	$company = $_POST["company"];
	$message = isset($_POST["message"]) ? $_POST["message"] : "";
	$projectsArray = $_POST["project"];
	$projects = "";
	for($i = 0; $i < count($projectsArray); $i++){
		$projects .= $projectsArray[$i] . " , ";
	}
	
    $stringExp = "/^[A-Za-z .'-]+$/"; $emailExp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  	if(!preg_match($stringExp, $name))		$errorMessage .= "<li>The name you entered does not appear to be valid.</li>";
   	if(!preg_match($emailExp, $emailFrom))	$errorMessage .= "<li>The email you entered does not appear to be valid.</li>";
  	if(!preg_match($stringExp, $company))	$errorMessage .= "<li>The company you entered does not appear to be valid.</li>";
	if(strlen($errorMessage) > 0) died($errorMessage);

	$showEmail = "";
	$showEmail .= "Saluation: " . $salutation . "<br />";
	$showEmail .= "Name: " . $name . "<br />";
	$showEmail .= "Email: " . $emailFrom . "<br />";
	$showEmail .= "Company: " . $company . "<br />";
	$showEmail .= "Message: " . $message . "<br />";
	$showEmail .= "Projects: " . $projects . "<br />";
	
	echo $showEmail;
     
    function clean_string($string) {
      	$bad = array("content-type","bcc:","to:","cc:","href");
      	return str_replace($bad,"",$string);
    }
	
    $emailMessage = ""; 
	$emailMessage .= "Salutation: " . clean_string($salutation) . "\n";
    $emailMessage .= "Name: " . clean_string($name) . "\n";
    $emailMessage .= "Email: " . clean_string($emailFrom) . "\n";
	$emailMessage .= "Company: " . clean_string($company) . "\n";
	$emailMessage .= "Projects: " . clean_string($projects) . "\n";
    $emailMessage .= "Message: " . clean_string($message) . "\n";

	$headers = "From: self@mikepatt.org\r\n" .
			   "X-Mailer: PHP/" . phpversion();			   
	@mail($emailTo, $emailSubject, $emailMessage, $headers);
 
	echo "Thank you for contacting us. We will be in touch with you very soon.";
 
} ?>