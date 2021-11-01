<?php
  
namespace App\Http\Controllers;
   
use App\Models\Product;
use Illuminate\Http\Request;

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
        $products = Product::all();
        return View('products.crudopt')->with(compact('products'));
        // $products = Product::latest()->paginate(5);
    
        // $pdf = PDF::loadView('products.index', [
        //     'products' => $products
        // ]);
        // return $pdf->inline('abc.pdf');
    }

    public function welcome()
    {
        $products = Product::latest()->paginate(5);
    
        $pdf = PDF::loadView('products.welcome', [
            'products' => $products
        ]);
        return $pdf->inline('abc.pdf');
    }

    public function json()
    {
        $jsonString = file_get_contents(base_path('public/js/attendances.json'));
        // $url = "https://jsonplaceholder.typicode.com/todos";

        // $curl = curl_init($url);
        // curl_setopt($curl, CURLOPT_URL, $url);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // $jsonString = curl_exec($curl);
        // curl_close($curl);
        // prd($jsonString);
        $data = json_decode($jsonString, true);
        //prd($data);
        // $res = array_filter($data, function($value){
        //     $attDate = date('Y-m-d', strtotime($value['timestamp']));
        //     $today = date('2021-10-12');
        //     //return $today == $attDate;

        //     return $value['user_id'] == 1 && $today == $attDate;
        // });
        
            $res = [];

            $res["u-1"] = [];

            $res["u-1"] = array_filter($data, function($value){
                return $value['user_id'] == 1;
            });

        $pdf = PDF::loadView('products.json', [
            'data' => $res
        ]);
        return $pdf->inline('abc.pdf');
        
        
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

    public function class()
    {
        $products = Product::all();
        return View('products.index')->with(compact('products'));
    }

    public function section()
    {
        return view('products.section');
    }

    public function group()
    {
        return view('products.group');
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
            'section' => 'required',
            'group' => 'required',
        ]);
    
        Product::create($request->all());
     
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //$products = Product::latest()->paginate(5);
    
        $pdf = PDF::loadView('products.show',compact('product'));
        return $pdf->inline('abc.pdf');
        //return view('products.show',compact('product'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
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
            'name' => 'required',
            'section' => 'required',
            'group' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    public function classedit(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}