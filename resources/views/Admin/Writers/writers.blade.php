@extends('layouts.masterAdmin')

@section('title', 'Categories')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Writers Data</h3>
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
                                    <th>Actions</th> <!-- Added header for actions -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($writers as $writer) <!-- Changed to $writer -->
                                    <tr>
                                        <td>{{ $writer->id }}</td>
                                        <td>{{ $writer->name }}</td>
                                        <td>{{ $writer->email }}</td>
                                        <td>
                                            <a href="{{ url('writer/'.$writer->id.'/update') }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ url('writer/'.$writer->id.'/destroy') }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this writer?');"> <!-- Added form for delete action -->
                                                @csrf
                                                @method('GET') <!-- Using GET method as per your route definition -->
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
