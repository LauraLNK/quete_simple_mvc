<?php


namespace Controller;
use Twig_Loader_Filesystem;
use Twig_Environment;
use Model;

class CategoryController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index()
    {
        $categoryManager = new Model\CategoryManager();
        $categories = $categoryManager->selectAllCategories();


        return $this->twig->render('category.html.twig', ['categories' => $categories]);
    }


    public function show(int $id)
    {

        $categoryManager = new Model\CategoryManager();
        $category = $categoryManager->selectOneCategory($id);
        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }
}



?>