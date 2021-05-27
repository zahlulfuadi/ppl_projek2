<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CariGuruPrivat - Home</title>

    <!-- tailwind -->
    <link rel="stylesheet" href="/css/tailwind.css">

    <!-- icon font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font oswald dan montserrat -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <!-- navbar -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="fixed shadow-md z-50 w-full bg-gray-100 dark-mode:text-gray-200 dark-mode:bg-gray-800">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="<?= base_url(); ?>" class="tracking-tight text-gray-900 rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">
                    <p class="text-xl font-black font-logo">CariGuruPrivat</p>
                </a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col-reverse flex-grow pb-4 md:pb-0 hidden md:flex md:justify-between md:flex-row">
                <!-- <div class="flex md:justify-between"> -->
                <div class="relative ml-10 mx-auto">
                    <form action="/searchresults" method="get">
                        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="key" placeholder="Masukkan pencarian...">
                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4 focus:outline-none">
                            <svg class="text-gray-600 h-4 w-4 fill-current focus:outline-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="flex flex-col items-start md:flex-row md:items-center">
                    <a href="/register" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent md:mt-0 md:ml-4 focus:outline-none  text-gray-700 hover:text-black rounded-md">Daftar</a>
                    <a href="/chooseuser" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent md:mt-0 md:ml-4 focus:outline-none  text-gray-700 hover:text-black rounded-md">Masuk</a>
                </div>
                <!-- </div> -->
                <!-- <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Blog</a> -->
                <!-- <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Portfolio</a> -->
                <!-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Dropdown</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
                        </div>
                    </div>
                </div> -->
            </nav>
        </div>
    </div>
    <!-- /navbar -->


    <!-- jumbotron -->
    <div class="relative bg-darkBlue overflow-hidden">
        <div class="max-w-7xl mx-auto h-screen-3/4 bg-jumbotron bg-cover bg-bottom -mb-4">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-heading font-extrabold text-pewter sm:text-5xl md:text-6xl">
                            <span class="block pt-20">TELUSURI</span>
                            <span class="block xl:inline">RATUSAN SUBJEK</span>
                        </h1>
                        <p class="mt-3 text-base font-body text-pewter sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-lg lg:mx-0">
                            Apapun yang ingin kamu pelajari, <span class="font-logo font-black">CariGuruPrivat</span> adalah solusi lengkap dalam satu aplikasi. Ayo lejitkan potensimu!
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>


    <!-- bidang studi -->
    <div class="relative bg-banana overflow-hidden">
        <div class="max-w-7xl mx-auto h-auto -mb-4">
            <div class="relative z-10 pb-8 px-4 sm:px-6 lg:px-8 sm:pb-16 md:pb-20 w-full lg:pb-28 xl:pb-32">
                <h1 class="text-3xl tracking-tight font-heading font-extrabold text-darkBlue sm:text-4xl md:text-5xl">
                    <span class="block xl:pt-20 xl:pb-12 text-center">Bidang Studi yang Tersedia</span>
                </h1>
                <div class="text-lg leading-loose font-body font-semibold text-darkBlue sm:text-xl md:text-2xl">
                    <?php for ($i = 0; $i < 9; $i++) { ?>
                        <div class="flex leading-10 py-2">
                            <div class="flex-1 text-center">
                                Matematika
                            </div>
                            <div class="flex-1 text-center">
                                Matematika
                            </div>
                            <div class="flex-1 text-center">
                                Matematika
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <h1 class="text-3xl tracking-tight font-heading font-extrabold text-darkBlue sm:text-4xl md:text-5xl">
                    <span class="block xl:pt-12 text-center">.. dan masih banyak lagi!</span>
                </h1>
            </div>
        </div>
    </div>


    <!-- cara kerja -->
    <div class="relative bg-pewter overflow-hidden">
        <div class="max-w-7xl mx-auto h-auto -mb-4">
            <div class="relative z-10 pb-8 px-4 sm:px-6 lg:px-8 sm:pb-10 w-full md:pb-12 xl:pb-16">
                <section class="container mx-auto px-6 p-10">
                    <h1 class="text-3xl text-darkBlue sm:text-4xl md:text-5xl text-center">
                        <span class="block xl:pt-20 font-heading font-extrabold leading-tight">Bagaimana cara kerja</span>
                        <span class="block xl:inline tracking-tight font-logo font-black">CariGuruPrivat</span>
                    </h1>

                    <div class="flex items-center flex-wrap my-20 px-12">
                        <div class="w-full md:w-1/2 md:px-5">
                            <h4 class="text-2xl tracking-tight font-heading font-extrabold text-darkBlue sm:text-3xl md:text-4xl">Temukan Guru yang Terbaik</h4>
                            <p class="mt-3 text-base font-body text-gray-700 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-lg lg:mx-0">Dengan fitur pencarian, kamu bisa melihat daftar guru yang sesuai dengan kebutuhanmu, lengkap dengan detail tarif, lokasi, dan rincian lebih lanjut yang dapat dilihat pada profilnya.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-16">
                            <img src="/img/components/ilustrasi/ilustrasi-01.png" alt="Ilustrasi 01" />
                        </div>
                    </div>

                    <div class="flex items-center flex-wrap mt-32">
                        <div class="w-full pl-10 text-center">
                            <h4 class="text-2xl tracking-tight font-heading font-extrabold text-darkBlue sm:text-3xl md:text-4xl mb-3">Atus Jadwal Kursus</h4>
                            <p class="mt-3 text-base font-body text-gray-700 sm:mt-5 sm:text-lg md:mt-5 md:text-lg mx-auto w-1/3">Diskusikan waktu yang cocok untuk pelaksanaan kursusmu dengan guru yang bersangkutan.</p>
                        </div>
                    </div>

                    <div class="flex items-center flex-wrap mb-16 -mt-12">
                        <div class="w-full md:w-1/2 px-32">
                            <img src="/img/components/ilustrasi/ilustrasi-02a.png" alt="Ilustrasi 02" />
                        </div>
                        <div class="w-full md:w-1/2 px-32">
                            <img src="/img/components/ilustrasi/ilustrasi-02b.png" alt="Syncing" />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <!-- tombol cari -->
    <div class="relative bg-blueGray overflow-hidden pb-20">
        <div class="mx-auto h-screen-3/4 -mb-4">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 w-full lg:pb-28 xl:pb-32">
                <main class="mt-4 mx-auto w-full px-4 sm:mt-6 sm:px-6 md:mt-10 lg:mt-12 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl pb-10 tracking-tight font-heading font-extrabold text-pewter sm:text-5xl md:text-6xl">
                            <span class="block xl:pt-20 xl:pb-4">Tunggu apa lagi?</span>
                            <span class="block xl:pb-4">Temukan gurumu sekarang!</span>
                        </h1>
                        <a href="/search" class="cursor-pointer bg-banana hover:bg-yellow-400 border-4 border-yellow-400 text-white text-lg sm:text-xl md:text-2xl font-body font-bold py-2 px-8 rounded-full focus:outline-none focus:border-banana">
                            Cari Guru
                        </a>
                    </div>
                </main>
            </div>
        </div>
    </div>


    <!-- copyright ///// sementara punyaku dulu ya -->
    <div class="bg-darkBlue pt-2">
        <div class="pb-5 px-3 m-auto text-pewter text-xs text-center">
            <div class="mt-2">Copyright 2021 © 3SI1 PPL Kelompok 2</div>
            <div class="mt-2 mx-auto text-center">
                <!-- email -->
                <a href="mailto:221810676@stis.ac.id?Subject=Kritik%20dan%20Saran%20Mengenain%20Website%20CariGuruPrivat" target="_blank" class="mx-1 inline-flex">
                    <svg class="fill-current cursor-pointer text-pewter hover:text-white w-8" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="email" d="M12 .02c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.99 6.98l-6.99 5.666-6.991-5.666h13.981zm.01 10h-14v-8.505l7 5.673 7-5.672v8.504z"></path>
                    </svg>
                </a>

                <!-- instagram -->
                <a href="https://www.instagram.com/zahlulef/" target="_blank" class="mx-1 inline-flex">
                    <svg class="fill-current cursor-pointer text-pewter hover:text-white w-8" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="instagram" d="M17.25 7.288v1.269c0 .297-.241.539-.538.539h-1.269c-.299 0-.538-.242-.538-.539v-1.269c0-.297.239-.538.538-.538h1.269c.297 0 .538.241.538.538zm-5.25 7.403c1.486 0 2.693-1.205 2.693-2.692s-1.207-2.69-2.693-2.69c-1.487 0-2.691 1.204-2.691 2.691s1.204 2.691 2.691 2.691zm4.261-3.291c.028.196.046.396.046.599 0 2.38-1.928 4.308-4.307 4.308s-4.307-1.928-4.307-4.307c0-.204.018-.403.046-.599.027-.194.066-.383.118-.567h-1.107v5.879c0 .297.241.538.538.538h9.424c.297 0 .538-.241.538-.538v-5.879h-1.107c.05.184.09.373.118.566zm7.739.6c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5-5.385c0-.892-.723-1.615-1.615-1.615h-10.77c-.892 0-1.615.723-1.615 1.615v10.769c0 .893.723 1.616 1.615 1.616h10.77c.892 0 1.615-.723 1.615-1.616v-10.769z" />
                    </svg>
                </a>

                <!-- whatsapp -->
                <a href="https://wa.me/628979846945" target="_blank" class="mx-1 inline-flex">
                    <svg class="fill-current cursor-pointer text-pewter hover:text-white w-8" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="whatsapp" d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</body>

</html>