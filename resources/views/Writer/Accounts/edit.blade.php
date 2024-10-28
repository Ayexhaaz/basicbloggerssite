@extends('layouts.masterwriter')
@section('title','EDIT')


@section('content')
<div class="container-fluid">

            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-white border-bottom">
                        <h4>Back</h4>
                    </div>
                  <div class="card-body">
                  @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
             
                    <form action="{{ url('accounts/'.$socials->id.'/edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                   
                        <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="link" value="{{$socials->link}}" placeholder="Title">
                      </div>
                    
                      </div>
                      <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" value="{{$socials->image}}" class="form-control">
                        </div>
                  
                       
                      <input type="submit" class="btn btn-success" value="Update Link">
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              @endsection