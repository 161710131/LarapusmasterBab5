@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <nav aria-label="breadcrumb primary">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}">Home</a> </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/admin/authors') }}">Penulis</a></li>&nbsp&nbsp/&nbsp&nbsp
                    <li class="active">Tambah Penulis</li>
                </ol>
            </nav>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Tambah Penulis</h2>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['url' => route('authors.store'),'method' => 'post', 'class'=>'form-horizontal']) !!}
                            @include('authors._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection