<?php

require_once 'class.employee.php';

$Abdel = new Employee( 'Abdel', 'Lahna', '1979-12-16','1300');


var_dump( $Abdel->net_income() );

