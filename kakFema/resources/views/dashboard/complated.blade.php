    <div class="wrapper bg-white">
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
    </div> 