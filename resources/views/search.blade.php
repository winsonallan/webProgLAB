@extends('layouts.app')

@section('content')

<div class="container">
    {{-- Search bar --}}
    <div class="input-group mb-3 d-flex" style="flex-direction:row ">
        <form action = "/search" method="GET" style="display: flex; width:100%">
            <input type="text" class="form-control" name="parameters" value="{{Request::query('parameters')}}">
            <div class="input-group-append">
                <button class="btn btn-secondary" type="button" style="border-radius: 0 4px 4px 0" type="submit">
                    <img src="{{asset('whitesearch.png') }}" alt="" srcset="" style="width: 16px">
                </button>
            </div>
        </form>
    </div>

    <div class="card mb-3" style="">
        <div class="card-header" style="display: flex; flex-direction:row">
            <div>
                Search Results
            </div>
        </div>
        <div class="" style=" width:100%;flex-direction:row; display:flex; flex-wrap: wrap;">
            {{-- Loop from here --}}
            @foreach ($products as $product)
            <div class="card card-body mt-2 mb-2" style="min-width: 18%; max-width:15%; margin-left:8px; margin-right:8px">
                <div class="text-truncate" style="">
                    <img src="{{$product->image }}" alt="" srcset="" style="min-width: 100%; max-width:100%;">
                    <p class="text-truncate">{{$product->name}}</p>
                    <p class="text-truncate"><b>IDR {{$product->price}}</b></p>
                </div>
            </div>
            @endforeach
            {{-- To here --}}
        </div>
    </div>
</div>

@endsection
