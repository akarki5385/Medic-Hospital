<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Product::orderBy('id','desc')->paginate(10);
        return view('product.list',compact('data'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'product_code' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            ]);



            if ($files = $request->file('image')) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert['image'] = "$profileImage";
            }
            $insert['title'] = $request->get('title');
            $insert['product_code'] = $request->get('product_code');
            $insert['description'] = $request->get('description');
            Product::insert($request->all());
            return view('product.list')
            ->with('success','Greate! Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $where = array('id' => $product);
        $data['product_info'] = Product::where($where)->first();
        return view('product.edit', $data);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
        'title' => 'required',
        'product_code' => 'required',
        'description' => 'required',
        ]);
        $update = ['title' => $request->title, 'description' => $request->description];
        if ($files = $request->file('image')) {
        $destinationPath = 'public/image/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $update['image'] = "$profileImage";
        }
        $update['title'] = $request->get('title');
        $update['product_code'] = $request->get('product_code');
        $update['description'] = $request->get('description');
        Product::where('id',$product)->update($update);
        return Redirect::to('products')
        ->with('success','Great! Product updated successfully');
        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
