@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My new post
                   
                </div>

                <div class="card-body">
                    @if (session('Success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('Success') }}
                        </div>
                    @endif

                   <form method="post" action="/addpost">
                    {{ csrf_field() }}
                    <input type="text" name="title" class="form-control" placeholder="Title"><br>
                    <textarea name="content" placeholder="your text here" class="form-control" rows="5"></textarea><br>
                    <input type="submit" value="Save" class="btn btn-default">
                    <input type="reset" value="Reset" class="btn btn-warning pull-right">
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
