<?php 

namespace App\Http\Controllers\Karyawan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Response;
use Auth;
// Tambahkan model yang ingin dipakai
use App\VerPrestasi;
use App\VerPenelitianMhs;
use App\DetailAnggota;
use App\DetailPenelitian;

class VerifikasiController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            'count_prestasi' => VerPrestasi::all()->count(),
            'count_penelitian' => VerPenelitianMhs::all()->count(),

            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'verifikasi',
        ];
        // Memanggil tampilan index di folder mahasiswa/biodata dan juga menambahkan $data tadi di view
        return view('karyawan.verifikasi.index',$data);
    }

    public function createPrestasi()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prestasi',
            'prestasi' => VerPrestasi::all()
        ];

        // Memanggil tampilan form create
    	return view('karyawan.verifikasi.createprestasi',$data);
    }


    public function createPenelitian()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'penelitian',
            'penelitian' => VerPenelitianMhs::all()
        ];

        // Memanggil tampilan form create
        return view('karyawan.verifikasi.createpenelitian',$data);
    }


   public function editPrestasi($id)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'prestasi',
            // Mencari biodata berdasarkan id
            'prestasi' => VerPrestasi::find($id)
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.verifikasi.ver_pres_more',$data);
    }

    public function editPrestasiAction($id, Request $request)
    {
        // Mencari prestasi yang akan di update dan menaruhnya di variabel $prestasi
        $prestasi = VerPrestasi::find($id);
        $prestasi->nip_petugas_id = Auth::user()->username;
        // Mengupdate $prestasi tadi dengan isi dari form edit tadi
        $prestasi->ps_is_verified = $request->input('ps_is_verified');
        $prestasi->skor = $request->input('skor');
        $prestasi->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Verifikasi Prestasi berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/verifikasi/prestasi');
    }

    public function editPenelitian($id)
    {
        $detail_anggota = DetailAnggota::where('kode_penelitian_id',$id)->first();
        $detailpenelitian = DetailPenelitian::where('kode_penelitian_id',$id)->first();
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar penelitian
            'page' => 'penelitian',
            // Mencari penelitian berdasarkan id
            'penelitian' => VerPenelitianMhs::find($id),
            'detail_anggota' => $detail_anggota,
            'detailpenelitian' => $detailpenelitian
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('karyawan.verifikasi.ver_pen_more',$data);
    }

    public function editPenelitianAction($id, Request $request)
    {
        // Mencari penelitian yang akan di update dan menaruhnya di variabel $prestasi
        $penelitian = VerPenelitianMhs::find($id);
        $penelitian->nip_petugas_id = Auth::user()->username;
        // Mengupdate $penelitian tadi dengan isi dari form edit tadi
        $penelitian->is_verified = $request->input('is_verified');
        $penelitian->save();

        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Verifikasi Penelitian berhasil ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('karyawan/verifikasi/penelitian');
    }

    public function downloadPrestasi(Request $request){
        $id = $request->id;
        $file_path = public_path('img/prestasi').'/'.$id;
        return response()->download($file_path);
    }

    public function downloadPenelitian(Request $request){
        $id = $request->id;
        $file_path = public_path('pdf').'/'.$id;
        return response()->download($file_path);
    }

}