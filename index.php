<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>Dischi</title>
</head>
<body class="bg-dark text-white">

   <div id="app">

      <h1 class="text-center mt-3">DISCS</h1>
      <div class="container mt-3">
         <div class="row">
            <div v-for="disc in discs" class="col">
               <div class="card h-100">
                  <img :src="disc.poster" class="card-img-top">
                  <div class="card-body text-center d-flex flex-column justify-content-between">
                     <h6 class="card-title">{{disc.title}}</h6>
                     <h6 class="card-text">{{disc.author}}</h6>
                     <h6 class="card-text">{{disc.year}}</h6>
                  </div>
               </div>               
            </div>
         </div>
      </div>
      

   </div>

   <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="./main.js"></script>
</body>
</html>