<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function show()
    {


        $categories = Category::get();

        return view('categories.showall', ['categories' => $categories]);
    }


    public function showDetails($id)
    {

        $category = Category::findOrFail($id);

        return view('categories.categoryDetails', ['category' => $category]);
    }

    public function add()
    {
        return view('categories.add');
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            "name" => 'required|max:255',
            "desc" => 'required',
            "image" => 'image|mimes:png,jpg|size:2048',
            "price" => 'numeric'

        ]);

        Category::create($data);


        return redirect(url('categories'));
    }

    public function edit($id)
    {

        $category = Category::findOrFail($id);




        return view('categories.update', ["category" => $category]);
    }
    public function update($id, Request $request)
    {

        $data = $request->validate([
            "name" => 'required|max:255',
            "desc" => 'required',
            "image" => 'image|mimes:png,jpg|size:2048',
            "price" => 'numeric'
        ]);

        $category = Category::findOrFail($id);
        $category->update($data);


        return redirect(url("category/$category->id"));
    }


    public function delete($id){
        $category = Category::findOrFail($id);


        $category->delete();
        return redirect(url('categories'));
    }
}
