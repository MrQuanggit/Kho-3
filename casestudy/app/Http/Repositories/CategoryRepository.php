<?php

namespace App\Http\Repositories;

use App\Models\Category;

class CategoryRepository implements RepositoryInterface {

    protected $categoryModel;

    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }


    function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->categoryModel->get();
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->categoryModel->findOrFail($id);
    }

    function save($obj)
    {
        // TODO: Implement save() method.
        $obj->save();
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
        $obj->delete();
    }
}
