<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<!-- jumbotron -->
<div class="relative bg-darkBlue overflow-hidden">
    <div class="max-w-7xl mx-auto h-screen-3/4 bg-jumbotron bg-cover bg-bottom -mb-4">
        <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-heading font-extrabold text-pewter sm:text-5xl md:text-6xl">
                        <span class="block xl:pt-20">TELUSURI</span>
                        <span class="block xl:inline">RATUSAN SUBJEK</span>
                    </h1>
                    <p class="mt-3 text-base font-body text-pewter sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-lg lg:mx-0">
                        Apapun yang ingin kamu pelajari, CariGuruPrivat adalah solusi lengkap dalam satu aplikasi. Ayo lejitkan potensimu!
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
                <h1 class="text-3xl tracking-tight font-heading font-extrabold text-darkBlue sm:text-4xl md:text-5xl text-center">
                    <span class="block xl:pt-20">Bagaimana cara kerja</span>
                    <span class="block xl:inline">CariGuruPrivat</span>
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
                    <a href="/cari">
                        <button class="bg-banana hover:bg-yellow-400 border-4 border-yellow-400 text-white text-lg sm:text-xl md:text-2xl font-body font-bold py-2 px-8 rounded-full focus:outline-none focus:border-banana">
                            Cari Guru
                        </button>
                    </a>
                </div>
            </main>
        </div>
    </div>
</div>




<!-- copyright -->

<div class="bg-darkBlue pt-2">
    <div class="pb-5 px-3 m-auto text-pewter text-xs text-center">
        <div class="mt-2">Copyright 2021 © 3SI1 PPL Kelompok 2</div>
        <div class="mt-2 mx-auto text-center">
            <a href="/#" class="mx-1 inline-flex">
                <svg class="fill-current cursor-pointer text-pewter hover:text-white w-8" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="email" d="M12 .02c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.99 6.98l-6.99 5.666-6.991-5.666h13.981zm.01 10h-14v-8.505l7 5.673 7-5.672v8.504z"></path>
                </svg>
            </a>


            <a href="/#" class="mx-1 inline-flex">
                <svg class="fill-current cursor-pointer text-pewter hover:text-white w-8" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="instagram" d="M17.25 7.288v1.269c0 .297-.241.539-.538.539h-1.269c-.299 0-.538-.242-.538-.539v-1.269c0-.297.239-.538.538-.538h1.269c.297 0 .538.241.538.538zm-5.25 7.403c1.486 0 2.693-1.205 2.693-2.692s-1.207-2.69-2.693-2.69c-1.487 0-2.691 1.204-2.691 2.691s1.204 2.691 2.691 2.691zm4.261-3.291c.028.196.046.396.046.599 0 2.38-1.928 4.308-4.307 4.308s-4.307-1.928-4.307-4.307c0-.204.018-.403.046-.599.027-.194.066-.383.118-.567h-1.107v5.879c0 .297.241.538.538.538h9.424c.297 0 .538-.241.538-.538v-5.879h-1.107c.05.184.09.373.118.566zm7.739.6c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5-5.385c0-.892-.723-1.615-1.615-1.615h-10.77c-.892 0-1.615.723-1.615 1.615v10.769c0 .893.723 1.616 1.615 1.616h10.77c.892 0 1.615-.723 1.615-1.616v-10.769z" />
                </svg>
            </a>
            <a href="/#" class="mx-1 inline-flex">
                <svg class="fill-current cursor-pointer text-pewter hover:text-white w-8" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                    <path id="whatsapp" d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>