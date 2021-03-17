<?php
session_start();

$_SESSION['emri'] = 'Besa';
$_SESSION['mbiemri'] = 'Markaj';

echo $_SESSION['emri'];
echo $_SESSION['mbiemri'];
?>