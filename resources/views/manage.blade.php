@extends('layouts.app')

@section('content')
<div class="container" style="width: 50%">
    {{-- Search bar & Add Product Button --}}
    <div style="display: flex; flex-direction:row; justify-content: space-between">
        <div class="input-group mb-3" style="width: 30%">
            <input type="text" class="form-control" placeholder="Product Name">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                    <img src="{{asset('whitesearch.png') }}" alt="" srcset="" style="width: 16px">
                </button>
            </div>
        </div>

        <div>
            <button class="btn btn-secondary" style="width: max-content">
                Add Product
                <img src="{{asset('whiteplus.png')}}" alt="" srcset="" style="width: 12px; margin-left:5px">
            </button>
        </div>
    </div>

    <div style="margin-bottom: 15px">
        <div class="card-body" style="background-color: white; padding: 5px; border-radius:10px; display:flex; flex-direction: row;">
            <div style="text-align:center;">
                <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="" style="width: 200px; height:200px">
            </div>
            <div style="margin-left: 5px; margin-right: 20px">
                <div style="margin-top:15px; width: auto; font-size:24px" class="">
                    <b>Product name is here and Product name is here and Product name is here and </b>
                </div>
            </div>
            <div style="margin-left:auto; margin-right:10px; display:flex; flex-direction:row">
                <a href="">
                    <img src="{{asset('pencil.png') }}" alt="" srcset="" style="width: 40px; height:40px; border: 2px solid  rgb(255, 230, 0); border-radius:10px; padding:8px; margin-top: 15px; margin-right:4px">
                </a>
                <a href="">
                    <img src="{{asset('redtrash.png') }}" alt="" srcset="" style="width: 40px; height:40px;border: 2px solid red; border-radius:10px; padding:8px; margin-top: 15px">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
