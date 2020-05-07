<?php

namespace App\Http\Controllers;

use App\Civitas;
use App\Gedung;
use App\Guru;
use App\Pesan;
use App\Siswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class BackendController extends Controller
{
    public function createCivitas()
    {
        $currentDate = Carbon::today();
        $civitas = new Civitas(
            [
                'nama' => 'Muhammad Fakhri',
                'jenis_kelamin' => True,
                'tempat_lahir' => 'Bogor, Jawa Barat',
                'tanggal_lahir' => $currentDate,
                'agama' => 1,
            ]
        );

        $siswa = Siswa::create([
            'nisn' => 'G64170015',
            'asal_wilayah' => 'Jakarta Utara',
            'id_kelas_1' => 1,
            'id_kelas_2' => 2,
            'id_kelas_3' => 3,
            'status_keaktifan' => 1
        ]);

        $data = $siswa->civitas()->save($civitas);

        echo "nice";
    }

    public function seeSiswa($id)
    {
        $siswa = Siswa::find($id);
        $civitas = $siswa->civitas;
        // echo($civitas);
        echo ($siswa);
    }

    public function seeAllMessage()
    {
        dd(Guru::find(1)->messages);
    }

    public function getMessageReceiver()
    {
        dd(Pesan::find(1)->guru);
    }

    public function sendData(Request $request)
    {
        $data = $request->all();
        $building = Gedung::all();
        if ($data != null) {
            return response()->json([
                'parameter' => $data,
                'building' => $building,
                'message' => 'ada kok'
            ]);
        } else {
            return response()->json([
                'parameter' => $data,
                'message' => 'kosong'
            ]);
        }
    }

    public function seeData()
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
    }
}
