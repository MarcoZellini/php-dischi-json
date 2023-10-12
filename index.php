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
</head>

<body>

    <div id="app">
        <h1>{{title}}</h1>
    </div>
    <!-- /#app -->

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./main.js"></script>
</body>

</html>