<?php
require_once 'soal5.php';

$bio = new mobil ('brumbrumbrum','hitam','lamborghini');
echo"<br />";
echo"suara mobil  :".$bio->get_suara();
echo"<br />";
echo"warna mobil :".$bio->get_warna();
echo"<br />";
echo"jenis mobil :".$bio->get_jenis();
echo"<br />";
?>