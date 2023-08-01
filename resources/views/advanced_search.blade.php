@extends('layouts.app')
@section('add_css')
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
@endsection
@section('container')
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-3">
            <h5 class="py-1">詳細検索</h5>
            <form class="shadow-sm custom-form justify-content-center border rounded-3 bg-light p-2" method="POST" action="{{ route('search') }}">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">キーワード</label>
                    <input type="text" class="form-control" placeholder="入力してください" id="keyword" name="keyword">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">カテゴリ</label>
                    {{-- <input type="button" style="text-align: start;" class="form-control align-left" id="category" name="category" value="---"> --}}
                    <select class="form-select form-select-md" aria-label=".form-select-md example" name="category" id="category">
                        <option value="0">qwe</option>
                        @foreach(App\Models\Categories::get() as $item)
                        <option value="{{ $item['id'] }}">{{ $item['category_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">ブランド</label>
                    {{-- <input type="button" style="text-align: start;" class="form-control align-left" id="brand" name="brand" value="---"> --}}
                    <select class="form-select form-select-md" aria-label=".form-select-md example" name="brand" id="brand">
                        <option value="0">asd</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">シリーズ</label>
                    {{-- <input type="button" style="text-align: start;" class="form-control align-left" id="series" name="series" value="---"> --}}
                    <select class="form-select form-select-md" aria-label=".form-select-md example" name="series" id="series">
                        <option value="0">asd</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">サイズ</label>
                    <select class="form-select form-select-md" aria-label=".form-select-md example" id="size" name="size">
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
                    <label for="" class="form-label">価格</label>
                    <div class="row flex-row justify-content-start p-2">
                        <input type="number" class="form-control custom-input float-start" id="category_modal" placeholder="max" value="">
                        <span class="">~</span>
                        <input type="number" class="form-control custom-input float-end" id="category_modal" placeholder="min" value="">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">商品の状態</label>
                    <select class="form-select form-select-md" aria-label=".form-select-md example" id="product_status" name="product_status">
                        <option value="0">新品</option>
                        <option value="1">中古</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">出品状況</label>
                    <select class="form-select form-select-md" aria-label=".form-select-md example" id="exhibition_status" name="exhibition_status">
                        <option value="0">出品中</option>
                        <option value="1"> SOLD OUT</option>
                    </select>
                </div>
                <div class="form-check p-0">
                    <input type="checkbox" class="form-check-input" id="ipd" name="ipd" style="font-size: 1.4em; margin-left: auto;">
                    <label class="form-check-label p-2" for="exampleCheck1">商品説明を含める</label>
                </div>
                <div class="form-check p-0">
                    <input type="checkbox" class="form-check-input" id="ioalb" name="ioalb" style="font-size: 1.4em; margin-left: auto;">
                    <label class="form-check-label p-2" for="exampleCheck2">オリパ・福袋を含める</label>
                </div>
                <div class="row flex-column justify-content-center align-items-center">
                    <button type="submit" class="btn btn-danger col-8 mb-2" style="color: white;">検索する</button>
                    <button type="reset" class="btn col-8 mb-2" style="background-color: #372441;color:white">リセット</button>
                </div>
            </form>
        </div>
        <div class="col-lg-9">
            <div class="row mb-2">
                <div class="col-lg-2">
                    <form method="POST" action="{{ route('order') }}" id="product">
                        @csrf
                        <select class="form-select form-select-md" aria-label=".form-select-md example" id="product_order" name="selected_value">
                            <option value="0">新しい順</option>
                            <option value="1">価格の安い順</option>
                            <option value="2">価格の高い順</option>
                            <option value="3">お気に入りの多い順</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="row" id="order">
                @foreach($datas as $data)
                <div class="col-lg-3 mb-3">
                    <div class="card bg-light" style="cursor: pointer;">
                        <div class="card-header product_item">
                            <span class="label onsale">認定出品者</span>
                            <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" src="{{ asset($data['img_url']) }}">
                        </div>
                        <div class="product_details">
                            <p class="card-text">{{ $data['description'] }}</p>
                        </div>
                        <div class="card-footer">
                            <small>¥ {{ $data['prices'] }}</small>
                            <div class="float-end">
                                <img src="{{ asset('star.png') }}" alt="star" width="23px">&nbsp;{{ $data['favorite'] }}
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <nav aria-label="Standard pagination example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4"></div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('add_js')
    <script>
        $("#product_order").on('change', function(){
            $("#product").submit();
        });

        $("#category").on('change', function(){
            $.ajax({
					url: "{{ route('get_brand') }}",
					type: "post",
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
					},
					data: {
						id: $(this).val()
					},
					success: function (res) {
                        console.log("success");
					}
				});
        });
    </script>
@endsection
