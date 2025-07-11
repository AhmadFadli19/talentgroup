<?php

namespace App\Http\Controllers;

use App\Models\Kolaborasi;
use Illuminate\Http\Request;
use App\Models\KolaborasiDetail;

class KolaborasiController extends Controller
{
    // Menampilkan form create
    public function create()
    {
        return view('kolaborasi.create');
    }

    // Simpan data card
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'create_view' => 'nullable|string|alpha_dash|unique:kolaborasi,create_view',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'category' => 'nullable|in:Upbanner,Downbanner',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'public');
            $data['image'] = $path;
        }

        $kolaborasi = Kolaborasi::create($data);

        return redirect()->route('kolaborasi.dynamic', ['slug' => $kolaborasi->create_view])
            ->with('success', 'Card berhasil dibuat! Silakan isi detail kontennya.');
    }

    // Tampilkan form detail konten jika belum ada
    public function detailForm($id)
    {
        $kolaborasi = Kolaborasi::findOrFail($id);

        if ($kolaborasi->detail) {
            return redirect()->route('kolaborasi.dynamic', $kolaborasi->create_view)
                ->with('info', 'Detail sudah ada. Menampilkan halaman.');
        }

        return view('kolaborasi.detail-form', compact('kolaborasi'));
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

        $kolaborasi = Kolaborasi::findOrFail($id);

        KolaborasiDetail::create([
            'kolaborasi_id' => $kolaborasi->id,
            'judul_kelas' => $request->judul_kelas,
            'deskripsi' => $request->deskripsi,
            'jumlah_materi' => $request->jumlah_materi,
            'materi' => $request->materi,
            'persiapan' => $request->persiapan,
        ]);

        return redirect()->route('kolaborasi.dynamic', $kolaborasi->create_view)
            ->with('success', 'Detail konten berhasil disimpan!');
    }

    // Menampilkan card berdasarkan slug (create_view)
    public function dynamicView($slug)
    {
        $kolaborasi = Kolaborasi::where('create_view', $slug)->with('detail')->firstOrFail();

        if (!$kolaborasi->detail) {
            return view('kolaborasi.detail-form', compact('kolaborasi'));
        }

        return view('kolaborasi.show', compact('kolaborasi'));
    }
}
