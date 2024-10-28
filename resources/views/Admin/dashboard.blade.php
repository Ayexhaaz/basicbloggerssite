@extends('layouts.masterAdmin')


@section('title','Admin Dashboard')
@section('content')
<div class="dashboard">
  <a href="/admin/post" class="dashboard-link posts">
    <h4>Posts</h4>
  </a>
  <a href="/admin/user" class="dashboard-link users">
    <h4>Users</h4>
  </a>
  <a href="/admin/Comment" class="dashboard-link comments">
    <h4>Comments</h4>
  </a>
  <a href="/category/admin" class="dashboard-link categories">
    <h4>Categories</h4>
  </a>
  <a href="/admin/writer" class="dashboard-link writers">
    <h4>Writers</h4>
  </a>
</div>

@endsection