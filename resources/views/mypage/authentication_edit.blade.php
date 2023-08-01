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
                            <h5 class="p-3">メール・パスワード設定</h5>
                            <form action="" method="post" class="p-4">
                                <div class="row">
                                    <div class="row d-flex flex-row mt-4">
                                        <div class="col-3">
                                            <p class="m-0 p-0">メールアドレス</p>
                                            <!-- <p style="color:red;font-size:12px">■必須</p> -->
                                        </div>
                                        <div class="col-9">
                                            <input type="email" class="form-control" id="" placeholder="半角英数字" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="row d-flex flex-row mt-4">
                                        <div class="col-3">
                                            <p class="m-0 p-0">古いパスワード</p>
                                        </div>
                                        <div class="col-9">
                                            <input type="password" class="form-control" id="" placeholder="" name="password" value="">
                                        </div>
                                    </div>
                                    <div class="row d-flex flex-row mt-4">
                                        <div class="col-3">
                                            <p class="m-0 p-0">新しいパスワード</p>
                                        </div>
                                        <div class="col-9">
                                            <input type="password" class="form-control" id="" placeholder="8文字以上" name="のなか" value="">
                                        </div>
                                    </div>
                                    <div class="row d-flex flex-row mt-4">
                                        <div class="col-3">
                                            <p class="m-0 p-0">新しいパスワード</p>
                                            <p style="color:red;font-size:12px">（確認用）</p>
                                        </div>
                                        <div class="col-9">
                                            <input type="password" class="form-control" id="" placeholder="半角英字" name="のなか" value="">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" style="background-color: #654597;color:white" class="btn">内容を保存する</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
