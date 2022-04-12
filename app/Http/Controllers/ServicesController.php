<?php
  
namespace App\Http\Controllers;
   
use App\Models\Service;
use Illuminate\Http\Request;
  
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Service::latest()->paginate(5);
    
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        Service::create($request->all());
     
        return redirect()->route('products.index')
                        ->with('success','Service created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Service $product)
    {
        return view('products.show',compact('product'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $product)
    {
        return view('products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Service updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Service deleted successfully');
    }
}