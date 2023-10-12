<?php


/*



Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.


Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP


Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.



*/




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div id="app">
        <header style="background-color: #172736; color: white; height: 100px" class="d-flex align-items-center mb-5">
            <h1 class="ms-3">{{title}}</h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.669 11.538a.498.498 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686zm.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858zm.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288z" />
            </svg>
        </header>



        <main style="background-color: #1d2d3c;">


            <div class="container">
                <div class="row g-5">
                    <div class="col-4 mb-3" v-for="disc in records">
                        <div class="card bg-secondary text-white text-center p-2 h-100">
                            <div class="card-img-top">
                                <img class="img-fluid" :src="disc.poster" alt="">
                            </div>
                            <div class="card-body  px-0">
                                <h5 class="text-warning">{{disc.title}}</h5>
                                <p>{{disc.author}}</p>
                                <small>{{disc.year}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </main>






    </div>









    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./main.js"></script>
</body>

</html>