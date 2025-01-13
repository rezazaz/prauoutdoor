<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/icons3.png" alt="">
         <h3>Best Price, Best Gear</h3>
         <p>Ngapain bayar mahal kalau bisa dapet gear kece dengan harga hemat? Best price, best style, all in!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/icons1.png" alt="">
         <h3>Find Us</h3>
         <p>Penasaran? Yuk, mampir langsung ke tempat kita! Klik aja tombol ‘Find Us’ biar nggak nyasar!</p>
         <a href="https://maps.app.goo.gl/UgBQ3evkL5raUw659" class="btn" target="_blank" rel="noopener noreferrer">Find Us</a>

      </div>

      <div class="box">
         <img src="images/icons2.png" alt="">
         <h3>Personalized Adventure</h3>
         <p>Yuk, bikin petualangan lo makin seru! Pilih gear yang pas banget sama style lo, dijamin vibe-nya nge-hits!</p>
      </div>

      <div class="box">
         <img src="images/icons4.png" alt="">
         <h3>Gear Sanitization</h3>
         <p>Tenang aja, semua gear kita udah bersih kinclong & steril! Ready banget buat petualangan lo selanjutnya.</p>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/costumers2.png" alt="">
         <p>Seriusan, tempat ini tuh beneran vibes-nya kayak the best banget buat para adventurer. Gearnya premium, dan servicenya tuh kayak super on point gitu. 
            Totally recommend buat yang mau pendakian anti-ribet!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ci Zee</h3>
      </div>

      <div class="box">
         <img src="images/costumers3.png" alt="">
         <p>"Gila sih, ini tempat juara banget! Gear-nya lengkap parah, 
            harga juga ramah. Udah gitu, pelayanannya fast banget. 
            Ga ada alasan buat nggak balik ke sini!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Wonder Kid</h3>
      </div>

      <div class="box">
         <img src="images/costumers4.png" alt="">
         <p>Pengalaman sewa gear di sini mantul banget!
            Barangnya lengkap, bersih, dan staff-nya super ramah. 
            Pokoknya bakal balik lagi kalau mau naik gunung!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sigma Boy</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>