@extends('layouts.main')
@section('content')



    <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container vh-100" style="margin-top: 250px">
            <div class="card-body shadow bg-white" style="">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="text-center">
                            <h2>
                                <b>CREATE TODO</b>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date:</strong>
                            <input type="date" name="date" class="form-control" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <input type="text" name="description" class="form-control" placeholder="Description">
                        </div>
                    </div>


                    <div class="panjul" style="margin-left: 950px;">
                        <div class="">
                            <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
