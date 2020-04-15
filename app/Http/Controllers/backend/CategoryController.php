<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.category.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_categories = Category::orderBy('name', 'desc')->where('parent_id', null)->get();
        return view('backend.pages.category.create')->with('parent_categories', $main_categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'         => ['required', 'max:150'],
            'description'   => ['required'],
            'image'         => ['nullable', 'image']
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;


        //  insert image
        if($request->has('image')){
            // insert that image
            $image = $request->file('image');
            $img = time().$image->getClientOriginalExtension();
            $location = public_path('images/categories/'.$img);
            Image::make($image)->save($location);

            $category->image = $img;
        }

        $category->save();

        session()->flash('success', 'A new category has added successfully');
        return redirect()->route('admin.category.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function manage_products()
    {
        $products = Product::orderBy('id', 'asc')->get();
        return view('admin.pages.product.index')->with('products', $products);
    }
    public function edit($id)
    {
        $category = Category::find($id);
        $main_categories = Category::orderBy('name', 'desc')->where('parent_id', null)->get();
        return view('backend.pages.category.edit',compact('category', 'main_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'         => ['required', 'max:150'],
            'description'   => ['required'],
            'image'         => ['nullable', 'image']
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;


        //  insert image
        if($request->has('image')){
            // insert that image
            if(File::exists('images/categories/'.$category->image)){
                File::delete('images/categories/'.$category->image);
            }
            $image = $request->file('image');
            $img = time().$image->getClientOriginalExtension();
            $location = public_path('images/categories/'.$img);
            Image::make($image)->save($location);

            $category->image = $img;
        }

        $category->save();

        session()->flash('success', 'A new category has updated successfully');
        return redirect()->route('admin.categories');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if(!is_null($category)){
            // if it is paren category, then delete all its sub category
            $sub_categories = Category::orderBy('name', 'desc')->where('parent_id', $category->id)->get();
            foreach ($sub_categories as $cat){
                if(File::exists('images/categories/'.$cat->image)){
                    File::delete('images/categories/'.$cat->image);
                }
                $cat->delete();
            }
            if(File::exists('images/categories/'.$category->image)){
                File::delete('images/categories/'.$category->image);
            }
            $category->delete();
        }
        session()->flash('success', "Product has deleted successfully");
        return back();
    }
}
