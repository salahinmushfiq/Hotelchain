<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class ProductController extends Controller
{
    // -------------------- [ Insert Data ] ------------------

    public function index() {

//        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
//        $firebase = (new Factory)
//            ->withServiceAccount($serviceAccount)
//            ->withDatabaseUri('https://hotel-chains-f29ac.firebaseio.com/')
//            ->create();
//
//        $database   =   $firebase->getDatabase();
//        $createPost    =   $database
//            ->getReference('chotoroot/products/0')
//            ->set([
//                'address' =>  'House # 25 Rd Number 6, Dhaka',
//                'description'  =>  'Informal hotel featuring warmly furnished rooms, a restaurant &amp; a spa, plus an outdoor pool!'
//
//            ]);
//
//        echo '<pre>';
//        print_r($createPost->getvalue());
//        echo '</pre>';

        return view('products');
    }
    public function saveProduct(Request $request){
        $this->validate(request(),[
            'name'=>'required | min:6 | max:30',
            'description'=>'required'

        ]);
        $id=$request->input('id');
        $name=$request->input('name');
        $description=$request->input('description');
        $address=$request->input('address');
        $stock=$request->input('stock');
        $price=$request->input('price');
        $rating=$request->input('rating');
        print_r($rating);
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://hotel-chains-f29ac.firebaseio.com/')
            ->create();

        $database   =   $firebase->getDatabase();
         $database
            ->getReference('chotoroot/products/'.$id.'')
            ->set([
                'address' =>  $address,
                'description'  =>  $description

            ]);

        $database
            ->getReference('chotoroot/products/0/detail')
            ->set([
                'name' =>  $name,
                'price'  =>  $price,
                'rating'=> $rating,
                'stock'=>$stock
            ]);
    }
}
