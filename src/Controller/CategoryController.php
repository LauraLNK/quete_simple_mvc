<?php


namespace Controller;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Model;

class CategoryController extends AbstractController
{
    protected $twig;

    public function index()
    {
        $categoryManager = new \Model\CategoryManager($this->pdo);
        $categories = $categoryManager->selectAll();


        return $this->twig->render('categories.html.twig', ['categories' => $categories]);
    }


    public function show(int $id)
    {

        $categoryManager = new \Model\CategoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);
        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }

    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Category et hydratation avec les données du formulaire
            $category = new Model\Category();
            $category->setName($_POST['name']);

            $categoryManager = new Model\CategoryManager($this->pdo);
            // l'objet $category     hydraté est simplement envoyé en paramètre de insert()
            $categoryManager->insert($category);
            // si tout se passe bien, redirection
            header('Location: /categories');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('addCategory.html.twig');
    }

}
?>