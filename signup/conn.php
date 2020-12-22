<?php 
ini_set('display_errors', 1);
ini_set('display _startup_error', 1);
error_reporting(E_ALL);

$conn=new mysqli('localhost','root','',"shivanas_jewellery");
session_start();