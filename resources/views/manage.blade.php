@extends('layouts.app')

@section('content')
<div class="container" style="width: 50%">
    {{-- Search bar & Add Product Button --}}
    <div style="display: flex; flex-direction:row; justify-content: space-between">
        <div class="input-group mb-3" style="width: 30%">
            <input type="text" class="form-control" placeholder="Product Name">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button" style="border-radius: 0 4px 4px 0">
                    <img src="{{asset('whitesearch.png') }}" alt="" srcset="" style="width: 16px">
                </button>
            </div>
        </div>

        <div>
            <a href="/manage/add">
                <button class="btn btn-secondary" style="width: max-content">
                    Add Product
                    <img src="{{asset('whiteplus.png')}}" alt="" srcset="" style="width: 12px; margin-left:5px">
                </button>
            </a>
        </div>
    </div>

    <div style="margin-bottom: 15px">
        @foreach ($products as $product)
        <div class="card-body" style="background-color: white; padding: 5px; border-radius:10px; display:flex; flex-direction: row; margin-bottom:15px">
            <div style="text-align:center;">
                <img src="{{asset($product->image) }}" alt="" srcset="" style="width: 200px; height:200px">
            </div>
            <div style="margin-left: 5px; margin-right: 20px">
                <div style="margin-top:15px; width: auto; font-size:24px" class="">
                    <b>{{$product->name}}</b>
                </div>
            </div>
            <div style="margin-left:auto; margin-right:10px; display:flex; flex-direction:row">
                <a href="/manage/update/{{$product->id}}">
                    <img src="{{asset('pencil.png') }}" alt="" srcset="" style="width: 40px; height:40px; border: 2px solid  rgb(255, 230, 0); border-radius:10px; padding:8px; margin-top: 15px; margin-right:4px">
                </a>
                <a href="">
                    <img src="{{asset('redtrash.png') }}" alt="" srcset="" style="width: 40px; height:40px;border: 2px solid red; border-radius:10px; padding:8px; margin-top: 15px">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
