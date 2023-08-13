<?php
    echo "Form submitted!";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if (empty($name))
{
    echo "Name is empty";
}
else if (empty($phone))
{
    echo "Phone number is empty";
}
else if (empty($email))
{
    echo "Email is empty";
}
else if (empty($subject))
{
    echo "Subject is empty";
}
else if (empty($message))
{
    echo "Message is empty";
}
else
{
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) 
    {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
    {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }
    else
    {  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userdb";
    $conn = new mysqli($servername,$username, $password,$dbname);
    $sql="INSERT INTO contact_form VALUES('$name','$phone','$email','$subject','$message','$date','$ip')";
    if ($conn->query($sql) === TRUE)
    {
        echo "Your response has been recorded successfully"."<br>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $to = 'test@techsolvitservice.com'; 
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    $headers .= "X-Priority: 1\r\n";
    $headers .= "Date: " . date('r') . "\r\n";

    ini_set("SMTPSecure", "tls");
    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', 587);
    ini_set('sendmail_from', $email);
    ini_set('smtp_ssl', 'tls');
    
    if (mail($to, $subject, $message, $headers, "-f $email")) {
        echo " From Submitted Email sent successfully!";
    } else {
        echo "Error sending email.";
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }
}
?>