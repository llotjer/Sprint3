<?php

class Usuari{
    
    private $action;

    public function __construct(haveItAll $action){
        $this->action = $action;
    }

    public function checking(){
        return $this->action->checking();
    }
}