@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{ URL::to('/author') }}" class="btn btn-default card col-md-4" style="margin-left: 485px"><- Back</a><br>

            <div class="card">
                <div class="card-header">Add New Author !!!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{URL::to('author/add')}}" method="POST">
                        <div class="form-group">
                            {{ csrf_field() }}

                            <input type="text" name="name" class="col-md-offset-1 col-md-8 form-control" placeholder="Enter Author Name"><br>

                            <input type="submit" name="btn" class="btn btn-default col-md-4" value="Add">
                            
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
