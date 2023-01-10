@extends('layouts.app')

@section('content')

<div style="margin-top: 15px"></div>

{{-- NOTE TAKUT LUPA: di sini, display datanya kan ditoggle button, buttonny ini di link ke kontenny lewat 'data-bs-target' ke id dari div nya.
As you can see data-bs-targetnya #collapseExample, sm div di bawah button punya id 'collapseExample' jg  --}}

<div class="container justify-content-center" style="margin-bottom: 15px">
    {{-- Start Loop here --}}
    <div style="text-align:center">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" style="background-color: #D1E8FF; color:#357BC2; border:0; width: 70%; padding-top:5px; padding-bottom:5px; padding-left:0; padding-right:0; height:max-content; margin-bottom:10px">
            Transaction Date: [Date of Transaction] &nbsp;&nbsp;&nbsp;&nbsp;
        </button>
    </div>
    <div class="collapse justify-content-center " id = "collapseExample" style="width: 70%; height:max-content; margin:auto; ">
        <div class=" justify-content-center">
            <div class="">
                <div class="card-body" style="background-color: white; padding: 5px; border-radius:10px; display:flex; flex-direction: row;">
                    <table style="width: 100%">
                        <tr>
                            <th style="width: 50%">Name</th>
                            <th style="width: 25%">Quantity</th>
                            <th style="width: 25%">Price</th>
                        </tr>
                        {{-- Loop starts here --}}
                        <tr>
                            <td>Item Name</td>
                            <td>Item Qty</td>
                            <td>Item Price</td>
                        </tr>
                        {{-- loop ends here --}}
                        <tr>
                            <th>Total</th>
                            <th>[x] Item(s)</th>
                            <th>IDR [x]</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- End loop here --}}
</div>
@endsection
