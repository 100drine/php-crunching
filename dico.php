
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>"Combien de mots contient ce dictionnaire ?"</h1>
<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
echo(count($dico))
?>  

<h1> Combien de mots font exactement 15 caractères ? </h1>
<?php
foreach ($dico as $mot){
if(strlen($mot)==15){
$length++;
}
}
echo $length;
?>
<h1> "Combien de mots contiennent la lettre « w » ?"</h1>
<?php
$i=0; 
foreach ($dico as $lettrew){
    if(stristr ($lettrew, "w")){
   $i++;     
    }
}
echo $i;
?>


<h1>Combien de mots finissent par la lettre « q » ?</h1>
<?php
$o=0;
foreach ($dico as $finq){
    if(substr ($finq, -1)=="q"){
        $o++;
    }
}
echo $o;
?>
</body>
</html>











