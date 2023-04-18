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
                    <form method="post" action="{{ route('siswa.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card mt-5">
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
                                            <span class="font-medium">Pastikan persyaratan terpenuhi:</span>
                                            <ul class="mt-1.5 ml-4 list-disc list-inside">
                                                @foreach ($errors->all() as $error)
                                              
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
                                            <h3 class="pt-4 text-2xl text-center">Buat Data!</h3>
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
                                                            value="{{ old('firstname') }}" placeholder="Nama Depan" />
                                                            <div>
                                                                @if ($errors->has('firstname'))
                                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                            class="font-medium">Oops! </span>{{ $errors->first('firstname') }}</span>
                                                                    @enderror
            
                                                            </div>

                                                    </div>
                                                    <div class="md-200:ml-2">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Nama Belakang
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="lastname" type="text" placeholder="Nama Belakang"
                                                            value="{{ old('lastname') }}" />
                                                            <div>
                                                                @if ($errors->has('lastname'))
                                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                            class="font-medium">Oops! </span>{{ $errors->first('lastname') }}</span>
                                                                    @enderror
            
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="mb-100">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Nama Lengkap
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="nama" type="text" placeholder="Nama Lengkap"
                                                        value="{{ old('nama') }}" />
                                                </div>
                                                <div>
                                                    @if ($errors->has('nama'))
                                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                class="font-medium">Oops! </span>{{ $errors->first('nama') }}</span>
                                                        @enderror

                                                </div>
                                                <div class="mb-100">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Email
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="email" type="email" placeholder="Email"
                                                        value="{{ old('email') }}" />
                                                        <div>
                                                            @if ($errors->has('email'))
                                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                        class="font-medium">Oops! </span>{{ $errors->first('email') }}</span>
                                                                @enderror
        
                                                        </div>
                                                </div>
                                                <div class="mb-400 md:flex md:justify-between">
                                                    <div class="mb-100 md:mr-2 md:mb-0">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Kelas
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="kelas" type="text" placeholder="Kelas"
                                                            value="{{ old('kelas') }}" />
                                                            <div>
                                                                @if ($errors->has('kelas'))
                                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                            class="font-medium">Oops! </span>{{ $errors->first('kelas') }}</span>
                                                                    @enderror
            
                                                            </div>

                                                    </div>
                                                    <div class="md:ml-2">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Nis
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="nis" type="text" placeholder="Nis" />
                                                            <div>
                                                                @if ($errors->has('nis'))
                                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                            class="font-medium">Oops! </span>{{ $errors->first('nis') }}</span>
                                                                    @enderror
            
                                                            </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="mb-100">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Jurusan
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="jurusan" type="text" placeholder="Jurusan"
                                                        value="{{ old('jurusan') }}" />
                                                        <div>
                                                            @if ($errors->has('jurusan'))
                                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                        class="font-medium">Oops! </span>{{ $errors->first('jurusan') }}</span>
                                                                @enderror
        
                                                        </div>
                                                </div>
                                                <div class="mb-4 md:flex md:justify-between">
                                                    <div class="mb-100 md:mr-2 md:mb-0">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Alamat
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="alamat" type="text" placeholder="Alamat"
                                                            value="{{ old('alamat') }}" />
                                                            <div>
                                                                @if ($errors->has('alamat'))
                                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                            class="font-medium">Oops! </span>{{ $errors->first('alamat') }}</span>
                                                                    @enderror
            
                                                            </div>

                                                    </div>
                                                    <div class="md-200:ml-2">
                                                        <label class="block mb-2 text-sm font-bold text-gray-700">
                                                            Tempat Lahir
                                                        </label>
                                                        <input
                                                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                            name="ttl" type="date"
                                                            placeholder="Tempat Tanggal Lahir"
                                                            value="{{ old('ttl') }}" />
                                                            <div>
                                                                @if ($errors->has('ttl'))
                                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                            class="font-medium">Oops! </span>{{ $errors->first('ttl') }}</span>
                                                                    @enderror
            
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Nomor Telepon
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="mobile" type="text" placeholder="Nomor Telepon"
                                                        value="{{ old('mobile') }}" />
                                                        <div>
                                                            @if ($errors->has('mobile'))
                                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                        class="font-medium">Oops! </span>{{ $errors->first('mobile') }}</span>
                                                                @enderror
        
                                                        </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">
                                                        Gambar
                                                    </label>
                                                    <input
                                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                                        name="image" type="file" accept="image/*"
                                                        onchange="showMyImage(this)" placeholder="Gambar"
                                                        value="{{ old('image') }} " />
                                                        <div>
                                                            @if ($errors->has('image'))
                                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                                        class="font-medium">Oops! </span>{{ $errors->first('image') }}</span>
                                                                @enderror
        
                                                        </div>
                                                    <br />
                                                    <img id="thumbnil" style="width:20%; margin-top:10px;"
                                                        src="" />


                                                    <div class="card-footer">
                                                        <button class="btn btn-primary" type="submit">Buat</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function showMyImage(fileInput) {
                                    var files = fileInput.files;
                                    for (var i = 0; i < files.length; i++) {
                                        var file = files[i];
                                        var imageType = /image.*/;
                                        if (!file.type.match(imageType)) {
                                            continue;
                                        }
                                        var img = document.getElementById("thumbnil");
                                        img.file = file;
                                        var reader = new FileReader();
                                        reader.onload = (function(aImg) {
                                            return function(e) {
                                                aImg.src = e.target.result;
                                            };
                                        })(img);
                                        reader.readAsDataURL(file);
                                    }
                                }
                            </script>
</body>

</html>
@vite(['resources/css/app.css', 'resources/js/app.js'])
