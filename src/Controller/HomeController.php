<?php 
namespace App\Todolist\Controller;
use App\Todolist\Repository\TaskRepository;
use App\Todolist\Service\Database;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class HomeController{
    public function index()
    {
        // echo "page d'accueil";
        // determiner le dossier qui va contenir les fichiers twig
        $loader = new FilesystemLoader("../templates");
        // inintialiser twig
        $twig = new Environment($loader);

        $taskRepository = new TaskRepository();
        $contacts = $taskRepository->index2();
        // echo "<pre>" ; 
        // var_dump($tasks);
        // echo "</pre>";
        // rendre une vue
        echo $twig->render('homepage.twig', [
            'contacts' => $contacts
        ]);
    }
}