<?php

include_once 'Tema2_Patrons_Arquitectonics_Dependency_injection_class_Leave.php';
include_once 'Tema2_Patrons_Arquitectonics_Dependency_injection_class_Usuari.php';

$leave = new Leave();
$user = new Usuari($leave);

echo $user->checking();