<?php


class RegistrationModel extends Model
{
    public function checkLogin($login, $password){
        if($login != '' && $password != ''){
            $sql = "SELECT * FROM users WHERE login='$login'";
            $res = $this->DB->query($sql);

            if ($res -> num_rows > 0) {
                return "exist";
            } else {
                $this->DB->query("INSERT INTO users (login,password) VALUES('$login','$password')");
                return "success";
            }
        }
    }
}