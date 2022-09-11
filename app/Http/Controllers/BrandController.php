<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{   
    public function addNewBrand(Request $request)
    {
        Brand::create(['name' => $request->brand_name]);

        return view('testPhp.brand.add_new_brand')->with('msg', 'oke');
    }

    public function listBrands()
    {
        $brands = Brand::all();
        
        return view('testPhp.brand.list_brands',[
            'brands' => $brands
        ]);
    }
    
    public function deleteBrand(int $id)
    {
        if (Brand::where('id', $id)->delete()) {
            return redirect()->route('listBrands')->with('msg', 'oke');
        }

        return redirect()->back()->with('msg', 'oke');
    }

    public function showNameBrand(int $id)
    {
        if ($brand = Brand::where('id', $id)->first()) {
            return view('testPhp.brand.edit_brand',[
                'brand' => $brand
            ])->with('msg', 'oke');
        }

        return redirect()->back()->with('msg', 'oke');
    }

    public function updateBrand(int $id, Request $request)
    {
 
        if (Brand::where('id', $id)-> update(['name' => $request->newName])){
            return redirect()->route('listBrands')->with('msg', 'oke');
        }

        return redirect()->back()->with('msg', 'fail');
    }
}
