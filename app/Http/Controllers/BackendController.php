<?php

namespace App\Http\Controllers;

use App\Civitas;
use App\Gedung;
use App\Guru;
use App\Kelas;
use App\Pesan;
use App\Ruangan;
use App\Siswa;
use App\TahunAjaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class BackendController extends Controller
{
    public function getRooms(Request $request)
    {
        if (!$request->has('building')) {
            $error = "Tidak ada id gedung yang diberikan";
            $fail = true;
        } else if (!is_numeric($request->building)) {
            $error = "Id gedung yang diberikan bukanlah angka";
            $fail = true;
        } else {
            $fail = false;
        }

        if ($fail) {
            $content = json_encode([
                'message' => $error,
            ]);
            $status = 400;
        } else {
            $content = json_encode([
                'message' => 'Success',
                'rooms' => Ruangan::where('gedung_id', $request->building)->get()
            ]);
            $status = 200;
        }
        return response($content, $status);
    }

    public function getClass(Request $request)
    {
        if (!$request->has('year')) {
            $error = "Tidak ada id tahun ajaran yang diberikan";
            $fail = true;
        } else if (!is_numeric($request->year)) {
            $error = "Id tahun ajaran yang diberikan bukanlah angka";
            $fail = true;
        } else {
            $fail = false;
        }

        if ($fail) {
            $content = json_encode([
                'message' => $error,
            ]);
            $status = 400;
        } else {
            $content = json_encode([
                'message' => 'Success',
                'classes' => TahunAjaran::find($request->year)->classes
            ]);
            $status = 200;
        }
        return response($content, $status);
    }

    public function showClass(Request $request)
    {
        if ($request->has('id')) {
            $class = Kelas::find($request->id);
            $teacher = $class->guru;
            $pegawai = $teacher->pegawai;

            $class_code = str_split($class->kode_kelas);
            if ($class_code[0] == '7') {
                $students = $class->siswa1;
            } elseif ($class_code[0] == '8') {
                $students = $class->siswa2;
            } elseif ($class_code[0] == '9') {
                $students = $class->siswa3;
            }

            $data_student = array();
            foreach ($students as $student) {
                $civitas = $student->civitas;
                array_push($data_student, array(
                    'id' => $student->id,
                    'name' => $civitas->nama,
                    'nisn' => $student->nisn,
                ));
            }

            $content = json_encode([
                'message' => 'Success',
                'students' => $data_student,
                'class' => array(
                    'year' => $class->tahun->tahun_ajaran,
                    'code' => $class->nama_kelas,
                    'teacher_id' => $teacher->id,
                    'teacher_name' => $pegawai->civitas->nama,
                )
            ]);

            $status = 200;
            return response($content, $status);
        } else {
            $content = json_encode([
                'message' => 'Fail, no id specified'
            ]);
            $status = 404;
            return response($content, $status);
        }
    }

    public function getTeacher()
    {
        $data = array();
        $teachers = Guru::all();
        foreach ($teachers as $teacher) {
            $pegawai = $teacher->pegawai;
            $civitas = $pegawai->civitas;
            array_push($data, array(
                'id' => $teacher->id,
                'name' => $civitas->nama
            ));
        }
        // dd($data);
        if (false) {
            $content = json_encode([
                'message' => 'Ada Error'
            ]);
            $status = 400;
        } else {
            $content = json_encode([
                'message' => 'Success',
                'teachers' => $data
            ]);
            $status = 200;
        }
        return response($content, $status);
    }

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

    public function seeData()
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
    }
}
