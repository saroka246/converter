<?php
class DB{
    const servername = "localhost";
    const username = "saroka246_cur";
    const password = "Root1234";
    const DBname = "saroka246_cur";

    public static function connect(){
        $servername = self::servername;
        $username= self::username;
        $password = self::password;
        $DBname = self::DBname;
        $mysqli = new mysqli($servername, $username, $password, $DBname);

        if ($mysqli -> connect_error) {
            printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
            exit();
        };
        return $mysqli;
    }

}

