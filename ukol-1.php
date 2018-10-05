<?php
$cislo = -3;

if ($cislo < 0) {
    echo 'záporné číslo';
} elseif ($cislo == 0) {
    echo 'nula';
} elseif ($cislo > 0) {
    echo 'kladné číslo';
}

echo '<br>';

unset($cislo);

if (isset($cislo)){
    echo 'Číslo je: ' . $cislo;
} else {echo 'proměnná byla smáznuta';}
