@extends('layouts.app')
@section('add_css')
    <style>
        .card:hover{
            box-shadow: 3px 3px 10px rgba(0,0,0,0.1);
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
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-3">
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary border rounded-3">
                <div class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
                  <span class="fs-5 fw-semibold">List group</span>
                </div>
                <div class="list-group list-group-flush border-bottom scrollarea">
                  <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
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
                </div>
            </div>
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary border rounded-3">
                <div class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
                  <span class="fs-5 fw-semibold">Search from related categories</span>
                </div>
                <div class="list-group list-group-flush border-bottom scrollarea">
                  <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
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
                </div>
            </div>
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary border rounded-3">
                <div class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
                  <span class="fs-5 fw-semibold">Search by latest pack</span>
                </div>
                <div class="list-group list-group-flush border-bottom scrollarea">
                  <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
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
                </div>
            </div>
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary border rounded-3">
                <div class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
                  <span class="fs-5 fw-semibold">Ranking</span>
                </div>
                <div class="list-group list-group-flush border-bottom scrollarea">
                  <a href="#" class="list-group-item list-group-item-action py-3 lh-sm">
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
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="contanier">
                <div class="row">
                    <span class="my-3"><h5>Duel Masters mail order</h5></span>
                    <div class="col-lg-4">
                        <a href="javascript:void(0);" class="btn btn-lg btn-dark w-100">category</a>
                    </div>
                    <div class="col-lg-4">
                        <a href="javascript:void(0);" class="btn btn-lg btn-dark w-100">category</a>
                    </div>
                    <div class="col-lg-4">
                        <a href="javascript:void(0);" class="btn btn-lg btn-dark w-100">category</a>
                    </div>
                </div>
                <div class="row">
                    <span class="my-3"><h5>Popular search word ranking</h5></span>
                    <div class="row">
                        <a href="javascript:void(0);" class="btn btn-light w-auto mb-2"><i class="bi bi-search"></i> monster</a>
                        <a href="javascript:void(0);" class="btn btn-light w-auto mb-2"><i class="bi bi-search"></i> monster</a>
                        <a href="javascript:void(0);" class="btn btn-light w-auto mb-2"><i class="bi bi-search"></i> monstermonstermonstermonster</a>
                        <a href="javascript:void(0);" class="btn btn-light w-auto mb-2"><i class="bi bi-search"></i> monstermonstermonstermonster</a>
                        <a href="javascript:void(0);" class="btn btn-light w-auto mb-2"><i class="bi bi-search"></i> monstermonstermonstermonster</a>
                    </div>
                    <div class="col-lg-10"></div>
                    <div class="col-lg-2">
                        <a href="" class="btn btn-outline-success w-100">See more...</a>
                    </div>
                </div>
                <div class="row">
                    <span class="my-3"><h5>List of popular and recommended products</h5></span>
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
                </div>
                <div class="row">
                    <span class="my-3"><h5>List of popular card shop listings</h5></span>
                    <div class="col-lg-12 mb-3">
                        <div class="card mb-3" style="cursor: pointer;">
                            <a href="{{ route('user_review') }}" class="row">
                                <div class="col-lg-2">
                                    <img src="{{ asset('1.jpg') }}" alt="" height="auto" width="100%;">
                                </div>
                                <div class="col-lg-8">
                                    <span><h5 class="py-3 ps-4">card rush magi store</h5></span>
                                    <ul class="d-flex" style="list-style: none;">
                                        <li>
                                            <img src="{{ asset('Annotation 2023-07-25 221927.png') }}" alt="" width="35px" height="auto"><span>132</span>
                                        </li>
                                        <li class="px-3">
                                            <img src="{{ asset('Annotation 2023-07-25 221959.png') }}" alt="" width="35px" height="auto"><span>343</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('Annotation 2023-07-25 222035.png') }}" alt="" width="35px" height="auto"><span>393</span>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="col-lg-2 py-3">
                                    <a href="" class="btn btn-sm btn-success">Identity verified</a>
                                </div> --}}
                            </a>
                        </div>
                        <div class="row">
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
                        <div class="row">
                            <div class="col-lg-10"></div>
                            <div class="col-lg-2">
                                <button class="btn btn-outline-success w-100">See more...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('add_js')
@endsection
