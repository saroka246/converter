<?php


class ProfileModel extends Model
{
    public function getCurrencies(){
        $sql = "SELECT * FROM currency";
        $res = $this->DB->query($sql);
        if($res->num_rows > 0){
            return $res;
        }
    }
    
}