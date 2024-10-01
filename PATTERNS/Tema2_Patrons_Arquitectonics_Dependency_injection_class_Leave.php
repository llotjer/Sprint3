<?php

include_once 'Tema2_Patrons_Arquitectonics_Dependency_injection_Interficie_haveItAll.php';

class Leave implements haveItAll{
    public function checking(): string{
        return 'smartphone, keys, pocket, movility card, auto keys';
    }
}