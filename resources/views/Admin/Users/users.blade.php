@extends('layouts.masterAdmin')


@section('title','Categories')



@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Users Data </h3>
              
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
                            <th>User Name</th>
                            <th>Email</th>
                          
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $users)
                          <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            
                            <td>

                            <a href="{{url('user/'.$users->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('user/'.$users->id.'/delete')}}" class="btn btn-danger">Delete</a>
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
