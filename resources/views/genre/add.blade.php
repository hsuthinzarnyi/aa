@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{ URL::to('genre') }}" class="btn btn-default card col-md-4" style="margin-left: 485px"><- Back</a><br>

            <div class="card">
                <div class="card-header">Add Genre !!!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{URL::to('genre/add')}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="genre" placeholder="Enter Genre Name" class="form-control col-md-6"><br>
                            <input type="submit" name="btn" class="btn btn-default col-md-4" value="Add">
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
