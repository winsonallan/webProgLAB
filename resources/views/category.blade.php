@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card mb-3" style="">
        <div class="card-header" style="display: flex; flex-direction:row">
            <div>
                {{$categoryName}}
            </div>
        </div>
        <div class="" style=" width:100%;flex-direction:row; display:flex; flex-wrap: wrap;">
            {{-- Loop from here --}}
            @foreach ($products as $product)
            <div class="card card-body mt-2 mb-2" style="min-width: 18%; max-width:15%; margin-left:8px; margin-right:8px">
                <a href="/detail/{{$product->id}}" style="color: black; text-decoration: none;">
                <div class="text-truncate" style="">
                    <img src="{{asset($product->image) }}" alt="" srcset="" style="min-width: 100%; max-width:100%; min-height:75%; max-height:75%">
                    <p class="text-truncate">{{$product->name}}</p>
                    <p class="text-truncate"><b>IDR {{$product->price}}</b></p>
                </div>
                </a>
            </div>
            @endforeach

            {{-- <div class="card card-body mt-2 mb-2" style="min-width: 18%; max-width:15%; margin-left:8px; margin-right:8px">
                <div class="text-truncate" style="">
                    <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="" style="min-width: 100%; max-width:100%; min-height:75%; max-height:75%">
                    <p class="text-truncate">Item NameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeee</p>
                    <p class="text-truncate"><b>IDR [Price goes here]</b></p>
                </div>
            </div> --}}
            {{-- To here --}}
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
       {{ $products->links() }}
</div>

@endsection
