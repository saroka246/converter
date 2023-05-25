<?php
class IndexModel extends Model {

    public function checkUser($login, $password){
        if($login != '' && $password != ''){
            $sql = "SELECT * FROM users WHERE login='$login'";
            $res = $this->DB->query($sql);

            if ($res -> num_rows > 0) {
                $result = $res->fetch_assoc();
                if($result['password'] != $password){
                    return "wrong password";
                } else {
                    return "success";
                }

            } else {
                return "no login";
            }
        }
    }

}
