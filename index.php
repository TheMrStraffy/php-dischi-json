<?php  

// var_dump($dischi);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/general.scss">
  <!-- bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
  <!-- axios -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.js' integrity='sha512-nNH8gXanGmEPnnK9/yhI3ETaIrujVVJ7dstiVIwMtcfbcj1zzTlnH5whbsYhg6ihg5mFe1xNkPPLwCwwvSAUdQ==' crossorigin='anonymous'></script>
  <!-- vuejs -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.45/vue.global.js' integrity='sha512-boEFRnFthrf+bNt2FkCFAjd809yT4B9R5Kr1eTROVLdzT79sgQanuKUhu/R7eDHmWL8IcjHIkxjdEVvvP6DLMA==' crossorigin='anonymous'></script>
  <title>Document</title>
</head>
<body>
  
  <div id="app">
      <header>
      
      </header>

      <main >

        <div class="row align-items-center justify-content-around">

          <div
          v-for="(disc, index) in discs" :key="index"
          class="mc-card col-4 d-flex flex-column justify-content-center align-items-center">
          <div class="img-box">
            <img :src="disc.poster" :alt="disc.author">
          </div>
          <div class="text-area text-center">
            <p>{{disc.title}}</p>
            <p>{{disc.author}}</p>
            <p>{{disc.year}}</p>
          </div>
        </div>
        </div>
    </main>
  </div>
  
  
  <script src="./main.js"></script>
</body>
</html>