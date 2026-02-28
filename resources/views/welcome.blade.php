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

    <div class="relative w-full max-w-5xl mx-auto mt-4 group">
        <svg width="0" height="0" class="absolute">
            <defs>
                <clipPath id="roundedTabMask" clipPathUnits="objectBoundingBox">
<path d="M 0,0.15 
                         Q 0,0.02 0.02,0 
                         L 0.62,0 
                         Q 0.64,0 0.64,0.02 
                         L 0.64,0.09 
                         L 0.98,0.09 
                         Q 1,0.09 1,0.11 
                         L 1,0.85 
                         Q 1,0.98 0.98,1 
                         L 0.20,1 
                         Q 0.12,1 0.05,0.95 
                         L 0,0.82 Z" />
                </clipPath>
            </defs>
        </svg>

        <div class="absolute -inset-2 bg-gradient-to-r from-orange-500/20 to-slate-300/10 blur-2xl opacity-50"
            style="clip-path: url(#roundedTabMask);"></div>

        <div class="relative bg-white p-1 shadow-2xl transition-all duration-500 hover:shadow-orange-100"
            style="clip-path: url(#roundedTabMask);">

            <img src="{{ asset('heroImage.png') }}" alt="TripKhata Transport Ledger"
                class="w-full h-auto object-cover block transition-transform duration-700 group-hover:scale-105"
                style="clip-path: url(#roundedTabMask);">
        </div>

        <div
            class="absolute -bottom-4 -right-2 bg-white p-3 rounded-2xl shadow-xl border border-slate-100 hidden md:flex items-center gap-3 z-30">
            <div class="bg-green-100 p-2 rounded-full text-green-600">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 4.946-2.397 9.331-6 11.692-3.603-2.361-6-6.746-6-11.692 0-.68.056-1.35.166-2.001zm8.841 4.993a1 1 0 00-1.414-1.414L8 10.172 7.293 9.465a1 1 0 00-1.414 1.414l1.414 1.414a1 1 0 001.414 0l2.307-2.307z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="text-left leading-tight">
                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-widest">নিরাপদ ডেটা</p>
                <p class="text-sm font-bold text-slate-800">ক্লাউড ব্যাকআপ</p>
            </div>
        </div>
    </div>
    </div>

    <div
        class="absolute -bottom-4 -right-2 bg-white p-3 rounded-2xl shadow-xl border border-slate-100 hidden md:flex items-center gap-3 z-30">
        <div class="bg-green-100 p-2 rounded-full text-green-600">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 4.946-2.397 9.331-6 11.692-3.603-2.361-6-6.746-6-11.692 0-.68.056-1.35.166-2.001zm8.841 4.993a1 1 0 00-1.414-1.414L8 10.172 7.293 9.465a1 1 0 00-1.414 1.414l1.414 1.414a1 1 0 001.414 0l2.307-2.307z" />
            </svg>
        </div>
        <div class="text-left leading-tight">
            <p class="text-[10px] text-slate-500 font-bold uppercase">নিরাপদ ডেটা</p>
            <p class="text-sm font-bold text-slate-800">ক্লাউড ব্যাকআপ</p>
        </div>
    </div>
    </div>

    


</body>

</html>