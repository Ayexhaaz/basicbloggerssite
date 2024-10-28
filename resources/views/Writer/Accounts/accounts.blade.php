@extends('layouts.masterwriter')


@section('title','Posts')



@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Social Media Accounts </h3>
              
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-header"  >
                  <a href="{{url('writer/accounts')}}" class="btn btn-primary">+ADD NEW Account</a>
                </div>
                @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th>#</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th>Writer ID</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($socials as $socials)
                          <tr>
                            <td>{{$socials->id}}</td>
                            <td>{{$socials->link}}</td>
                            <td><img src="{{asset('images/socials/'.$socials->image)}}" style="width:70px;height:70px;" alt="Image"></td>
                           
                           
                              <td>{{$socials->writer_id}}</td>

                              <td>
                            <a href="{{url('accounts/'.$socials->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('accounts/'.$socials->id.'/delete')}}" class="btn btn-danger">Delete</a>
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
