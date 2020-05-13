<?php session_start();?>
<!DOCTYPE html >
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BiblioTech</title>
    <link rel="icon" href="img/bookicon.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">


<title>Game</title>
</head>
<body>
    <?php
    require("header.php");
    ?>
    <div style="background-color:lightgray;text-align:center;font-size:40px;background-image:url(/img/img.png);background-size:auto;background-repear:no-repeat" >

</br>
    <h1 style="text-align:center;color:darksalmon;font-size:50px">GJEJ EMRIN E LIBRIT</h1>
</br>

<?php

    $MAX_ATTEMPTS=5;            
    $WORDLISTFILE='wordlist.txt';

   function wordsarray($wordFile)
{
    $file = fopen($wordFile,'r');
       if ($file)
    {
        $random_line = null;
        $line = null;
        $count = 0;
        while (($line = fgets($file)) != false) 
        {
            $count++;
            if(rand() % $count == 0) 
            {
                  $random_line = trim($line);
            }
    }
    if (!feof($file)) 
    {
        fclose($file);
        return null;
    }else 
    {
        fclose($file);
    }
}
    $answer = str_split($random_line);
    return $answer;
}
function hideCharacters($answer)
{
    $nr_hiddenchars= floor((sizeof($answer)/2) + 1);
    $count = 0;
    $hidden = $answer;
    while ($count < $nr_hiddenchars )
    {
        $rand_element = rand(0,sizeof($answer)-2);
        if( $hidden[$rand_element] != '_' )
        {
            $hidden = str_replace($hidden[$rand_element],'_',$hidden,$replace_count);
            $count = $count + $replace_count;
        }
    }
    return $hidden;
}
function checkAndReplace($userInput, $hidden, $answer)
{
    $i = 0;
    $correctguess = true;
    while($i <count($answer))
    {
        if ($answer[$i] == $userInput)
        {
            $hidden[$i] = $userInput;
            $correctguess = false;
        }
        $i = $i + 1;
    }
    if (!$correctguess) $_SESSION['attempts'] = $_SESSION['attempts'] - 1;
    return $hidden;
}



