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
	public function pertanyaanid(Request $request){
		$id = $request->route('id');
		$pertanyaan = DB::table('pertanyaan')->where('idpertanyaan', $id)->get();
		$jawaban = DB::table('jawaban')->where('idpertanyaan', $id)->get();
		$data['pertanyaan'] = $pertanyaan;
		$data['jawaban']= $jawaban;
        
 
    	// mengirim data pegawai ke view pegawai
    	return view('adminlte.pertanyaandetail', ['pertanyaan'=>$pertanyaan, 'jawaban'=>$jawaban]);

	}
	public function pertanyaanidedit(Request $request){
		$id = $request->route('id');
		$judul = $request->input('judul');
		$isi = $request->input('isi');
		$date = date("Y-m-d"); 
		$date1 = date("0000-00-00");
		DB::table('pertanyaan')->where('idpertanyaan',$id)->update([
			'judul' => $judul,
			'isi' => $isi,
			'tgl_diperbarui' => $date
		]);
		$pertanyaan = Pertanyaan::all();
 
    	// mengirim data pegawai ke view pegawai
    	return view('adminlte.pertanyaan', ['pertanyaan' => $pertanyaan]);
        
 
    	// mengirim data pegawai ke view pegawai
    	return view('adminlte.pertanyaan', ['pertanyaan'=>$pertanyaan, 'jawaban'=>$jawaban]);

	}
	public function edit(Request $request){
		$id = $request->route('id');
		$pertanyaan = DB::table('pertanyaan')->where('idpertanyaan', $id)->get();

		return view('adminlte.formpertanyaanedit', ['pertanyaan' =>$pertanyaan], ['id'=>$id]);


	}
	public function delete(Request $request){
		$id = $request->route('id');
		DB::table('pertanyaan')->where('idpertanyaan', $id)->delete();
		$pertanyaan = Pertanyaan::all();
		return view('adminlte.pertanyaan', ['pertanyaan' =>$pertanyaan]);


	}
}
