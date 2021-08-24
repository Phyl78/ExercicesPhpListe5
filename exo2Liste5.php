<?php
echo date('l j F Y');

echo "</br>";

//pour une affichage locale
setlocale(LC_TIME, 'fra_fra');
echo strftime('%A %d %B %Y');