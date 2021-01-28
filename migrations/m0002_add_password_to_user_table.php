<?php

class m0002_add_password_to_user_table{

    public function up(){
        $db = \andreidediumxv\phpmvc\Application::$app->db;
        $SQL = "ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL;";
        $db->pdo->exec($SQL);
    }
    public function down(){
        $db = \andreidediumxv\phpmvc\Application::$app->db;
        $SQL = "ALTER TABLE users DROP COLUMN password;";
        $db->pdo->exec($SQL);
    }
}