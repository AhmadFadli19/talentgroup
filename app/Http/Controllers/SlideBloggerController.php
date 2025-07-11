<?php

namespace App\Http\Controllers;

use App\Models\SlideBlogger;
use Illuminate\Http\Request;
use App\Models\SlideBloggerDetail;

class SlideBloggerController extends Controller
{
    // Menampilkan form create
    public function create()
    {
        return view('blogger.create');
    }

    // Simpan data card
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'blog_author' => 'nullable|string',
            'description' => 'nullable|string',
            'url' => 'nullable|string',
            'create_view' => 'required|string|alpha_dash|unique:SlideBlogger,create_view',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'public');
            $data['image'] = $path;
        }

        $card = SlideBlogger::create($data);

        return redirect()->route('slideblogger.dynamic', ['slug' => $card->create_view])
            ->with('success', 'Card berhasil dibuat! Silakan isi detail kontennya.');
    }

    // Tampilkan form detail konten jika belum ada
    public function detailForm($id)
    {
        $card = SlideBlogger::findOrFail($id);

        if ($card->detail) {
            return redirect()->route('slideblogger.dynamic', $card->create_view)
                ->with('info', 'Detail sudah ada. Menampilkan halaman.');
        }

        return view('blogger.detail-form', compact('card'));
    }

    // Simpan data detail konten
    public function submitDetail(Request $request, $id)
    {
        $request->validate([
            'judul_kelas' => 'required|string',
            'deskripsi' => 'required|string',
            'jumlah_materi' => 'required|numeric|min:1',
            'materi' => 'required|string',
            'persiapan' => 'required|string',
        ]);

        $card = SlideBlogger::findOrFail($id);

        SlideBloggerDetail::create([
            'slideBlogger_id' => $card->id,
            'judul_kelas' => $request->judul_kelas,
            'deskripsi' => $request->deskripsi,
            'jumlah_materi' => $request->jumlah_materi,
            'materi' => $request->materi,
            'persiapan' => $request->persiapan,
        ]);

        return redirect()->route('slideblogger.dynamic', $card->create_view)
            ->with('success', 'Detail konten berhasil disimpan!');
    }

    // Menampilkan card berdasarkan slug (create_view)
    public function dynamicView($slug)
    {
        $card = SlideBlogger::where('create_view', $slug)->with('detail')->firstOrFail();

        if (!$card->detail) {
            return view('blogger.detail-form', compact('card'));
        }

        return view('blogger.show', compact('card'));
    }
}
