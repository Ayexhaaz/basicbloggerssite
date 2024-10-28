@extends('layouts.masterAdmin')


@section('title','Posts')



@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> BLOGS LIST </h3>
              
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                
                @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Short Description</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Writer</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $posts)
                          <tr>
                            <td>{{$posts->id}}</td>
                            <td>{{$posts->title}}</td>
                            <td>{{$posts->slug}}</td>
                            <td>{{$posts->sdescription}}</td>
                            <td>{!!$posts->description!!}</td>
                            <td><img src="{{asset('images/blogs/'.$posts->image)}}" style="width:70px;height:70px;" alt="Image"></td>
                            <td><label class="badge badge-danger">{{$posts->status}}</label></td>
                            <td>{{$posts->writer->name ?? ''}}</td>
                            <td>

                            <a href="{{url('admin/'.$posts->id.'/status')}}" class="btn btn-primary">Status</a>
                            <a href="{{url('admin/'.$posts->id.'/delete')}}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
  

   @endsection