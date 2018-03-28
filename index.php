<?php
// require the Faker autoloader
require_once 'src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

for ($i=0; $i < 10; $i++) {
    echo $faker->name, "</br>";
  }
  ?>