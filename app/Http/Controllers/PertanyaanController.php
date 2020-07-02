<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use DB;
class PertanyaanController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
    	$pertanyaan = Pertanyaan::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('adminlte.pertanyaan', ['pertanyaan' => $pertanyaan]);
	}
	public function create()
	{
		return view('adminlte.formpertanyaan');
	}
	public function store(Request $request)
	{
		$judul = $request->input('judul');
		$isi = $request->input('isi');
		$date = date("Y-m-d"); 
		$date1 = date("0000-00-00");
		$data=array('judul'=>$judul,"isi"=>$isi,"tgl_dibuat"=>$date,"tgl_diperbarui"=>$date);
		DB::table('pertanyaan')->insert($data);
		return redirect('/pertanyaan');
	}
}
