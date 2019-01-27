<?php

$fname = $_GET[first_name];
$lname=$_GET[last_name];
$email = $_GET[email];
$phone = $_GET[number];
$father_name=$_GET[father_name];
$mother_name=$_GET[mother_name];
$address=$_GET[address];
$tenth=$_GET[ten_pass];
$twelveth=$_GET[twelve_pass];
$physics=$_GET[physics];
$chemistry=$_GET[chemistry];
$biology=$_GET[biology];
$college=$_GET[college];
$note=$_GET[note];

$subject = 'Online Application Form';
$message = stripcslashes($message); 
$message = " 
Full Name: $fname $lname \n
Father Name : $father_name\n
Mother Name : $mother_name\n
Phobe Number : $phobe\n
Address : $address\n
Tenth Passing Year : $tenth\n
Twelve Passing Year : $twelveth\n
Physics : $physics\n
Chemistry : $chemistry\n
Biology : $biology\n
College Name : $college\n
                $note\n

Email : $email \n
Phone Number : $phone
";


$file_tmp_name    = $_FILES['my_file']['tmp_name'];
    $file_name        = $_FILES['my_file']['name'];
    $file_size        = $_FILES['my_file']['size'];
    $file_type        = $_FILES['my_file']['type'];
    $file_error       = $_FILES['my_file']['error'];
    
    if($file_error > 0)
    {
        die('Upload error or No files uploaded');
    }else{
    $from_email         = 'saiul@infobizsoft.com'; //from mail, it is mandatory with some hosts
  
    $file_tmp_name    = $_FILES['my_file']['tmp_name'];
    $file_name        = $_FILES['my_file']['name'];
    $file_size        = $_FILES['my_file']['size'];
    $file_type        = $_FILES['my_file']['type'];
    $file_error       = $_FILES['my_file']['error'];

    
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));

        $boundary = md5("sanwebe");
        //header
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From:".$from_email."\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n";
       
        //plain text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($message));
       
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=".$file_name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
        $body .= $encoded_content;
}




$from = "From:$email";


mail("saifulsaif5854@gmail.com", $subject, $body, $headers); /*info@braxon.coffee*/


include 'db.php';
$sql = "INSERT INTO user_info (first_name, last_name,father_name,mother_name,number,email,address,10th_pass,12th_pass,physics,chemistry,biology,college,note,file)
VALUES ('$_GET[first_name]','$_GET[last_name]','$_GET[father_name]','$_GET[mother_name]','$_GET[number]','$_GET[email]','$_GET[address]','$_GET[ten_pass]','$_GET[twelve_pass]','$_GET[physics]','$_GET[chemistry]','$_GET[biology]','$_GET[college]','$_GET[note]','$_GET[file]')";

if ($conn->query($sql) === TRUE) {
  // header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



echo "<div align='center' style='padding-top:25%;'><h2>Your Information has sended <span style='color:#10a516;'>Successfully.</span> Thank You!</h2></div>";


?>