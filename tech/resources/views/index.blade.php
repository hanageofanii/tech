<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Conditioner - CV Rama Tehnik</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Menyertakan Tailwind CSS dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Memanggil favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body class="bg-6">
    <!-- Navbar Section -->
    <section>
        <nav class="shadow-md fixed top-0 left-0 w-full z-50 bg-5">
            <div class="container mx-auto px-6 py-3">
                <div class="flex justify-between items-center">
                    <!-- Logo Section -->
                    <a href="#hero">
                        <div class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-1 to-3">
                            <h1>CV RAMA TEHNIK</h1>
                        </div>
                    </a>

                    <!-- Navigation Links for Larger Screens -->
                    <div class="hidden md:flex space-x-6 font-semibold">
                        <a href="#hero" class="text-gray-800 font-bold hover:text-2 hover:underline">Home</a>
                        <a href="#about" class="text-gray-800 font-bold hover:text-2  hover:underline">About Us</a>
                        <a href="#service" class="text-gray-800 font-bold hover:text-2 hover:underline">Services</a>
                        <a href="#regis" class="text-gray-800 font-bold hover:text-2 hover:underline">Reservation</a>
                        <a href="#contact" class="text-gray-800 font-bold hover:text-2 hover:underline">Contact
                            Us</a>
                    </div>

                    <!-- Login Button for Larger Screens -->
                    <div class="hidden md:block">
                        <a href="/admin/login">
                            <button class="py-2 px-6 bg-blue-600 text-white rounded-3xl font-bold hover:bg-blue-900">
                                Login
                            </button>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden">
                        <button id="menu-toggle" class="text-gray-800 hover:text-gray-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="md:hidden mt-4 hidden space-y-4">
                    <a href="#hero" class="block text-gray-800 hover:text-black hover:underline">Home</a>
                    <a href="about" class="block text-gray-800 hover:text-black hover:underline">About Us</a>
                    <a href="#service" class="block text-gray-800 hover:text-black hover:underline">Services</a>
                    <a href="#regis" class="block text-gray-800 hover:text-black hover:underline">Reservation</a>
                    <a href="#contact" class="block text-gray-800 hover:text-black hover:underline">Contact Us</a>
                    <!-- Login Button for Mobile -->
                    <a href="/admin/login">
                        <button class="w-full py-2 px-4 bg-blue-600 text-white rounded font-semibold hover:bg-blue-900">
                            Login
                        </button>
                    </a>
                </div>
            </div>
        </nav>
    </section>

    <!-- Hero Section -->
    <section id="hero" class="relative bg-gradient-to-br from-blue-900 to-indigo-800 text-white overflow-hidden">
        <div class="absolute inset-0  opacity-50" style="background-color: #161A4C;"></div>
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1582719478181-2ce831843e31?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
        </div>

        <div class="container mx-auto px-4 py-24 md:py-80 relative -mt-7">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <!-- Left Side: Company Info -->
                <div class="w-full md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Solusi AC Anda<br>Terpercaya & Profesional.
                    </h1>
                    <p class="text-xl mb-8 text-gray-300">Memberikan layanan perbaikan, pemasangan, dan perawatan AC
                        yang efisien dan berkualitas tinggi untuk kebutuhan Anda.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="https://wa.me/+6282320661979"
                            class="bg-white text-blue-900 font-semibold px-8 py-3 rounded-full hover:bg-blue-100 transition duration-300 text-center">Hubungi
                            Kami</a>
                        <a href="#service"
                            class="border-2 border-white text-white font-semibold px-8 py-3 rounded-full hover:bg-white hover:text-blue-900 transition duration-300 text-center">Layanan
                            Kami</a>
                    </div>
                </div>

                <!-- Right Side: Features -->
                <div class="w-full md:w-1/2 md:pl-12">
                    <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-xl p-8 shadow-2xl">
                        <h2 class="text-2xl font-semibold mb-6">Kenapa Memilih CV Rama Tehnik?</h2>
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <svg class="w-6 h-6 mr-3 text-yellow-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d=" M13 10V3L4 14h7v7l9-11h-7z">
                                    </path>
                                </svg>
                                <span>Respon Cepat & Tepat</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 mr-3 text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span>Teknisi Berpengalaman</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 mr-3 text-purple-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
                                    </path>
                                </svg>
                                <span>Harga Transparan & Kompetitif</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Element -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="#d6e8ee" />
            </svg>
        </div>
    </section>


    <!-- About Us Section -->
    <section id="about" class="bg-6">
        <div class="container mx-auto py-60 px-5 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <!-- Text Column -->
                <div class="max-w-lg">
                    <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">About Us</h2>
                    <p class="mt-12 md:mt-0 text-black text-lg justify text-justify font-medium">
                        CV Rama Tehnik menyediakan layanan perawatan, perbaikan, dan pemasangan AC dengan kualitas
                        terbaik. Kami memiliki tim teknisi berpengalaman yang siap memberikan solusi AC yang efisien dan
                        sesuai kebutuhan Anda. Dengan harga yang kompetitif, layanan cepat, dan pengiriman tepat waktu,
                        kami berkomitmen untuk memberikan pelayanan terbaik bagi pelanggan. Jika Anda mencari penyedia
                        layanan AC yang handal dan profesional, CV Rama Tehnik adalah pilihan yang tepat untuk Anda.
                    </p>
                </div>

                <!-- Image Column -->
                <div class="mt-12 md:mt-0">
                    <img src="/images/image4.jpg" alt="About Us Image" class="object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section id="service" class="py-40 text-gray-800 dark:text-white" style="background-color: #161A4C;">
        <div class="container mx-auto px-4 py-8">
            <h2 class="text-3xl font-semibold text-center text-white dark:text-gray-200 mb-24">
                Our Services
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/image1.jpg" alt="Headless UI" class="w-full h-64 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-black dark:text-indigo-300 mb-2">Pemasangan AC</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 two-lines">
                            Layanan pemasangan AC profesional dan cepat untuk memastikan pendingin udara Anda berfungsi
                            dengan optimal.
                        </p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/image2.jpg" alt="Heroicons" class="w-full h-64 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-black dark:text-indigo-300 mb-2">Perawatan AC</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 two-lines">Perawatan rutin untuk menjaga
                            performa AC Anda tetap prima dan hemat energi.</p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                    <img src="/images/image3.jpg" alt="Heroicons" class="w-full h-64 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-black dark:text-indigo-300 mb-2">Perbaikan AC</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 two-lines">Jasa perbaikan AC dengan teknisi
                            berpengalaman untuk mengatasi berbagai masalah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form Section -->
    <section id="regis" class="mt-20 mb-10 py-20 px-4 sm:px-8 lg:px-24">
        <div class="max-w-3xl mx-auto mt-8 mb-10 bg-white shadow-md rounded-lg overflow-hidden">
            <div class="text-2xl py-4 px-6 text-white text-center font-bold uppercase"
                style="background-color: #161A4C;">
                Reservasi Form
            </div>
            <form class="py-4 px-6" action="{{ route('submit.form') }}" method="POST">
                @csrf <!-- CSRF token for security -->

                <!-- Name -->
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="nama" name="nama"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <!-- Email and Phone Number -->
                <div class="flex flex-col sm:flex-row gap-4 mb-4">
                    <div class="w-full sm:w-1/2">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="w-full sm:w-1/2">
                        <label for="no_hp" class="block text-gray-700 font-bold mb-2">Phone Number</label>
                        <input type="text" id="no_hp" name="no_hp"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                </div>

                <!-- Address -->
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 font-bold mb-4">Address</label>
                    <textarea id="alamat" name="alamat"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required></textarea>
                </div>

                <!-- Date and Time -->
                <div class="flex flex-col sm:flex-row gap-4 mb-4">
                    <div class="w-full sm:w-1/2">
                        <label for="tanggal" class="block text-gray-700 font-bold mb-2">Date</label>
                        <input type="date" id="tanggal" name="tanggal"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                    <div class="w-full sm:w-1/2">
                        <label for="waktu" class="block text-gray-700 font-bold mb-2">Time</label>
                        <input type="time" id="waktu" name="waktu"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                    </div>
                </div>

                <!-- Jenis Layanan and Jenis Properti -->
                <div class="flex flex-col sm:flex-row gap-4 mb-4">
                    @php
                        $jenisLayanans = DB::table('jenis_layanans')->get();
                        $jenisPropertis = DB::table('jenis_propertis')->get();
                    @endphp

                    <!-- Jenis Layanan -->
                    <div class="w-full sm:w-1/2">
                        <label for="service" class="block text-gray-700 font-bold mb-2">Jenis Layanan</label>
                        <select id="service" name="id_jenis_layanan"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="">Pilih Layanan</option>
                            @foreach ($jenisLayanans as $layanan)
                                <option value="{{ $layanan->id_jenis_layanan }}">
                                    {{ $layanan->jenis_layanan }} - Rp {{ number_format($layanan->harga, 0, ',', '.') }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Jenis Properti -->
                    <div class="w-full sm:w-1/2">
                        <label for="properti" class="block text-gray-700 font-bold mb-2">Jenis Properti</label>
                        <select id="properti" name="id_jenis_properti"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required>
                            <option value="">Pilih Properti</option>
                            @foreach ($jenisPropertis as $jenis)
                                <option value="{{ $jenis->id_jenis_properti }}">{{ $jenis->jenis_properti }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Notes -->
                <div class="mb-4">
                    <label for="notes" class="block text-gray-700 font-bold mb-2">Catatan</label>
                    <textarea id="notes" name="notes"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="mb-4 flex justify-center items-center">
                    <button type="submit" class="bg-blue-500 hover:bg-1 text-white py-2 px-12 rounded">Kirim</button>
                </div>
            </form>

            <!-- Success Message -->
            @if (session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '{{ session('success') }}',
                        showConfirmButton: true,
                        confirmButtonText: 'Tutup',
                        timer: 5000
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('regis').scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    });
                </script>
            @endif
        </div>
    </section>




    <!-- Feedback Section -->
    <section id="contact" class="text-gray-600 body-font relative py-40" style="background-color: #161A4C">
        <!-- Title Section -->
        <div class="w-full text-center">
            <h2 class="text-white text-3xl font-bold">Contact Us</h2>
        </div>
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div
                class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                    marginheight="0" marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?632633541606!2d107.1089147!3d-6.3954406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69991fe5affc31%3A0xf68e53ed057fceb1!2sMama%20radit!5e0!3m2!1sen!2sid!4v1606546878909!5m2!1sen!2si"
                    style="filter: grayscale(1) contrast(1.2) opacity(0.4);">
                </iframe>


                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">Perumahan Kota Serang Baru Blok B 71 No 12, Serang Baru, Bekasi, Jawa
                            Barat,
                            17330
                        </p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a class="text-red-500 leading-relaxed">cvramatehnik@email.com</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE
                        </h2>
                        <p class="leading-relaxed">+62 823-2066-1979</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Formulir Umpan Balik</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Silakan tinggalkan umpan balik atau pertanyaan
                    Anda
                </p>
                <form action="{{ route('saran.store') }}" method="POST">
                    @csrf
                    <div class="relative mb-4">
                        <label for="nama" class="leading-3 text-sm text-gray-600">Nama Anda</label>
                        <textarea id="nama" name="nama"
                            class="w-full bg-gray-100 rounded border border-gray-300 focus:ring-1 focus:ring-indigo-100 focus:bg-white h-10 text-base outline-none text-gray-700 resize-none p-2"></textarea>

                        <label for="saran" class="leading-7 text-sm text-gray-600">Pesan Anda</label>
                        <textarea id="saran" name="saran"
                            class="w-full bg-gray-100 rounded border border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-white h-32 text-base outline-none text-gray-700 resize-none p-2"></textarea>
                    </div>

                    <div class="flex justify-center items-center">
                        <button type="submit"
                            class="mt-2 bg-blue-500 hover:bg-1 text-white text-xs font-bold py-2 px-4 rounded">
                            Kirim
                        </button>
                    </div>
                </form>
                @if (session('sukses'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Terima Kasih atas umpan balik Anda',
                            text: '{{ session('sukses') }}',
                            showConfirmButton: true,
                            confirmButtonText: 'Tutup',
                            timer: 5000
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById('contact').scrollIntoView({
                                    behavior: 'smooth'
                                });
                            }
                        });
                    </script>
                @endif

            </div>
        </div>
    </section>


    <section class="relative bg-6">
        <!-- Footer Section -->
        <footer>
            <div class="py-4 text-black font-semibold items-center bg-5">
                <div class="container px-4 mx-auto">
                    <div class="flex flex-wrap justify-center sm:justify-between">
                        <!-- CV Rama Tehnik Section -->
                        <div class="px-8 my-4 w-full sm:w-auto xl:w-1/5 text-center sm:text-left">
                            <a href="#hero">
                                <div
                                    class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-1 to-3">
                                    <h1>CV RAMA TEHNIK</h1>
                                </div>
                            </a>

                            <p class="text-justify sm:text-justify mt-4">
                                CV Rama Tehnik menawarkan layanan pemasangan, perbaikan, dan pemeliharaan AC dengan
                                solusi andal dan tepat waktu.
                            </p>
                            <div class="flex justify-center gap-4 mt-4">
                                <a href="#"
                                    class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 320 512">
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 496 512">
                                        <path
                                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full hover:text-blue-400 hover:border-blue-400">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path
                                            d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>


                        <!-- Company Section -->
                        <div class="px-4 my-4 w-full sm:w-auto xl:w-1/8 text-center sm:text-left">
                            <div>
                                <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Company</h2>
                            </div>
                            <ul class="leading-8">
                                <li><a href="#about" class="hover:text-blue-400">About Us</a></li>
                                <li><a href="#service" class="hover:text-blue-400">Services</a></li>
                                <li><a href="#regis" class="hover:text-blue-400">Reservation</a></li>
                                <li><a href="#contact" class="hover:text-blue-400">Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Address Section -->
                        <div class="px-4 my-4 w-full sm:w-auto xl:w-2/6 text-center sm:text-left">
                            <div>
                                <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Address</h2>
                            </div>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="200"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class=" text-white p-4" style="background-color: #161A4C">
                <div class="container mx-auto text-center">
                    <p>
                        &copy; 2024
                        <a href="#hero" class="text-white hover:text-blue-500 transition duration-300">
                            CV RAMA TEHNIK
                        </a>. All rights reserved.
                    </p>
                </div>
            </footer>
    </section>

    {{-- cookie policy --}}
    <section id="cookie-policy" class="fixed bottom-12 left-12 mb-4 mr-24 w-48">
        <div class="bg-white rounded-lg shadow-lg p-3">
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center">
                    <img src="https://www.svgrepo.com/show/401340/cookie.svg" alt="Cookie" class="h-5 w-5 mr-2">
                    <span class="text-gray-700 font-bold text-xs">Cookie Policy</span>
                </div>
                <button id="close-button" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <p class="text-gray-600 text-xs">
                We use cookies to enhance your experience. By continuing to visit this site, you agree to our use of
                cookies.
            </p>
            <button id="accept-button"
                class="mt-2 bg-blue-500 hover:bg-1 text-white text-xs font-bold py-1 px-3 rounded">
                Accept
            </button>
        </div>
    </section>


    <section class="fixed bottom-0 right-0 mb-4 sm:mb-8 mr-4 sm:mr-8">
        <!-- Chat Button -->
        <button id="open-chat"
            class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-400 transition duration-300 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Chat with Admin Bot
        </button>

        <!-- Chat Container -->
        <div id="chat-container"
            class="hidden fixed bottom-16 right-4 sm:right-8 w-full sm:w-80 max-w-xs sm:max-w-md">
            <div class="bg-white shadow-md rounded-lg w-full">
                <div class="p-4 border-b bg-blue-500 text-white rounded-t-lg flex justify-between items-center">
                    <p class="text-lg font-semibold">Admin Bot</p>
                    <button id="close-chat"
                        class="text-gray-300 hover:text-gray-400 focus:outline-none focus:text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Chat Messages -->
                <div id="chatbox" class="p-4 h-64 sm:h-72 overflow-y-auto space-y-2">
                    <!-- Initial Message -->
                    <div class="mb-2">
                        <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">Halo! Anda bisa bertanya
                            tentang:</p>
                        <ul class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 mt-2">
                            <li>1. Lokasi CV Rama Tehnik</li>
                            <li>2. Layanan yang kami tawarkan</li>
                            <li>3. Jam operasional</li>
                            <li>4. Harga perbaikan AC</li>
                            <li>5. Kontak kami</li>
                            <li>6. Jenis AC yang kami perbaiki</li>
                            <li>7. Proses perbaikan AC</li>
                            <li>8. Waktu estimasi perbaikan</li>
                            <li>9. Ketersediaan teknisi</li>
                            <li>10. Garansi layanan kami</li>
                        </ul>
                    </div>
                </div>

                <!-- Input and Send Button -->
                <div class="p-4 border-t flex">
                    <input id="user-input" type="text" placeholder="Tanya apa saja!"
                        class="w-full px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button id="send-button"
                        class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-400 transition duration-300">Send</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        const chatbox = document.getElementById("chatbox");
        const chatContainer = document.getElementById("chat-container");
        const userInput = document.getElementById("user-input");
        const sendButton = document.getElementById("send-button");
        const openChatButton = document.getElementById("open-chat");
        const closeChatButton = document.getElementById("close-chat");

        let isChatboxOpen = true;

        // Function to toggle the chatbox visibility
        function toggleChatbox() {
            chatContainer.classList.toggle("hidden");
            isChatboxOpen = !isChatboxOpen;
        }

        openChatButton.addEventListener("click", toggleChatbox);
        closeChatButton.addEventListener("click", toggleChatbox);

        sendButton.addEventListener("click", function() {
            const userMessage = userInput.value;
            if (userMessage.trim() !== "") {
                addUserMessage(userMessage);
                respondToUser(userMessage);
                userInput.value = "";
            }
        });

        userInput.addEventListener("keyup", function(event) {
            if (event.key === "Enter") {
                const userMessage = userInput.value;
                addUserMessage(userMessage);
                respondToUser(userMessage);
                userInput.value = "";
            }
        });

        function addUserMessage(message) {
            const messageElement = document.createElement("div");
            messageElement.classList.add("mb-2", "text-right");
            messageElement.innerHTML = `<p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block">${message}</p>`;
            chatbox.appendChild(messageElement);
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        function addBotMessage(message) {
            const messageElement = document.createElement("div");
            messageElement.classList.add("mb-2");
            messageElement.innerHTML =
                `<p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">${message}</p>`;
            chatbox.appendChild(messageElement);
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        function respondToUser(userMessage) {
            const message = userMessage.toLowerCase().trim();

            let botResponse = "";

            // FAQ about CV Rama Tehnik
            if (message.includes("1") && !message.includes("10")) {
                botResponse =
                    "Kami berlokasi di Perumahan Kota Serang Baru Blok B 71 No 12, Desa Sukaragam, Kec. Serang Baru, Kab. Bekasi.";
            } else if (message.includes("2")) {
                botResponse = "Kami menyediakan layanan perbaikan dan pemeliharaan AC untuk rumah dan kantor.";
            } else if (message.includes("3")) {
                botResponse = "Kami buka dari Senin sampai Sabtu, pukul 08.00 - 17.00 WIB.";
            } else if (message.includes("4")) {
                botResponse =
                    "Harga perbaikan AC bervariasi tergantung jenis kerusakan. Hubungi kami untuk info lebih lanjut.";
            } else if (message.includes("5")) {
                botResponse = "Anda bisa menghubungi kami di 085216202378 atau via email: ayiatendi56@gmail.com.";
            } else if (message.includes("6")) {
                botResponse = "Kami dapat memperbaiki berbagai jenis AC, termasuk AC split, AC window, dan AC central.";
            } else if (message.includes("7")) {
                botResponse =
                    "Proses perbaikan AC dimulai dengan diagnosis kerusakan, penggantian komponen, dan pengujian kinerja AC.";
            } else if (message.includes("8")) {
                botResponse = "Estimasi waktu perbaikan biasanya antara 1 hingga 3 jam, tergantung kerusakannya.";
            } else if (message.includes("9")) {
                botResponse = "Kami memiliki teknisi yang terlatih dan siap datang ke lokasi sesuai jadwal.";
            } else if (message.includes("10")) {
                botResponse = "Layanan kami dilengkapi dengan garansi 6 bulan untuk perbaikan yang dilakukan.";
            } else {
                botResponse = `
        Maaf, saya tidak mengerti. Coba tanya yang lain seperti lokasi, layanan, jam operasional, dll. Silahkan input kembali.<br><br>
        1. Lokasi CV Rama Tehnik<br>
        2. Layanan yang kami tawarkan<br>
        3. Jam operasional<br>
        4. Harga perbaikan AC<br>
        5. Kontak kami<br>
        6. Jenis AC yang kami perbaiki<br>
        7. Proses perbaikan AC<br>
        8. Waktu estimasi perbaikan<br>
        9. Ketersediaan teknisi<br>
        10. Garansi layanan kami<br>
    `;
            }

            // Simulate delay for bot response
            setTimeout(() => {
                addBotMessage(botResponse);
            }, 500);
        }

        // Get the elements
        const cookiePolicy = document.getElementById("cookie-policy");
        const closeButton = document.getElementById("close-button");
        const acceptButton = document.getElementById("accept-button");

        // Event listener for the "Accept" button
        acceptButton.addEventListener("click", function() {
            cookiePolicy.style.display = "none"; // Hide the popup
        });

        // Event listener for the "X" button
        closeButton.addEventListener("click", function() {
            cookiePolicy.style.display = "none"; // Hide the popup
        });

        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
