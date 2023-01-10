@extends('layouts.app')

@section('content')
<div class="container" style="top: 50%; transform: translateY(25%);">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header" style="text-align: center;"><b>Profile</b></div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="name" class="col-md-4 col-form-label">Name</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" readonly="readonly" value="Data goes here">
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="email" class="col-md-4 col-form-label">Email</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" readonly="readonly" value="Data goes here">
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="name" class="col-md-4 col-form-label">Gender</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" readonly="readonly" value="Data goes here">
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="name" class="col-md-4 col-form-label">Date of Birth</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name"readonly="readonly" value="Data goes here">
                            </div>
                        </div>

                        <div class="row mb-3" style="display: flex; flex-direction:column">
                            <label for="name" class="col-md-4 col-form-label">Country</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" readonly="readonly" value="Data goes here">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
