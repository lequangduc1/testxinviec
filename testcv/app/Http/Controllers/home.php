<?php

namespace App\Http\Controllers;
use App\Models\truyen;
use DB;

class home extends Controller
{
    function __construct(){
        setcookie("watched[0]", "taocookie",time() + 10000,"/");
    }
    public function trangchu(){
        $truyen = truyen::all();
        if(isset($_COOKIE['watched'])){
            $watched=$_COOKIE['watched'];
        }
        else{
            $watched=[];
            setcookie("watched[0]", "taocookie",time() + 10000,"/");
        }
        return view('welcome',['truyen'=>$truyen],['watched'=>$watched]);
    }
    public function nextjoke($ID_Product){  
        if(isset($_COOKIE['watched'])){
            $data = count($_COOKIE['watched']) + 1;
            setcookie("watched[$data]", $ID_Product,time() + 10000,"/");
        }
        else{
            setcookie('watched[0]', $ID_Product,time() + 10000,"/");
        }
        $truyen = truyen::all();
        $watched=$_COOKIE['watched'];    
        return view('welcome',['truyen'=>$truyen],['watched'=>$watched]);
    }
    public function like($ID_Product){  
        $truyen = truyen::where('ID_Product',$ID_Product)->first();
        $update = DB::table('truyen')->where('ID_Product',$ID_Product)->update([
            'Likes' => $truyen->Likes +1,
        ]);
        return redirect('/');
    }
    public function notlike($ID_Product){  
        $truyen = truyen::where('ID_Product',$ID_Product)->first();
        $update = DB::table('truyen')->where('ID_Product',$ID_Product)->update([
            'NotLike' => $truyen->NotLike +1,
        ]);
        return redirect('/');
    }
}
