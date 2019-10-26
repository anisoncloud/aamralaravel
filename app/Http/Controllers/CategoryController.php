<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.post.add_category');
    }


    public function saveCategory(Request $request){

        //Elequent ORM
        //return $request->all();
        // Assigning the properties of the Category Model from Request object property
        $category = new Category();
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status   = $request->publication_status;
        $category->save();

        /*
        // Query Builder Process
        DB::table('categories')->insert([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'publication_status' => $request->publication_status
        ]);
        */

       // return 'success';

        return redirect('/category/add')->with('message', 'Data Successfully saved');
    }

    public function manageCategory(){
        $categories = Category::all()->sortBy('category_name');
        //return $categories;
        return view('admin.post.list_category', ['categories' => $categories]);
    }
    public function unpublishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();
        return redirect('/category/manager')->with('message','Category Unpublished');
        return $id;

    }

    public function publishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return redirect('/category/manager')->with('message', 'Category Published');
    }

    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.post.edit_category', ['category'=>$category]);
    }
    public function updateCategory(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('category/manager')->with('message', 'Updated Successfully');
        //return $request->all();
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manager')->with('message', 'Category Deleted Successfully');
    }
}
