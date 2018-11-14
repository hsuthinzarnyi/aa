@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{ URL::to('author/add') }}" class="btn btn-default card col-md-4" style="margin-left: 485px">+ Add New Author</a><br>

            <div class="card">
                <div class="card-header">Author List !!!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Author Name</th>
                                <th>Operation</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1 ?>
                            @foreach($author->all() as $auth)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $auth->a_name }}</td>
                                <td>
                                    <a href="{{URL::to("author/edit/{$auth->id}")}}">Edit</a>
                                    <a href="{{URL::to("author/delete/{$auth->id}")}}">Delete</a>
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
@endsection
