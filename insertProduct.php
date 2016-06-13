<?php
session_start();
include_once("classAutoloader.php");

if ((!empty($_POST['nameProduct']))&&
    (!empty($_POST['priceProduct']))&&
    (!empty($_POST['quantityProduct']))&& 
    (!empty($_POST['typeProduct'])))
    
    {
        $nameProduct=htmlspecialchars($_POST['nameProduct']);
        $priceProduct=htmlspecialchars($_POST['priceProduct']);
        $quantityProduct=htmlspecialchars($_POST['quantityProduct']);
        $typeProduct=htmlspecialchars($_POST['typeProduct']); 
        echo "valori passati";
    
    } 
    else
    {
        echo "please fill in the info correctly";
    }


