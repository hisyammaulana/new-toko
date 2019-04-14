<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SubCategory;
use Storage;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $data = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                ->join('products', 'categories.id', '=', 'products.category_id')
                ->select('products.*','categories.name as category_name', 'sub_categories.name as sub_name')->get();

        return view('administrator.product.product', compact('data', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

        $sub = SubCategory::all();

        return view('administrator.product.add_product', compact('category', 'sub'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imagename = $image->getClientOriginalName();

            if ($request->file('image')->isValid()) {
                $img_name = "$imagename";
                $path = 'product';
                $request->file('image')->move($path, $imagename);
                $input['image'] = $img_name;
            }
        }

        $products = Product::create($input);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                ->join('products', 'categories.id', '=', 'products.category_id')
                ->select('products.*','categories.name as category_name', 'sub_categories.name as sub_name')->get();

        $data = Product::findOrFail($id);

        return view('administrator.product.detail_product', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();

        $sub = SubCategory::all();

        $products = Product::findOrFail($id);
        return view('administrator.product.update_product', compact('products', 'category', 'sub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

           if ($request->image) {
               $path = $product->image;
               if (Storage::exists($path)) {
                   Storage::delete($path);
               }
               $image = $request->file('image')->store('product');
               $product->update([
                   'category_id' => $request->category,
                   'sub_category_id' => $request->sub_category,
                   'name' => $request->name,
                   'satuan' => $request->satuan,
                   'image' => $request->image,
                   'set_lusin' => $request->set_lusin,
                    'lusin' => $request->lusin,
                    'set_grosir' => $request->set_grosir,
                    'grosir' => $request->grosir,
                    'trim' => $request->trim,
                    'stok' => $request->stok,
                    'deskripsi' => $request->deskripsi,
               ]);
           }else{
            $product->update([
                'category_id' => $request->category,
                'sub_category_id' => $request->sub_category,
                'name' => $request->name,
                'satuan' => $request->satuan,
                'image' => $request->image,
                'set_lusin' => $request->set_lusin,
                 'lusin' => $request->lusin,
                 'set_grosir' => $request->set_grosir,
                 'grosir' => $request->grosir,
                 'trim' => $request->trim,
                 'stok' => $request->stok,
                 'deskripsi' => $request->deskripsi,
            ]);
           }
           return redirect()->route('product.index');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $id)
    {
        $id->delete();

        return redirect()->back();
    }

}
