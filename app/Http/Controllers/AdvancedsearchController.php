<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class AdvancedsearchController extends Controller
{
    public function index()
    {
        $new_order = Products::orderBy('created_at', 'desc')->get();
        return view('advanced_search', ['datas' => $new_order]);
    }

    public function order(Request $request)
    {
        $id = $request->input('selected_value');
        if($id == 0){
            $datas = Products::orderBy('created_at', 'desc')->get();
        }elseif($id == 1){
            $datas = Products::orderBY('prices', 'asc')->get();
        }elseif($id == 2){
            $datas = Products::orderBY('prices', 'desc')->get();
        }else{
            $datas = Products::orderBY('favorite', 'desc')->get();
        }
        return view('advanced_search', ['datas' => $datas]);
    }

    public function get_brand(Request $request){
        $id = $request->id;
        dd($id);
    }

    public function search(Request $request){
        dd($request);

    }
}
