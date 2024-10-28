@extends('layouts.masterAdmin')
@section('title','EDIT')


@section('content')
<div class="container-fluid">

            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-white border-bottom">
                        
                    </div>
                  <div class="card-body">
                  @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
             
                    <form action="{{ url('category/'.$categories->id.'/edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                   
                        <div class="form-group">
                        <label> Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{$categories->name}}" placeholder="Title">
                      </div>
                      
                      <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" value="{{$categories->image}}" class="form-control">
                        </div>
                  
                       
                      <input type="submit" class="btn btn-success" value="Update Category">
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              @endsection