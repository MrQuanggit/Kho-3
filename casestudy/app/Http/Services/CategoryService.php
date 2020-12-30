<?php

namespace App\Http\Services;

use App\Http\Repositories\CategoryRepository;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class CategoryService implements ServiceInterface {

    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->categoryRepository->getAll();
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->categoryRepository->findById($id);
    }

    function add($request, $obj = null)
    {
        // TODO: Implement add() method.
        $obj = new Category();
        $obj->name = $request->name;
        $obj->description = $request->description;
        $this->categoryRepository->save($obj);
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
        $obj->fill($request->all());
        $this->categoryRepository->save($obj);
    }
}
