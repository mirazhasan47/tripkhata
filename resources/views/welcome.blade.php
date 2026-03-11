<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>TripKhata - ডিজিটাল পরিবহন হিসাব খাতা</title>
</head>

<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto border-b border-gray-100">
        <div class="flex items-center gap-2">
            <div class="bg-orange-500 p-1.5 rounded-lg">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </div>
            <span class="text-2xl font-bold tracking-tight text-[#1e293b]">TripKhata</span>
        </div>

        <div class="hidden md:flex items-center space-x-8 text-slate-600 font-medium">
            <a href="#" class="hover:text-orange-600 transition">Home</a>
            <a href="#" class="hover:text-orange-600 transition">Services</a>
            <a href="#" class="hover:text-orange-600 transition">Packages</a>
            <a href="#" class="hover:text-orange-600 transition">Brands</a>
            <a href="#" class="hover:text-orange-600 transition">Contact</a>

            <div class="flex items-center bg-orange-500 rounded-full p-0.5 px-2 text-xs text-white font-bold">
                <span class="bg-white text-orange-600 rounded-full px-2 py-0.5">বাংলা</span>
                <span class="px-2">EN</span>
            </div>
        </div>

        <button class="bg-[#27272a] text-white px-8 py-2.5 rounded-full font-semibold hover:bg-slate-800 transition">
            Login
        </button>
    </nav>

    <section class="relative py-20 lg:py-32 px-6 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10 flex justify-center items-center pointer-events-none">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Bangladesh_location_map.svg/1024px-Bangladesh_location_map.svg.png"
                class="w-full max-w-4xl object-contain grayscale" alt="Background Map">
        </div>

        <div class="relative z-10 max-w-5xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-[#1e293b] leading-tight mb-8">
                ট্রিপ, ভাড়া ও হিসাব রাখুন <br>
                <span class="text-slate-800">একদম খাতার মতো –ডিজিটালভাবে</span>
            </h1>

            <p class="text-lg md:text-xl text-slate-600 max-w-4xl mx-auto leading-relaxed mb-12">
                TripKhata হলো পরিবহন ব্যবসার জন্য একটি সহজ ডিজিটাল খাতা, যার মাধ্যমে ট্রাক, বাস ও রেন্ট-এ-কার ব্যবসার
                দৈনিক ট্রিপ, আয়-খরচ ও বকেয়া হিসাব রাখা যায় ঝামেলা ছাড়াই।
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <button
                    class="bg-[#ff6600] text-white text-lg font-bold px-10 py-4 rounded-full shadow-lg shadow-orange-200 hover:bg-orange-600 transition w-full sm:w-auto">
                    ফ্রি ব্যবহার শুরু করুন
                </button>
                <button
                    class="bg-[#27272a] text-white text-lg font-bold px-10 py-4 rounded-full hover:bg-slate-800 transition w-full sm:w-auto">
                    লাইভ ডেমো দেখুন
                </button>
            </div>
        </div>
    </section>



    <img src="heroImage.png" style="margin: 0 auto;max-width: 80%;height: auto;" alt="Transport Truck"
        class="">



    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Section Title -->
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 mb-10">
                TripKhata-এর মূল খাতাসমূহ
            </h2>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <!-- Icon -->
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 16h8M8 12h8m-8-4h8M4 6h16v12H4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">ড্যাশবোর্ড</h3>
                    <p class="text-gray-500 text-sm">এক নজরে আজকের ট্রিপ, আয়-খরচ ও মোট বকেয়ার সারাংশ দেখুন</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <!-- Icon -->
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">ট্র্যাক খাতা</h3>
                    <p class="text-gray-500 text-sm">প্রতিটি ট্র্যাক অনুযায়ী ট্রিপ, আয় ও খরচের পূর্ণ হিসাব সংরক্ষণ
                        করুন</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <!-- Icon -->
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7 16h10M5 8h14">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">ভেন্টুর খাতা</h3>
                    <p class="text-gray-500 text-sm">স্বচ্ছ হিসাব রাখুন ভেন্টুর বা গাড়ি অনুযায়ী ভাড়া, পরিবেশ ও
                        বকেয়ার</p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <!-- Icon -->
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">কাস্টমার খাতা</h3>
                    <p class="text-gray-500 text-sm">কাস্টমার অনুযায়ী ট্রিপ, বিল, আদায় ও বকেয়া সহজে ট্র্যাক করুন</p>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-[#121212] text-white py-16 px-6 md:px-12 flex items-center justify-center min-h-screen">
        <div class="max-w-6xl w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="space-y-8">
                <div class="flex items-start gap-4">
                    <div class="bg-red-500 rounded-full p-1 mt-1 shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight">
                        কাগজের খাতায় হিসাব রাখলে যেসব সমস্যা হয়
                    </h2>
                </div>

                <ul class="space-y-6">
                    <li class="flex items-center gap-4 group">
                        <div class="bg-[#2A1A1A] p-3 rounded-xl group-hover:bg-red-900/30 transition-colors">
                            <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-lg text-gray-300">হিসাব মেলাতে সময় লাগে</p>
                    </li>

                    <li class="flex items-center gap-4 group">
                        <div class="bg-[#2A1A1A] p-3 rounded-xl group-hover:bg-red-900/30 transition-colors">
                            <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-lg text-gray-300">ট্রিপ অনুযায়ী লাভ-লোকসান বোঝা যায় না</p>
                    </li>

                    <li class="flex items-center gap-4 group">
                        <div class="bg-[#2A1A1A] p-3 rounded-xl group-hover:bg-red-900/30 transition-colors">
                            <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-lg text-gray-300">মাস শেষে রিপোর্ট বানানো ঝামেলার</p>
                    </li>

                    <li class="flex items-center gap-4 group">
                        <div class="bg-[#2A1A1A] p-3 rounded-xl group-hover:bg-red-900/30 transition-colors">
                            <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p class="text-lg text-gray-300">ড্রাইভার বা পার্টির বকেয়া ভুলে যাওয়ার ঝুঁকি</p>
                    </li>

                    <li class="flex items-center gap-4 group">
                        <div class="bg-[#2A1A1A] p-3 rounded-xl group-hover:bg-red-900/30 transition-colors">
                            <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <p class="text-lg text-gray-300">পুরনো হিসাব খুঁজে পাওয়া কঠিন</p>
                    </li>

                    <li class="flex items-center gap-4 group">
                        <div class="bg-[#2A1A1A] p-3 rounded-xl group-hover:bg-red-900/30 transition-colors">
                            <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                </path>
                            </svg>
                        </div>
                        <p class="text-lg text-gray-300">পরিবহনের খাতা হারিয়ে গেলে সম্পূর্ণ হিসাব-নিকাশ হারিয়ে যাওয়ার
                            ঝুঁকি থাকে</p>
                    </li>
                </ul>
            </div>

            <div class="relative group">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-red-600 to-orange-600 rounded-3xl blur opacity-25 group-hover:opacity-50 transition duration-1000">
                </div>
                <div class="relative overflow-hidden rounded-3xl border border-white/10">
                    <img src="trikhata_section_image_one" alt="Messy accounts"
                        class="w-full h-auto object-cover transform transition duration-500 group-hover:scale-105" />
                </div>
            </div>

        </div>
    </section>


</body>

</html>