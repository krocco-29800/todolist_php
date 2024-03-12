<?php

namespace App\Todolist\Controller;

class ContactController{
    public function contact() {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
           // se connecter à la base de donnée
        $pdo = new Database(
            "127.0.0.1",
            "todolist",
            "3306",
            "root",
            ""
        );
        // récupérer les datas
        $pdo->query(
            "INSERT INTO contact (title, status) VALUES (?,?,?)",
            [$_POST['nom'], $_POST['prenom'],$_POST['email']]
        );
        }
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }

}