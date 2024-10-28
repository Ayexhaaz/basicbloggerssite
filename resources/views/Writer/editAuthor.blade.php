@extends('layouts.masterwriter')
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

                    <form action="{{ route('author.update', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $writer->name) }}" placeholder="User Name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="{{ old('description', $writer->description) }}" class="form-control" placeholder="Description" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload File</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-success" value="Update Writer">
                        <a href="{{ url('/writer') }}" class="btn btn-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
