<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use DB;


class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        // $subcategories = SubCategory::all();

        $data = DB::table('categories')
                ->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
                ->select('categories.*', 'sub_categories.name as sub_name')->get();

        return view('administrator.category.sub', compact('data', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubCategory::create([
            'category_id' => $request->category,
            'name' => $request->name,
        ]);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub = SubCategory::find($id);
        return $sub;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
     //   dd($request->all());
        $sub = SubCategory::findOrFail($request->id);
        $sub->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $id)
    {
        $id->delete();

        return redirect()->back();
    }
}
