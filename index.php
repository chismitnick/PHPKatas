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
$name ="Michael Jackson";

$best = "";


if ($best) 
{
   $message = "$name is the best " ;
} elseif(!$best){
    $message = "$name is not the best";
}

?>
<h1>

<?php 

echo $message
?>
</h1>

</body>





</html>