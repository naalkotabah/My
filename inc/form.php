<?php

@$firstName=  $_POST['firstName'];
@$lastName =  $_POST['lastName'];
@$email =     $_POST['email'];
$errors=[
    'firstName' =>'',
    'lastName' =>'',
    'email' =>'',

];
if(isset($_POST['submit'])){
   
   if(empty($firstName)){
       $errors['firstName']='الرجاء ادخال الاسم الاول';
      

   }if(empty($lastName)){
    $errors['lastName']='الرجاء ادخال الاسم الاخير';
      

   }if(empty($email)){
    $errors['email']='الرجاء ادخال البريد الكتروني';
    
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['firstName']='الرجاء ادخال البريد الكتروني';

}

if(!array_filter($errors)){
    $firstName=mysqli_real_escape_string($conn,  $_POST['firstName']);
    $lastName =mysqli_real_escape_string($conn,$_POST['lastName']);  
    $email =mysqli_real_escape_string($conn, $_POST['email']);    

   $sql=("INSERT INTO users(firstName,lastName,email)VALUES('$firstName','$lastName','$email')");

 if(mysqli_query($conn,$sql)){
       header('Location:'.$_SERVER['PHP_SELF']);
   
   }else{
        echo'Error:' .mysqli_error($conn);
    }

}


}
   

?>