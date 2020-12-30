<?php

namespace App\Http\Services;

use App\Http\Repositories\ProductRepository;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

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
        $obj                = new Product();
        $obj->product_name  = $request->product_name;
        $obj->description   = $request->description;
        $obj->stock         = $request->stock;
        $obj->view          = $request->view;
        $obj->priceEach     = $request->priceEach;
        $obj->slug          = $request->slug;
        $obj->size          = $request->size;
        $this->uploadFile($obj, $request);
        $obj->category_id   = $request->category_id;
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
            $path           = Storage::disk('s3')->put('images',$request->image1,'public');
            $obj->image1    = $path;
        }
        if ($request->hasFile('image2')) {
            $path        = Storage::disk('s3')->put('images',$request->image2,'public');
            $obj->image2 = $path;
        }
        if ($request->hasFile('image3')) {
            $path           = Storage::disk('s3')->put('images',$request->image3,'public');
            $obj->image3    = $path;
        }
        if ($request->hasFile('image4')) {
            $path           = Storage::disk('s3')->put('images',$request->image4,'public');
            $obj->image4    = $path;
        }
        if ($request->hasFile('image5')) {
            $path           = Storage::disk('s3')->put('images',$request->image5,'public');
            $obj->image5    = $path;
        }
    }

    public function increseView($obj){
        $obj->view++;
        $this->productRepository->save($obj);
    }
}
