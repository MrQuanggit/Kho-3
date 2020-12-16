<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index() {
        $products = Product::all();
        return view('admin.product.list', compact('products'));
    }

    public function create() {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    public function store(Request $request) {
        $this->productService->add($request);
        $message = 'Successfully Created Product!';
        return redirect()->route('product.index')->with('success',$message);
    }

    public function destroy($id){
        $product = $this->productService->findById($id);
        $product->delete();
        $message = 'Successfully Deleted Product!';
        return redirect()->route('product.index')->with('success',$message);
    }

    public function edit($id) {
        $category = Category::all();
        $product = $this->productService->findById($id);
        return view('admin.product.edit', compact('product', 'category'));
    }

    public function update(Request $request, $id) {
        $category = Category::all();
        $product = $this->productService->findById($id);
        $this->productService->update($request, $product);
        $message = 'Successfully Update Product!';
        return redirect()->route('product.index', compact('category'))->with('info',$message);
    }
}
