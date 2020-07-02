@extends('adminlte.master');

@section('content')
<div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example3" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>NO</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Diperbarui</th>
            <th>id Pertanyaan</th>
          </tr>
          </thead>
          <tbody>
        <?php $no=0; ?>
          @foreach($jawaban as $p)
          
       <?php $no++; ?>
		   

          <tr>
            <td>{{$no}}</td>
            <td>{{$p->judul}}</td>
            <td>{{$p->isi}}</td>
            <td>{{$p->tgl_dibuat}}</td>
            <td>{{$p->tgl_diperbarui}}</td>
            <td>{{$p->idpertanyaan}}</td>
          </tr>
          @endforeach         
          </tbody>
         
        </table>
      </div>
      <!-- /.card-body -->
    </div>
@endsection


@push('scripts')
<script src={{asset('adminlte/plugins/datatables/jquery.dataTables.js')}}></script>
<script src={{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}></script>
<script>
  $(function () {
    $("#example3").DataTable();
  });
</script>

@endpush