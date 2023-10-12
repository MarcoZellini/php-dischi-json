<?php

/* 
    Descrizione
        Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

    Consigli
        Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
        
        Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
        
        Bonus (da fare entro domani prima della correzione)
        
        Al click su un disco, recuperare e mostrare i dati del disco selezionato.
*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-secondary text-white">
    <div id="app">
        <header id="app_header" class="bg-dark">
            <div class="header_logo"></div>
            <!-- /.header_logo -->
        </header>
        <!-- /#app_header -->

        <main id="app_main">
            <div class="container">
                <div class="row py-5 g-5 position-relative">
                    <div v-for="(record, index) in records" class="col-4">
                        <div class="card bg-dark text-white text-center h-100" @click="selectedRecord = index">
                            <div class="card_image m-auto py-3">
                                <img :src="record.poster">
                            </div>
                            <!-- /.card_image -->

                            <div class="card-body">
                                <h4>{{record.title}}</h3>
                                    <small class="d-block pb-2">{{record.author}}</small>
                                    <h3>{{record.year}}</h3>
                            </div>
                            <!-- /.card_body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-4 -->
                    <div class="col-6 position-absolute top-50 start-50 translate-middle" v-if="selectedRecord !== null">
                        <div class="card m-auto bg-dark bg-gradient text-white text-center h-100" @click="selectedRecord = null">
                            <div class="card_image m-auto py-3">
                                <img :src="records[selectedRecord].poster">
                            </div>
                            <!-- /.card_image -->

                            <div class="card-body">
                                <h3>{{records[selectedRecord].title}}</h3>
                                <small class="d-block pb-2">{{records[selectedRecord].author}}</small>
                                <h2>{{records[selectedRecord].year}}</h2>
                            </div>
                            <!-- /.card_body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-6 -->
                </div>
                <!-- /.row -->



            </div>
            <!-- /.container -->


        </main>
        <!-- /#app_main -->
    </div>
    <!-- /#app -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./main.js"></script>
</body>

</html>