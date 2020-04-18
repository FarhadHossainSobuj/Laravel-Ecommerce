<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use File;
use Intervention\Image\ImageManagerStatic as Image;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('backend.pages.brand.index')->with('brands', $brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brand.create');
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
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;

        //  insert image
        if($request->has('image')){
            // insert that image
            $image = $request->file('image');
            $img = time().$image->getClientOriginalExtension();
            $location = public_path('images/brand/'.$img);
            Image::make($image)->save($location);

            $brand->image = $img;
        }

        $brand->save();

        session()->flash('success', 'A new brand has added successfully');
        return redirect()->route('admin.brand.create');
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
        $brand = Brand::find($id);
        if(!is_null($brand)){
            return view('backend.pages.brand.edit',compact('brand'));
        } else {
            return redirect()->route('admin.brands');
        }

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
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->description = $request->description;


        //  insert image
        if($request->has('image')){
            // insert that image
            if(File::exists('images/brand/'.$brand->image)){
                File::delete('images/brand/'.$brand->image);
            }
            $image = $request->file('image');
            $img = time().$image->getClientOriginalExtension();
            $location = public_path('images/brand/'.$img);
            Image::make($image)->save($location);

            $brand->image = $img;
        }

        $brand->save();

        session()->flash('success', 'A new brand has updated successfully');
        return redirect()->route('admin.brands');


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
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash('success', "Brand has deleted successfully");
        return back();
    }
}
