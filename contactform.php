<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	if (isset($_POST[’submit'])) {
	
	$name = $_POST[‘name’]; 
	$telephone= $_POST['telephone’]; 
	$mailFrom = $_POST[’email'];
	$comments= $_POST['comments'];
	$message = $_POST['message'];
	
	$mailTo = "hayessh@comcast.net"
	
	$headers = "From: ".{mailFrom;
	txt = "You have received an e-mail from ".{name.".\n\n".message;
	mail({mailTo, {subject, {txt, {headers);
	header("Location: index.phpPmailsend");


	mail();
	}





< ? php
if (isset($_POST['submit'])) {	'
$name = $_POST['name'];
{subject = $_POST['subject'];
{mailFrom = $_POST['mail'];
{message = {_POST['message'];
{mailTo = "dani@mmtuts.net";
{headers = "From: ".{mailFrom;
{txt = "You have received an e-mail from ".{name.".\n\n".{message
mail({mailTo, {subject, {txt, {headers); header("Location: index.phpPmailsend");


