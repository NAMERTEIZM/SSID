<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <title>SSID Deneme</title>
</head>
<body>
<div class="container py-5" id="login-container" >
<div class="row justify-content-center">

<!-- her birinin tek satır olması için row içinde col-12 classını veriyoruz -->
   <div class="col-12">
      <div class="daireclass" id="logo">
         <img id="resim" src="layer-3@3x.png">
      </div>
   </div>

   <div class="col-12 py-5">
   <h1 class="header">Web Sayfamızı Sizler için Yeniliyoruz...</h1>
   </div>

   <div class="col-12" >
      <p id="adres">
         Mimar Sinan Mah. Mimar Sinan Cd. Toplusoy İş Merkezi,<br>
         No:5 D:3, 34782 Çekmeköy/İstanbul
      </p> 
   </div>

   <div id="col-12">
      <div class="row">
         <!-- tek bir div içine aldık telefonu ve maili sonra onun üstündekini flex birini sağa birini sol yasladık -->
         <div class="col-xl-6 border-end d-flex mb-4 mb-xl-0 justify-content-center justify-content-xl-end align-items-center pe-4"> 
            <div class="text-white">
               <img id="phone" src="phone@3x.png">
               02166390603
            </div>
         </div>
         <div class="col-xl-6 d-flex justify-content-center justify-content-xl-start align-items-center ps-4"> 
            <div class="text-white">
               <img id="mail" src="mail-2@3x.png"> <!-- id bir sayfada sadece 1 tane kullanbilir unique olmalı! -->
               info@ssidglobal.com  
            </div>
         </div>
      </div>
   </div>
  
   
</div>

<div class="row my-4">
   <!-- id vermeye gerek yok direk bootstrap classları ile bu kısmı yapabiliriz hızlıca -->
   <!-- aralarındaki boşluğu arttırmak için x eksenin padding verelim -->
   <div class="col-xl-3 px-4 mb-4 mb-xl-0">
      <div class="bg-white d-flex justify-content-center align-items-center px-4 py-3 h-100">
         <!-- beyaz kısmı arttırmak için padding verelim resim yapışmasın kenarlara -->
         <img src="bee.png" class="img-fluid">
      </div>
   </div>
   <div class="col-xl-3 px-4 mb-4 mb-xl-0">
      <div class="bg-white d-flex justify-content-center align-items-center px-4 py-3 h-100">
         <img src="notice.png" class="img-fluid"> 
      </div> 
   </div>
   <div class="col-xl-3 px-4 mb-4 mb-xl-0">
      <div class="bg-white d-flex justify-content-center align-items-center px-4 py-3 h-100">
         <img src="mach.png" class="img-fluid">
      </div>
   </div>
   <div class="col-xl-3 px-4 mb-4 mb-xl-0">
      <div class="bg-white d-flex justify-content-center align-items-center px-4 py-3 h-100">
         <img src="DEX.png" class="img-fluid">
      </div>
   </div>
</div>

</body>
</html>