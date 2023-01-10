@extends('layouts.app')

@section('content')

<div class="container" style="">
    <div class="row justify-content-center">
        <div class="col-md-7" style="margin-bottom: 15px">
            <button type="button" class="btn btn-secondary" style="display:flex; vertical-align:middle; font-size: 15px; padding:5px">
                <img src="{{asset('backbutton.png')}}" style="width: 23px; margin:0; margin-right:3px" alt="" srcset="">Back
            </button>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header" style=""><b>Add Product</b></div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="name" class="col-md-4 col-form-label">Name</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="email" class="col-md-4 col-form-label">Category</label>

                            <div class="">
                                <select id="category" name="category" class="form-control form-select dropdown-toggle">
                                    <option value="" disabled selected hidden>Select a Category</option>
                                    <option value="Afghanistan">Category 1</option>
                                    <option value="Åland Islands">Category 2</option>
                                    <option value="Albania">Category 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="detail" class="col-md-4 col-form-label">Detail</label>

                            <div class="" style="width: 100%">
                                <textarea name="detail" form="" style="width: 100%; height: 200px"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="price" class="col-md-4 col-form-label">Price</label>

                            <div class="">
                                <input id="price" type="text" class="form-control" name="price">
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="photo" class="col-md-4 col-form-label">Photo</label>

                            <div class="">
                                <input id="photo" type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <button type="button" class="btn btn-outline-secondary" style="display:flex; vertical-align:middle; font-size: 16px; padding:5px; padding-left:20px; padding-right:20px">
                            Add
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
