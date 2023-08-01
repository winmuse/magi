@extends('layouts.app')
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
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-3">
            <div class="mb-3">
                <h5 class="py-1">詳細検索</h5>
                <form class="shadow-sm custom-form justify-content-center border rounded-3 bg-light p-2">
                    <div class="mb-3">
                        <label for="" class="form-label">キーワード</label>
                        <input type="text" class="form-control" placeholder="入力してください">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">カテゴリ</label>
                        <input type="button" style="text-align: start;" class="form-control align-left" id="category_modal" value="---">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">サイズ</label>
                        <select class="form-select form-select-md" aria-label=".form-select-md example">
                        <option value="">---</option> <option value="23cm">
                            23cm
                            </option><option value="23.5cm">
                            23.5cm
                            </option><option value="24cm">
                            24cm
                            </option><option value="24.5cm">
                            24.5cm
                            </option><option value="25cm">
                            25cm
                            </option><option value="25.5cm">
                            25.5cm
                            </option><option value="26cm">
                            26cm
                            </option><option value="26.5cm">
                            26.5cm
                            </option><option value="27cm">
                            27cm
                            </option><option value="27.5cm">
                            27.5cm
                            </option><option value="28cm">
                            28cm
                            </option><option value="28.5cm">
                            28.5cm
                            </option><option value="29cm">
                            29cm
                            </option><option value="29.5cm">
                            29.5cm
                            </option><option value="30cm">
                            30cm
                            </option><option value="30.5cm">
                            30.5cm
                            </option><option value="31cm">
                            31cm
                            </option><option value="31.5cm">
                            31.5cm
                            </option><option value="32cm">
                            32cm
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">カテゴリ</label>
                        <div class="row flex-row justify-content-start p-2">
                            <input type="number" class="col-6 form-control custom-input" id="category_modal" placeholder="min" value="">
                            <span class="col-2">~</span>
                            <input type="number" class="col-6 form-control custom-input" id="category_modal" placeholder="min" value="">

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">商品の状態</label>
                        <select class="form-select form-select-md" aria-label=".form-select-md example">
                            <option value=""></option>
                            <option value="">新品</option>
                            <option value="">中古</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">出品状況</label>
                        <select class="form-select form-select-md" aria-label=".form-select-md example">
                            <option value=""></option>
                            <option value="">出品中</option>
                            <option value=""> SOLD OUT</option>
                        </select>
                    </div>
                    <div class="form-check p-0">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" style="font-size: 1.4em; margin-left: auto;">
                        <label class="form-check-label p-2" for="exampleCheck1">商品説明を含める</label>
                    </div>
                    <div class="form-check p-0">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2" style="font-size: 1.4em; margin-left: auto;">
                        <label class="form-check-label p-2" for="exampleCheck2">オリパ・福袋を含める</label>
                    </div>
                    <div class="row flex-column justify-content-center align-items-center">
                        <button type="submit" class="btn btn-danger col-8 mb-2" style="color: white;">検索する</button>
                        <button type="reset" class="btn col-8 mb-2" style="background-color: #372441;color:white">リセット</button>

                    </div>
                </form>
            </div>
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary rounded-3 border">
                <div class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
                    <span class="fs-5 fw-semibold">List group</span>
                </div>
                <div class="list-group list-group-flush border-bottom scrollarea">
                    <a href="{{ route('series') }}" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span class="mb-1">List group item heading</span>
                            <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span class="mb-1">List group item heading</span>
                            <small class="text-body-secondary"><i class="bi bi-chevron-right"></i></small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span class="mb-1">List group item heading</span>
                            <small class="text-body-secondary"><i class="bi bi-chevron-right"></i></small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span class="mb-1">List group item heading</span>
                            <small class="text-body-secondary"><i class="bi bi-chevron-right"></i></small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span class="mb-1">List group item heading</span>
                            <small class="text-body-secondary"><i class="bi bi-chevron-right"></i></small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span class="mb-1">List group item heading</span>
                            <small class="text-body-secondary"><i class="bi bi-chevron-right"></i></small>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <span class="mb-1">List group item heading</span>
                            <small class="text-body-secondary"><i class="bi bi-chevron-right"></i></small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="mb-3"><h5>Category</h5></div>
            <div class="row">
                <a href="{{ route('item') }}" class="col-lg-3 mb-3">
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
                </a>
                <div class="col-lg-3 mb-3">
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
                <div class="col-lg-3 mb-3">
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
                <div class="col-lg-3 mb-3">
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
                <div class="col-lg-3 mb-3">
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
                <div class="col-lg-3 mb-3">
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
    </div>
</div>
@endsection
