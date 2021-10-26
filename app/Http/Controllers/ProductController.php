<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class ProductController extends Controller
{
    protected $request;
    private $repository;
    public function __construct(Request $request, Product $product){
        
        $this->request = $request;
        $this->repository = $product;
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
        $date = $request->only('name', 'valor', 'description');

        $this->repository->create($date);
        return redirect()->route('products.index');
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
        $product = Product::find($id);
      
       return view('admin.pages.products.edit', [
           'product' => $product
       ]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StorageUpdateProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorageUpdateProductRequest $request, $id)
    {
        if(!$product = $this->repository->find($id))
        return redirect()->back();
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$product = $this->repository->find($id))
        return redirect()->back();
        $product->delete();
        return redirect()->route('products.index');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');
        $products = $this->repository->search($request->filter);
        return view('admin.pages.products.index', [
            'products'=>$products,
            'filters'=>$filters,
        ]);
    }
}
