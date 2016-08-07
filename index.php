<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/comp1006/project2/config.php';
$cars=['Mercedes','Audi','BMW','Porsche','Mazerrati','Ford'];

foreach ($cars as $car) {
    Car::create(
        [
            'name' => $car

        ]
    );
}