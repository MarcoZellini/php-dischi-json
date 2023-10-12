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
        <header id="app_header" class="bg-dark mb-5">

            <nav class="nav">
                <div class="container d-flex justify-content-between py-3">
                    <div class="header_logo">
                        <img src="./img/logo.png" alt="">
                    </div>
                    <!-- /.header_logo -->

                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add New Record</button>

                    <div class="offcanvas offcanvas-end bg-dark text-bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Add Record</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="add_album">

                                <div class="input_form d-flex flex-column aling-items-center m-3">
                                    <label for="newRecordTitle">Insert New Record Title: </label>
                                    <input type="text" name="newRecordTitle" v-model="newRecord.title">
                                </div>
                                <!-- /.input_form -->
                                <div class="input_form d-flex flex-column aling-items-center m-3">
                                    <label for="newRecordAuthor">Insert New Record Author: </label>
                                    <input type="text" name="newRecordAuthor" v-model="newRecord.author">
                                </div>
                                <!-- /.input_form -->
                                <div class="input_form d-flex flex-column aling-items-center m-3">
                                    <label for="newRecordYear">Insert New Record Year: </label>
                                    <input type="text" name="newRecordYear" v-model="newRecord.year">
                                </div>
                                <!-- /.input_form -->

                                <select name="newRecordGenre" class="m-3" class="form-select" v-model="newRecord.genre">
                                    <option disabled>Select Album Genre</option>
                                    <option value="Metal">Metal</option>
                                    <option value="Rock">Rock</option>
                                    <option value="Pop">Pop</option>
                                    <option value="Electronic">Electronic</option>
                                    <option value="Disc">Disc</option>
                                </select>

                                <button type="submit" @click.prevent="addRecord" class="btn btn-primary">Add Record</button>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
        </header>
        <!-- /#app_header -->

        <main id="app_main">
            <div class="container">
                <div class="row pb-5 g-5 position-relative">
                    <div v-for="(record, index) in records" class="col-4">
                        <div class="card bg-dark text-white text-center h-100 p-5" @click="selectedRecord = index">
                            <div class="card-img-top mb-3">
                                <img class="img-fluid" :src="record.poster">
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