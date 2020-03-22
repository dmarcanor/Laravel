<?php

namespace App\Classes;

class Player
{
    private $nickname;
    private $level;
    private $class;
    private $guild;

    public function __construct($nickname, $level, $class, $guild){
        $this->nickname = $nickname;
        $this->level = $level;
        $this->class = $class;
        $this->guild = $guild;
    }

    public function getNickname(){
        return $this->nickname;
    }

    public function getLevel(){
        return $this->level;
    }

    public function getClass(){
        return $this->class;
    }

    public function getGuild(){
        return $this->guild;
    }

}
