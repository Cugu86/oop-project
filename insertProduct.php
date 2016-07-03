<?php
session_start();
include_once("classAutoloader.php");


if ($_POST['productType']==='food') {

    echo'stai inserendo un food';

        if ((!empty($_POST['nameProduct']))&&
            (!empty($_POST['priceProduct']))&&
            (!empty($_POST['quantityProduct']))&& 
            (!empty($_POST['producerProduct']))&&
            (!empty($_POST['expProduct'])))
            
            {
                $nameProduct=htmlspecialchars($_POST['nameProduct']);
                $priceProduct=htmlspecialchars($_POST['priceProduct']);
                $quantityProduct=htmlspecialchars($_POST['quantityProduct']);
                $producerProduct=htmlspecialchars($_POST['producerProduct']);
                $expProduct=htmlspecialchars($_POST['expProduct']); 
                
                echo "valori passati";
               
                
               
            } 
            else
            {
                echo "please fill in the info correctly";
            }

}
else
{
    echo'stai inserendo un electronic';
}
