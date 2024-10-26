<?php
if(isset($_POST['enter'])){
    $Name = $_POST['Name'];
    $email=$_POST['email'];
    $phone=$_POST['contact'];
}
if(empty($Name) || empty($email) || empty($phone))
{
    header('location:contact.php?error');
} 
else{
    $to = "Srikanthande76@gmail.com";
    if(mail($to,$Name,$email,$phone)){

        header('location:contact.php?success');
    }
}


?>