<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla:ital@0;1&display=swap" rel="stylesheet">

    <title>LaamBD - মধু মিক্স</title>

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>
<body>
    <section class="bg-[#064403] flex flex-col justify-center items-center">
        <div class="mx-auto py-8 px-2">
            <div class="border-2 px-2 border-[#ffff00] rounded-3xl shadow-inner">
                <h1 class="text-[#ffff00] text-center font-bold font-hind text-2xl md:text-3xl lg:text-4xl drop-shadow-md px-2 py-4">হাজার হাজার টাকা অসুস্থ হয়ে নষ্ট করেছেন কিন্তু কোন সমাধান পাননি?</h1>
            </div>
        </div>
        <div class="mx-auto w-full md:w-11/12 lg:3/4">
            <p class="
            text-center text-white text-lg md:text-xl lg:text-3xl
            font-semibold font-tiro_bn
            px-4 md:px-6 lg:px-14
            ">
                আলহামদুলিল্লাহ! <span class="text-[#fffb87]">এই পর্যন্ত ১০০০০+</span> মানুষ আমাদের এই কালোজিরা রসুন মধু এবং ইরানী জাফরান মসলা মিশ্রণটি খেয়ে সমাধান পেয়েছে বিভিন্ন রোগ থেকে।
            </p>
        </div>
        <div class="my-5 px-4">
            <div class="border-4 border-[#ffff00] rounded-3xl w-[990px] h-[550px] mx-auto lg:mx-24 overflow-hidden">
                <iframe width="990" height="550" src="https://www.youtube.com/embed/4MxhPk6Prgc?si=odSQ_3GiN7_tGBzC" title="আমাদের মিশ্রণ টি নিয়ে ৩ জন ডাক্টরের মতামত"></iframe>
            </div>
        </div>
        <div class="py-4">
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

            <div class="flex items-center">
                <div class="w-1/2 py-10">
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
                        <h3 class="text-[#ffec00] text-4xl font-bold font-hind">খাওয়ার নিয়মাবলীঃ</h3>

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
                        <div class="py-4 ">
                            <button class="flex items-center gap-2 text-white hover:text-[#ffec00] hover:animate-zigzag bg-[#05B858] hover:bg-black text-xl font-bold px-4 py-2 border-white border-2 font-hind rounded-full">
                                <x-lineawesome-hand-point-right class="h-8" /> <span>অর্ডার করতে ক্লিক করুন</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 mx-auto">
                    <img class="mx-auto w-5/6 rounded border-2 border-[#ffec00]" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/01/image_ajS.webp?w=1024&ssl=1" alt="" class="w-96">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#028833] py-10">
        <div class="w-8/12 mx-auto">
            <h2 class="text-white text-3xl font-semibold text-center">
                <span>এটি সম্পূর্ণ হোমমেড একটি প্রোডাক্ট তাই কোন পার্শ্ব প্রতিক্রিয়া নেই।</span>
                <span class="text-[#ffec00]">লিমিটেড স্টকলিমিটেড স্টক,</span>
                <span>তাই দেরি না করে এখন-ই</span>
                <span class="text-[#ffec00]">অর্ডার করুন।</span>
            </h2>
            <div class="p-4">
                <div class="flex justify-center items-center gap-2 font-hind text-3xl text-[#ffffff] font-bold border-2 border-[#ffec00] rounded py-2">
                    <span>কল করুন</span>
                    <x-fas-phone-alt class="h-6" />
                    <span>+880 1606-700289</span>
                </div>`
            </div>
            <div class="text-center text-4xl font-bold text-white py-8">
                ⭐⭐⭐
                <span>সম্মানিত</span>
                <span class="text-[#ffec00]">কাস্টমারদের মতামত</span>
                ⭐⭐⭐
            </div>
        </div>
        <div class="w-10/12 flex flex-wrap gap-2 mx-auto">
            <div class="border-2 border-[#ffec00] w-2/10">
                <iframe width="380" height="550" src="https://www.youtube.com/embed/QbPghkSWvCc?si=QvRNMKhvJ9J9Bp_O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div class="w-8/10">
                <div class="flex gap-2 transition-transform duration-500 relative overflow-hidden select-none items">
                    <div class="w-1/4 flex-shrink-0 item item1">
                        <img src="https://via.placeholder.com/250x550?text=Slide+1" alt="Slide 1" class="w-full">
                    </div>
                    <div class="w-1/4 flex-shrink-0 item item2">
                        <img src="https://via.placeholder.com/250x550?text=Slide+2" alt="Slide 2" class="w-full">
                    </div>
                    <div class="w-1/4 flex-shrink-0 item item3">
                        <img src="https://via.placeholder.com/250x550?text=Slide+3" alt="Slide 3" class="w-full">
                    </div>
                    <div class="w-1/4 flex-shrink-0 item item4">
                        <img src="https://via.placeholder.com/250x550?text=Slide+4" alt="Slide 4" class="w-full">
                    </div>
                    <div class="w-1/4 flex-shrink-0 item item5">
                        <img src="https://via.placeholder.com/250x550?text=Slide+5" alt="Slide 5" class="w-full">
                    </div>
                    <div class="w-1/4 flex-shrink-0 item item6">
                        <img src="https://via.placeholder.com/250x550?text=Slide+6" alt="Slide 6" class="w-full">
                    </div>
                    <div class="w-1/4 flex-shrink-0 item item7">
                        <img src="https://via.placeholder.com/250x550?text=Slide+7" alt="Slide 7" class="w-full">
                    </div>
                    <div class="w-1/4 flex-shrink-0 item item8">
                        <img src="https://via.placeholder.com/250x550?text=Slide+8" alt="Slide 8" class="w-full">
                    </div>
                </div>

                <!-- Dot Navigation -->
                <div class="flex justify-center mt-4">
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer" data-index="0"></span>
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer" data-index="1"></span>
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer" data-index="2"></span>
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer" data-index="3"></span>
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer" data-index="0"></span>
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer" data-index="1"></span>
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer" data-index="2"></span>
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer" data-index="3"></span>
                </div>
            </div>

            {{-- <div class="relative w-full max-w-lg mx-auto">
                <!-- Slideshow Images -->
                <div class="slideshow-container">
                    <div class="mySlides">
                        <img class="h-[540px] "
                        src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                    </div>
                    <div class="mySlides">
                        <img class="h-[540px] " src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                    </div>
                    <div class="mySlides">
                        <img class="h-[540px] " src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/07/450723203_122156567780152330_406095415020683934_n.jpg?fit=526%2C1169&ssl=1" alt="">
                    </div>
                </div>

                <!-- Dot Navigation -->
                <div class="flex justify-center mt-4">
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer"></span>
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer"></span>
                    <span class="dot h-4 w-4 mx-1 rounded-full bg-gray-400 cursor-pointer"></span>
                </div>
            </div> --}}

        </div>
    </section>
    <section class="bg-[#064403] py-4">
        <div class="grid grid-cols-2 gap-2 w-10/12 mx-auto text-2xl text-center text-[#FFFFE2] font-hind font-bold">
            <div class="flex border border-[#ffec00] rounded py-4 px-2">
                <p>১ কেজি কালোজিরা রসুন মধু এবং ইরানী জাফরান মসলা মিশ্রণ এর রেগুলার প্রাইস <br> <span>২০০০ টাকা</span></p>
                <p>তবে বর্তমানে অফার প্রাইস <br> <span>১৫৮০ টাকা</span></p>
            </div>
            <div class="flex border border-[#ffec00] rounded py-4 px-2">
                <p>১ কেজি কালোজিরা রসুন মধু এবং ইরানী জাফরান মসলা মিশ্রণ এর রেগুলার প্রাইস <br> <span>২০০০ টাকা</span></p>
                <p>তবে বর্তমানে অফার প্রাইস <br> <span>১৫৮০ টাকা</span></p>
            </div>
        </div>
        <div class="grid grid-cols-3 mx-auto w-10/12 text-center">
            <div class="text-[#ffed12] text-2xl font-bold leading-9 my-8 col-span-2 px-4">
                অবশ্যই ৪৫/৬০ দিন খেতে হবে সেক্ষেত্রে ১ কেজির ফুল কোর্স অর্ডার করা উত্তম হবে এবং ফুল কোর্স শেষ করতে পারলে যে রোগের জন্য নিচ্ছেন সেই রোগ টি ভিতর থেকে সারাজিবনের জন্য নিঃশেষ হয়ে যাবে ইনশাআল্লাহ
            </div>
            <div class="text-4xl font-bold font-hind my-8">
                <p class="text-white my-4">আজকে অর্ডার করলে</p>
                <p class="text-[#ffec00]">হোম ডেলিভারি চার্জ ফ্রি!</p>
            </div>
        </div>
        <div class="">
            <button class="flex mx-auto items-center gap-2 text-white bg-[#05B858] hover:bg-black text-xl font-bold px-4 py-2 border-white border-2 font-hind rounded-full hover:animate-zigzag">
                <x-fas-cart-arrow-down class="h-5" /> <span>অর্ডার করুন</span>
            </button>
        </div>
    </section>
    <section class="py-4">
        <div class="border rounded-lg text-3xl shadow-laam mx-auto w-8/12 my-4 p-4">
            <h2 class="text-center text-[#056C00] font-bold font-tiro_bn">
                অর্ডার করতে আপনার সঠিক তথ্য দিয়ে নিচের ফর্মটি সম্পূর্ণ পূরন করুন
            </h2>
        </div>
        <form action="" class="border-4 rounded-lg shadow-form border-[#098D2E] w-8/12 mx-auto">
            <div class="p-8">
                <div class="text-xl font-semibold py-8">
                    পরিমান সিলেক্ট করুন
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <button class="border rounded p-6">
                        <div class="flex gap-2">
                            <input type="radio">
                            <img class="h-12" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/01/018-4.png?resize=300%2C300&ssl=1" alt="Product">
                            <h4 class="text-left font-semibold">কালোজিরা রসুন মধু এবং ইরানি জাফরান মসলা ৫০০ গ্রাম</h4>
                        </div>
                        <div class="float-end">
                            <input type="number">
                            <p>2,940.00৳</p>
                        </div>
                    </button>
                    <button class="border rounded p-6">
                        <div class="flex gap-2">
                            <input type="radio">
                            <img class="h-12" src="https://i0.wp.com/laambd.com/wp-content/uploads/2024/01/018-4.png?resize=300%2C300&ssl=1" alt="Product">
                            <h4 class="text-left font-semibold">কালোজিরা রসুন মধু এবং ইরানি জাফরান মসলা ৫০০ গ্রাম</h4>
                        </div>
                        <div class="float-end">
                            <div class="flex items-center space-x-2">
                                <!-- Decrement Button -->
                                <button class="bg-gray-300 text-gray-700 hover:bg-gray-400 px-2 py-1 rounded-l" onclick="decrement()">−</button>

                                <!-- Input Box -->
                                <input type="number" id="quantity" name="quantity" value="1" min="1" step="1" class="w-16 text-center border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">

                                <!-- Increment Button -->
                                <button class="bg-gray-300 text-gray-700 hover:bg-gray-400 px-2 py-1 rounded-r" onclick="increment()">+</button>
                            </div>

                            <p>2,940.00৳</p>
                        </div>
                    </button>
                </div>
                <div class="">
                    <div>
                        বিলিং এড্রেস
                        <div>
                            <label for="name">আপনার নাম লিখুন</label>
                            <input type="text" id="name" placeholder="নাম লিখুন">

                            <p>error</p>
                        </div>
                        <div>
                            <label for="address">আপনার সম্পূর্ণ ঠিকানা লিখুন</label>
                            <input type="text" id="address" placeholder="ঠিকানা লিখুন, থানা ও জেলা সহ">

                        </div>
                        <div>
                            <label for="mobile_number">আপনার মোবাইল নাম্বার লিখুন</label>
                            <input type="text" id="mobile_number" placeholder="মোবাইল নাম্বার">

                        </div>
                        
                    </div>
                    <div>
                        Apnar Order
                    </div>
                </div>
                <div>
                    এখানে ক্লিক করে অর্ডারটি সম্পন্ন করুন
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
        const slider = document.querySelector('.items');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
            console.log("erreerre", scrollLeft)
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return; // stop the fn from running
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2;
            slider.scrollLeft = scrollLeft - walk;

            console.log('sdsd', scrollLeft)
            console.log(slider.scrollLeft)
        });


        // touchEvents

        slider.addEventListener('touchstart', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('touchend', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('touchcancel', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('touchmove', (e) => {
            if (!isDown) return; // stop the fn from running
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2;
            slider.scrollLeft = scrollLeft - walk;
        });

    </script>

</body>
</html>
