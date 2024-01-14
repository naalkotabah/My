<?php
include'./inc/db.php';
include'./inc/form.php';
include'./inc/select.php';
include'./inc/dbcloes.php';

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>



</head>
<body>
<!--
<div class="container">
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح مع نائل </h1>
      <p class="lead fw-normal"> باقي على فتح التسجيل</p>
      
      <p class="lead fw-normal">اسحب على ربح نسخة مجانية من برنامج</p>
      
    </div>
  </div>
-->


  <div class="position-relative  text-center">
    
    <div class="col-md-5 p-lg-4 mx-auto ">
      <img src="imges/pngegg.png" width="150px">


    <p class="lead fw-normal"> باقي على فتح التسجيل</p>
    <h3 id="countdown"></h3>
<form class="mt-5" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>الرجاء ادخال معلوماتك</h3>


  <div class="mb-3">
    <label for="firstName" class="form-label"> الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" value="<?php echo $firstName?>" id="firstName" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstName']?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" value="<?php echo $lastName?>" id="lastName" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastName']?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الكتروني</label>
    <input type="text" name="email" class="form-control" value="<?php echo $email?>" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['email']?></div> 
  </div>


  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
  <button type="submit" name="win" class="btn btn-primary"> اضهار الفائز</button>
 
  
</form>
 
<div id="cards"  class="row mb-5 pd-5">
<?php foreach($users as $user): ?>  
   
<div class="col-sm-15" >   
   <div class="card my-5 bg-light">

       <div class="card-body">
           


       <?php if(isset($_POST['win'])){   echo'<h4>  الف مبروك للفائز الاول </h4>'; echo htmlspecialchars($user['firstName']).'   '.htmlspecialchars($user['lastName']).'<br>'.htmlspecialchars($user['email']);} ?></h1>
</div>
</div> 
</div>
<?php endforeach; ?>


</div> 

</div>
  </div>

</div>









  

<!--
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتنا على فيس بوك للمسابقة</li>
  <li class="list-group-item">سيكون هناك عشرة رابحين</li>
  <li class="list-group-item"> خلال فترة البث المباشر سيتم فتح التسجيل</li>
  <li class="list-group-item">سيتم اختيار الرابحين من قاعدة البينات بشكل عشوائي</li>
  <li class="list-group-item">سيحصل الرابح الاول على بطاقة كاس العالم</li>
</ul>
-->










<script src=".js/bootstrap.bundle.min.js"></script> 
<script src="js/script.js"></script>    
</body>
</html>

