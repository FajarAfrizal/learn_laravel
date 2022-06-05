    @extends('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>edit<h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back </a>
            </div>
        </div>
    </div>
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

<from action="{{ route('students.update',$students->id)}}" method="POST" enctype="multipart/form-data">
    @csrf

    @method('PUT')

     <div class="row">
         <div class="col-xs-12 col-sm-12 cpl-md-12">
             <div class="form-group">
                 <strong>Nis:</strong>
                 <input type="text" name="nis" class="form-control" placeholder="NIS" value="{{$student->nis}}">

             </div>         
         </div>
         <div class="col-xs-12 col-sm-12 cpl-md-12">
             <div class="form-group">
                 <strong>Nama:</strong>
                 <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$student->nama}}">
                 
             </div>         
         </div>
         <div class="col-xs-12 col-sm-12 cpl-md-12">
             <div class="form-group">
                 <strong>Rombel:</strong>
                 <input type="text" name="rombel" class="form-control" placeholder="Rombel" value="{{$student->rombel}}">
                 
             </div>         
         </div>
         <div class="col-xs-12 col-sm-12 cpl-md-12">
             <div class="form-group">
                 <strong>Rayon:</strong>
                 <input type="text" name="rayon" class="form-control" placeholder="Rayon" value="{{$student->rayon}}">
                 
             </div>         
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="from-group">
                  <strong>Keterangan:</strong>
                  <input type="radio" name="ket" value="Hadir" {{$student->ket == 'Hadir' ? 'checked' : ''}}> Hadir
                  <input type="radio" name="ket" value="Sakit" {{$student->ket == 'Sakit' ? 'checked' : ''}}>
                  <input type="radio" name="ket" value="Ijin" {{$student->ket == 'Ijin' ? 'checked' : ''}}>
                  <input type="radio" name="ket" value="Alfa" {{$student->ket == 'Alfa' ? 'checked' : ''}}>
              </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
             <button type="submit" class="btn btn-primary">Submit</button>
         </div>
     </div>
</form>
@endsection
