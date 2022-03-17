<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
</head>
<body>
<?php


//print_r($_POST); 

//define variables and set to default values
$name_error = $email_error = $phone_error = "";
$name = $email = $phone = $message = $success = "";

//form is submitted with post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$name_error = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
$name_error = "Only letters and white space allowed";
    }
}

// $Car_Part=$_POST['Car_Part'];
//  $Car_Brand=$_POST['Car_Brand'];
$star_rating=$_POST['star_rating'];
$email= $_POST['email'];
$star_rating= $_POST['star_rating'];
$country = $_POST['country'];



if (empty($_POST["email"])) {
$email_error = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$email_error = "Invalid email format";
    }
}

if (empty($_POST["phone"])) {
  $phone_error = "phone number in international format is required e.g +27xxxxxx";
  } else {
  $phone = test_input($_POST["phone"]);
  // check if phone only contains letters and whitespace
  if (!preg_match("/^[+]?[1-9][0-9]{9,14}$/", $phone)) {
  $phone_error = "input your number in international formate.g +27xxxxxx ";
      }
  }



if(empty($_POST["message"])) {
$message="";

}else {
$message = test_input($_POST["message"]);
}


if($name_error =="" and $email_error =="" and $phone_error =="") {
$message_body = "";
unset($_POST['submit']);
foreach($_POST as $key => $value) {
$message_body.= "$key: $value\n";
}

//$mail->Host = 'smtp.gmail.com';
//$mail->Port = 587;
$to = "mariapetruzelli@gmail.com";
$subject = "New review Message from Prime Auto Spares";
if (mail($to, $subject, $message_body)) {
// $success = "Message Sent,Thank you for contacting us";
$success = "Message Sent,Thank you for your review";
$name = $email = $phone = $message = "";

}
}
}

function test_input($data) {
$data =  trim($data);
$data = stripslashes($data);
$data = Htmlspecialchars($data);
return $data;
}


?>
</body>
</html>