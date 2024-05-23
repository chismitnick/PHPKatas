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


$sofa_orders =[

[
    "name"=> "Incline",
    "price"=> "K456",
    "manufacture date"=> "23.10.24"
    
],
[
    "name"=> "Nigeria",
    "price"=> "K8000",
    "manufacture date"=> "2.10.24"
    
],
[
    "name"=> "Clever LAnd",
    "price"=> "K9056",
    "manufacture date"=> "3.10.24"
    
],
[
    "name"=> "Chelsea",
    "price"=> "K456",
    "manufacture date"=> "29.10.56"
    
],

]
?>
<ul>
<?php 
foreach ($sofa_orders as $sofa_orders):?>
<li>
    <a href="<? $sofa_orders['price']?>">
    <?= $sofa_orders['name'];?><?=$sofa_orders['manufacture date']?>]
</li>

<?php endforeach;?>

</ul>

</body>





</html>