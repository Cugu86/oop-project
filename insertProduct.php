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
        $prodotto = new Food('1','2','3','4','5','6','7','6','7','8','9');
        var_dump($prodotto);    
    } 
    else
    {
        echo "please fill in the info correctly";
    }


