@extends('layouts.masterAdmin')
@section('title', 'EDIT')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header bg-white border-bottom"></div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('writer/'.$writer->id.'/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $writer->name }}" placeholder="User Name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ $writer->email }}" class="form-control" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control">{{ $writer->description ?? '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Profile Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-success" value="Update Writer">
                        <a href="{{ url('admin/writer') }}" class="btn btn-dark">Cancel</a> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
