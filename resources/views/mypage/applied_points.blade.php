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
                            <h5>売り上げ管理</h5>
                            <table class="table table-light">
                                <tbody>
                                    <tr></tr>
                                    <tr>
                                        <td>売上金</td>
                                        <td>0円</td>
                                    </tr>
                                    <tr>
                                        <td>所持ポイント</td>
                                        <td>0ポイント</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="border rounded-3 p-2 bg-light mb-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>売上金でポイントを購入</h5>
                            <div class="row d-flex flex-row" style="border-top:1px solid #ddd">
                                <form action="" method="post" class="p-5">
                                    <div class="form-group p-4">
                                        <label for="usr">購入するポイント:</label>
                                        <input type="text" class="form-control" name="" id="" style="text-align: end;">
                                    </div>
                                    <!-- <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" name="password">
                                    </div> -->
                                    <button type="submit" class="btn btn-primary" style="position: absolute;right:220px">次へ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
