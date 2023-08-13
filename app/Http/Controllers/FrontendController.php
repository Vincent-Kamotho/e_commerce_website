<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shopping;
use Illuminate\Http\Request;
use App\Mail\PurchaseSuccessful;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('index')->with('products' , $products);
    }

    public function shopview()
    {
        $shoppings = Shopping::all();
        return view('shop')->with('shoppings' , $shoppings);
    }

    public function showItem($id)
    {
        $product = Shopping::find($id);
        return view('sproduct')->with('product' , $product);
    }

    public function addToCart(Request $request , $id)
    {
        
        $product = Product::findOrFail($id);

        $cart = session()->get('cart' , []);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else {
            $cart[$id] = [
                "name" => $product->product_name,
                "quantity" => $request->input('quantity'),
                "price" => $product->product_price,
                "image" => $product->image,
            ];
        }

        session()->put('cart' , $cart);

        return redirect()->back()->with('success' , 'Successfully Added');
        //return redirect()->to('cart')->with('success', 'Successfully Added');
        
    }

    // public function remove(Request $request)
    // {
    //     if($request->id){
    //         $cart = session()->get('cart');
    //         if(isset($cart[$request->id])) {
    //             unset($cart[$request->id]);
    //             session()->put('cart' , $cart);
    //         }
    //         session()->flash('success' , 'Product successfully removed');
    //     }
    // }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])){

            unset($cart[$id]);

            session()->put('cart' , $cart);
            return response()->json(['message' => 'Item removed successfully','redirect' => route('cart')]);
        }
        return response()->json(['message' => 'Item Successfully Removed']);
    }

    public function Checkout()
    {
        return view('checkout');
    }

    public function Purchase(Request $request)
    {
        // $mailData = [
        //     $email = $request->input('email'),
        //     $name = $request->input('name'),
        //     $address = $request->input('address'),
        //     $card_name = $request->input('card_name'),
        //     $card_number = $request->input('card_number')
        // ];
        

        // Mail::to($email)->send(new PurchaseSuccessful($mailData));
        
        // dd("Email is sent successfully");

        return redirect()->back()->with('success', 'Product Successfully Purchased');
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
        //
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
