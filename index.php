<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>В какой день недели я родился</title>
</head>
<body>

<input type="text" id="birthDay" placeholder="год-месяц-день">
<input type="button" value="Узнать" id="knopka">
<div id="answer"></div>


<hr>
<section>

    <?php
        for( $i =1; $i<10; $i++){

        echo'
    
    <div class="card">
        <div class="block"></div>
        <div class="text">' . $i . '</div>
    </div> ';

        }
    ?>

    <div id="cardText"></div>
    <div id="bValue"></div>
</section>



<script src="script.js"></script>
</body>
</html>