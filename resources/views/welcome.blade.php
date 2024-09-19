<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla:ital@0;1&display=swap" rel="stylesheet">

    <title>LaamBD - মধু মিক্স</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        .swiper-wrapper {
            width: 100%;
            -webkit-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
            position: relative;
        }

        .swiper-pagination-bullet {
            background: #975fd7;
        }

        .swiper-pagination-bullet-active {
            background: #4F46E5 !important;
        }

    </style>
</head>
<body>
    <section class="bg-[#064403]">
        <div class="w-10/12 mx-auto py-8 px-2">
            <div class="border-2 px-2 border-[#ffff00] rounded-3xl shadow-inner">
                <h1 class="text-[#ffff00] text-center font-bold font-hind text-2xl md:text-3xl lg:text-4xl drop-shadow-md px-2 py-4">হাজার হাজার টাকা অসুস্থ হয়ে নষ্ট করেছেন কিন্তু কোন সমাধান পাননি?</h1>
            </div>
        </div>
        <div class="w-10/12 mx-auto md:w-11/12 lg:3/4">
            <p class="
            text-center text-white text-lg md:text-xl lg:text-3xl
            font-semibold font-tiro_bn
            px-4 md:px-6 lg:px-14
            ">
                আলহামদুলিল্লাহ! <span class="text-[#fffb87]">এই পর্যন্ত ১০০০০+</span> মানুষ আমাদের এই কালোজিরা রসুন মধু এবং ইরানী জাফরান মসলা মিশ্রণটি খেয়ে সমাধান পেয়েছে বিভিন্ন রোগ থেকে।
            </p>
        </div>
        <div class="w-10/12 mx-auto my-5 px-2">
            <div class="border-4 border-[#ffff00] rounded md:rounded-3xl w-full md:w-[990px] h-[360px] md:h-[550px] mx-auto lg:mx-24 overflow-hidden">
                <iframe class="w-full h-full" width="640" height="360" src="https://www.youtube.com/embed/4MxhPk6Prgc" title="আমাদের মিশ্রণ টি নিয়ে ৩ জন ডাক্টরের মতামত"></iframe>
            </div>
        </div>
        <div class="flex justify-center py-6">
            <button class="flex items-center gap-2 text-white hover:text-[#ffec00] bg-[#05B858] hover:bg-black hover:animate-zigzag text-xl font-bold px-4 py-2 border-white border-2 font-hind rounded-full">
                <x-lineawesome-hand-point-right class="h-8" /> <span>অর্ডার করতে ক্লিক করুন</span>
            </button>
        </div>
    </section>
    <section class="bg-[#028833]">
        <div class="w-full md:w-8/12 mx-auto p-4">

            <h4 class="bg-[#008000] text-[#ffec00] text-center font-bold text-2xl p-4 border-2 rounded-3xl">
                কালোজিরা রসুন মধু এবং ইরানী জাফরান মসলা মিশ্রণটি আপনি কেন খাবেন?
            </h4>
            <div class="border-4 border-[#ffec00] shadow-3xl rounded-3xl p-4 my-4">
                <ul class="p-2">
                    <li class="flex gap-2 items-center text-white text-lg border-b-2 border-dotted my-4 py-2">
                        <x-fas-check-circle class="text-[#ffec00] h-8" /> শারীরিক দুর্বলতা বা যৌন দুর্বলতা দূর করে আপনাকে উপহার দিবে সুখময় দাম্পত্য জীবন
                    </li>
                    <li class="flex gap-2 items-center text-white text-lg border-b-2 border-dotted my-4 py-2">
                        <x-fas-check-circle class="text-[#ffec00] h-8" /> শারীরিক দুর্বলতা বা যৌন দুর্বলতা দূর করে আপনাকে উপহার দিবে সুখময় দাম্পত্য জীবন
                    </li>
                    <li class="flex gap-2 items-center text-white text-lg border-b-2 border-dotted my-4 py-2">
                        <x-fas-check-circle class="text-[#ffec00] h-8" /> শারীরিক দুর্বলতা বা যৌন দুর্বলতা দূর করে আপনাকে উপহার দিবে সুখময় দাম্পত্য জীবন
                    </li>
                    <li class="flex gap-2 items-center text-white text-lg border-b-2 border-dotted my-4 py-2">
                        <x-fas-check-circle class="text-[#ffec00] h-8" /> শারীরিক দুর্বলতা বা যৌন দুর্বলতা দূর করে আপনাকে উপহার দিবে সুখময় দাম্পত্য
                    </li>
                    <li class="flex gap-2 items-center text-white text-lg border-b-2 border-dotted my-4 py-2">
                        <x-fas-check-circle class="text-[#ffec00] h-8" /> শারীরিক দুর্বলতা বা যৌন দুর্বলতা দূর করে আপনাকে উপহার দিবে সুখময় দাম্পত্য জীবন
                    </li>
                </ul>
            </div>

            <div class="px-2">
                <div class="flex justify-center items-center gap-2 font-hind text-3xl text-[#064403] font-bold bg-white border-2 border-[#ffec00] rounded py-2">
                    <span>কল করুন</span>
                    <x-fas-phone-alt class="h-6" />
                    <span>+880 1606-700289</span>
                </div>`
            </div>
        </div>
    </section>
    <section class="bg-[#064403]">
        <div class="w-full md:w-10/12 mx-auto p-4">
            <div class="flex md:flex-row flex-col-reverse items-center">
                <div class="w-full md:w-1/2 py-10">
                    <h2 class="text-[#ffec00] bg-[#008000] font-bold text-center text-2xl drop-shadow-2xl p-4 border-2 rounded-xl"> উপরের সমস্যা গুলোর সমাধান না করলে যে ভয়াবহ সমস্যা গুলো হবে</h2>

                    <div class="border-4 border-[#ffec00] shadow-3xl rounded-3xl mx-2 my-4">
                        <ul class="p-2">
                            <li class="flex gap-2 my-2 py-4 items-center text-white text-lg border-b-2 border-dotted">
                                <x-fas-lightbulb class="text-[#ffec00] h-24" /> হার্টের সমস্যা যদি এখনো সমাধান না করে থাকেন তাহলে বড় বিপদের জন্য প্রস্তুত থাকুন কারন একবার যদি হার্ট অ্যাটাক হয়ে যায় তাহলে আপনার বাচার সম্ভাবনা খুবই কম থাকে
                            </li>
                            <li class="flex gap-2 my-2 py-4 items-center text-white text-lg border-b-2 border-dotted">
                                <x-fas-lightbulb class="text-[#ffec00] h-24" /> হার্টের সমস্যা যদি এখনো সমাধান না করে থাকেন তাহলে বড় বিপদের জন্য প্রস্তুত থাকুন কারন একবার যদি হার্ট অ্যাটাক হয়ে যায় তাহলে আপনার বাচার সম্ভাবনা খুবই কম থাকে

                            </li>
                            <li class="flex gap-2 my-2 py-4 items-center text-white text-lg border-b-2 border-dotted">
                                <x-fas-lightbulb class="text-[#ffec00] h-24" /> হার্টের সমস্যা যদি এখনো সমাধান না করে থাকেন তাহলে বড় বিপদের জন্য প্রস্তুত থাকুন কারন একবার যদি হার্ট অ্যাটাক হয়ে যায় তাহলে আপনার বাচার সম্ভাবনা খুবই কম থাকে

                            </li>
                            <li class="flex gap-2 my-2 py-4 items-center text-white text-lg">
                                <x-fas-lightbulb class="text-[#ffec00] h-24" /> হার্টের সমস্যা যদি এখনো সমাধান না করে থাকেন তাহলে বড় বিপদের জন্য প্রস্তুত থাকুন কারন একবার যদি হার্ট অ্যাক হয়ে যায় তাহলে আপনার বাচার সম্ভাবনা খুবই কম থাকে

                            </li>
                        </ul>
                    </div>
                    <div class="my-10">
                        <h3 class="text-[#ffec00] text-4xl font-bold font-hind text-center md:text-start">খাওয়ার নিয়মাবলীঃ</h3>

                        <ul class="my-4 text-2xl text-white font-semibold font-hind">
                            <li class="flex gap-2">
                                <x-fas-check-circle class="h-6 text-white" />
                                <span class="text-[#ffec00]">সকালে নাস্তা খাওয়া পর</span><span>এক চামচ।</span>
                            </li>
                            <li class="flex gap-2">
                                <x-fas-check-circle class="h-6 text-white" />
                                <span>রাতে খাবারের পরে</span>
                                <span class="text-[#ffec00]"> দুই চামচ।</span></li>
                        </ul>
                        <div class="py-4 flex justify-center">
                            <button class="flex items-center gap-2 text-white hover:text-[#ffec00] hover:animate-zigzag bg-[#05B858] hover:bg-black text-xl font-bold px-4 py-2 border-white border-2 font-hind rounded-full">
                                <x-lineawesome-hand-point-right class="h-8" /> <span>অর্ডার করতে ক্লিক করুন</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 mx-auto">
                    <img class="mx-auto w-5/6 rounded border-2 border-[#ffec00]" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/01/image_ajS.webp?w=1024&ssl=1" alt="" class="w-96">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#028833] py-10">
        <div class="w-full md:w-8/12 px-2 mx-auto">
            <h2 class="text-white text-md md:text-3xl font-semibold text-center">
                <span>এটি সম্পূর্ণ হোমমেড একটি প্রোডাক্ট তাই কোন পার্শ্ব প্রতিক্রিয়া নেই।</span>
                <span class="text-[#ffec00]">লিমিটেড স্টকলিমিটেড স্টক,</span>
                <span>তাই দেরি না করে এখন-ই</span>
                <span class="text-[#ffec00]">অর্ডার করুন।</span>
            </h2>
            <div class="p-4">
                <div class="flex justify-center items-center gap-2 font-hind text-lg md:text-3xl text-[#ffffff] font-bold border-2 border-[#ffec00] rounded py-2">
                    <span>কল করুন</span>
                    <x-fas-phone-alt class="h-6" />
                    <span>+880 1606-700289</span>
                </div>`
            </div>
            <div class="text-center text-lg md:text-4xl font-bold text-white py-8">
                ⭐⭐⭐
                <span>সম্মানিত</span>
                <span class="text-[#ffec00]">কাস্টমারদের মতামত</span>
                ⭐⭐⭐
            </div>
        </div>
        <div class="w-full md:w-10/12 flex flex-wrap md:flex-nowrap gap-2 mx-auto">
            <div class="w-full md:w-4/12">
                <div class="w-[284px] block mx-auto">
                    <iframe class="border-2 border-[#ffec00]" width="280" height="550" src="https://www.youtube.com/embed/QbPghkSWvCc?si=QvRNMKhvJ9J9Bp_O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <div class="w-full overflow-hidden">
                <div class="swiper multiple-slide-carousel swiper-container relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="h-[550px] flex justify-center items-center">
                                <img class="h-[480px] rounded-2xl border-2 border-amber-300" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-[550px] flex justify-center items-center">
                                <img class="h-[480px] rounded-2xl border-2 border-amber-300" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-[550px] flex justify-center items-center">
                                <img class="h-[480px] rounded-2xl border-2 border-amber-300" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-[550px] flex justify-center items-center">
                                <img class="h-[480px] rounded-2xl border-2 border-amber-300" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-[550px] flex justify-center items-center">
                                <img class="h-[480px] rounded-2xl border-2 border-amber-300" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-[550px] flex justify-center items-center">
                                <img class="h-[480px] rounded-2xl border-2 border-amber-300" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-[550px] flex justify-center items-center">
                                <img class="h-[480px] rounded-2xl border-2 border-amber-300" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-[550px] flex justify-center items-center">
                                <img class="h-[480px] rounded-2xl border-2 border-amber-300" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-[550px] flex justify-center items-center">
                                <img class="h-[480px] rounded-2xl border-2 border-amber-300" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </section>
    <section class="bg-[#064403] py-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 w-10/12 mx-auto text-2xl text-center text-[#FFFFE2] font-hind font-bold">
            <div class="flex flex-wrap md:flex-nowrap justify-center gap-2 border border-[#ffec00] rounded py-4 px-2">
                <p>১ কেজি কালোজিরা রসুন মধু এবং ইরানী জাফরান মসলা মিশ্রণ এর রেগুলার প্রাইস <br> <span>২০০০ টাকা</span></p>
                <p>তবে বর্তমানে অফার প্রাইস <br> <span>১৫৮০ টাকা</span></p>
            </div>
            <div class="flex flex-wrap md:flex-nowrap justify-center gap-2 border border-[#ffec00] rounded py-4 px-2">
                <p>১ কেজি কালোজিরা রসুন মধু এবং ইরানী জাফরান মসলা মিশ্রণ এর রেগুলার প্রাইস <br> <span>২০০০ টাকা</span></p>
                <p>তবে বর্তমানে অফার প্রাইস <br> <span>১৫৮০ টাকা</span></p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 mx-auto w-10/12 text-center">
            <div class="text-[#ffed12] text-lg md:text-2xl font-bold leading-9 my-8 col-span-2 px-4">
                অবশ্যই ৪৫/৬০ দিন খেতে হবে সেক্ষেত্রে ১ কেজির ফুল কোর্স অর্ডার করা উত্তম হবে এবং ফুল কোর্স শেষ করতে পারলে যে রোগের জন্য নিচ্ছেন সেই রোগ টি ভিতর থেকে সারাজিবনের জন্য নিঃশেষ হয়ে যাবে ইনশাআল্লাহ
            </div>
            <div class="text-4xl font-bold font-hind my-8">
                <p class="text-white my-4">আজকে অর্ডার করলে</p>
                <p class="text-[#ffec00]">হোম ডেলিভারি চার্জ ফ্রি!</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                    <path d="M3,146.1c17.1-8.8,33.5-17.8,51.4-17.8c15.6,0,17.1,18.1,30.2,18.1c22.9,0,36-18.6,53.9-18.6 c17.1,0,21.3,18.5,37.5,18.5c21.3,0,31.8-18.6,49-18.6c22.1,0,18.8,18.8,36.8,18.8c18.8,0,37.5-18.6,49-18.6c20.4,0,17.1,19,36.8,19 c22.9,0,36.8-20.6,54.7-18.6c17.7,1.4,7.1,19.5,33.5,18.8c17.1,0,47.2-6.5,61.1-15.6"></path>
                </svg>
            </div>
        </div>
        <div class="">
            <button class="flex mx-auto items-center gap-2 text-white bg-[#05B858] hover:bg-black text-xl font-bold px-4 py-2 border-white border-2 font-hind rounded-full hover:animate-zigzag">
                <x-fas-cart-arrow-down class="h-5" /> <span>অর্ডার করুন</span>
            </button>
        </div>
    </section>
    <section class="py-4">
        <div class="border rounded-lg shadow-laam mx-4 md:mx-auto w-full md:w-8/12 my-4 p-4">
            <h2 class="text-center text-xl md:text-3xl text-[#056C00] font-bold font-tiro_bn">
                অর্ডার করতে আপনার সঠিক তথ্য দিয়ে নিচের ফর্মটি সম্পূর্ণ পূরন করুন
            </h2>
        </div>
        <form action="" class="border-4 rounded-lg shadow-form border-[#098D2E] md:w-8/12 md:mx-auto mx-4">
            <div class="p-8">
                <div class="text-xl font-semibold py-8">
                    পরিমান সিলেক্ট করুন
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="border rounded p-6">
                        <div class="flex gap-2">
                            <input type="radio">
                            <img class="h-12" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/01/018-4.png?resize=300%2C300&ssl=1" alt="Product">
                            <h4 class="text-left font-semibold">কালোজিরা রসুন মধু এবং ইরানি জাফরান মসলা ৫০০ গ্রাম</h4>
                        </div>
                        <div class="flex flex-wrap justify-end items-center gap-2">
                            <div class="flex border rounded mt-4">
                                <button class="text-gray-800 hover:bg-gray-100 px-2 py-1" onclick="decrement()">−</button>
                                <input type="number" id="quantity" name="quantity" value="1" min="1" step="1" class="w-12 text-center no-arrows">
                                <button class="text-gray-800 hover:bg-gray-100 px-2 py-1" onclick="increment()">+</button>
                            </div>
                            <p class="mt-4">2,940.00৳</p>
                        </div>
                    </div>
                    <div class="border rounded p-6">
                        <div class="flex gap-2">
                            <input type="radio">
                            <img class="h-12" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/01/018-4.png?resize=300%2C300&ssl=1" alt="Product">
                            <h4 class="text-left font-semibold">কালোজিরা রসুন মধু এবং ইরানি জাফরান মসলা ৫০০ গ্রাম</h4>
                        </div>
                        <div class="flex flex-wrap justify-end items-center gap-2">
                            <div class="flex border rounded mt-4">
                                <button class="text-gray-800 hover:bg-gray-100 px-2 py-1" onclick="decrement()">−</button>
                                <input type="number" id="quantity" name="quantity" value="1" min="1" step="1" class="w-12 text-center no-arrows">
                                <button class="text-gray-800 hover:bg-gray-100 px-2 py-1" onclick="increment()">+</button>
                            </div>
                            <p class="mt-4">2,940.00৳</p>
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-14 py-6">
                    <div class="font-tiro_bn">

                        <h3 class="text-xl font-tiro_bn font-bold my-6">বিলিং এড্রেস</h3>
                        <div class="flex flex-col text-sm font-semibold mt-4">
                            <label class="text-[#098d2e]" for="name">আপনার নাম লিখুন <span class="text-red-500">*</span></label>
                            <input class="border-2 outline-none rounded border-[#098d2e] placeholder-gray-700 p-2" type="text" id="name" placeholder="নাম লিখুন">
                        </div>
                        <div class="flex flex-col text-sm font-semibold mt-4">
                            <label class="text-[#098d2e]" for="address">আপনার সম্পূর্ণ ঠিকানা লিখুন<span class="text-red-500">*</span></label>
                            <input class="border-2 outline-none rounded border-[#098d2e] placeholder-gray-700 p-2" type="text" id="address" placeholder="ঠিকানা লিখুন, থানা ও জেলা সহ">
                        </div>
                        <div class="flex flex-col text-sm font-semibold mt-4">
                            <label class="text-[#098d2e]" for="mobile_number">আপনার মোবাইল নাম্বার লিখুন<span class="text-red-500">*</span></label>
                            <input class="border-2 outline-none rounded border-[#098d2e] placeholder-gray-700 p-2" type="text" id="mobile_number" placeholder="মোবাইল নাম্বার">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-tiro_bn font-bold my-6">আপনার অর্ডার</h3>

                        <div class="text-sm">
                            <div class="text-[#098D2E]">
                                <div class="grid grid-cols-3 border-b-2 border-dotted font-bold">
                                    <div class="text-start col-span-2">Product</div>
                                    <div class="text-center">Subtotal</div>
                                </div>
                            </div>
                            <div>
                                <div class="grid grid-cols-3 items-center border-b-2 border-dotted">
                                    <div class="col-span-2 font-bold flex items-center py-4">
                                        <img class="max-h-12 rounded" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/01/018-4.png" alt="Product">
                                        <div class="px-2">
                                            কালোজিরা রসুন মধু এবং ইরানি জাফরান মসলা এক কেজি
                                        </div>
                                        <span class="mr-2">×&nbsp;1</span>
                                    </div>
                                    <div class="text-center px-2">
                                        1,580.00৳
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 items-center">
                                    <div class="text-[#098D2E] font-semibold col-span-2">
                                        Subtotal
                                    </div>
                                    <div class="text-center">
                                        1,580.00৳
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 items-center border-b-2 border-dotted">
                                    <div class="text-[#098D2E] font-semibold">
                                        Shipping
                                    </div>
                                    <div class="col-span-2 text-center px-4">
                                        ডেলিভারি চার্জ ফ্রি
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 items-center font-bold">
                                    <div class="col-span-2 text-[#098D2E]">
                                        Total
                                    </div>
                                    <div class="text-center">
                                        1,580.00৳
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            <ul>
                                <li class="py-4">ক্যাশ অন ডেলিভারি</li>
                                <li class="bg-[#EAFFEF] px-8 py-4">পণ্য হাতে পেয়ে মূল্য পরিশোধ করবো</li>
                            </ul>
                        </div>
                        <button class="border-4 shadow-lg border-[#FFEC00] bg-[#064403] hover:bg-[#005E00] text-white font-bold text-center block justify-center py-4 px-5 my-4 mx-auto rounded-full">
                            এখানে ক্লিক করে অর্ডারটি সম্পন্ন করুন
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <footer class="bg-[#064403] flex flex-col justify-center items-center text-white font-semibold py-4">
        <ul class="flex gap-2">
            <li>Privacy Policy</li>
            <li>Terms & conditions</li>
        </ul>
        <div>
            Copyright © 2023 Laam BD | All Rights Reserved
        </div>
    </footer>

    <script>
        var swiper = new Swiper(".multiple-slide-carousel", {
            loop: true
            , autoplay: {
                delay: 1200
                , disableOnInteraction: true
            , }
            , pagination: {
                el: ".swiper-pagination"
                , clickable: true
            , }
            , slidesPerView: 1
            , spaceBetween: 8
            , breakpoints: {
                1920: {
                    slidesPerView: 4
                    , spaceBetween: 30
                }
                , 1028: {
                    slidesPerView: 4
                    , spaceBetween: 30
                }
                , 990: {
                    slidesPerView: 2
                    , spaceBetween: 0
                }
            }
        });

    </script>

</body>
</html>
