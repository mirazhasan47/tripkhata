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


</body>

</html>