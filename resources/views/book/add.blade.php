@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{ URL::to('/book') }}" class="btn btn-default card col-md-4" style="margin-left: 485px"><- Back</a><br>

            <div class="card">
                <div class="card-header">Add New Book !!!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{URL::to('book/add')}}" method="POST">
                        <div class="form-group">
                            {{ csrf_field() }}

                            <input type="text" name="name" class="col-md-offset-1 col-md-8 form-control" placeholder="Enter Book Name"><br>

                            <select name="a_name" class="form-control col-md-8">
                                @foreach($authors->all() as $author )
                                <option value="{{ $author->id}}" >{{$author->a_name}}</option>
                                @endforeach
                            </select><br>

                            <select name="g_name" class="form-control col-md-8">
                                @foreach($genres->all() as $gen )
                                <option value="{{ $gen->id}}" >{{$gen->g_name}}</option>
                                @endforeach
                            </select><br>

                            <select name="p_name" class="form-control col-md-8">
                                @foreach($pub->all() as $publish )
                                <option value="{{ $publish->id}}" >{{$publish->p_name}}</option>
                                @endforeach
                            </select><br>

                            <input type="text" name="price" class="form-control col-md-8" placeholder="Enter Price"><br>

                            <input type="submit" name="btn" class="btn btn-default col-md-4" value="Add">
                            
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
