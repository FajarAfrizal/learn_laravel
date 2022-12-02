@extends('layouts.main')
@section('content')
    {{-- <div class="container content">
        <form id="create-form" method="post" action="{{route('update', $todos->id)}}">
            @csrf
            @method('PUT')
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <h3>Edit Todo</h3>
            <fieldset>
                <label for="">Title</label>
                <input placeholder="title of todo" type="text" name="title" value="{{$todos->title}}">
            </fieldset>
            <fieldset>
                <label for="">Target Date</label>
                <input placeholder="Target Date" type="date" name="date" value="{{$todos->date}}">
            </fieldset>
            <fieldset>
                <label for="">Description</label>
                <textarea placeholder="Type your descriptions here..." name="description"tabindex="5">{{$todos->description}}</textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contactus-submit">Submit</button>
            </fieldset>
            <fieldset>
                <a href="/dashboard" class="btn-cancel btn-lg btn">Cancel</a>
            </fieldset>

        </form>
    </div> --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $todos->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container vh-100"  style="margin-top: 250px">
            <div class="card-body shadow bg-white mt-10">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="text-center">
                            <h2>EDIT TODO</h2>
                        </div>
                       
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" value="{{$todos->title}}" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date:</strong>
                            <input type="date" name="date" class="form-control" value="{{$todos->date}}" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <input type="text" name="description" class="form-control" value="{{$todos->description}}" placeholder="Description">
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
