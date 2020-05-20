<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Civitas;
use App\Kelas;
use App\Siswa;
use App\TahunAjaran;
use App\Wilayah;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function seeAll()
    {
        $students = Siswa::all();
        $data_student = array();
        foreach ($students as $student) {
            $civitas = $student->civitas;
            // dd($civitas);
            array_push($data_student, array(
                'id' => $student->id,
                'name' => $civitas->nama,
                'nisn' => $student->nisn,
                'region' => $student->wilayah->nama_daerah
            ));
        }

        return view('siswa/data_siswa', [
            'regions' => Wilayah::all(),
            'schoolYears' => TahunAjaran::all(),
            'students' => $data_student
        ]);
    }

    public function searchStudent(Request $request)
    {
        $request->validate(
            [
                'year' => 'numeric',
                'region' => 'numeric',
                'class' => 'numeric'
            ],
            [
                'year.numeric' => 'Tolong sertakan id tahun ajaran',
                'class.numeric' => 'Tolong sertakan id kelas',
                'region.numeric' => 'Tolong sertakan id wilayah'
            ]
        );

        // jika ada kelas
        if ($request->has('class')) {
            $kelas = Kelas::find($request->class);
            $kode_kelas = str_split($kelas->kode_kelas);
            if ($kode_kelas[0] == '7') {
                $students = $kelas->siswa1;
            } elseif ($kode_kelas[0] == '8') {
                $students = $kelas->siswa2;
            } elseif ($kode_kelas[0] == '9') {
                $students = $kelas->siswa3;
            }

            // jika ada class dan selanjutnya wilayah
            if ($request->has('region')) {
                // filter data hasil sebelumnya sesuai wilayah
                $region_id = $request->region;
                $students = $students->filter(function ($value, $key) use ($region_id) {
                    return $value->wilayah_id == $region_id;
                });

                // kalau ada wilayah, set search param tahun, kelas, dan wilayah
                $searchParam = array(
                    'year' => TahunAjaran::find($request->year),
                    'class' => Kelas::find($request->class),
                    'region' => Wilayah::find($request->region)
                );
            } else {
                // kalau gak ada wilayah, set search param cuma tahun dan kelas
                $searchParam = array(
                    'year' => TahunAjaran::find($request->year),
                    'class' => Kelas::find($request->class),
                );
            }
        } else { // kalo gak ada kelas dan cuma berdasarkan wilayah
            $region = Wilayah::find($request->region);
            $students = $region->siswa;

            // set search param cuma wilayah
            $searchParam = array(
                'region' => Wilayah::find($request->region)
            );
        }

        $data_student = array();
        foreach ($students as $student) {
            $civitas = $student->civitas;
            array_push($data_student, array(
                'id' => $student->id,
                'name' => $civitas->nama,
                'nisn' => $student->nisn,
                'region' => $student->wilayah->nama_daerah
            ));
        }

        return view('siswa/data_siswa', [
            'regions' => Wilayah::all(),
            'schoolYears' => TahunAjaran::all(),
            'students' => $data_student,
            'searchParam' => $searchParam
        ]);
    }

    public function studentBiodata($id)
    {
        if ($id) {
            $student = Siswa::find($id);
            $civitas = $student->civitas;
        } else {
            return redirect()->back()->with('fail', 'Tidak bisa melihat biodata siswa, tidak ada id yang disertakan');
        }
        return view('siswa/biodata_siswa', [
            'student' => $student,
            'civitas' => $civitas,
            'region' => $student->region,
            'religion' => $civitas->agama
        ]);
    }

    public function showCreatePage()
    {
        return view(
            'siswa/create_data_siswa',
            [
                'religions' => Agama::all(),
                'regions' => Wilayah::all(),
                'classes' => Kelas::all()
            ]
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'max:10',
            'wilayah' => 'required|numeric',
            'kelas_1' => 'required|numeric',
            'kelas_2' => 'required|numeric',
            'kelas_3' => 'required|numeric',
            'status_aktif' => 'required|numeric',
            'name' => 'required|min:3',
            'jenis_kelamin' => 'required|numeric',
            'tempat_lahir' => 'required|min:3',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|numeric',
        ]);

        $student = Siswa::create([
            'nisn' => $request->nisn,
            'wilayah_id' => $request->wilayah,
            'id_kelas_1' => $request->kelas_1,
            'id_kelas_2' => $request->kelas_2,
            'id_kelas_3' => $request->kelas_3,
            'status_keaktifan' => $request->status_aktif
        ]);
        $civitas = new Civitas();
        $civitas->fill([
            'nama' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama_id' => $request->agama,
        ]);

        $student->civitas()->save($civitas);
        return redirect()->route('student')->with('success', 'Data siswa berhasil dibuat');
    }
}
