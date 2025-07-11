<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\CardDetail;
use Illuminate\Http\Request;

class CardController extends Controller
{
    // Menampilkan form create
    public function create()
    {
        return view('cards.create');
    }

    // Simpan data card
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'nullable|string',
            'create_view' => 'required|string|alpha_dash|unique:cards,create_view',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'certificate' => 'required|in:ya,tidak',
            'best_seller' => 'nullable',
        ]);

        $data['best_seller'] = $request->has('best_seller');
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'public');
            $data['image'] = $path;
        }

        $card = Card::create($data);

        return redirect()->route('cards.dynamic', ['slug' => $card->create_view])
            ->with('success', 'Card berhasil dibuat! Silakan isi detail kontennya.');
    }

    // Tampilkan form detail konten jika belum ada
    public function detailForm($id)
    {
        $card = Card::findOrFail($id);

        if ($card->detail) {
            return redirect()->route('cards.dynamic', $card->create_view)
                ->with('info', 'Detail sudah ada. Menampilkan halaman.');
        }

        return view('cards.detail-form', compact('card'));
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

        $card = Card::findOrFail($id);

        CardDetail::create([
            'card_id' => $card->id,
            'judul_kelas' => $request->judul_kelas,
            'deskripsi' => $request->deskripsi,
            'jumlah_materi' => $request->jumlah_materi,
            'materi' => $request->materi,
            'persiapan' => $request->persiapan,
        ]);

        return redirect()->route('cards.dynamic', $card->create_view)
            ->with('success', 'Detail konten berhasil disimpan!');
    }

    // Menampilkan card berdasarkan slug (create_view)
    public function dynamicView($slug)
    {
        $card = Card::where('create_view', $slug)->with('detail')->firstOrFail();

        if (!$card->detail) {
            return view('cards.detail-form', compact('card'));
        }

        return view('cards.show', compact('card'));
    }
}
