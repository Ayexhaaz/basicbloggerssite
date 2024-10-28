@extends('layouts.masterAdmin')
@section('title','EDIT')


@section('content')
<div class="container-fluid">

            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header bg-white border-bottom">
                        <h4>Update Status</h4>
                    </div>
                  <div class="card-body">
                  @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
             
                    <form action="{{ url('admin/'.$posts->id.'/status') }}" method="POST">
                        @csrf
                        @method('PUT')
                   
                      <div class="form-group">
                        <label >Status</label>
                        <select name="status" class="form-control" value="{{$posts->status}}" required>
                        <option value="draft" {{ $posts->status === 'draft' ? 'selected' : '' }} class="btn btn-danger">Draft</option>
                        <option value="published" {{ $posts->status === 'published' ? 'selected' : '' }} class="btn btn-primary">Published</option>
                        <option value="canceled" {{ $posts->status === 'canceled' ? 'selected' : '' }} class="btn btn-primary">Canceled</option>
                   

                        </select>

                       
                      <input type="submit" class="btn btn-success" value="Update Status">
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              @endsection