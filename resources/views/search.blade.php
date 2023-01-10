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

    <div class="card mb-3" style="">
        <div class="card-header" style="display: flex; flex-direction:row">
            <div>
                Search Results
            </div>
        </div>
        <div class="" style=" width:100%;flex-direction:row; display:flex; flex-wrap: wrap; justify-content: space-between">
            {{-- Loop from here --}}
            <div class="card card-body mt-2 mb-2" style="min-width: 18%; max-width:15%; margin-left:8px; margin-right:8px">
                <div class="text-truncate" style="">
                    <img src="{{asset('sampleImage.jpg') }}" alt="" srcset="" style="min-width: 100%; max-width:100%; min-height:75%; max-height:75%">
                    <p class="text-truncate">Item NameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeeeNameeeeeeeeeeeeee</p>
                    <p class="text-truncate"><b>IDR [Price goes here]</b></p>
                </div>
            </div>
            {{-- To here --}}
        </div>
    </div>
</div>

@endsection
