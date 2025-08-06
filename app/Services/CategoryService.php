<?php

namespace App\Services;
use App\Models\Category;
class CategoryService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function createCategory(array $data)
    {
        return Category::create($data);
    }

    public function updateCategory(Category $category, array $data)
    {
        $category->update($data);
        return $category;
    }

    public function deleteCategory(Category $category)
    {
        return $category->delete();
    }

    public function getAllCategory()
    {
        return Category::all();
    }

    public function getCategoryById(int $categoryId)
    {
        return Category::find($categoryId);
    }
}
