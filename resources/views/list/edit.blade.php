<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="main-content">
                <div class="container">
                    <form method="post" action="{{ route('siswa.update', $siswa->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="card mt-5">
                            <div class="card-header">
                                <h3></h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Danger</span>
                                        <div>
                                            <span class="font-medium">Pastikan persyaratan ini terpenuhi:</span>
                                            <ul class="mt-1.5 ml-4 list-disc list-inside">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="flex p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div>
                                            <span class="font-medium">Success alert!</span> {{ session('success') }}
                                        </div>
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div>
                                            <span class="font-medium">Danger alert!</span> {{ session('error') }}
                                        </div>
                                    </div>
                                @endif
                                <div class="flex justify-center px-6 my-12">
                                    <!-- Row -->
                                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                                        <!-- Col -->

                                        <!-- Col -->

                                        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                                            <h3 class="pt-4 text-2xl text-center">Ubah Data!</h3>
                                            <br>
                                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded"
                                                enctype="multipart/form-data">
                                                <div class="mb-4 md:flex md:justify-between">
                                                    <div class="mb-100 md:mr-2 md:mb-0">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Nama Depan
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="firstname" type="text"
                                                            value="{{ old('firstname') }}"
                                                            placeholder="{{ $siswa->firstname }}" />
                                                    </div>
                                                    <div class="md-200:ml-2">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Nama Belakang
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="lastname" type="text"
                                                            placeholder="{{ $siswa->lastname }}"
                                                            value="{{ old('lastname') }}" />
                                                    </div>
                                                </div>
                                                <div class="mb-100">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Nama Lengkap
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="nama" type="text" placeholder="{{ $siswa->nama }}"
                                                        value="{{ old('nama') }}" />
                                                </div>
                                                <div class="mb-100">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Email
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="email" type="email" placeholder="{{ $siswa->email }}"
                                                        value="{{ old('email') }}" />
                                                </div>
                                                <div class="mb-400 md:flex md:justify-between">
                                                    <div class="mb-100 md:mr-2 md:mb-0">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Kelas
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="kelas" type="text"
                                                            placeholder="{{ $siswa->kelas }}"
                                                            value="{{ old('kelas') }}" />

                                                    </div>
                                                    <div class="md:ml-2">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Nis
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="nis" type="text"
                                                            placeholder="{{ $siswa->nis }}" />
                                                    </div>
                                                </div>
                                                <div class="mb-100">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Jurusan
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="jurusan" type="text"
                                                        placeholder="{{ $siswa->jurusan }}"
                                                        value="{{ old('jurusan') }}" />
                                                </div>
                                                <div class="mb-4 md:flex md:justify-between">
                                                    <div class="mb-100 md:mr-2 md:mb-0">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Alamat
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="alamat" type="text"
                                                            placeholder="{{ $siswa->alamat }}"
                                                            value="{{ old('alamat') }}" />

                                                    </div>
                                                    <div class="md-200:ml-2">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Tempat Lahir
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="ttl" type="date"
                                                            placeholder="{{ $siswa->ttl }}"
                                                            value="{{ old('ttl') }}" />
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Nomor Telepon
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="mobile" type="text"
                                                        placeholder="{{ $siswa->mobile }}"
                                                        value="{{ old('mobile') }}" />
                                                </div>
                                                <div class="mb-4">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Gambar
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="image" type="file" placeholder="Gambar"
                                                        value="{{ old('image') }}" />
                                                    <div class="card-footer">
                                                        <button class="btn btn-primary" type="submit">Ubah</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

</body>

</html>
@vite(['resources/css/app.css', 'resources/js/app.js'])
