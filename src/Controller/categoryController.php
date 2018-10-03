<?php


namespace Controller;
// src/Controller/ItemController.php
require __DIR__ . '/../Model/categoryManager.php';




class categoryController{

    public function index(){
        $categoryManager =  new \categoryManager();

        $categories = $categoryManager->selectAllcategories();


        require __DIR__ . '/../View/categories.php';


    }
    public function show(int $id)
    {
        $categoryManager = new \categoryManager();
        $category = $categoryManager->selectOnecategory($id);

        require __DIR__ . '/../View/showcategory.php';
    }
}



?>