@extends('layouts.app')

@section('content')

<div class="container">
    {{-- Search bar --}}
    <div class="input-group mb-3">
        <input type="text" class="form-control">
        <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
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
            <div class="card card-body mt-2 mb-2" style="min-width: 20%; max-width:15%; margin-left:8px; margin-right:8px">
                <div class="text-truncate" style="">
                    <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="" style="min-width: 100%; max-width:100%; min-height:75%; max-height:75%">
                    <p class="text-truncate">Item NameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeee</p>
                    <p class="text-truncate"><b>IDR [Price goes here]</b></p>
                </div>
            </div>

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
