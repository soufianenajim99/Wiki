<?php

interface CategoryInterface {
    public function displayCategory();
    public function addCategory(Category $category);
    public function editCategory(Category $category,$id);
    public function deleteCategory($id);
    
}