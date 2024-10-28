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
             
                    <form action="{{ url('user/'.$users->id.'/edit') }}" method="POST">
                        @csrf
                        @method('PUT')
                   
                        <div class="form-group">
                        <label> User Name</label>
                        <input type="text" class="form-control" name="name" value="{{$users->name}}" placeholder="Title">
                      </div>
                      
                      <div class="form-group">
                            <label for="image">Email</label>
                            <input type="email" name="email" value="{{$users->email}}" class="form-control" placeholder="Email">
                        </div>
                  
                       
                      <input type="submit" class="btn btn-success" value="Update User">
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              @endsection