<?php


class Model
{
    protected $DB = null;
    public function __construct(){
        $this->DB = DB::connect();
    }

}