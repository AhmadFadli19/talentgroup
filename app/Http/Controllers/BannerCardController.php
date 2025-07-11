<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerCardCreate;
use App\Models\BannerCardDetail;

class BannerCardController extends Controller
{
    // Menampilkan form create
    public function create()
    {
        return view('banner.create');
    }

    // Simpan data card
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'create_view' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'category' => 'nullable|in:freelance,mini_bootcamp,ready_bootcamp',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'public');
            $data['image'] = $path;
        }

        $BannerCard = BannerCardCreate::create($data);

        return redirect()->route('bannercard.dynamic', ['slug' => $BannerCard->create_view])
            ->with('success', 'Card berhasil dibuat! Silakan isi detail kontennya.');
    }

    // Tampilkan form detail konten jika belum ada
    public function detailForm($id)
    {
        $BannerCard = BannerCardCreate::findOrFail($id);

        if ($BannerCard->detail) {
            return redirect()->route('bannercard.dynamic', $BannerCard->create_view)
                ->with('info', 'Detail sudah ada. Menampilkan halaman.');
        }

        return view('banner.detail-form', compact('BannerCard'));
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

        $BannerCard = BannerCardCreate::findOrFail($id);

        BannerCardDetail::create([
            'BannerCard_id' => $BannerCard->id,
            'judul_kelas' => $request->judul_kelas,
            'deskripsi' => $request->deskripsi,
            'jumlah_materi' => $request->jumlah_materi,
            'materi' => $request->materi,
            'persiapan' => $request->persiapan,
        ]);

        return redirect()->route('bannercard.dynamic', $BannerCard->create_view)
            ->with('success', 'Detail konten berhasil disimpan!');
    }

    // Menampilkan card berdasarkan slug (create_view)
    public function dynamicView($slug)
    {
        $BannerCard = BannerCardCreate::where('create_view', $slug)->with('detail')->firstOrFail();

        if (!$BannerCard->detail) {
            return view('banner.detail-form', compact('BannerCard'));
        }

        return view('banner.show', compact('BannerCard'));
    }
}
