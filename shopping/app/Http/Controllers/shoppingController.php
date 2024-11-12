<?php

namespace App\Http\Controllers;


use App\Models\products_details;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\products;
use App\Models\orders;
use App\Models\invoice;
use Illuminate\Support\Facades\Session;
use App\Models\cart;
use App\Models\User;



use Illuminate\Http\Request;

class shoppingController extends Controller
{

    
    public function add_to_cart($id){
        // session
        $count=session::get('counter');
        $count++;
        session::put('counter',$count);

        // price from products_details
        $p=DB::table('products_details')
        ->where('products_details.id','=',$id)
        ->first();

        $price= $p->price;
        
        // dd($price);

         //cart
         $product_id = $id;
         $user = Auth::user();
         $user_id = $user->id;
        

        $product=cart::create([
            'product_id'=>$product_id,
            'customer_id'=>$user_id,
            'gty'=>1,
            'total'=>$price,
            
        ]);
        $product->save();

        return view('shopping.landing');
    }
    // public function basic(){
    //     $s=5+5;
    //     return view("shopping.test",['sum'=>$s]);
    // }
    public function index(){
        $cateo=[];
        $categories=DB::table('products')->get();
        foreach ($categories as $counter=>$cate){
            if (!in_array($cate->description, $cateo)) {
                $cateo[$counter] = $cate->description;
            }
        }
        
        // dd($cateo);
        return view("shopping.landing",['categories'=>$cateo]);
    }

    public function Categories(){
        $cateo=[];
        $categories=DB::table('products')->get();
        foreach ($categories as $counter=>$cate){
            $cateo[$counter]=$cate->description;
        }
        // dd($cateo);
        $s=5+10;
        return view("shopping.landing",['sum'=>$s]);

    }

    public function novelsBooks(){
    //     $novels=[];
    //     $product = products_details::all();
    //     foreach($product as $counter=>$novel){
    //         if(!in_array($novel->description, $novels)) {
    //             if($novel->description=='رواية'){
    //             $novels[$counter] = $novel->description;
    //     }
    // }}
        
        // $pro=products_details::where('description','=',$novels)->get();
        // $producetails=DB::table('products')
        // ->join('products_details','products.id','=','products_details.id_product')
        // ->get();
     

        $productDetails = DB::table('products')
        ->join('products_details', function ($join)  {
        $join->on('products.id', '=', 'products_details.id_product')
        ->where('products.description', '=', 'رواية');
        })
        ->get();
        // dd($productDetails);

        return view("shopping.novelsBooks",["novels"=>$productDetails]);
        
}

    public function childrenBooks(){
        return view("shopping.childrenBooks");
    }

    public function selfDevBooks(){
        return view("shopping.selfDevBooks");
    }

    public function religiousBooks(){
        return view("shopping.religiousBooks");
    }

    public function books_details($id){
    
        $book=DB::table('products')
        ->join('products_details','products.id','=','products_details.id_product')
        ->where('products_details.id','=',$id)
        ->first();
        // dd($book);

        return view('shopping.book_details',['book'=>$book]);
    }

    public function all_books(){
        $book=DB::table('products')
        ->join('products_details','products.id','=','products_details.id_product')
        ->get();
        // dd($book);
        return view("shopping.all_books",["books"=>$book]);



    }
    public function cart_details(){
        // $book=DB::table('products')
        // ->join('products_details','products.id','=','products_details.id_product')
        // ->where('products_details.id','=',$id)
        // ->first();
        // // dd($book);
       $product = DB::table("carts")
            ->join('products_details', 'carts.product_id', '=', 'products_details.id')
            ->join('products', 'products_details.id_product', '=', 'products.id')
            ->select('carts.*', 'products_details.price','products_details.image', 'products.name') // Select the columns you need
            ->get();
        
            $user = Auth::user();
            $user_id = $user->id;
            $price = DB::table('carts')
            ->where('customer_id', '=',$user_id)
            ->get();
          
            $total=0;
            foreach($price as $pr){
                $total=$pr->total+$total;
            } 
            
            $tax = $total * 0.15;
            $final_total = $total + $tax;

        return view('shopping.cart_details',['product'=>$product,'total'=>$total, 'tax'=>$tax,'final'=>$final_total]);
    }

    public function delete_item() {
            $id = $_GET['id'];
            $user = Auth::user();
            $user_id = $user->id;
        
            $item = cart::where('id', '=',$id)->where('customer_id', $user_id)->first();
        
            $item->delete();
        } 


        public function order() {
            // $product=invoice::create([
            //     'customer_id'=>$request->customer_id,
            //     'product_id'=>$request->product_id,
            //     'gty'=>1,
            //     'price'=>$request->price,
            //     'total'=>$request->final
                
            // ]);
            // $product->save();
            // dd($product);

            $product = DB::table("carts")
            ->join('products_details', 'carts.product_id', '=', 'products_details.id')
            ->join('products', 'products_details.id_product', '=', 'products.id')
            ->select('carts.*', 'products_details.price','products_details.image', 'products.name') // Select the columns you need
            ->get();
        
            $user = Auth::user();
            $user_id = $user->id;
            $price = DB::table('carts')
            ->where('customer_id', '=',$user_id)
            ->get();

            // dd($price);

          
            $total=0;
            foreach($price as $pr){
                $total=$pr->total+$total;
            } 
            
            $tax = $total * 0.15;
            $final_total = $total + $tax;

            foreach($price as $pr){
            $order=invoice::create([
                'customer_id'=>$pr->customer_id,
                'product_id'=>$pr->product_id,
                'gty'=>1,
                'price'=>0,
                'total'=>$final_total,
                
            ]);
            $order->save();
            }

            foreach($price as $pr){
                $order2=orders::create([
                    'customer_id'=>$pr->customer_id,
                    'product_id'=>$pr->product_id,
                    'status'=>1,   
                ]);
                $order2->save();
                }
             
            return view('shopping.landing');

        }
    }











