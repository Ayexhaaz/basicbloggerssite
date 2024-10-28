@extends('layouts.masterAdmin')


@section('title','Categories')



@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add new Category </h3>
              
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-header"  >
                  <a href="{{url('category/create')}}" class="btn btn-primary">+ADD NEW Category</a>
                </div>
                @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th>#</th>
                            <th>Category Name</th>
                            <th>Image</th>
                          
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $categories)
                          <tr>
                            <td>{{$categories->id}}</td>
                            <td>{{$categories->name}}</td>
                       
                            <td><img src="{{asset('images/blogs/'.$categories->image)}}" style="width:70px;height:70px;" alt="Image"></td>
                            
                            <td>

                            <a href="{{url('category/'.$categories->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('category/'.$categories->id.'/delete')}}" class="btn btn-danger">Delete</a>
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
