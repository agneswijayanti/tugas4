@extends('adminlte.master');

@section('content')
<h1>Pertanyaan</h1>
<br>
<form action="/pertanyaan" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Judul">
    
  </div>
  <div class="form-group">
    <label for="isi">ISI pertnyaan</label>
    <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"></textarea>
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


