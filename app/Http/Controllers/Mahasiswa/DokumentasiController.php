<?php 

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
// Tambahkan model yang ingin dipakai
use App\Dokumentasi;


class DokumentasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dokumentasi',
            // Memanggil semua isi dari tabel biodata
            'dokumentasi' => Dokumentasi::all()
        ];

        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('pengelolaan-kegiatan.dokumentasi.index',$data);
    }

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar Biodata
            'page' => 'dokumentasi',
        ];

        // Memanggil tampilan form create
    	return view('pengelolaan-kegiatan.dokumentasi.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        Dokumentasi::create($request->input());

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Biodata berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kegiatan/dokumentasi');
    }

    public function delete($id)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $dokumentasi = Dokumentasi::find($id);

        // Menghapus biodata yang dicari tadi
        $dokumentasi->delete();

        // Menampilkan notifikasi pesan sukses
    	Session::put('alert-success', 'gambar berhasil dihapus');

        // Kembali ke halaman sebelumnya
      	return Redirect::back();	 
    }

   public function edit($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'dokumentasi',
            // Mencari biodata berdasarkan id
            'dokumentasi' => Dokumentasi::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('pengelolaan-kegiatan.dokumentasi.edit',$data);
    }

    public function editAction($id, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata
        $dokumentasi = Dokumentasi::find($id);

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $dokumentasi->nama_dokumentasi = $request->input('nama_dokumentasi');
        $dokumentasi->deskripsi = $request->input('deskripsi');
        $dokumentasi->gambar = $request->input('gambar');
        $dokumentasi->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Dokumentasi berhasil diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('kegiatan/dokumentasi');
    }

}