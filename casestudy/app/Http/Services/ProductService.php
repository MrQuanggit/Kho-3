<?php

namespace App\Http\Services;

use App\Http\Repositories\ProductRepository;
use App\Models\Category;
use App\Models\Product;

class ProductService implements ServiceInterface {

    protected $productRepository;

    public function __construct(ProductRepository $productRepository){
        $this->productRepository = $productRepository;
    }

    function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->productRepository->getAll();
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->productRepository->findById($id);
    }

    function add($request, $obj = null)
    {
        // TODO: Implement add() method.
        $obj = new Product();
        $obj->id = $request->id;
        $obj->product_name = $request->product_name;
        $obj->description = $request->description;
        $obj->stock = $request->stock;
        $obj->view = $request->view;
        $obj->priceEach = $request->priceEach;
        $obj->slug = $request->slug;
        $obj->size = $request->size;
        $this->uploadFile($obj, $request);
        $obj->category_id = $request->category_id;
        $this->productRepository->save($obj);
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
        $obj->fill($request->all());
        $this->uploadFile($obj, $request);
        $this->productRepository->save($obj);
    }

    function uploadFile($obj, $request)
    {
        if ($request->hasFile('image1')) {
            $img = $request->image1;
            $path = $img->store('public/products');
            $obj->image1 = $path;
        }
        if ($request->hasFile('image2')) {
            $img = $request->image2;
            $path = $img->store('public/products');
            $obj->image2 = $path;
        }
        if ($request->hasFile('image3')) {
            $img = $request->image3;
            $path = $img->store('public/products');
            $obj->image3 = $path;
        }
        if ($request->hasFile('image4')) {
            $img = $request->image4;
            $path = $img->store('public/products');
            $obj->image4 = $path;
        }
        if ($request->hasFile('image5')) {
            $img = $request->image5;
            $path = $img->store('public/products');
            $obj->image5 = $path;
        }
    }
}
