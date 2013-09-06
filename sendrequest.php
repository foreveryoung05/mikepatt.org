<?php
if(isset($_POST['email'])) {
     
    $emailTo = "mikepatt77@gmail.com";
    $emailSubject = "Code Request from "; # . $company;
         
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. <br />";
        echo "These errors appear below.";
        echo "<ul>" . $error . "</ul>";
        echo "Please go back and fix these errors.<br />";
        die();
    }
     
    // validate that expected data exists
    $errorMessage = "";
    if(!isset($_POST["salutation"]))
		$errorMessage .= "<li>Please select a salutation.</li>";
    if(strlen($_POST["name"]) == 0)
		$errorMessage .= "<li>Please enter your name.</li>";
    if(strlen($_POST["email"]) == 0)
		$errorMessage .= "<li>Please enter your email.</li>";
	if(strlen($_POST["company"]) == 0)
		$errorMessage .= "<li>Please enter the company you work for.</li>";
    if(!isset($_POST["project"]))
		$errorMessage .= "<li>Please select the projects that you would like to view the code for.</li>";
    if(strlen($errorMessage) > 0) died($errorMessage);

	$salutation 	= $_POST["salutation"];
	$name 			= $_POST["name"];
	$emailFrom 		= $_POST["email"];
	$company 		= $_POST["company"];
	$message 		= isset($_POST["message"]) ? $_POST["message"] : "";
	$projectsArray 	= $_POST["project"];
	$projects 		= "";
	for($i = 0; $i < count($projectsArray); $i++){
		$projects .= $projectsArray[$i] . " , ";
	}
	
	$emailExp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
   	if(!preg_match($emailExp, $emailFrom))
		died("<li>The email you entered does not appear to be valid.</li>");
		
	$showEmail = "";
	$showEmail .= "Saluation: " . $salutation . "<br />";
	$showEmail .= "Name: " . $name . "<br />";
	$showEmail .= "Email: " . $emailFrom . "<br />";
	$showEmail .= "Company: " . $company . "<br />";
	$showEmail .= "Message: " . $message . "<br />";
	$showEmail .= "Projects: " . $projects . "<br />";
	
	echo $showEmail . "<br />";
     
    function clean_string($string) {
      	$bad = array("content-type","bcc:","to:","cc:","href");
      	return str_replace($bad,"",$string);
    }
	
	$company = clean_string($company);
	$emailSubject .= $company;
	
    $emailMessage = ""; 
	$emailMessage .= "Salutation: " . clean_string($salutation) . "\n";
    $emailMessage .= "Name: " . clean_string($name) . "\n";
    $emailMessage .= "Email: " . clean_string($emailFrom) . "\n";
	$emailMessage .= "Company: " . $company . "\n";
	$emailMessage .= "Projects: " . clean_string($projects) . "\n";
    $emailMessage .= "Message: " . clean_string($message) . "\n";

	$headers = "From: bripef@server64.web-hosting.com\r\n" .
			   "Reply-To: " . $emailFrom . "\r\n" .
			   "X-Mailer: PHP/" . phpversion();		
	echo $headers;
	mail($emailTo, $emailSubject, $emailMessage, $headers);
 
	echo "Thank you for contacting me. I will be in touch with you very soon.";
 
} ?>