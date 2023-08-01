<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Brand;
use App\Models\Serie;
use App\Models\Product;

// use App\Models\Mypage;
// use App\Http\Requests\StoreMypageRequest;
// use App\Http\Requests\UpdateMypageRequest;

class MypageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('log')->only('index');
        // $this->middleware('subscribed')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mypage.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        return view('mypage.news');
    }
    public function item_new()
    {
        return view('mypage.item_new');
    }
    public function getBrand(Request $request)
    {
        if($request->name == 'brand'){
            $data =Brand::where($request->condition, $request->getData)->get();
        }else {
            $data =Serie::where($request->condition, $request->getData)->get();
        }
        return $data;
    }
    public function create_item(Request $request)
    {
        // dd($request);
        $product = new Product;
        $product->user_id = Auth::user()->id;
        $product->product_name = $request->product_name;
        $product->img_url= $request->img_url;
        $product->category_id = $request->category_id;
        $product->brand = $request->brand;
        $product->series = $request->series;
        $product->product_status = $request->product_status;
        $product->size = $request->size;
        $product->description = $request->description;
        $product->prices = $request->prices;
        $product->shipping_fees = $request->shipping_fees;
        $product->delivery_method = $request->delivery_method;
        $product->shipping_days = $request->shipping_days;
        $product->save();
        return 'success';
    }
    public function notices()
    {
        return view('mypage.notices');
    }
    public function check_items()
    {
        return view('mypage.check_items');
    }
    public function todos()
    {
        return view('mypage.todos');
    }
    public function presenteds()
    {
        return view('mypage.presenteds');
    }
    public function item_drafts()
    {
        return view('mypage.item_drafts');
    }
    public function user_keepings()
    {
        return view('mypage.user_keepings');
    }
    public function trades()
    {
        return view('mypage.trades');
    }
    public function tradings()
    {
        return view('mypage.tradings');
    }
    public function sales()
    {
        return view('mypage.sales');
    }
    public function points()
    {
        return view('mypage.points');
    }
    public function applied_points()
    {
        return view('mypage.applied_points');
    }
    public function address()
    {
        return view('mypage.address');
    }
    public function profile()
    {
        return view('mypage.profile');
    }
    public function credit_card()
    {
        return view('mypage.credit_card');
    }
    public function authenticationEdit()
    {
        return view('mypage.authentication_edit');
    }
    public function telephone()
    {
        return view('mypage.telephone');
    }
    public function address_edit(Request $request) {
        dd($request->all());
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'first_name_' => ['required', 'string', 'max:255'],
            'last_name_' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'between:0,100'],
            'post_name' => ['required', 'string', 'between:0,100'],
        ]);
        $user = User::find(Auth::id());
        $user->first_name = $request->first_name;
        $user->first_name_ = $request->first_name_;
        $user->last_name = $request->last_name;
        $user->last_name_ = $request->last_name_;
        $user->post_code = $request->post_code;
        $user->prefectures = $request->prefectures;
        $user->municipalities = $request->municipalities;
        $user->address = $request->address;
        $user->address_room = $request->address_room;
        $user->save();        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMypageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMypageRequest  $request
     * @param  \App\Models\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mypage  $mypage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
