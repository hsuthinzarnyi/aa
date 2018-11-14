@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{ URL::to('publisher/add') }}" class="btn btn-default card col-md-4" style="margin-left: 485px">+ Add New Publisher</a><br>

            <div class="card">
                <div class="card-header">Genre List !!!!</div>

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
                                <th>Name</th>
                                <th>Operation</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1 ?>
                            @foreach($data_p->all() as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->p_name}}</td>
                                <td>
                                   <a href="{{URL::to("")}}">Edit</a>
                                   <a href="{{URL::to("")}}"></a>
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
