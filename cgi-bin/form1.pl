#!/usr/local/bin/perl

do  "cgi-lib.pl" ||die "Fatal Error: Can't load cgi library";

&ReadParse;

print "Content-type: text/html\n\n";

print<<"_END_";


<html>

<head>
<title>alvin lou homework8/nba survey return</title>

<meta http-equiv="Page-Enter"
 content="RevealTrans(Duration=3.000,Transition=2)">

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
<h1>nba survey return confirmation</h1>
<p>Thank you for filling out my survey.<br>You submitted the following: </p>
<p>Your favorite team is $in{'teams'}.</p>
<p>Your favorite player is $in{'player'}.</p>
<p>You usually watch $in{'games'} games in a week.</p>
<p>The basketball plays you like to watch are: $in{'plays'}</p>
<p>Your additional comments entered were: <br>$in{'comments'}</p>
<p>Click <a href="homework8.html">here</a> to return</p>
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

_END_
;