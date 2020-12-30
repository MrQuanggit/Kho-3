<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Services\CategoryService;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index() {
        $category = Category::all();
        return view('admin.category.list', compact('category'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request) {
        $this->categoryService->add($request);
        $message = 'Successfully Created Category!';
        return redirect()->route('category.index')->with('success',$message);
    }

    public function edit($id) {
        $category = $this->categoryService->findById($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id) {
        $category   = $this->categoryService->findById($id);
        $this->categoryService->update($request, $category);
        $message    = 'Successfully Edited Category!';
        return redirect()->route('category.index')->with('info',$message);
    }

    public function destroy($id) {
        $products       = Product::where('category_id', $id)->get();
        if(count($products)) {
            $message    = "Can't Delete This Category !";
            return redirect()->route('category.index')->with('error',$message);
        } else {
            $category   = $this->categoryService->findById($id);
            $category->delete();
            $message    = 'Successfully Deleted Category!';
            return redirect()->route('category.index')->with('success',$message);
        }
    }
}
