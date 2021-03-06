@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('event-single') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title here">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content"
                           placeholder="Enter content here">
                </div>
                <div class="form-group">
                    <label for="content">User Email</label>
                    <input type="text" class="form-control" id="user-email" name="user-email"
                           placeholder="Enter user email here">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection