<html >

<head>
    <meta charset="UTF-8">
    <title>PHP Katas</title>
    </head>
    <style>
 body{
    display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;
    }
    </style>
   
<body>


<?php 
$sofas = [
"Wing Back","Clever Land","Nigeria","Recliner","Boston","2 Seater","Warde robe","Coffe Table"
];


?>

<ul>

<?php 
foreach ($sofas as $sofas) {
   echo " <li> $sofas </li>";
}


?>

</ul>

</body>





</html>