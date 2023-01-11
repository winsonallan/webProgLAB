@extends('layouts.app')

@section('content')

<div class="container">
    {{-- Search bar --}}
    <div class="input-group mb-3">
        <input type="text" class="form-control">
        <div class="input-group-append">
            <button class="btn btn-secondary" type="button" style="border-radius: 0 4px 4px 0">
                <img src="{{asset('whitesearch.png') }}" alt="" srcset="" style="width: 16px">
            </button>
        </div>
    </div>

    {{-- Beauty --}}
    <div class="card mb-3" style="">
        <div class="card-header" style="display: flex; flex-direction:row">
            <div>
                Beauty
            </div>
            <div style="margin-left: 10px; color:steelblue">
                <a href="" style="text-decoration: none">View All</a>
            </div>
        </div>
        <div class="d-flex flex-row flex-nowrap;" style="overflow-x: scroll; width:100%;">
            {{-- Loop from here --}}
            <div class="card card-body mt-2 mb-2" style="min-width: 20%; max-width:15%; margin-left:8px; margin-right:8px">
                <div class="text-truncate" style="">
                    <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="" style="min-width: 100%; max-width:100%; min-height:75%; max-height:75%">
                    <p class="text-truncate">Item NameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeee</p>
                    <p class="text-truncate"><b>IDR [Price goes here]</b></p>
                </div>
            </div>
            {{-- To here --}}
        </div>
    </div>

    {{-- Electronics --}}
    <div class="card mb-3" style="">
        <div class="card-header" style="display: flex; flex-direction:row">
            <div>
                Electronics
            </div>
            <div style="margin-left: 10px; color:steelblue">
                <a href="" style="text-decoration: none">View All</a>
            </div>
        </div>
        <div class="d-flex flex-row flex-nowrap;" style="overflow-x: scroll; width:100%">
            <div class="card card-body mt-2 mb-2" style="min-width: 20%; max-width:15%; margin-left:8px; margin-right:8px">
                <div class="text-truncate" style="">
                    <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="" style="min-width: 100%; max-width:100%; min-height:75%; max-height:75%">
                    <p class="text-truncate">Item NameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeee</p>
                    <p class="text-truncate"><b>IDR [Price goes here]</b></p>
                </div>
            </div>
        </div>
    </div>

    {{-- Books --}}
    <div class="card mb-3" style="">
        <div class="card-header" style="display: flex; flex-direction:row">
            <div>
                Books
            </div>
            <div style="margin-left: 10px; color:steelblue">
                <a href="" style="text-decoration: none">View All</a>
            </div>
        </div>
        <div class="d-flex flex-row flex-nowrap;" style="overflow-x: scroll; width:100%">
            <div class="card card-body mt-2 mb-2" style="min-width: 20%; max-width:15%; margin-left:8px; margin-right:8px">
                <div class="text-truncate" style="">
                    <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="" style="min-width: 100%; max-width:100%; min-height:75%; max-height:75%">
                    <p class="text-truncate">Item NameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeee</p>
                    <p class="text-truncate"><b>IDR [Price goes here]</b></p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
