<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Services\ProductService;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index() {
        $category = Category::all();
        $products = Product::all();
        return view('admin.product.list', compact('products', 'category'));
    }

    public function create() {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }

    public function store(ProductRequest $request) {
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
        $product  = $this->productService->findById($id);
        return view('admin.product.edit', compact('product', 'category'));
    }

    public function update(Request $request, $id) {
        $category = Category::all();
        $product  = $this->productService->findById($id);
        $this->productService->update($request, $product);
        $message  = 'Successfully Update Product!';
        return redirect()->route('product.index', compact('category'))->with('info',$message);
    }

    public function men(){
        $products = Product::where('category_id', '1')->get();
        return view('index.category.men', compact('products'));
    }
    public function women(){
        $products = Product::where('category_id', '2')->get();
        return view('index.category.women', compact('products'));
    }
    public function jewelry(){
        $products = Product::where('category_id', '3')->get();
        return view('index.category.jewelry', compact('products'));
    }
    public function story(){
        return view('index.category.story');
    }

    public function product($id){
        $product    = $this->productService->findById($id);
        $this->productService->increseView($product);
        $categories = Product::where('category_id', $product->category_id)->get();
        return view('index.product', compact('product', 'categories'));
    }

    public function home(){
        $favorites  = Product::orderBy('view', 'desc')
            ->limit(4)->get();
        $hotSales   = Product::orderBy('stock', 'desc')
            ->limit(5)->get();
        return view('index.index', compact('hotSales', 'favorites'));
    }
}
