<?php

class DataBase {
    
    function createUser($data) {
        parse_str(file_get_contents("php://input"),$post_vars);
        $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
        $result = $mysqli->query("INSERT INTO achivments VALUE (NULL, '{$post_vars['name']}', '{$post_vars['info']}')");
        return $result;
    }

    function getUser($data) {
        parse_str(file_get_contents("php://input"),$post_vars);
        $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
        $result = 0;
        $result1 = $mysqli->query("SELECT * FROM achivments WHERE id = '{$_GET['id']}'");
        foreach ($result1 as $row) {
            $result = array("id" => $row["id"], "name" => $row['name'], "type" => $row['info']);
        }
        return $result;
    }

    function deleteUser($data) {
        parse_str(file_get_contents("php://input"),$post_vars);
        $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
        $result = $mysqli->query("DELETE FROM achivments WHERE id = '{$post_vars['id']}'");
        return $result;
    }
    
    function updateUser() {
        parse_str(file_get_contents("php://input"),$post_vars);
        $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
        $result = $mysqli->query("UPDATE achivments SET name = '{$_POST['name']}', info = '{$_POST['info']}' WHERE id = '{$_POST['id']}'");
        return $result;
    }

    function getAchivment($data) {
        parse_str(file_get_contents("php://input"),$post_vars);
        $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
        $result = 0;
        $result1 = $mysqli->query("SELECT * FROM typesAchivments WHERE id = '{$_GET['id']}'");
        foreach ($result1 as $row) {
            $result = array("id" => $row["id"], "type" => $row['type'], "name" => $row['name']);
        }
        return $result;
    }
    
}
?>