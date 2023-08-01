@extends('layouts.app')
@section('add_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">
    <link rel="stylesheet" id="roboto-subset.css-css" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5" type="text/css" media="all">
    <style>
        .img_size{
            margin: 0 24px;
        }
        .radius{
            border-radius: 10px;
        }
        .full_width{
            width: 100%;
        }
    </style>
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
<div class="bg-dark text-secondary text-center mb-3 radius">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Dark color hero</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom button</button>
        </div>
      </div>
    </div>
</div>
<div class="img_size mb-3">
    <img src="{{ asset('qwe.jpg') }}" alt="" class="full_width">
</div>
<div class="album py-5 bg-body-tertiary border rounded-3 p-3">
    <div class="row">
        <h4 class="mb-3">ピックアップカテゴリ</h4>
        <div class="col-lg-12">
            <div class="row">
                @foreach($categories as $data)
                <div class="col-lg-2 mb-3">
                    <div class="bg-image hover-zoom">
                        <a href="{{ route('category_title', $data['id']) }}"><img src="{{ asset($data['img_url']) }}" alt="" width="100%" height="auto"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <h4 class="mb-3">qweqwe</h4>
        <div class="col-lg-12">
            <div class="row">
                <a href="{{ route('product') }}" class="col-lg-2 mb-3">
                    <div class="card" style="cursor: pointer;">
                        <div class="card-header">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" src="{{ asset('1247.png') }}">
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
            </div>
        </div>
    </div>
</div>
@endsection
