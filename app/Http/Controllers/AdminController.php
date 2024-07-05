<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class AdminController extends Controller
{
    public function view_category(){
        $data = Category::all();
        return view('admin.category',compact('data'));
    }   
    public function add_category(Request $request){
        $category = new Category;
        $category->category_name = $request->category;
        toastr()->closeButton()->timeOut(5000)->addSuccess('Category added successfully');
        $category->save();
        return redirect()->back();
    }

    public function delete_category($id){
        $data = Category::find($id);
        $data->delete();
        toastr()->closeButton()->timeOut(5000)->addSuccess('Category deleted successfully');
        return redirect()->back();
    }

    public function edit_category($id){
        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request, $id){
        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();
        return redirect('/view_category');
    }

    public function add_product(){
        $category = Category::all();
        return view('admin.add_product',compact('category'));
    }

    public function upload_product(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;
        $image = $request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products', $imagename);
            $product->image = $imagename;
        }
        toastr()->closeButton()->timeOut(5000)->addSuccess('Product was successfully');
        $product->save();
        return redirect()->back();
    }

    public function view_products(){
        $data = Product::all();
        return view('admin.view_products',compact('data'));
    }
}
