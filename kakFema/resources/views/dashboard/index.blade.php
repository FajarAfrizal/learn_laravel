@extends('layouts.main')
@section('content')
    {{-- <div class="wrapper bg-white">
        <div class="d-flex align-items-start justify-content-between">
            <div class="d-flex flex-column">
                <div class="h5">My Todo's</div>
                <p class="text-muted text-justify">
                    Here's a list of activities you have to do
                </p>
                <br>
                <span>
                    <a href="{{ route('add.dashboard') }}" class="text-success">Create</a> <a href="">Complated</a>
                </span>
            </div>
            <div class="info btn ml-md-4 ml-0">
                <span class="fas fa-info" title="Info"></span>
            </div>
        </div>
        <div class="work border-bottom pt-3">
            <div class="d-flex align-items-center py-2 mt-1">
                <div>
                    <span class="text-muted fas fa-comment btn"></span>
                </div>
                <div class="text-muted">{{ $todo->count() }} Todos</div>
                <button class="ml-auto btn bg-white text-muted fas fa-angle-down" type="button" data-toggle="collapse"
                    data-target="#comments" aria-expanded="false" aria-controls="comments"></button>
            </div>
        </div>
        <div id="comments" class="mt-1">
            @foreach ($todo as $item)
            <div class="comment d-flex align-items-start justify-content-between">
                <div class="mr-2">
                    <label class="option">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="d-flex flex-column">
                    <b class="text-justify">
                        {{$item->title}}
                    </b>
                    <p class="text-justify">{{$item->description}}</p>
                    <p class="text-muted">{{$item->status == 1 ? 'Complated' : 'On-Process'}} <span class="date">{{\Carbon\Carbon::parse($item->date)->format('j F, Y')}}</span></p>
                </div>
                <div class="ml-md-4 ml-0">
                    <span class="fas fa-arrow-right btn"></span>
                </div>
                <a href="{{ route('delete', $item->id) }}" class="btn btn-danger">Delete</a>            
                <a href="{{ route('edit', $item->id) }}" class="btn btn-primary">edit</a>
            </div>
            @endforeach
        </div>
    </div> --}}

    <div class="wrapper bg-white">
        <div class="col-lg-12 margin-tb">

            <div class="d-flex align-items-center py-2  ">
                <div>
                    <box-icon name='chat' type='solid' ></box-icon>
                </div>
                <div class="text-muted ">{{ $todo->count() }} Todos</div>

            </div>
            <hr>
            <div class="pull-right my-2">
                <a class="btn btn-primary" href="{{ route('add') }}"> Create</a>
            </div>
        </div>
        <div class="d-flex align-items-start justify-content-between">
            <div class="row">

            </div>

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Date and Status</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($todo as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="fajar">{{ $item->title }}</td>
                        <td>
                            <p class="text-muted">
                                @if ($item['status'] == 1)
                                    Selesai Pada : {{ \Carbon\Carbon::parse($item['done_time'])->format('j F, Y') }}
                                @else
                                    Target Selesai : {{ \Carbon\Carbon::parse($item['date'])->format('j F, Y') }}
                                @endif
                            </p>
                        </td>
                        <td class="fajar">{{ $item->description }}</td>
                        <td>
                            @if ($item['status'] == 1)
                                
                                <box-icon type='solid' name='bookmarks' class=""></box-icon>
                            @else

                                <form action="{{ route('complated', $item->id) }}" method="POST" class="">
                                    @csrf
                                    @method('PATCH')

                                    <button type="submit" class="btn btn-success ">Complated</button>

                                </form>
                            @endif



                            <form action="{{ route('delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger mt-3">Delete</button>

                            </form>

                            {{-- <a class="btn btn-danger mt-3" href="{{ route('delete', $item->id) }}">delete </a> --}}

                            <a class="btn btn-warning mt-3" href="{{ route('edit', $item->id) }}">Edit</a>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    @if (session('success'))
        <script>
            Swal.fire(
                'Berhasil Login !! ',
                '',
                'success'
            )
        </script>
    @endif
    @if (session('notAllowed'))
        <script>
            Swal.fire(
                'Anda Telah Login !!',
                '',
                'error'
            )
        </script>
    @endif
    @if (session('success-create'))
        <script>
            Swal.fire(
                'Berhasil Menambah!! ',
                '',
                'success'
            )
        </script>
    @endif
    @if (session('success-delete'))
        <script>
            Swal.fire(
                'Berhasil Menghapus !! ',
                '',
                'success'
            )
        </script>
    @endif
    @if (session('success-update'))
        <script>
            Swal.fire(
                'Berhasil Update !! ',
                '',
                'success'
            )
        </script>
    @endif
    @if (session('done'))
        <script>
            Swal.fire(
                'Todo telah berhasil di kerjakan !! ',
                '',
                'success'
            )
        </script>
    @endif
@endsection
