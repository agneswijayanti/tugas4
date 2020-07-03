@extends('adminlte.master');

@section('content')
<h1>Pertanyaan</h1>
<br>

<form action="/pertanyaan/{{$id}}/" method="POST">
{{ csrf_field() }}
{{method_field('put')}}
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" name="judul" class="form-control" id="judul" value=<?= $pertanyaan[0]->judul?> aria-describedby="emailHelp" placeholder="Judul">
    
  </div>
  <div class="form-group">
    <label for="isi">ISI pertnyaan</label>
    <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"><?= $pertanyaan[0]->isi?></textarea>
  </div>
  
 
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection


