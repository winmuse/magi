@extends('layouts.app')

@section('container')
<div class="col-lg-12">
    <div class="row d-flex justify-content-center">
        <!-- <div class="col-lg-3">
            <x-Mypage.menu>
            </x-Mypage.menu>
        </div> -->
        <div class="col-lg-9">
            <div class="contanier">
                <div class="border rounded-3 p-2 bg-light mb-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="px-5">出品画像</h5>
                            <span style="color:#838383" class="px-5">最大20枚まで登録できます</span>
                            <form action="{{url('mypage/item/newProduct')}}" method="post" class="px-5">
                                @csrf
                                <div class="row d-flex flex-row">
                                    <label class="input-group-text" style="height: 80px;cursor:pointer;text-align:center" for="inputGroupFile01">Upload</label>
                                    <input type="file" accept="image/*" class="form-control" style="visibility: hidden;" id="inputGroupFile01" onchange="preview(event)">
                                </div>
                                <div class="row d-flex flex-row flex-wrap mb-4 p-2" id="image_previews"></div>

                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">商品名</span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" id="" placeholder="最大120文字" name="product_name" value="" required>
                                    </div>
                                </div>
                                <h5 class="mt-5 mb-2">商品詳細</h5>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">カテゴリ </span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select" name="category"  id="category_select" onchange="getBrand(this.value,'brand','category_id')">
                                            <option value='0' >---</option>
                                            @foreach(App\Models\Categories::get() as $item)
                                            <option value="{{$item->id}}">{{$item->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">ブランド </span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select" name="brand" id="brand_select" onchange="getBrand(this.value,'series','brand_id')">
                                            <option value='0' >カテゴリを選択してください。</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">シリーズ</span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select" name="series" id="series_select">
                                            <option value='0' >ブランドを選択してください。</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">商品の状態 </span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select" name="product_status" id="product_status" required>
                                            <option value="">---</option>
                                            <option value="brand_new">新品</option>
                                            <option value="old">中古</option>
                                        </select>
                                        <!-- <input type="text" class="form-control" id="" placeholder="最大120文字" name="municipalities" value="" required> -->
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">サイズ </span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select" name="size" id="size" required>
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
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">商品説明</span>
                                    </div>
                                    <div class="col-8">
                                        <textarea class="form-control" name="description" placeholder="最大30000文字" rows="5" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">価格</span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                        <p style="color:#838383">100円～95,000,000円</p>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" id="prices" placeholder="入力してください" name="prices" value="" required>
                                    </div>
                                </div>
                                <h5 class="mt-5 mb-2">出品者からの配送方法</h5>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">送料</span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select" name="shipping_fees" id="shipping_fees" required>
                                            <option value="">---</option>
                                            <option value="included">送料込み</option>
                                            <option value="excluded">着払い</option>
                                            <option value="free">なし</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">配送方法</span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select" name="delivery_method" id="delivery_method" required>
                                            <option value="">---</option>
                                            <option value="included">送料込み</option>
                                            <option value="excluded">着払い</option>
                                            <option value="free">なし</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <span class="m-0 p-0">発送目安</span>
                                        <span style="color:red;font-size:12px">■必須</span>
                                    </div>
                                    <div class="col-8">
                                        <select class="form-select" name="shipping_days" id="shipping_days" required>
                                            <option value="">---</option>
                                            <option value="one_or_two">１〜２日</option>
                                            <option value="three_or_four">３〜４日</option>
                                            <option value="five_to_seven">５〜７日</option>
                                            <option value="note">その他（商品説明参照）</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col">
                                        <span class="form-check-label" for="flexCheckDefault">
                                            SNS取引出品
                                        </span>
                                    </div>
                                    <div class="col">
                                        <input class=" ml-3" style="font-size:20px" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </div> -->
                                <div class="form-check p-0">
                                    <label class="form-check-label p-2" for="exampleCheck1">SNS取引出品</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="font-size: 1.4em; margin-left: auto;">
                                </div>
                                <button type="button" id="product_save" class="btn btn-primary">確認画面へ進む</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('add_js')
<script>
    function preview(e) {
        let img = URL.createObjectURL(e.target.files[0]);
        let x = Math.floor((Math.random() * 10000) + 1);
        let image = `<div id="`+x+`" class="" style="width:20%;max-height:18em;padding:50px auto" ><img src="`+img+`" style="width:100%;height:80%" class="img-fluid" /><button type="button" style="width:100%" onclick="$('#`+x+`').remove();" class="btn btn-secondary">削除</button></div>`
        $('#image_previews').append(image);
    }
    function getBrand(getData,name,third) {
        $.ajax({
            url: "{{ url('/mypage/item/getBrand') }}",
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                getData: Number(getData),
                name:name,
                condition:third,
            },
            beforeSend: function() {
            },
            success: function(res) {
                if(name == 'brand') {
                    let option = `<option value='0' >カテゴリを選択してください。</option>`;
                    for (const item of res) {
                        console.log(item);
                        option += `<option value='`+item.id+`' >`+item.brand+`</option>`;
                    }
                    $('#brand_select').html(option);
                    option = '';
                }else{
                    let option = `<option value='0' >シリーズを選択してください。</option>`;
                    for (const item of res) {
                        console.log(item);
                        option += `<option value='`+item.id+`' >`+item.series+`</option>`;
                    }
                    $('#series_select').html(option);
                    option='';
                }

            }
        });
    }
    $('#product_save').on('click',function () {
        let images = $('#image_previews img');
        let img_url = '';
        for (const image of images) {
            img_url += image.currentSrc + ';';
        }
        let product_data = {
            img_url:img_url,
            product_name:$("input[name='product_name']").val(),
            category_id:$("#category_select").val(),
            brand:$('#brand_select').val(),
            series:$('#series_select').val(),
            product_status:$('#product_status').val(),
            size:$('#product_status').val(),
            description:$('#description').val(),
            prices:$('#prices').val(),
            shipping_fees:$('#shipping_fees').val(),
            delivery_method:$('#delivery_method').val(),
            shipping_days:$('#shipping_days').val(),
            sns:$('#exampleCheck1').checked
        }
        $.ajax({
            url: "{{ url('/mypage/item/newProduct') }}",
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: product_data,
            beforeSend: function() {
                console.log(product_data);
            },
            success: function(res) {
                console.log(res);
            }
        });
    });
</script>
@endsection
@endsection
