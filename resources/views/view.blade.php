@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit post
                   
                </div>

                <div class="card-body">
                    @if (session('Success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('Success') }}
                        </div>
                    @endif

                   <form method="post" action="/saveEdit">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$post->id}}" name="id">
                    <input type="text" name="title" class="form-control" value="{{$post->title }}"><br>
                    <textarea name="content" placeholder="your text here" class="form-control" rows="5">{{ $post->content}}</textarea><br>
                    <input type="submit" value="Save" class="btn btn-default">
                    <input type="reset" value="Reset" class="btn btn-warning pull-right">
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
