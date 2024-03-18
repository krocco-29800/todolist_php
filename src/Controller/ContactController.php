<?php

namespace App\Todolist\Controller;

use App\Todolist\Repository\TaskRepository;
use App\Todolist\Service\Database;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ContactController{
    public function contact() {
        
        $loader = new FilesystemLoader("../templates");
        $twig = new Environment($loader);
        

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $taskrepository = new TaskRepository();
            $taskrepository->contact();

            header("Location: http://localhost/todolist_php/public/");
        }
        echo $twig->render('contactPage.twig');
    }

}