<!DOCTYPE html>
<html>
<head>
    <title>{{ $card->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">{{ $card->title }}</h2>

        @if ($card->detail)
            <p><strong>Judul Kelas:</strong> {{ $card->detail->judul_kelas }}</p>
            <p><strong>Deskripsi:</strong> {{ $card->detail->deskripsi }}</p>
            <p><strong>Jumlah Materi:</strong> {{ $card->detail->jumlah_materi }}</p>
            <p><strong>Materi:</strong> {{ $card->detail->materi }}</p>
            <p><strong>Persiapan:</strong> {{ $card->detail->persiapan }}</p>
        @else
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-800 px-4 py-3 rounded">
                Konten belum diisi. Silakan lengkapi konten terlebih dahulu.
            </div>
        @endif
    </div>
</body>
</html>
