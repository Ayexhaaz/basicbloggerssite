@extends('layouts.masterwriter')
@section('title','Create')
@section('content')



<div class="main-panel">
    <div class="content-wrapper">
        <div class="container-fluid px-4">
            <div class="page-header">
                <h3 class="page-title white-text">Form elements</h3>
            </div>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card" style="max-height: 90vh; overflow-y: auto;">
                        <div class="car-header">
                            <h4 class="card-title mt-3 bg-primary p-3 white-text">Create YOUR BLOG</h4>
                        </div>
                        <div class="card-body white-text"> <!-- Apply white-text class here -->
                            @if(session('status'))
                                <div class="alert alert-success">{{ session('status') }}</div>
                            @endif

                            <form action="{{ url('writer/create') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title" id="title-input" oninput="generateSlug()">
                                    @error('title')<span class="text-danger">{{$message}}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" class="form-control" name="slug" placeholder="AUTO GENERATED SLUG" style="color:black;" id="slug-input" readonly>
                                    @error('slug')<span class="text-danger">{{$message}}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')<span class="text-danger">{{$message}}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>Short Description</label>
                                    <input type="text" class="form-control" name="sdescription" placeholder="Short Description">
                                    @error('sdescription')<span class="text-danger">{{$message}}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control summernote" name="description" rows="4"></textarea>
                                    @error('description')<span class="text-danger">{{$message}}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="draft" class="btn btn-danger">Draft</option>
                                        <option value="published" class="btn btn-primary">Published</option>
                                    </select>
                                    @error('status')<span class="text-danger">{{$message}}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input type="file" name="image" class="form-control" id="image-input">
                                    @error('image')<span class="text-danger">{{$message}}</span>@enderror
                                    <img src="" id="image-preview" width="200px" style="margin-top: 10px; display: none; border-radius: 200px;" />
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="button" class="btn btn-dark" onclick="window.history.back();">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script type="text/javascript">
// Function to generate slug from title
function generateSlug() {
    let title = document.getElementById('title-input').value;
    let slug = title
        .toLowerCase()
        .replace(/[^a-z0-9 -]/g, '')  // Remove special characters
        .replace(/\s+/g, '-')          // Replace spaces with hyphens
        .replace(/-+/g, '-');          // Replace multiple hyphens with a single hyphen
    document.getElementById('slug-input').value = slug;
}

$(document).ready(function() {
    // Initialize Summernote editor
    $('.summernote').summernote({
        height: 200,
        tabsize: 2,
        placeholder: 'Write your blog description here...',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    // Preview the selected image
    $('#image-input').change(function(e) {
        let reader = new FileReader();
        reader.onload = function(e) {
            $('#image-preview').attr('src', e.target.result).show();
        };
        reader.readAsDataURL(this.files[0]);
    });
});
</script>
@endpush
