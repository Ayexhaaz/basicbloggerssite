@extends('layouts.masterwriter')
@section('title','Create')
@section('content')



<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid px-4">
            <div class="page-header">
                <h3 class="page-title white-text">Form elements</h3>
            </div>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card" style="max-height: 90vh; overflow-y: auto;">
                        <div class="car-header">
                            <h4 class="card-title mt-3 bg-primary p-3 white-text">Enter your Social Media accounts</h4>
                        </div>
                        <div class="card-body white-text"> <!-- Apply white-text class here -->
                            @if(session('status'))
                                <div class="alert alert-success">{{ session('status') }}</div>
                            @endif

                            <form action="{{ url('/writer/accounts') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" class="form-control" name="link" placeholder="link">
                                    @error('link')<span class="text-danger">{{$message}}</span>@enderror
                                </div>


                                <div class="form-group">
                                    <label for="image">Upload Icon</label>
                                    <input type="file" name="image" class="form-control">
                                    @error('image')<span class="text-danger">{{$message}}</span>@enderror
                                    <img src="" id="image-preview" width="200px" style="margin-top: 10px; display: none; border-radius: 200px;" />
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="button" class="btn btn-dark" onclick="window.history.back();">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

