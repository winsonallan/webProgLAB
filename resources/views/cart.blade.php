@extends('layouts.app')

@section('content')
<div class="container justify-content-center" style="width: 40%; height:max-content; margin-bottom:15px; ">
    <div class=" justify-content-center">
        <div class="">
            <div class="card-body" style="background-color: white; padding: 5px; border-radius:10px; display:flex; flex-direction: row;">
                <div style="text-align:center;">
                    <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="" style="width: 200px; height:200px">
                </div>
                <div style="margin-left: 5px; overflow: hidden; white-space:nowrap; margin-right: 20px">
                    <div style="margin-top:15px; width: auto; font-size:24px" class="text-truncate">
                        <b>Product Nameeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</b>
                    </div>
                    <div style="display: flex; flex-direction:row; margin-top: 5px; font-size: 16px">
                        <div style="width:100px;">Quantity</div>
                        <div style="">This is the quantity</div>
                    </div>
                    <div style="display: flex; flex-direction:row; margin-top: 15px; font-size: 16px">
                        <div style="width:100px;">Total Price</div>
                        <div>IDR This is the price</div>
                    </div>

                </div>
                <div style="margin-left:auto; margin-right:10px">
                    <img src="{{asset('redtrash.png') }}" alt="" srcset="" style="width: 40px;  border: 2px solid red; border-radius:10px; padding:8px; margin-top: 15px">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- \/ Biar kalau isi cart nya banyak, container terakhir bs tetap kelihatan kontennya --}}
<div style="height: 50px"></div>

<footer style="position: fixed; bottom:0; width:100%; margin:0px; padding:0%;">
    <div style="width:100%; background-color: white; display:flex; flex-direction:row; justify-content:center; shadow">
        <p style="padding:0.5%; font-size:20px; margin-right:40px; margin-top:5px; margin-bottom:5px">Total Price: IDR The price goes here</p>
        <button type="button" class="btn btn-outline-success" style=" margin:0.5%; vertical-align:middle; font-size: 16px; height:40px">
            Purchase
        </button>
    </div>
</footer>
@endsection
