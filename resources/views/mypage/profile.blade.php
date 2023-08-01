@extends('layouts.app')

@section('container')
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-3">
            <x-Mypage.menu>
            </x-Mypage.menu>
        </div>
        <div class="col-lg-9">
            <div class="contanier">
                <div class="border rounded-3 p-2 bg-light mb-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="p-3">プロフィール</h5>
                            <form action="" method="POST" class="p-4">
                            @csrf
                                <div class="row">
                                    <div class="row d-flex flex-row" >
                                        <img src="{{ asset('img/profile_edit.png') }}" class="p-0" style="width:90px;height:90px"  alt="">
                                        <div class="col py-3">
                                            <input type="text" class="form-control ml-4" style='max-width:22em' id="" placeholder="のなか" name="のなか" value="のなか">
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <h5 class="p-3" style="border-bottom:1px solid #ddd">評価</h5>
                                        <div class="col d-flex flex-row justify-content-center mb-5">
                                            <div class="col d-flex justify-content-center">
                                                <img src="{{ asset('img/222.png') }}" style="height:25px;width:auto" alt="">
                                                <span>0</span>
                                            </div>
                                            <div class="col d-flex justify-content-center">
                                                <img src="{{ asset('img/333.png') }}" style="height:25px;width:auto" alt="">0
                                            </div>
                                            <div class="col d-flex justify-content-center">
                                                <img src="{{ asset('img/444.png') }}" style="height:25px;width:auto" alt="">0
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h5 class="mt-5" style="border-bottom: 1px solid #ddd;">自己紹介</h5>
                                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                    </div>
                                </div>
                                <button type="submit" style="background-color:blueviolet;color:white" class="mt-4 btn ">内容を保存する</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
