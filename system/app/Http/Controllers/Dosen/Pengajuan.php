<?php

namespace App\Http\Controllers\Dosen;



use App\Exports\Exportsppendidikan;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Berkaspengajuan;

// Import format excel
use App\Imports\SppendidikanImport;
use App\Imports\SppenelitianImport;
use App\Imports\SppengabdianImport;
use App\Imports\SppenunjangImport;
use App\Models\Format;
use App\Models\Templatee;

class Pengajuan extends Controller
{
    function index(){
        $data['list_item'] = Berkaspengajuan::all();
        return view ('Dosen.pengajuan.index', $data);
    }

    // public function cobe(){

    //     return view ('Dosen.pengajuan.cobe');
    // }

    function kirimdata(Request $req, $Berkaspengajuan)
    {
        $Berkaspengajuan = Berkaspengajuan::find($Berkaspengajuan);
        if($req->sk_pengantar != null){
            $Berkaspengajuan->uploadSkpengantar('sk_pengantar');
            $Berkaspengajuan->save();
        }elseif($req->fcsk_pengangkatan != null){
            $Berkaspengajuan->uploadSk_pengangkatan('fcsk_pengangkatan');
            $Berkaspengajuan->save();
        }elseif($req->transkip != null){
            $Berkaspengajuan->uploadTranskip('transkip');
            $Berkaspengajuan->save();
        }elseif($req->fc_ijazah != null){
            $Berkaspengajuan->uploadIjazah('fc_ijazah');
            $Berkaspengajuan->save();
        }elseif($req->spabsahkarim != null){
            $Berkaspengajuan->uploadAbsahkarya('spabsahkarim');
            $Berkaspengajuan->save();
        }elseif($req->hasil_validasi != null){
            $Berkaspengajuan->uploadHasil_validasi('hasil_validasi');
            $Berkaspengajuan->save();
        }elseif($req->dupak != null){
            $Berkaspengajuan->uploadDupak('dupak');
            $Berkaspengajuan->save();
        }
        elseif($req->skfungsional != null){
            $Berkaspengajuan->uploadSkfungsional('skfungsional');
            $Berkaspengajuan->save();
        }elseif($req->skpangter != null){
            $Berkaspengajuan->uploadSkpangter('skpangter');
            $Berkaspengajuan->save();
        }elseif($req->nidn != null){
            $Berkaspengajuan->uploadNidn('nidn');
            $Berkaspengajuan->save();
        }elseif($req->skruangan != null){
            $Berkaspengajuan->uploadSkruangan('skruangan');
            $Berkaspengajuan->save();
        }elseif($req->skgol != null){
            $Berkaspengajuan->uploadSkgol('skgol');
            $Berkaspengajuan->save();
        }elseif($req->nilaipeer != null){
            $Berkaspengajuan->uploadNilaipeer('nilaipeer');
            $Berkaspengajuan->save();
        }elseif($req->karyailmiah != null){
            $Berkaspengajuan->uploadKaryailmiah('karyailmiah');
            $Berkaspengajuan->save();
        }elseif($req->skp != null){
            $Berkaspengajuan->uploadSkp('skp');
            $Berkaspengajuan->save();
        }elseif($req->sp_pendidikan != null){
            $Berkaspengajuan->uploadSppendidikan('sp_pendidikan');
            $Berkaspengajuan->save();
        }elseif($req->sp_penunjang != null){
            $Berkaspengajuan->uploadSppenunjang('sp_penunjang');
            $Berkaspengajuan->save();
        }elseif($req->sp_penelitian != null){
            $Berkaspengajuan->uploadSppenelitian('sp_penelitian');
            $Berkaspengajuan->save();
        }elseif($req->sp_pengabdian != null){
            $Berkaspengajuan->uploadSppengabdian('sp_pengabdian');
            $Berkaspengajuan->save();
        }elseif($req->linkkarya != null){
            $Berkaspengajuan->linkkarya = $req->linkkarya;
            $Berkaspengajuan->save();
        }elseif($req->link_bukti != null){
            $Berkaspengajuan->link_bukti = $req->link_bukti;
            $Berkaspengajuan->save();
        }elseif($req->fungsional != null){
            $Berkaspengajuan->fungsional = $req->fungsional;
            $Berkaspengajuan->save();
        }elseif($req->deskripsi != null){
            $Berkaspengajuan->deskripsi = $req->deskripsi;
            $Berkaspengajuan->save();
        }elseif($req->status){
            $Berkaspengajuan->status = 2;
            $Berkaspengajuan->save();

            return redirect('Dosen/pengajuan')->with('success','Data pengajuan berhasil dikirim');
        };


        return back()->with('success','Data pengajuan berhasil disimpan');
        return view('Admin/pengajuan/pengajuan-masuk')->with('success','Data pengajuan berhasil disimpan');
    }

    function add(){
        return view('Dosen.pengajuan.add');
    }

    public function aksiTambah(Request $req){
        $rules = [
            'fungsional' => 'required',
            
        ];
        $messsages = [
            'required_without_all' => ':attribute wajib di isi ketika yang lain kosong',
            'required' => ' :attribute wajib di isi',
            'unique' => ' Nomor surat sudah ada',
            'max' => ' :attribute terlalu besar',
        ];
        $this->validate( $req, $rules, $messsages);

        $berkaspengajuan = new Berkaspengajuan;
        $berkaspengajuan->id_dosen = Auth()->user()->id;
        $berkaspengajuan->fungsional = $req->fungsional;
        $berkaspengajuan->link_bukti = $req->link_bukti;
        $berkaspengajuan->linkkarya = $req->linkkarya;
        $berkaspengajuan->deskripsi = $req->deskripsi;
        $berkaspengajuan->status = 1;


        $berkaspengajuan->uploadSkpengantar('sk_pengantar');
        $berkaspengajuan->uploadSk_pengangkatan('fcsk_pengangkatan');
        $berkaspengajuan->uploadIjazah('fc_ijazah');
        $berkaspengajuan->uploadTranskip('transkip');
        $berkaspengajuan->uploadAbsahkarya('spabsahkarim');
        $berkaspengajuan->uploadHasil_validasi('hasil_validasi');
        $berkaspengajuan->uploadDupak('dupak');
        $berkaspengajuan->uploadSkfungsional('skfungsional');
        $berkaspengajuan->uploadSkpangter('skpangter');
        $berkaspengajuan->uploadNidn('nidn');
        $berkaspengajuan->uploadSkruangan('skruangan');
        $berkaspengajuan->uploadSkgol('skgol');
        $berkaspengajuan->uploadNilaipeer('nilaipeer');
        $berkaspengajuan->uploadKaryailmiah('karyailmiah');
        $berkaspengajuan->uploadSkp('skp');
        $berkaspengajuan->uploadSppendidikan('sp_pendidikan');
        $berkaspengajuan->uploadSppenunjang('sp_penunjang');
        $berkaspengajuan->uploadSppenelitian('sp_penelitian');
        $berkaspengajuan->uploadSppengabdian('sp_pengabdian');
        
        $berkaspengajuan->save();

        // $cek = $pengajuan->save();
        // if($cek == 1){
        //     $sppendidikan = $req->file('sppendidikan');
        //     Excel::import(new SppendidikanImport, $sppendidikan);
    
        //     $sppenelitian = $req->file('sppenelitian');
        //     Excel::import(new SppenelitianImport, $sppenelitian);
    
        //     $sppengabdian = $req->file('sppengabdian');
        //     Excel::import(new SppengabdianImport, $sppengabdian);
    
        //     $sppenunjang = $req->file('sppenunjang');
        // Excel::import(new SppenunjangImport, $sppenunjang);
    
        return redirect('Dosen/pengajuan')->with('success','Data pengajuan berhasil disimpan');
    
    }

    function show(Berkaspengajuan $Berkaspengajuan)
    {
        $data['Berkaspengajuan'] = $Berkaspengajuan;

        return view('Dosen/pengajuan/show', $data);
    }

    function edit(Berkaspengajuan $Berkaspengajuan)
    {
        $data['Berkaspengajuan'] = $Berkaspengajuan;
        return view('Dosen/pengajuan.edit', $data)->with('success', 'Data Pengajuan Berhasi Disimpan');
        
    }



    // function update(Request $req, Pengajuan $Berkaspengajuan){

    //     return $req;

    // $Berkaspengajuan = Berkaspengajuan::find($Berkaspengajuan);

    // $Berkaspengajuan->fungsional = request('fungsional');
    // $Berkaspengajuan->link_bukti = request('link_bukti');
    // $Berkaspengajuan->linkkarya = request('linkkarya');
    // $Berkaspengajuan->uploadSkpengantar('sk_pengantar');

    // $Berkaspengajuan->save();

    // return "Data berhasil diperbarui.";


    // function update(Request $request, $Berkaspengajuan)
    // {
    //     return $request;
    //     // Validasi input dari permintaan HTTP
    //     $validatedData = $request->validate([
    //         'uploadSkpengantar' => 'sk_pengantar',
    //         // 'field2' => 'required',
    //         // dan seterusnya sesuai dengan kebutuhan
    //     ]);

    //     try {
    //         // Mengambil data berdasarkan ID dari database
    //         $Berkaspengajuan = Berkaspengajuan::findOrFail($Berkaspengajuan);

    //         // Memperbarui data dengan data baru dari permintaan
    //         $Berkaspengajuan->fill($validatedData);

    //         // Menyimpan data yang telah diperbarui
    //         $Berkaspengajuan->save();

    //         // Memberikan respons atau pesan berhasil kepada pengguna
    //         return response()->json(['message' => 'Data berhasil diperbarui'], 200);
    //     } catch (\Exception $e) {
    //         // Memberikan respons jika terjadi error
    //         return response()->json(['message' => 'Gagal memperbarui data'], 500);
    //     }
    // }

    // function show(Berkaspengajuan $Berkaspengajuan){
    //     $data['berkaspengajuan'] = $Berkaspengajuan;

    //     return view('Dosen.pengajuan.show', $data);
    // }

    function sppendidikan(){
        return view('Dosen.pengajuan.sppendidikan');
        
    }
    function donloadsppendidikan(){
        return Excel::download(new Exportsppendidikan, 'sppendidikan.xlsx');
    }

    function hapus(Berkaspengajuan $Berkaspengajuan){
        $Berkaspengajuan->delete();
        return back()->with('success', 'Data berhasil dihapus !');
    }
}

// public function store(Request $request)
//     {
//         $rules = [
//             'nama_pengajuan' => 'required',
//             'tanggal_pengajuan' => 'required',
//             'buktipenelitian' => 'required',
//             'linkkarya' => 'required',
//             'buktipenelitian' => 'required',
//             'status' => 'required',
//             'file_lampiran' => 'required|max:1000|mimes:pdf',
//             'file_surat' => 'required|max:1000|mimes:pdf',
//             'printoutnidn' => 'required|max:1000|mimes:pdf',
//             'docdupak' => 'required|max:1000|mimes:xls,xlsx',
//             'paten' => 'required_without_all:buku,book_chapter,prosiding,jurnalilmiah|mimes:pdf',
//             'jurnalilmiah' => 'required_without_all:buku,book_chapter,prosiding,paten|mimes:pdf',
//         ];
//         $messsages = [
//             'required_without_all' => ':attribute wajib di isi ketika yang lain kosong',
//             'required' => ' :attribute wajib di isi',
//             'unique' => ' Nomor surat sudah ada',
//             'max' => ' :attribute terlalu besar',
//         ];
//         $this->validate( $request, $rules, $messsages);

//         $pengajuanbaru = new PengajuanBaru;
//         $pengajuanbaru->id_admin__pegawai = auth()->user()->id;
//         $pengajuanbaru->nama_pengajuan = request('nama_pengajuan');
//         $pengajuanbaru->tanggal_pengajuan = request('tanggal_pengajuan');
//         $pengajuanbaru->buktipenelitian = request('buktipenelitian');
//         $pengajuanbaru->linkkarya = request('linkkarya');
//         $pengajuanbaru->status = 1;

//     }