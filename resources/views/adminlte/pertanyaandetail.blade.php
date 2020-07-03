@extends('adminlte.master');

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>NO</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Diperbarui</th>
          </tr>
          </thead>
          <tbody>
         
         <?php $no=0; ?>
          @foreach($pertanyaan as $p)
       <?php $no++; ?>
		   

          <tr>
            <td>{{$no}}</td>
            <td>{{$p->judul}}</td>
            <td>{{$p->isi}}</td>
            <td>{{$p->tgl_dibuat}}</td>
            <td>{{$p->tgl_diperbarui}}</td>
          </tr>
          @endforeach         
          </tbody> -->
         
        </table>
        <h3>jawaban</h3>
        <ul>
            @foreach($jawaban as $c)
            <li>{{$c->isi}}</li>
            @endforeach
        </ul>
      </div>
      <!-- /.card-body -->
    </div>
@endsection


@push('scripts')
<script src={{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}></script>
<script src={{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}></script>
<script>
  $(function () {
    $("#example2").DataTable();
  });
</script>

@endpush