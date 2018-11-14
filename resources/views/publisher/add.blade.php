@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{ URL::to('publisher') }}" class="btn btn-default card col-md-4" style="margin-left: 485px"><- Back</a><br>

            <div class="card">
                <div class="card-header">Publisher List !!!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form action="{{URL::to('publisher/add')}}" method="POST">
                   		<div class="form-group">
                   			{{ csrf_field() }}
                   			<input type="text" name="name" class="form-control col-md-8" placeholder="Enter Publisher Name"><br>
                   			<input type="submit" name="btn" class="btn btn-default col-md-4" value="Save">
                   		</div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
