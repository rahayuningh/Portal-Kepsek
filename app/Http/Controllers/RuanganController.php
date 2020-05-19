<?php

namespace App\Http\Controllers;
use App\Pegawai;
use App\KebutuhanBarang;
use App\Gedung;
use App\JenisRuangan;
use App\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function showAllRuangan(){
        //ruangan akan menampilkan nama ruangan, jenis ruangan, kode ruangan, nama gedung
        //kapasitas, dan penanggung jawab
        //array baru untuk menampung ruangan
        $data_ruangan=array();
        $data_kebutuhan_di_setiap_ruangan=array();
        $room=Ruangan::all();
        $kebutuhan_barang=KebutuhanBarang::all();
       /* foreach($kebutuhan_barang as $kebutuhan_per_satu_ruangan){
            //$kebutuhan_thing=$kebutuhan_per_satu_ruangan
            
            $kebutuhan_barang_id=$kebutuhan_per_satu_ruangan->id;
            $kebutuhan_barang_di_setiap_ruangan=$kebutuhan_per_satu_ruangan->ruangan;
            $kapasitas=$kebutuhan_per_satu_ruangan->jumlah;
            array_push($data_kebutuhan_di_setiap_ruangan,array(
                'id'=>$kebutuhan_barang_id,
                'obj_ruangan'=>$kebutuhan_barang_di_setiap_ruangan,
                'kapasitas'=>$kapasitas
            ));
        }    
        
        */foreach($room as $r){
            //Ruangan::find($r->id)->kebutuhanBarang();
            //foreach($data_kebutuhan_di_setiap_ruangan as $data){
            //    if($data['id']==$r->id){
            //        $kapasitas=$data['kapasitas'];
            //    }
            //}
            //ambil objek gedung untuk dapat 
            $gedung=$r->gedung;
            $nama_gedung=$gedung->nama_gedung;
            //ambil kode, serta name
            $kode_ruangan=$r->kode_ruangan;
            $nama_ruangan=$r->nama_ruangan;        
            //ambil objek jenis
            $jenis_ruangan=$r->jenisRuangan;
            $jenis_ruangan_alias=$jenis_ruangan->nama_jenis_ruangan;
            //ambil objek pegawai
            $kapasitas=$r->kapasitas_orang;
            $penanggung_jawab=$r->pegawai;
            $civitas=$penanggung_jawab->civitas;
            $nama_penanggung_jawab=$civitas->nama;
            
            array_push($data_ruangan,array(
                'id'=>$r->id,
                'jenis_ruangan_id'=>$jenis_ruangan->id,
                'jenis_ruangan_inisial'=>$jenis_ruangan_alias,
                'kode_ruangan'=>$kode_ruangan,
                'nama_ruangan'=>$nama_ruangan,
                'nama_gedung'=>$nama_gedung,
                'gedung_id'=>$gedung->id,
                'nama_responsible_person'=>$nama_penanggung_jawab,
                'penanggung_jawab_id'=>$penanggung_jawab->id,
                'kapasitas'=>$kapasitas
            ));            

            
        }
        $gedung=Gedung::all();
        $jenis_ruangan=JenisRuangan::all();
        $penanggung_jawab=Pegawai::all();
        return view('inventaris.ruang',[
            'data_ruangan'=>$data_ruangan,
            'gedung'=>$gedung,
            'jenis_ruangan'=>$jenis_ruangan,
            'penanggung_jawab'=>$penanggung_jawab
        ]);
    }
    public function create(Request $request){
        Ruangan::create($request->all());
        return redirect()->
            route('inventory.room');
    }
    public function update(Request $request){
        $ruangan=Ruangan::findOrFail($request->id);$final=$request->except('_token');
        $ruangan->update($final);
            return redirect()->back()->with('success','Ruangan berhasil diupdate');
    }        
    public function destroy(Request $request){
        //$request->validate(['id'=>'required|numeric']);
        $ruangan=Ruangan::findOrFail($request->id);
        $ruangan->delete();
        return redirect()->back()->with('success','Ruangan berhasil didelete');

    }
}