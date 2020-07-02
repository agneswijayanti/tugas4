<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use DB;
class JawabanController extends Controller
{
    public function index($id)
    {
    	// mengambil data pegawai
        $jawaban = DB::table('jawaban')->where('idpertanyaan', $id)->get();
        
        
 
    	// mengirim data pegawai ke view pegawai
    	return view('adminlte.jawaban', ['jawaban' => $jawaban]);
	}
	public function create($id)
	{
		return view('adminlte.formjawaban', ['id'=> $id]);
	}
	public function store(Request $request)
	{
        $judul = $request->input('judul');
        $id = $request->route('pertanyaan_id');
		$isi = $request->input('isi');
		$date = date("Y-m-d"); 
		$date1 = date("0000-00-00");
		$data=array('judul'=>$judul,"isi"=>$isi,"tgl_dibuat"=>$date,"tgl_diperbarui"=>$date, 'idpertanyaan'=>$id);
		DB::table('jawaban')->insert($data);
		return redirect('/jawaban/'.$id);
	}
}
