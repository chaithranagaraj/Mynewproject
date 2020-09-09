@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My post
                    <a href="/newpost"   rel='stylesheet' type='text/css' class="btn btn-primary btn-bg pull-right">
                        <span class="glyphicon glyphicon-plus"></span>
                    </a>
                </div>

                <div class="card-body">
                    @if (session('Success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('Success') }}
                        </div>
                    @endif

                   <ul class="list-group">
                    @foreach($posts as $post)
                       <li class="list-group-item">
                         {{ $post->title}}
                        <div class="btn-group pull-right">
                           <a href="{{$post->id}}/delete" class="btn btn-sm btn-danger ">Delete</a>
                           <a href="{{$post->id}}/view" class="btn btn-sm btn-success ">Edit/iew</a>
                           <a href="{{$post->id}}/view" class="btn btn-sm btn-success ">test</a>
                         </div>
                       </li>
                    @endforeach
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
