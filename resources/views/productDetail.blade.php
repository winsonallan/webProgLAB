@extends('layouts.app')

@section('content')
<div class="container justify-content-center" style="width: 75%; position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
    <div class=" justify-content-center">
        <div class="">
            <div class="card-body shadow" style="background-color: white; padding: 5px; display:flex; flex-direction: row; align-items:">
                <div style="">
                    <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="" style="width: 200px; height:200px">
                </div>
                <div style="margin-left: 5px; margin-top:5px; padding:0">
                    <div style="font-size: 20px">
                        <b>Product Name</b>
                    </div>
                    <div style="display: flex; flex-direction:row; font-size: 12px">
                        <div style="width:100px; color:darkgray;">Detail</div>
                        <div style="overflow-wrap: wrap;">This is the details </div>
                    </div>
                    <div style="display: flex; flex-direction:row; font-size: 12px">
                        <div style="width:100px; color:darkgray">Price</div>
                        <div style="overflow-wrap: wrap; ">This is the details </div>
                    </div>
                    <div style="display: flex; flex-direction:row; font-size: 12px">
                        <div style="width:100px; color:darkgray">Qty</div>
                        <div>
                            <input style="width:300px; background-color: white; border: 1px; border-color:lightgray; border-radius:5px; border-style:solid" type="text" name="qty" id="qty">
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-secondary" style="margin-top: 20px; font-size: 12px; width:72px; height:34px">Purchase</button>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
