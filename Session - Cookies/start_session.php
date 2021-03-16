<?php
session_start();

$_SESSION['emri'] = 'Betim';
$_SESSION['mbiemri'] = 'Gashi';

echo $_SESSION['emri'];
echo $_SESSION['mbiemri'];
?>