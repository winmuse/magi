@extends('layouts.app')
@section('add_css')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection
@section('container')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
      <li class="breadcrumb-item">
        <a class="link-body-emphasis" href="#">
            <i class="bi bi-house-door-fill"></i>
          <span class="visually-hidden">Home</span>
        </a>
      </li>
      <li class="breadcrumb-item">
        <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">Library</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Data
      </li>
    </ol>
</nav>
<div class="border bg-light rounded-3 mb-4">
    <div class="col-lg-12">
        <div class="row p-3 mb-4">
            <div class="col-lg-6">
                <h5>Travis Scott × Nike Air Jordan 1 Hi Og Ts Sp Sail/Dark Mocha-University Red/Black</h5>
                <small>トラヴィス・スコット × ナイキ エアジョーダン 1 ハイ Og Ts Sp セイル/ダークモカユニバーシティレッド/ブラック</small>
                <img src="{{ asset('_0013_149.png') }}" alt="" height="auto" width="100%">
                <table class="table">
                    <tbody>
                      <tr>
                        <td>発売日</td>
                        <td>2019/05/11</td>
                      </tr>
                      <tr>
                        <td>定価</td>
                        <td>¥17,280</td>
                      </tr>
                      <tr>
                        <td>スタイルコード</td>
                        <td>CD4487-100</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="col-lg-6 py-5">
                <div class="border rounded-3 p-3 mb-4">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <h4 class="float-start">新品</h4>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="float-end">¥198,000~</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <a href="javascript:void(0);" class="btn w-100 btn-warning btn-lg"><i class="bi bi-cart3"></i>&nbsp;&nbsp;購入する</a>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <div class="border rounded-3 p-3">
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <h4 class="float-start">中古</h4>
                        </div>
                        <div class="col-lg-6">
                            <h2 class="float-end">¥213,640~</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <a href="javascript:void(0);" class="btn w-100 btn-warning btn-lg"><i class="bi bi-cart3"></i>&nbsp;&nbsp;購入する</a>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <a href="" class="btn btn-lg btn-success w-100">この商品を出品する</a>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border bg-light rounded-3 mb-4">
    <div class="col-lg-12">
        <div class="row p-3">
            <div class="col-lg-7">
                <span><h5>価格動向</h5></span>
                <div class="bd-example-snippet bd-code-snippet">
                    <div class="bd-example m-0 border-0">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">全期間</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">1週間</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">1ヶ月</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <p>This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="p-3 border rounded-3 col-lg-5">
                        <div class="row">
                            <small class="text-center">過去12ヶ月間の取引相場</small>
                            <h5 class="text-center">￥200,349 - ￥200,349</h5>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="p-3 border rounded-3 col-lg-5">
                        <div class="row">
                            <small class="text-center">全期間の平均取引額</small>
                            <h5 class="text-center">￥200,349</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row mb-3">
                    <div class="col-lg-6"><h5 class="float-start">取引履歴</h5></div>
                    <div class="col-lg-6"><h5 class="float-end">新品の取引のみ</h5></div>
                </div>
                <table class="table table-borderless">
                    <tbody>
                      <tr>
                        <td>日時</td>
                        <td>金額</td>
                        <td>サイズ/個数</td>
                      </tr>
                      <tr>
                        <td><i class="bi bi-clock"></i>&nbsp;1ヶ月以上前</td>
                        <td>￥200,349</td>
                        <td>27.5cm</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <span><h5>トラヴィス・スコット × ナイキ エアジョーダン 1 ハイ Og Ts Sp セイル/ダークモカユニバーシティレッド/ブラックの新品出品一覧</h5></span>
    <div class="row">
        <div class="col-lg-2 mb-3">
            <div class="card" style="cursor: pointer;">
                <div class="card-header">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" src="{{ asset('1s (1).jpg') }}">
                </div>
                <div class="card-body" style="max-height: 150px;">
                    <p class="card-text">text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <span><h4>123$</h4></span>
                    <small class="text-body-secondary">inventory:3</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-3">
            <div class="card" style="cursor: pointer;">
                <div class="card-header">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" src="{{ asset('1s (1).jpg') }}">
                </div>
                <div class="card-body" style="max-height: 150px;">
                    <p class="card-text">text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <span><h4>123$</h4></span>
                    <small class="text-body-secondary">inventory:3</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-3">
            <div class="card" style="cursor: pointer;">
                <div class="card-header">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" src="{{ asset('1s (1).jpg') }}">
                </div>
                <div class="card-body" style="max-height: 150px;">
                    <p class="card-text">text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <span><h4>123$</h4></span>
                    <small class="text-body-secondary">inventory:3</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-3">
            <div class="card" style="cursor: pointer;">
                <div class="card-header">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" src="{{ asset('1s (1).jpg') }}">
                </div>
                <div class="card-body" style="max-height: 150px;">
                    <p class="card-text">text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <span><h4>123$</h4></span>
                    <small class="text-body-secondary">inventory:3</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-3">
            <div class="card" style="cursor: pointer;">
                <div class="card-header">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" src="{{ asset('1s (1).jpg') }}">
                </div>
                <div class="card-body" style="max-height: 150px;">
                    <p class="card-text">text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <span><h4>123$</h4></span>
                    <small class="text-body-secondary">inventory:3</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-3">
            <div class="card" style="cursor: pointer;">
                <div class="card-header">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" src="{{ asset('1s (1).jpg') }}">
                </div>
                <div class="card-body" style="max-height: 150px;">
                    <p class="card-text">text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <span><h4>123$</h4></span>
                    <small class="text-body-secondary">inventory:3</small>
                </div>
            </div>
        </div>
        <div class="col-lg-2 mb-3">
            <div class="card" style="cursor: pointer;">
                <div class="card-header">
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" src="{{ asset('1s (1).jpg') }}">
                </div>
                <div class="card-body" style="max-height: 150px;">
                    <p class="card-text">text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <span><h4>123$</h4></span>
                    <small class="text-body-secondary">inventory:3</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('add_js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
