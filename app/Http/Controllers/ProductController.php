<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateProductRequest;
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

        $products = ['tv', 'geladeria', 'fogao', 'video game'];
        

        return view('admin.pages.products.index', compact('products'));
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
        /* $request->validate([
            'nome'=>'required|min:3|max:255',
            'description'=>'nullable|max:10000',
            'photo'=>'image|required',
        ]);
        8
        */
        dd('OK');

        if ($request->file('photo')->isValid()){
            dd($request->file('photo')->store('products'));
        }
        
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
