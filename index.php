<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Trendler</title>
</head>
<body>
<style>
body {
    text-align: center;
}
.satir {
    text-align: center;
    font-family: mono-space;
    margin-bottom: 15px;
    padding: 10px;
    background-color: orangered;
    display: inline-block;
    border-radius: 5px;
    margin-right: 30px; 
    box-shadow: 2px 2px 10px rgba(0,0,0,0.8);
}
</style>
<h1>Twitter World Trends Topic</h1>
<?php
include 'simple_html_dom.php';

$html = file_get_html("https://twitter-trends.iamrohit.in/");

$titles = $html->find('a[class=tweet]');
$number = $html->find('th[class=sml]');
foreach($titles as $title) {
    
    echo "<div class='satir'>" . $title->plaintext."</div>";
    
    }

?>


</body>
</html>