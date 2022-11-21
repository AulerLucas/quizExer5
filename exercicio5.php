<?php
$s = $_POST['string'];
$num = strlen($s);
echo "Palavra: " . $s . "\nTotal de letras: " . $num." sequência numérica: ";

$i = 0;
while (isset($s[$i])) {
    $i++;
    echo $i;
}