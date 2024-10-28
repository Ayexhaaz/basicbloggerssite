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
             
                    <form action="{{ url('writer/'.$posts->id.'/edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                   
                        <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{$posts->title}}" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{$posts->slug}}" placeholder="AUTO GENERATED SLUG">
                      </div>
                      <div>
            <label for="category">Category</label>
            <select name="category_id" id="category" class="form-control" required>
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $posts->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
                      <div class="form-group">
                        <label>Short Description</label>
                        <input type="text" class="form-control" name="sdescription" value="{{$posts->sdescription}}" placeholder="Short Description">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4">{{$posts->description}}</textarea>
                      </div>
                      <div class="form-group">
                        <label >Status</label>
                        <select name="status" class="form-control" value="{{$posts->status}}" required>
                        <option value="draft" class="btn btn-danger">Draft</option>
                        <option value="published" class="btn btn-primary">Published</option>
                        </select>

                      </div>
                      <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file" name="image" value="{{$posts->image}}" class="form-control">
                        </div>
                  
                       
                      <input type="submit" class="btn btn-success" value="Update BLOG">
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              @endsection