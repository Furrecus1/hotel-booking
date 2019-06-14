<?php
header("location:http://localhost:4200/#/enquiry-success-page");
//Creates a class called Enquiry
class Enquiry
{
    public $establishment;
    public $clientName;
    public $email;
    public $checkin;
    public $checkout;
}

//Creates new enquiry and sets properties
$newEnquiry = new Enquiry();
$newEnquiry->establishment = $_POST["establishment"];
$newEnquiry->clientName = $_POST["clientName"];
$newEnquiry->email = $_POST["email"];
$newEnquiry->checkin = $_POST["checkin"];
$newEnquiry->checkout = $_POST["checkout"];

//Adds object to array
$enquiriesList = file_get_contents('../holidaze/src/assets/data/enquiries.json');
$jsonInput = json_decode($enquiriesList, true);
array_push($jsonInput, $newEnquiry);

//Writes array to JSON file
$jsonData = json_encode($jsonInput);
file_put_contents('../holidaze/src/assets/data/enquiries.json', $jsonData);
?>
