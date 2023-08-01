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
                            <h5 class="p-3">お客様情報</h5>
                            <form action="/mypage/address/create" method="post" class="p-4">
                                @csrf
                                <div class="row" style="border-bottom:1px solid #ddd">
                                    <div class="row d-flex flex-row">
                                        <div class="col-2">
                                            <p class="m-0 p-0">お名前</p>
                                            <p style="color:red;font-size:12px">■必須</p>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" placeholder="姓（全角）" name="first_name" value=""  required>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" id="" placeholder="名（全角）" name="first_name_" value=""  required>
                                        </div>
                                    </div>
                                    <div class="row d-flex flex-row">
                                        <div class="col-2">
                                            <p class="m-0 p-0">お名前カナ</p>
                                            <p style="color:red;font-size:12px">■必須</p>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" id="" placeholder="セイ（全角）" name="last_name" value="" required>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" id="" placeholder="メイ（全角）" name="last_name_" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="row d-flex flex-row">
                                        <div class="col-4">
                                            <p class="m-0 p-0">郵便番号</p>
                                            <p style="color:red;font-size:12px">■必須</p>
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder="ハイフンなし" name="post_code" value="" required>
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-secondary">住所自動</button>
                                        </div>
                                    </div>
                                    <div class="row d-flex flex-row">
                                        <div class="col-4">
                                            <p class="m-0 p-0">都道府県</p>
                                            <p style="color:red;font-size:12px">■必須</p>
                                        </div>
                                        <div class="col-5">
                                            <select class="form-select" name="prefectures" id="address_city_code" required>
                                                @foreach(App\Models\Prefecture::get() as $item)
                                                    <option value='{{ $item->id }}' >{{ $item->name }}</option>
                                                @endforeach                         
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row d-flex flex-row">
                                        <div class="col-4">
                                            <p class="m-0 p-0">市区町村</p>
                                            <p style="color:red;font-size:12px">■必須</p>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="" placeholder="例)中野区中野" name="municipalities" value="" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex flex-row">
                                        <div class="col-4">
                                            <p class="m-0 p-0">番地</p>
                                            <p style="color:red;font-size:12px">■必須</p>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="" required placeholder="例)5-52-15" name="address" value="">
                                        </div>
                                    </div>
                                    <div class="row d-flex flex-row">
                                        <div class="col-4">
                                            <p class="m-0 p-0">建物名・部屋番号</p>
                                            <p style="color:#838383;font-size:12px">■任意</p>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="" placeholder="例)中野ブロードウェイ2F" name="address_room" value="">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">確認画面へ進む</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
