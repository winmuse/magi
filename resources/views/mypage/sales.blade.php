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
                        <h5>売上管理</h5>
                        <div class="col-lg-12">
                            <table class="table table-light">
                                <tbody>
                                    <tr>
                                        <td>売上金</td>
                                        <td>0円</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>口座設定</td>
                                        <td>振込先の口座が設定されていません</td>
                                        <td><a href="" class="btn btn-warning">口座を設定する</a></td>
                                    </tr>
                                    <tr>
                                        <td>振り込み申請</td>
                                        <td>売上金を指定の口座に振り込みます</td>
                                        <td><a href="" class="btn btn-warning">振り込み申請する</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="border rounded-3 p-2 bg-light mb-4">
                    <div class="row">
                        <p>売上金履歴</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
