@extends('layouts.masterAdmin')


@section('title','Posts')



@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Comments </h3>
              
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
                            <th>Parent Id</th>
                            <th>Post Id</th>
                            <th>User Id</th>
                            <th>Body</th>
                         
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comments)
                          <tr>
                            <td>{{$comments->id}}</td>
                            <td>{{$comments->parent_id}}</td>
                            <td>{{$comments->post_id}}</td>
                            <td>{{$comments->user_id}}</td>
                            <td>{{$comments->body}}</td>
                         
                            <td>
                             <a href="{{route('comments.delete',$comments->id)}}" class="btn btn-danger">Delete</a
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