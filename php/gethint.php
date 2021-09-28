<?php
// Array with names
$a[] = "Aatrox";
$a[] = "Ahri";
$a[] = "Akali";
$a[] = "Alistar";
$a[] = "Amumu";
$a[] = "Anivia";
$a[] = "Annie";
$a[] = "Ashe";
$a[] = "Azir";
$a[] = "Bard";
$a[] = "Blitzcrank";
$a[] = "Brand";
$a[] = "Braum";
$a[] = "Caitlyn";
$a[] = "Cassiopeia";
$a[] = "Cho'Gath";
$a[] = "Corki";
$a[] = "Darius";
$a[] = "Diana";
$a[] = "Dr. Mundo";
$a[] = "Draven";
$a[] = "Elise";
$a[] = "Evelynn";
$a[] = "Ezreal";
$a[] = "Fiddlesticks";
$a[] = "Fiora";
$a[] = "Fizz";
$a[] = "Galio";
$a[] = "Gangplank";
$a[] = "Garen";
$a[] = "Gnar";
$a[] = "Gragas";
$a[] = "Graves";
$a[] = "Hecarim";
$a[] = "Heimerdinger";
$a[] = "Irelia";
$a[] = "Janna";
$a[] = "Jarvan IV";
$a[] = "Jax";
$a[] = "Jayce";
$a[] = "Jinx";
$a[] = "Kalista";
$a[] = "Karma";
$a[] = "Karthus";
$a[] = "Kassadin";
$a[] = "Katarina";
$a[] = "Kayle";
$a[] = "Kennen";
$a[] = "Kha'Zix";
$a[] = "Kog'Maw";
$a[] = "LeBlanc";
$a[] = "Lee Sin";
$a[] = "Leona";
$a[] = "Lissandra";
$a[] = "Lucian";
$a[] = "Lulu";
$a[] = "Lux";
$a[] = "Malphite";
$a[] = "Malzahar";
$a[] = "Maokai";
$a[] = "Master Yi";
$a[] = "Miss Fortune";
$a[] = "Mordekaiser";
$a[] = "Morgana";
$a[] = "Nami";
$a[] = "Nasus";
$a[] = "Nautilus";
$a[] = "Nidalee";
$a[] = "Nocturne";
$a[] = "Nunu";
$a[] = "Olaf";
$a[] = "Orianna";
$a[] = "Pantheon";
$a[] = "Poppy";
$a[] = "Quinn";
$a[] = "Rammus";
$a[] = "Rek'Sai";
$a[] = "Renekton";
$a[] = "Rengar";
$a[] = "Riven";
$a[] = "Rumble";
$a[] = "Ryze";
$a[] = "Sejuani";
$a[] = "Shaco";
$a[] = "Shen";
$a[] = "Shyvana";
$a[] = "Singed";
$a[] = "Sion";
$a[] = "Sivir";
$a[] = "Skarner";
$a[] = "Sona";
$a[] = "Soraka";
$a[] = "Swain";
$a[] = "Syndra";
$a[] = "Talon";
$a[] = "Taric";
$a[] = "Teemo";
$a[] = "Thresh";
$a[] = "Tristana";
$a[] = "Trundle";
$a[] = "Tryndamere";
$a[] = "Twisted Fate";
$a[] = "Twitch";
$a[] = "Udyr";
$a[] = "Urgot";
$a[] = "Varus";
$a[] = "Vayne";
$a[] = "Veigar";
$a[] = "Vel'Koz";
$a[] = "Vi";
$a[] = "Viktor";
$a[] = "Vladimir";
$a[] = "Volibear";
$a[] = "Warwick";
$a[] = "Wukong";
$a[] = "Xerath";
$a[] = "Xin Zhao";
$a[] = "Yasuo";
$a[] = "Yorick";
$a[] = "Zac";
$a[] = "Zed";
$a[] = "Ziggs";
$a[] = "Zilean";
$a[] = "Zyra";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>