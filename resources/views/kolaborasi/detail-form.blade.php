    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Form - {{ $kolaborasi->title }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 p-6">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
            <h2 class="text-xl font-bold mb-4">Isi Detail Konten: {{ $kolaborasi->title }}</h2>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('kolaborasi.detail.submit', $kolaborasi->id) }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block mb-1 font-medium">Judul Kelas</label>
                    <input type="text" name="judul_kelas" class="w-full border p-2 rounded" value="{{ old('judul_kelas') }}" required />
                </div>

                <div>
                    <label class="block mb-1 font-medium">Deskripsi Kelas</label>
                    <textarea name="deskripsi" rows="4" class="w-full border p-2 rounded" required>{{ old('deskripsi') }}</textarea>
                </div>

                <div>
                    <label class="block mb-1 font-medium">Jumlah Materi</label>
                    <input type="number" name="jumlah_materi" class="w-full border p-2 rounded" value="{{ old('jumlah_materi') }}" min="1" required />
                </div>

                <div>
                    <label class="block mb-1 font-medium">Materi</label>
                    <textarea name="materi" rows="4" class="w-full border p-2 rounded" required>{{ old('materi') }}</textarea>
                </div>

                <div>
                    <label class="block mb-1 font-medium">Persiapan Kelas</label>
                    <textarea name="persiapan" rows="3" class="w-full border p-2 rounded" required>{{ old('persiapan') }}</textarea>
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
                        Simpan Konten
                    </button>
                    <a href="{{ url('/' . $kolaborasi->id) }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                        Lihat Preview
                    </a>
                </div>
            </form>
        </div>
    </body>
    </html>