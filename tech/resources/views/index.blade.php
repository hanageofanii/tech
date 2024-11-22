<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Conditioner - CV Rama Tehnik</title>
    <!-- Menyertakan Tailwind CSS dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Memanggil favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>



<body>
    <!-- Navbar Section -->
    <section>
        <nav class="shadow-md fixed top-0 left-0 w-full z-50 bg-blue-200">
            <div class="container mx-auto px-6 py-3">
                <div class="flex justify-between items-center">
                    <!-- Logo Section -->
                    <div
                        class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 via-teal-400 to-green-500">
                        <h1>CV RAMA TEHNIK</h1>
                    </div>

                    <!-- Navigation Links for Larger Screens -->
                    <div class="hidden md:flex space-x-6 font-semibold">
                        <a href="#about" class="text-gray-800 hover:text-black  hover:underline">About Us</a>
                        <a href="#service" class="text-gray-800 hover:text-black hover:underline">Services</a>
                        <a href="#regis" class="text-gray-800 hover:text-black hover:underline">Registration</a>
                        <a href="#testi" class="text-gray-800 hover:text-black hover:underline">Testimonial</a>
                        <a href="#contact" class="text-gray-800 hover:text-black hover:underline">Contact Us</a>
                    </div>

                    <!-- Login Button for Larger Screens -->
                    <div class="hidden md:block">
                        <a href="/admin/login">
                            <button
                                class="py-2 px-6 bg-blue-500 text-gray-800 rounded-3xl font-semibold hover:bg-blue-600">
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
                    <a href="about" class="block text-gray-800 hover:text-black hover:underline">About Us</a>
                    <a href="#service" class="block text-gray-800 hover:text-black hover:underline">Services</a>
                    <a href="#regis" class="block text-gray-800 hover:text-black hover:underline">Registration</a>
                    <a href="#testi" class="block text-gray-800 hover:text-black hover:underline">Testimonial</a>
                    <a href="#contact" class="block text-gray-800 hover:text-black hover:underline">Contact Us</a>
                    <!-- Login Button for Mobile -->
                    <a href="/admin/login">
                        <button class="w-full py-2 px-4 bg-blue-500 text-white rounded font-semibold hover:bg-blue-600">
                            Login
                        </button>
                    </a>
                </div>
            </div>
        </nav>
    </section>

    {{-- Home --}}
    <section class="container mx-auto py-16 px-10 sm:px-10 lg:px-10 mt-10">
        <div class="relative" data-carousel="static" id="carouselExampleControls">
            <div class="relative h-66 overflow-hidden rounded-lg md:h-96 items-center mt-12">
                <!-- Slide 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img alt="Layanan perbaikan AC oleh CV Rama Tehnik" class="block w-full" height="900"
                        src="/images/slider1.jpg" width="800" />
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <div class="text-center text-white">
                            <h2 class="text-4xl font-bold">Selamat Datang di CV Rama Tehnik</h2>
                            <p class="mt-2 text-lg">Layanan perbaikan AC yang andal dan profesional</p>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img alt="Teknisi AC sedang melakukan instalasi" class="block w-full" height="900"
                        src="/images/image4.jpg" width="800" />
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <div class="text-center text-white">
                            <h2 class="text-4xl font-bold">Teknisi Ahli</h2>
                            <p class="mt-2 text-lg">Kenikmatan Anda adalah prioritas kami, dengan instalasi dan
                                perbaikan AC ahli</p>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="">
                    <img alt="Perbaikan AC oleh CV Rama Tehnik" class="block w-full" height="900"
                        src="/images/slider2.jpg" width="800" />
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <div class="text-center text-white">
                            <h2 class="text-4xl font-bold">Layanan Cepat & Efisien</h2>
                            <p class="mt-2 text-lg">Solusi perbaikan AC yang cepat dan efisien siap melayani Anda</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Sebelumnya -->
            <button
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev="" type="button">
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 19l-7-7 7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        </path>
                    </svg>
                    <span class="sr-only">Sebelumnya</span>
                </span>
            </button>

            <!-- Tombol Berikutnya -->
            <button
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next="" type="button">
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        </path>
                    </svg>
                    <span class="sr-only">Berikutnya</span>
                </span>
            </button>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('[data-carousel="static"]');
            const items = carousel.querySelectorAll('[data-carousel-item]');
            const prevButton = carousel.querySelector('[data-carousel-prev]');
            const nextButton = carousel.querySelector('[data-carousel-next]');
            let currentIndex = 0;

            function showItem(index) {
                items.forEach((item, i) => {
                    item.classList.toggle('hidden', i !== index);
                });
            }

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1;
                showItem(currentIndex);
            });

            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
                showItem(currentIndex);
            });

            showItem(currentIndex);
        });
    </script>



    <!-- About Us Section -->
    <section id="about" class="bg-black-100 mt-10">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">About Us</h2>
                    <p class="mt-4 text-gray-600 text-lg text-justify">CV Rama Teknik adalah layanan profesional untuk
                        perawatan dan perbaikan AC, melayani kebutuhan rumah dan bisnis. Dengan teknisi berpengalaman,
                        kami memastikan kinerja AC yang optimal, efisien, dan tahan lama. Kami berkomitmen memberikan
                        layanan cepat, andal, dan terjangkau demi kenyamanan Anda.</p>
                    <div class="mt-8">
                        <a href="#regis" class="text-blue-500 hover:text-blue-600 font-medium">Layanan Kami
                            <span class="ml-2">&#8594;</span></a>
                    </div>
                </div>
                <div class="mt-12 md:mt-0 grid grid-cols-2 gap-6">
                    <div class="relative">
                        <img src="/images/about1.jpg" alt="Image 1"
                            class="object-cover rounded-lg shadow-md w-full h-48 md:h-64">
                    </div>
                    <div class="relative">
                        <img src="/images/about2.jpg" alt="Image 2"
                            class="object-cover rounded-lg shadow-md w-full h-48 md:h-64">
                    </div>

                    <div class="relative col-span-2 md:col-span-1">
                        <img src="/images/about3.png" alt="Image 3"
                            class="object-cover rounded-lg shadow-md w-full h-48 md:h-64">
                    </div>
                    <div class="relative col-span-2 md:col-span-1">
                        <img src="/images/about4.jpg" alt="Image 4"
                            class="object-cover rounded-lg shadow-md w-full h-48 md:h-64">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Section --}}
    <section id="service" class="bg-black">
        <div
            class="relative block px-6 py-10 md:py-20 md:px-10 border-t border-b border-neutral-900 bg-neutral-900/30">
            <div class="relative mx-auto max-w-5xl text-center">
                <h2
                    class="block w-full bg-gradient-to-b from-white to-gray-400 bg-clip-text font-bold text-transparent text-3xl sm:text-4xl text-white">
                    Layanan Kami
                </h2>
                <p
                    class="mx-auto my-4 w-full max-w-xl bg-transparent text-center font-medium leading-relaxed tracking-wide text-white">
                    menyediakan berbagai layanan perawatan dan perbaikan AC untuk memastikan kenyamanan
                    Anda.
                </p>
            </div>

            <div class="relative mx-auto max-w-7xl z-10 grid grid-cols-1 gap-10 pt-14 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
                    <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border"
                        style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-color-swatch text-white" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19 3h-4a2 2 0 0 0 -2 2v12a4 4 0 0 0 8 0v-12a2 2 0 0 0 -2 -2"></path>
                            <path d="M13 7.35l-2 -2a2 2 0 0 0 -2.828 0l-2.828 2.828a2 2 0 0 0 0 2.828l9 9"></path>
                            <path d="M7.3 13h-2.3a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h12"></path>
                            <line x1="17" y1="17" x2="17" y2="17.01"></line>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-white">Instalasi AC</h3>
                    <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-white">
                        Layanan instalasi AC profesional untuk rumah dan kantor, memastikan pemasangan yang tepat dan
                        efisien agar AC bekerja optimal dan memberikan kenyamanan maksimal.
                    </p>
                </div>

                <div class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
                    <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border"
                        style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt text-white"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3"></polyline>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-white">Perawatan AC</h3>
                    <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-white">
                        Perawatan rutin untuk memastikan AC bekerja dengan efisien dan tahan lama. Dengan perawatan yang
                        tepat, AC Anda akan tetap optimal dan menghemat energi.
                    </p>
                </div>

                <div class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
                    <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border"
                        style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools text-white"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4"></path>
                            <line x1="14.5" y1="5.5" x2="18.5" y2="9.5"></line>
                            <polyline points="12 8 7 3 3 7 8 12"></polyline>
                            <line x1="7" y1="8" x2="5.5" y2="9.5"></line>
                            <polyline points="16 12 21 17 17 21 12 16"></polyline>
                            <line x1="16" y1="17" x2="14.5" y2="18.5"></line>
                        </svg>
                    </div>
                    <h3 class="mt-6 text-white">Perbaikan AC</h3>
                    <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-white">
                        Layanan perbaikan AC yang cepat dan efisien, mengembalikan kenyamanan Anda dalam waktu singkat.
                    </p>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 z-0 h-1/3 w-full border-b"
                style="background-image: linear-gradient(to right top, rgba(79, 70, 229, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
            </div>
            <div class="absolute bottom-0 right-0 z-0 h-1/3 w-full"
                style="background-image: linear-gradient(to left top, rgba(220, 38, 38, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
            </div>
        </div>
    </section>


    <!-- Registration Form Section -->
    <section id="regis" class="py-16 bg-lime-100 mb-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Form Layanan</h2>
            <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <form>
                    <div class="mb-6">
                        <label for="fullName" class="block text-gray-700 font-semibold mb-2">Full
                            Name</label>
                        <input type="text" id="fullName"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email
                            Address</label>
                        <input type="email" id="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="mb-6">
                        <label for="phoneNumber" class="block text-gray-700 font-semibold mb-2">Phone
                            Number</label>
                        <input type="tel" id="phoneNumber"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-6">
                        <label for="address" class="block text-gray-700 font-semibold mb-2">Service
                            Address</label>
                        <textarea id="address" rows="3"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter your address" required></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="serviceType" class="block text-gray-700 font-semibold mb-2">Service
                            Type</label>
                        <select id="serviceType"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="" disabled selected>Pilih jenis servis</option>
                            <option value="Installation">Instalasi AC</option>
                            <option value="Maintenance">Perbaikan AC</option>
                            <option value="Repair">Perawatan AC</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="serviceType" class="block text-gray-700 font-semibold mb-2">Jenis
                            Properti</label>
                        <select id="serviceType"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option value="" disabled selected>Pilih Jenis Properti</option>
                            <option value="Installation">Rumah</option>
                            <option value="Maintenance">Kantor</option>
                            <option value="Repair">Apartemen</option>
                            <option value="Repair">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="date" class="block text-gray-700 font-semibold mb-2">Preferred
                            Service
                            Date</label>
                        <input type="date" id="date"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="time" class="block text-gray-700 font-semibold mb-2">Preferred
                            Service
                            Time</label>
                        <input type="time" id="time"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="additionalNotes" class="block text-gray-700 font-semibold mb-2">Additional
                            Notes (Optional)</label>
                        <textarea id="additionalNotes" rows="3"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Any specific instructions or requests"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-3 bg-blue-500 text-white font-bold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Submit Registration
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testi" class="text-neutral-700 dark:text-neutral-300 relative bg-black py-16">
        <!-- Gradient Background -->
        <div class="absolute bottom-0 left-0 z-0 h-1/3 w-full border-b"
            style="background-image: linear-gradient(to right top, rgba(79, 70, 229, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
        </div>
        <div class="absolute bottom-0 right-0 z-0 h-1/3 w-full"
            style="background-image: linear-gradient(to left top, rgba(220, 38, 38, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
        </div>
        <div class="mx-auto text-center md:max-w-xl lg:max-w-3xl">
            <h3 class="mb-6 text-3xl font-bold text-white">Testimonial</h3>
            <p class="mb-6 pb-2 md:mb-12 md:pb-0 text-gray-300">
                Kami selalu berusaha memberikan layanan terbaik untuk setiap pelanggan kami. Berikut adalah beberapa
                testimonial dari pelanggan kami yang puas dengan layanan yang kami berikan.
            </p>
        </div>

        <div class="grid gap-6 text-center md:grid-cols-3">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h4 class="mb-4 text-2xl font-semibold text-white">Maria Smantha</h4>
                <hr />
                <p class="mt-4 text-gray-300">
                    Layanan yang sangat memuaskan! Proses pemasangan AC sangat cepat dan profesional.
                </p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h4 class="mb-4 text-2xl font-semibold text-white">Lisa Cudrow</h4>
                <hr />
                <p class="mt-4 text-gray-300">
                    Pemasangan AC yang sangat efisien dan hasilnya sangat memuaskan. Sangat merekomendasikan!
                </p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h4 class="mb-4 text-2xl font-semibold text-white">John Smith</h4>
                <hr />
                <p class="mt-4 text-gray-300">
                    Layanan perawatan AC yang sangat baik. AC saya kembali dingin seperti baru!
                </p>
            </div>
        </div>
    </section>


    <!-- Feedback Section -->
    <section id="contact" class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div
                class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                    marginheight="0" marginwidth="0" scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.632633541606!2d107.1089147!3d-6.3954406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69991fe5affc31%3A0xf68e53ed057fceb1!2sMama%20radit!5e0!3m2!1sen!2sid!4v1606546878909!5m2!1sen!2sid"
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
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">+62 823-2066-1979</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Formulir Umpan Balik</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Silakan tinggalkan umpan balik atau pertanyaan Anda
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

                    <button type="submit" class="bg-indigo-600 text-white p-2 rounded">Kirim</button>
                </form>

                @if (session('success'))
                    <div class="mt-4 text-green-600">
                        {{ session('success') }}
                    </div>
                @endif
                <button
                    class="text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Kirim</button>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <section class="relative bg-black">
        <!-- Gradient Background -->
        <div class="absolute bottom-0 left-0 z-0 h-1/3 w-full border-b"
            style="background-image: linear-gradient(to right top, rgba(79, 70, 229, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
        </div>
        <div class="absolute bottom-0 right-0 z-0 h-1/3 w-full"
            style="background-image: linear-gradient(to left top, rgba(220, 38, 38, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
        </div>

        <!-- Footer Section -->
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <!-- Navigation Links -->
            <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                <div class="px-5 py-2">
                    <a href="#about" class="text-base leading-6 text-white hover:text-gray-500">About</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#service" class="text-base leading-6 text-white hover:text-gray-500">Services</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#regis" class="text-base leading-6 text-white hover:text-gray-500">Registration</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#testi" class="text-base leading-6 text-white hover:text-gray-500">Testimonial</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#contact" class="text-base leading-6 text-white hover:text-gray-500">Contact</a>
                </div>
            </nav>

            <!-- Social Media Links -->
            <div class="flex justify-center mt-8 space-x-6">
                <a href="#" class="text-white hover:text-gray-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-gray-500">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="text-white hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.271 8.275 8.275 0 01-2.605.99A4.104 4.104 0 0015.392 4c-2.275 0-4.115 1.84-4.115 4.115 0 .322.036.636.106.936a11.675 11.675 0 01-8.469-4.29 4.11 4.11 0 001.275 5.49A4.079 4.079 0 01.8 9.287v.052a4.11 4.11 0 003.294 4.02 4.104 4.104 0 01-1.81.069c.507 1.587 1.98 2.744 3.73 2.77A8.28 8.28 0 010 19.284a11.682 11.682 0 006.29 1.84z">
                        </path>
                    </svg>
                </a>
            </div>

            <!-- Copyright -->
            <div class="mt-8 text-center text-base leading-6 text-white">
                <p>© 2024 CV Rama Tehnik. All rights reserved.</p>
            </div>
        </div>
    </section>



    <!-- Script for mobile menu toggle -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
