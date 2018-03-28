<?php session_start(); ?>
<?php
include 'db.php';
require_once 'src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

function redirect($url) //redirect function
    {
        if (!headers_sent())
        {    
            header('Location: '.$url);
            exit;
            }
        else
            {   
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
        }
    }



function convertDate($val){
    $date = date("d/m/Y", strtotime($val));
    return $date;
}
function convertDate2($val){
    $date = date("d F Y", strtotime($val));
    return $date;
}
function convertDateDb($val){
    $date = date("Y-m-d", strtotime($val));
    return $date;
}

 

?>