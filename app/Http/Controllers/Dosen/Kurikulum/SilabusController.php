<?php 

namespace App\Http\Controllers\Dosen\Kurikulum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Silabus_Matkul;


class SilabusController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'silabus',
            // Memanggil semua isi dari tabel biodata
            'mata_kuliah' => Silabus_Matkul::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('dosen.kurikulum.silabus.index',$data);
        // dd($data['sistem-pembelajaran']);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'silabus',
            'mata_kuliah' => Silabus_Matkul::all()
        ];

        // Memanggil tampilan form create
    	return view('dosen.kurikulum.silabus.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        // Silabus_Matkul::create($request->input());
       // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Silabus_Matkul::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Sistem pembelajaran berhasil ditambahkan');
        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/silabus');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $mata_kuliah = Silabus_Matkul::find($id);

        // Menghapus biodata yang dicari tadi
        $mata_kuliah->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'Silabus berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'silabus',
            // Mencari biodata berdasarkan id
            'mata_kuliah' => Silabus_Matkul::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('dosen.kurikulum.silabus.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $sp = Silabus_Matkul::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $sp->mata_kuliah = $request->input('mata_kuliah');

        $sp->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Silabus berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kurikulum/silabus');
    }

}