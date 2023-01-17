@extends('layouts.app')

@section('content')

<div class="container" style="">
    <div class="row justify-content-center">
        <div class="col-md-7" style="margin-bottom: 15px">
            <a href="/manage">
                <button type="button" class="btn btn-secondary" style="display:flex; vertical-align:middle; font-size: 15px; padding:5px">
                    <img src="{{asset('backbutton.png')}}" style="width: 23px; margin:0; margin-right:3px" alt="" srcset="">Back
                </button>
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header" style=""><b>Update Product</b></div>

                <div class="card-body">
                    <form enctype = "multipart/form-data" method="POST" action="/manage/{{$product[0]->id}}/update">
                        @method('put')
                        @csrf

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="name" class="col-md-4 col-form-label">Name</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" value="{{$product[0]->name}}">
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="email" class="col-md-4 col-form-label">Category</label>

                            <div class="">
                                <select id="category" name="category" class="form-control form-select dropdown-toggle">
                                    @foreach ($category as $cat)
                                        @if ($cat->id == $product[0]->category_id)
                                            <option value = "{{$cat->id}}" selected>{{$cat->name}}</option>
                                        @else
                                            <option value = "{{$cat->id}}">{{$cat->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="detail" class="col-md-4 col-form-label">Detail</label>

                            <div class="" style="width: 100%">
                                <textarea name="detail" class="form-control" cols="30" rows="15">{{$product[0]->detail}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="price" class="col-md-4 col-form-label">Price</label>

                            <div class="">
                                <input id="price" type="text" class="form-control" name="price" value="{{$product[0]->price}}">
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="photo" class="col-md-4 col-form-label">Photo</label>

                            <div class="">
                                <input id="photo" type="file" class="form-control" name="photo">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-secondary" style="display:flex; vertical-align:middle; font-size: 16px; padding:5px; padding-left:20px; padding-right:20px">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
