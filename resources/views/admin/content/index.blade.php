@extends('admin.layouts')


@section('content')
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                <div class="flex items-center">
                    <div class="p-3 bg-blue-100 rounded-lg">
                        <i class="fas fa-images text-blue-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500">Total Banners</p>
                        <p class="text-2xl font-bold text-gray-900">12</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 rounded-lg">
                        <i class="fas fa-th-large text-green-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500">Cards</p>
                        <p class="text-2xl font-bold text-gray-900">24</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                <div class="flex items-center">
                    <div class="p-3 bg-purple-100 rounded-lg">
                        <i class="fas fa-blog text-purple-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500">Blog Posts</p>
                        <p class="text-2xl font-bold text-gray-900">18</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                <div class="flex items-center">
                    <div class="p-3 bg-orange-100 rounded-lg">
                        <i class="fas fa-graduation-cap text-orange-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500">Courses</p>
                        <p class="text-2xl font-bold text-gray-900">8</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                <div class="flex items-center">
                    <div class="p-3 bg-red-100 rounded-lg">
                        <i class="fas fa-handshake text-red-600 text-xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-500">Partners</p>
                        <p class="text-2xl font-bold text-gray-900">6</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Management Section -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900">Content Management</h2>
                <p class="text-sm text-gray-500 mt-1">Kelola konten website Anda</p>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                    <!-- Slide Banner Card -->
                    <div
                        class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border border-blue-200 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-blue-500 rounded-lg">
                                <i class="fas fa-images text-white text-xl"></i>
                            </div>
                            <span class="text-xs bg-blue-200 text-blue-800 px-2 py-1 rounded-full">Banner</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Slide Banner</h3>
                        <p class="text-sm text-gray-600 mb-4">Kelola banner utama website</p>
                        <button onclick="openModal('slideBannerModal')"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            <i class="fas fa-plus mr-2"></i>Tambah Banner
                        </button>
                    </div>

                    <!-- Banner Card -->
                    <div
                        class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-green-500 rounded-lg">
                                <i class="fas fa-th-large text-white text-xl"></i>
                            </div>
                            <span class="text-xs bg-green-200 text-green-800 px-2 py-1 rounded-full">Card</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Banner Card</h3>
                        <p class="text-sm text-gray-600 mb-4">Kelola kartu banner konten</p>
                        <button onclick="openModal('bannerCardModal')"
                            class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            <i class="fas fa-plus mr-2"></i>Tambah Card
                        </button>
                    </div>

                    <!-- Slide Blogger -->
                    <div
                        class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border border-purple-200 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-purple-500 rounded-lg">
                                <i class="fas fa-blog text-white text-xl"></i>
                            </div>
                            <span class="text-xs bg-purple-200 text-purple-800 px-2 py-1 rounded-full">Blog</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Slide Blogger</h3>
                        <p class="text-sm text-gray-600 mb-4">Kelola artikel blog</p>
                        <button onclick="openModal('slideBloggerModal')"
                            class="w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            <i class="fas fa-plus mr-2"></i>Tambah Blog
                        </button>
                    </div>

                    <!-- Course Cards -->
                    <div
                        class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-6 border border-yellow-200 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-yellow-500 rounded-lg">
                                <i class="fas fa-graduation-cap text-white text-xl"></i>
                            </div>
                            <span class="text-xs bg-yellow-200 text-yellow-800 px-2 py-1 rounded-full">Course</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Course Cards</h3>
                        <p class="text-sm text-gray-600 mb-4">Kelola kartu kursus</p>
                        <button onclick="openModal('courseCardModal')"
                            class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            <i class="fas fa-plus mr-2"></i>Tambah Course
                        </button>
                    </div>

                    <!-- Kolaborasi Partner -->
                    <div
                        class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 border border-red-200 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 bg-red-500 rounded-lg">
                                <i class="fas fa-handshake text-white text-xl"></i>
                            </div>
                            <span class="text-xs bg-red-200 text-red-800 px-2 py-1 rounded-full">Partner</span>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Kolaborasi Partner</h3>
                        <p class="text-sm text-gray-600 mb-4">Kelola partner kolaborasi</p>
                        <button onclick="openModal('kolaborasiModal')"
                            class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-300">
                            <i class="fas fa-plus mr-2"></i>Tambah Partner
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-10">
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm">
                <div class="px-6 py-4 border-b border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-900">Kelola Konten Tambahan</h2>
                    <p class="text-sm text-gray-500 mt-1">Isi konten detail yang berkaitan dengan course, banner, blog, dan
                        lainnya</p>
                </div>

                <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Konten 1 -->
                    <div
                        class="bg-gradient-to-br from-indigo-50 to-indigo-100 border border-indigo-200 rounded-xl p-5 hover:shadow-md transition-all duration-300">
                        <div class="flex items-center mb-3">
                            <div class="bg-indigo-500 p-3 rounded-full text-white">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <h3 class="ml-3 text-lg font-semibold text-gray-800">Tambah Deskripsi</h3>
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Isi deskripsi terkait konten tertentu untuk ditampilkan di
                            halaman pengguna.</p>
                        <button
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium py-2 px-4 rounded-lg">
                            <i class="fas fa-plus mr-2"></i>Isi Deskripsi
                        </button>
                    </div>

                    <!-- Konten 2 -->
                    <div
                        class="bg-gradient-to-br from-emerald-50 to-emerald-100 border border-emerald-200 rounded-xl p-5 hover:shadow-md transition-all duration-300">
                        <div class="flex items-center mb-3">
                            <div class="bg-emerald-500 p-3 rounded-full text-white">
                                <i class="fas fa-list-ul"></i>
                            </div>
                            <h3 class="ml-3 text-lg font-semibold text-gray-800">Materi Kelas</h3>
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Kelola daftar materi yang akan ditampilkan di setiap halaman
                            kelas.</p>
                        <button
                            class="w-full bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-medium py-2 px-4 rounded-lg">
                            <i class="fas fa-plus mr-2"></i>Tambah Materi
                        </button>
                    </div>

                    <!-- Konten 3 -->
                    <div
                        class="bg-gradient-to-br from-pink-50 to-pink-100 border border-pink-200 rounded-xl p-5 hover:shadow-md transition-all duration-300">
                        <div class="flex items-center mb-3">
                            <div class="bg-pink-500 p-3 rounded-full text-white">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3 class="ml-3 text-lg font-semibold text-gray-800">Persiapan Kelas</h3>
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Informasi dan persiapan yang perlu disampaikan sebelum
                            mengikuti kelas.</p>
                        <button
                            class="w-full bg-pink-600 hover:bg-pink-700 text-white text-sm font-medium py-2 px-4 rounded-lg">
                            <i class="fas fa-plus mr-2"></i>Isi Persiapan
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Kelola Deskripsi Konten</h2>
    <p class="text-sm text-gray-500">Daftar semua konten yang telah ditambahkan ke sistem</p>
  </div>

  <div class="overflow-x-auto bg-white rounded-xl shadow border border-gray-200">
    <table class="min-w-full divide-y divide-gray-200 text-sm">
      <thead class="bg-gray-100 text-gray-700">
        <tr>
          <th class="px-4 py-3 text-left font-semibold">No</th>
          <th class="px-4 py-3 text-left font-semibold">Jenis</th>
          <th class="px-4 py-3 text-left font-semibold">Judul</th>
          <th class="px-4 py-3 text-left font-semibold">Deskripsi</th>
          <th class="px-4 py-3 text-left font-semibold">Slug / View</th>
          <th class="px-4 py-3 text-left font-semibold">Kategori</th>
          <th class="px-4 py-3 text-left font-semibold">Harga</th>
          <th class="px-4 py-3 text-left font-semibold">Sertifikat</th>
          <th class="px-4 py-3 text-left font-semibold">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 text-gray-700">
        <!-- Baris 1 -->
        <tr class="hover:bg-blue-50">
          <td class="px-4 py-3">1</td>
          <td class="px-4 py-3">Banner</td>
          <td class="px-4 py-3">Slide Awal</td>
          <td class="px-4 py-3">Banner promosi awal website</td>
          <td class="px-4 py-3">slide-awal</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3 flex space-x-2">
            <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600"><i class="fas fa-edit"></i></button>
            <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600"><i class="fas fa-trash"></i></button>
          </td>
        </tr>

        <!-- Baris 2 -->
        <tr class="hover:bg-green-50">
          <td class="px-4 py-3">2</td>
          <td class="px-4 py-3">Card</td>
          <td class="px-4 py-3">Kartu Freelance</td>
          <td class="px-4 py-3">Kartu promosi untuk freelance</td>
          <td class="px-4 py-3">freelance-card</td>
          <td class="px-4 py-3">Freelance</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3 flex space-x-2">
            <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600"><i class="fas fa-edit"></i></button>
            <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600"><i class="fas fa-trash"></i></button>
          </td>
        </tr>

        <!-- Baris 3 -->
        <tr class="hover:bg-purple-50">
          <td class="px-4 py-3">3</td>
          <td class="px-4 py-3">Blog</td>
          <td class="px-4 py-3">HTML Dasar</td>
          <td class="px-4 py-3">Panduan HTML untuk pemula</td>
          <td class="px-4 py-3">htmldasar</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3 flex space-x-2">
            <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600"><i class="fas fa-edit"></i></button>
            <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600"><i class="fas fa-trash"></i></button>
          </td>
        </tr>

        <!-- Baris 4 -->
        <tr class="hover:bg-yellow-50">
          <td class="px-4 py-3">4</td>
          <td class="px-4 py-3">Course</td>
          <td class="px-4 py-3">Belajar Laravel</td>
          <td class="px-4 py-3">Course lengkap Laravel dari dasar</td>
          <td class="px-4 py-3">laravel-course</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">Rp 250.000</td>
          <td class="px-4 py-3">Ya</td>
          <td class="px-4 py-3 flex space-x-2">
            <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600"><i class="fas fa-edit"></i></button>
            <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600"><i class="fas fa-trash"></i></button>
          </td>
        </tr>

        <!-- Baris 5 -->
        <tr class="hover:bg-red-50">
          <td class="px-4 py-3">5</td>
          <td class="px-4 py-3">Partner</td>
          <td class="px-4 py-3">Kerja Sama XYZ</td>
          <td class="px-4 py-3">Kolaborasi strategis</td>
          <td class="px-4 py-3">partner-xyz</td>
          <td class="px-4 py-3">Up Banner</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3 flex space-x-2">
            <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600"><i class="fas fa-edit"></i></button>
            <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600"><i class="fas fa-trash"></i></button>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</section>

    </main>

    <!-- Slide Banner Modal -->
    <div id="slideBannerModal"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">Tambah Slide Banner</h3>
                <button onclick="closeModal('slideBannerModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form action="{{ route('slidebanner.store') }}" method="POST" enctype="multipart/form-data"
                class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                    <input type="text" name="title"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Subjudul</label>
                    <input type="text" name="subtitle"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">URL</label>
                    <input type="text" name="url"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Teks Button</label>
                    <input type="text" name="button_text"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gambar</label>
                    <input type="file" name="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required>
                </div>
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button" onclick="closeModal('slideBannerModal')"
                        class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Banner Card Modal -->
    <div id="bannerCardModal"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">Tambah Banner Card</h3>
                <button onclick="closeModal('bannerCardModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form action="{{ route('bannercard.store') }}" method="POST" enctype="multipart/form-data"
                class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                    <input type="text" name="title"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <textarea name="description" rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama View (slug)</label>
                    <input type="text" name="create_view"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select name="category"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <option value="freelance">Freelance</option>
                        <option value="mini_bootcamp">Mini Bootcamp</option>
                        <option value="ready_bootcamp">Ready Bootcamp</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gambar</label>
                    <input type="file" name="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                        required>
                </div>
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button" onclick="closeModal('bannerCardModal')"
                        class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Slide Blogger Modal -->
    <div id="slideBloggerModal"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">Tambah Slide Blogger</h3>
                <button onclick="closeModal('slideBloggerModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form action="{{ route('slideblogger.store') }}" method="POST" enctype="multipart/form-data"
                class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                    <input type="text" name="title"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Penulis Blog</label>
                    <input type="text" name="blog_author"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <textarea name="description" rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama View (slug)</label>
                    <input type="text" name="create_view" placeholder="htmldasar"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gambar</label>
                    <input type="file" name="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button" onclick="closeModal('slideBloggerModal')"
                        class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Course Card Modal -->
    <div id="courseCardModal"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">Tambah Course Card</h3>
                <button onclick="closeModal('courseCardModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form action="{{ route('cards.store') }}" method="POST" enctype="multipart/form-data"
                class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                    <input type="text" name="title"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Harga</label>
                    <input type="text" name="price"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama View (slug)</label>
                    <input type="text" name="create_view" placeholder="htmldasar"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Sertifikat</label>
                    <select name="certificate"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <option value="tidak">Tidak</option>
                        <option value="ya">Ya</option>
                    </select>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" name="best_seller" id="bestSeller"
                        class="h-4 w-4 text-orange-600 border-gray-300 rounded focus:ring-orange-500">
                    <label for="bestSeller" class="ml-2 block text-sm font-medium text-gray-700">Best Seller</label>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gambar</label>
                    <input type="file" name="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                        required>
                </div>
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button" onclick="closeModal('courseCardModal')"
                        class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition-colors">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Kolaborasi Partner Modal -->
    <div id="kolaborasiModal"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">Tambah Kolaborasi Partner</h3>
                <button onclick="closeModal('kolaborasiModal')" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <form action="{{ route('kolaborasi.store') }}" method="POST" enctype="multipart/form-data"
                class="p-6 space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                    <input type="text" name="title"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                    <textarea name="description" rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama View (slug)</label>
                    <input type="text" name="create_view"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select name="category"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                        <option value="Upbanner">Up Banner</option>
                        <option value="Downbanner">Down Banner</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gambar</label>
                    <input type="file" name="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                        required>
                </div>
                <div class="flex justify-end space-x-3 pt-4">
                    <button type="button" onclick="closeModal('kolaborasiModal')"
                        class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                        <i class="fas fa-save mr-2"></i>Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Section Tambahan: Kelola Konten -->



    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(event) {
            const modals = ['slideBannerModal', 'bannerCardModal', 'slideBloggerModal', 'courseCardModal',
                'kolaborasiModal'
            ];
            modals.forEach(modalId => {
                const modal = document.getElementById(modalId);
                if (event.target === modal) {
                    closeModal(modalId);
                }
            });
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modals = ['slideBannerModal', 'bannerCardModal', 'slideBloggerModal', 'courseCardModal',
                    'kolaborasiModal'
                ];
                modals.forEach(modalId => {
                    const modal = document.getElementById(modalId);
                    if (!modal.classList.contains('hidden')) {
                        closeModal(modalId);
                    }
                });
            }
        });
    </script>
@endsection
