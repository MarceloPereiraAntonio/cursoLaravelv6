<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class ProductController extends Controller
{
    protected $request;
    public function __construct(Request $request){
        
        /*$this->request = $request;
        $this->middleware('auth')->except(
            [
                'index', 'show', 'create'
            ]);*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::paginate(10);
        

        return view('admin.pages.products.index', [
            'products'=>$products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorageUpdateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorageUpdateProductRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $product = Product::find($id);
      
       return view('admin.pages.products.show', [
           'product' => $product
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
