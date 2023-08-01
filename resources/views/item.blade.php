@extends('layouts.app')
@section('add_css')
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
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
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-3">
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
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="contanier">
                <div class="border bg-light p-2 rounded-3 mb-4">
                    <div class="row py-5">
                        <span><h5>Blue-Eyes White Dragon Early Ultra</h5></span>
                        <small>"Blue-Eyes White Dragon Early Ultra" is a Used Yu-Gi-Oh card exhibited by Tatsuya. Estimated shipping time is 3-4 days from Iwate Prefecture.</small>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <div class="post-slider">
                                <!-- start flexslider -->
                                <div id="post-slider" class="postslider flexslider">
                                    <ul class="slides">
                                        <li>
                                        <img src="{{ asset('1s.jpg') }}" alt="" />
                                        </li>
                                        <li>
                                        <img src="{{ asset('1s (1).jpg') }}" alt="" />
                                        </li>
                                    </ul>
                                </div>
                                <!-- end flexslider -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rounded-3 border">
                                <table class="table responsive">
                                    <tr>
                                        <th>Seller</th>
                                        <td>
                                            <a href="javaxcript:void(0);">user</a>
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Series</th>
                                        <td>dorseyquentin</td>
                                    </tr>
                                    <tr>
                                        <th>Brand</th>
                                        <td>dorseyquentin</td>
                                    </tr>
                                    <tr>
                                        <th>Series</th>
                                        <td>dorseyquentin</td>
                                    </tr>
                                    <tr>
                                        <th>Condition</th>
                                        <td>dorseyquentin</td>
                                    </tr>
                                    <tr>
                                        <th>Condition</th>
                                        <td>dorseyquentin</td>
                                    </tr>
                                    <tr>
                                        <th>Condition</th>
                                        <td>dorseyquentin</td>
                                    </tr>
                                    <tr>
                                        <th>Condition</th>
                                        <td>dorseyquentin</td>
                                    </tr>
                                </table>
                            </div>
                            <small class="mb-6">最終更新日時:約15時間前</small>
                            <div class="price py-5">
                                <span><h3 class="text-center">360,000円</h3></span>
                                <div class="text-center">
                                    <a href="javascript:void(0);" class="btn btn-lg btn-warning w-50">buy</a>
                                </div>

                            </div>
                        </div>
                        <small class="d-flex">Product ID: <h6>123</h6></small>
                    </div>
                </div>
                <div class="border rounded-3 p-2 bg-light mb-4">
                    <div class="row">
                        <div class="col-lg-7">
                            <span><h5>price trend</h5></span>
                            <div class="bd-example-snippet bd-code-snippet">
                                <div class="bd-example m-0 border-0">
                                    <nav>
                                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
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
                            <div class="p-3 border rounded-3">
                                <div class="row">
                                    <small class="text-center">Trading quotes for the last 12 months</small>
                                    <h5 class="text-center">¥58,000 - ¥510,000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <span><h5>Trading History</h5></span>
                            <table class="table table-borderless">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                            </table>
                            <a href="javascript:void(0);" class="btn btn-outline-dark w-100 rounded-5"><i class="bi bi-clock"></i>  View more...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <span><h5>Related products</h5></span>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('add_js')
<script src="{{ asset('js/flexslider.config.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
