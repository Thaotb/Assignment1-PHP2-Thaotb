<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController{

    public function categories(){
        $categorys = Category::all();
        // header('location: /');
        // die;
        include_once './app/views/categorypage.php';
    }
        public function addCategory(){
        include_once './app/views/add-category.php';
    }

}
?>