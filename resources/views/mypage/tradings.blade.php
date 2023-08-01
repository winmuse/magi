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
                            <span><h5>購入した商品</h5></span>
                            <div class="bd-example-snippet bd-code-snippet">
                                <div class="bd-example m-0 border-0">
                                    <nav>
                                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home2" type="button" role="tab" aria-controls="nav-home" aria-selected="true">取引中</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile2" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">取引完了</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <p>取引中の商品はありません</p>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <p>取引が終了した商品はありません</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
