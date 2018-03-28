<?php
include 'function.php';


for ($i=0; $i < 10; $i++) {
    echo $faker->unique()->name, "</br>";
    echo $faker->unique()->email, "</br>";
    echo $faker->unique()->address, "</br>";
    echo $faker->unique()->name, "</br>";
    echo $faker->unique()->isbn13, "</br>";
    echo $faker->unique()->e164PhoneNumber, "</br></br>";
  }

  echo "</br></br> Seeding Complete";
?>