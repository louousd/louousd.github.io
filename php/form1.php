<?php
$msg = "E-MAIL SENT FROM HILLS\n";
$msg .= "word:    $_POST[word]\n";
$msg .= "colour:    $_POST[colour]\n";
$msg .= "palindrome:       $_POST[pal]\n";
$msg .= "life cycle:             $_POST[lifecycle]\n\n";
$to = "alou1@mail.ccsf.edu";
$subject = "PHP form results";
mail($to, $subject, $msg);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">

<title>alvin lou homework8/php form return</title>

<link rel="stylesheet" href="main.css">

</head>

<body style="background-color: #00ffae;">

<header>
<a href="index.html"><img src="banner.png" width="445" height="69" alt="alvin lou @ ccsf/home" title="alvin lou @ ccsf/home"></a>
</header>

<div>
<nav>
<a href="index.html">hw1</a> .
<a href="homework2.html">hw 2</a> .
<a href="inline.html">hw3</a> .
<a href="homework4.html">hw4</a> .
<a href="homework5.html">hw5</a> .
<a href="homework6.html">hw6</a> .
<a href="homework7.html">hw7</a> .
<a href="homework8.html">hw8</a> .
<a href="homework9.html">hw9</a>
</nav>
</div>

<div>
<h1>PHP Form E-mail Confirmation</h1>


<p>
The word of the day is <b>lemming</b>.<br>
The word you entered was <b><?php echo "$_POST[word]"; ?></b>.
</p>

<p>
The colour I am thinking of is <b>purple</b>.<br>
The colour you entered was <b><?php echo "$_POST[colour]"; ?></b>.
</p>

<p>
A palindrome is a word the same read backwards or forwards. The palindrome was <b>socatacos</b>.<br>
You selected <b><?php echo "$_POST[pal]"; ?></b>.
</p>

<p>
You described the butterfly's life cycle as:<br>
<b><?php echo "$_POST[lifecycle]"; ?></b>
</p>

<p>
Thank you, your answers have been submitted and sent to my e-mail.
</p>
<p>
Click <a href="homework8.html">here</a> to return.
</p>
</div>

<footer>

<nav>
<a href="#">top</a> .
<a href="index.html">index</a> .
<a href="homework2.html">homework</a> .
<a href="pictures.html">pictures</a> .
<a href="sfusd.html">sfusd responses</a> .
<a href="mailto:alou1@mail.ccsf.edu">email</a>
</nav>

</footer>

</body>
</html>