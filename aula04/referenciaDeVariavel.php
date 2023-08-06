<?php

$Africa = "cavaleiro branco";

$America =& $Africa;
// recebe africa

$China =& $America;
// recebe america

// ----------------------------------------------------------------

echo 'Africa: '.$Africa;
echo "<br>";
echo 'America: '.$America;
echo "<br>";
echo 'China: '.$China;
echo "<br>";
