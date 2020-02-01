<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class UserController extends Controller
{
    // -------------------- [ Insert Data ] ------------------
    public function index() {

        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://hotel-chains-f29ac.firebaseio.com/')
            ->create();

        $database   =   $firebase->getDatabase();
        $createPost    =   $database
            ->getReference('chotoroot/products/0')
            ->set([
                'address' =>  'House # 25 Rd Number 6, Dhaka',
                'description'  =>  'Informal hotel featuring warmly furnished rooms, a restaurant &amp; a spa, plus an outdoor pool!'

            ]);

        echo '<pre>';
        print_r($createPost->getvalue());
        echo '</pre>';
        return view('products');
    }

}
