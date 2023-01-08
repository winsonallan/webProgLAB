@extends('layouts.app')

@section('content')
<div class="container justify-content-center" style="width: 75%; position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
    <div class=" justify-content-center">
        <div class="">
            <div class="card-body shadow" style="background-color: white; padding: 5px; display:flex; flex-direction: row; align-items:center">
                <div style="text-align:center;">
                    <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="">
                </div>
                <div style="margin-left: 5px">
                    <div style="font-size: 24px"><h1><b>Product Name</h1></b></div>
                    <div style="display: flex; flex-direction:row">
                        <div style="width:100px; color:darkgray">Detail</div>
                        <div style="">This is the details</div>
                    </div>
                    <div style="display: flex; flex-direction:row">
                        <div style="width:100px; color:darkgray">Price</div>
                        <div>This is the details</div>
                    </div>
                    <div style="display: flex; flex-direction:row">
                        <div style="width:100px; color:darkgray">Qty</div>
                        <div>
                            <input style="width:300px" type="text" name="qty" id="qty">
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-secondary">Purchase</button>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
