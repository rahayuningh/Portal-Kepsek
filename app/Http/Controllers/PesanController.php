<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PesanController extends Controller
{
    public function sentbox()
    {
        $data = Pesan::all();
        $messages = array();
        foreach ($data as $message) {
            $teacher = $message->guru;
            $pegawai = $teacher->pegawai;
            $civitas = $pegawai->civitas;
            array_push($messages, array(
                'id' => $message->id,
                'penerima_id' => $teacher->id,
                'penerima_nama' => $civitas->nama,
                'subject' => $message->subject,
                'konten' => $message->konten,
                'created_at' => $message->created_at,
            ));
        }
        return view('pesan/outbox', ['messages' => $messages]);
    }

    public function detail($id)
    {
        if (!$id) {
            return redirect()->back()->with('fail', 'Gagal membuka detail pesan, tidak ada id pesan yang disertakan');
        }
        $pesan = Pesan::find($id);
        $teacher = $pesan->guru;
        $pegawai = $teacher->pegawai;
        $civitas = $pegawai->civitas;
        $message = array(
            'id' => $pesan->id,
            'penerima_id' => $teacher->id,
            'penerima_nama' => $civitas->nama,
            'subject' => $pesan->subject,
            'konten' => $pesan->konten,
            'created_at' => $pesan->created_at,
        );
        return view('pesan/message_detail', ['message' => $message]);
    }

    public function createMessage(Request $request)
    {
        $request->validate(
            [
                'receiver' => 'numeric|required',
                'subject' => 'required',
                'content' => 'required'
            ],
            [
                'receiver.numeric' => 'Id penerima harus dalam bentuk angka',
                'receiver.required' => 'Tolong pilih penerima',
                'subject.required' => 'Tolong isi subject pesan',
                'content.required' => 'Isi pesan harus ada',
            ]
        );

        $teacher = Guru::find($request->receiver);
        $pegawai = $teacher->pegawai;
        $civitas = $pegawai->civitas;

        $email = $pegawai->email;
        $recipient = $civitas->nama;
        $subject = $request->subject;

        $data = array(
            'recipient' => $recipient,
            'content' => $request->content
        );

        Mail::send('mail', $data, function ($message) use ($subject,  $email, $recipient) {
            $message->from('admin@scb.baznas.id', 'Admin Baznas');
            $message->to($email, $recipient);
            $message->subject($subject);
        });

        if (Mail::failures()) {
            return redirect()->back()->with('fail', 'Pesan gagal terkirim');
        }

        $message = new Pesan([
            'subject' => $request->subject,
            'konten' => $request->content
        ]);

        $teacher->messages()->save($message);

        return redirect()->back()->with('success', 'Pesan berhasil terkirim');
    }

    public function deleteMessage($id)
    {
        if (!$id) {
            return redirect()->back()->with('fail', 'Gagal menghapus pesan, tidak ada id pesan yang disertakan');
        }
        $pesan = Pesan::find($id);
        $pesan->delete();
        return redirect()->back()->with('success', 'Hapus pesan berhasil');
    }
}
