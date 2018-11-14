@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{ URL::to('book/add') }}" class="btn btn-default card col-md-4" style="margin-left: 485px">+ Add New Book</a><br>

            <div class="card">
                <div class="card-header">Book List !!!!</div>

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
                                <th>Title</th>
                                <th>Author Name</th>
                                <th>Genre</th>
                                <th>Publisher</th>
                                <th>Operation</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1 ?>
                            @foreach($book as $all)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $all->b_name }}</td>
                                <td>{{ $all->authors->a_name }}</td>
                                <td>{{ $all->genres->g_name }}</td>
                                <td>{{ $all->publishers->p_name }}</td>
                                <td>
                                    <a href="{{URL::to("book/edit/{$all->id}")}}">Edit</a>
                                    <a href="{{URL::to("book/delete/{$all->id}")}}">Delete</a>
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

