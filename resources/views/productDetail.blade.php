@extends('layouts.app')

@section('content')
<div class="container justify-content-center" style="width: 75%; position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">
    <div class=" justify-content-center">
        <div class="">
            <div class="card-body shadow" style="background-color: white; padding: 5px; display:flex; flex-direction: row; align-items:">
                <div style="">
                    <img src="{{asset($products[0]->image) }}" alt="" srcset="" style="width: 200px; height:200px">
                </div>
                <div style="margin-left: 5px; margin-top:5px; padding:0">
                    <div style="font-size: 20px; font-family: Arial, Helvetica, sans-serif">
                        <b>{{$products[0]->name}}</b>
                    </div>

                    <div>
                        <table style="display: flex; font-family: Arial, Helvetica, sans-serif; font-size:12px">
                            <tr>
                                <th style="width: 100px; color:gray; vertical-align: top">Detail</th>
                                <td style="">{{$products[0]->detail}}</td>
                            </tr>
                            <tr>
                                <th style="width: 100px; color:gray; vertical-align: top">Price</th>
                                <td>IDR {{$products[0]->price}}</td>
                            </tr>
                            @auth
                                @if (Auth::user()->userType_id == '2')
                                <form action="" method="POST">
                                    <tr>
                                        <th style="width: 100px; color:gray; vertical-align: top">Qty</th>
                                        <td style="">
                                            <input style="width:30vw; background-color: white; border: 1px; border-color:lightgray; border-radius:5px; border-style:solid" type="text" name="qty" id="qty">
                                        </td>
                                    </tr>
                                    </div>
                                    @auth
                                        @if (Auth::user()->userType_id == 2)
                                            <button type="submit" class="btn btn-outline-secondary" style="margin-top: 20px; font-size: 12px; width:72px; height:34px">Purchase</button>
                                        @endif
                                    @endauth
                                    </div>
                                </form>
                                @endif
                            @endauth
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
