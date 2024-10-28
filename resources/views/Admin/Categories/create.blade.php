@extends('layouts.masterAdmin')
@section('title','Create')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"></h3>
              
            </div>
            <div class="row">
   
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="car-header">
                    <h4 class="card-title mt-3 bg-primary">Create New Category</h4>
                  </div>
                  <div class="card-body">
                  @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
               
                    <form action="{{ url('category/create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Title">
                        @error('name')<span class="text-danger">{{$message}}</span>@enderror
                      </div>
                      <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" class="form-control">
                            @error('image')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
@endsection
   