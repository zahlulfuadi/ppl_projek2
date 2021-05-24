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



<!-- Modal Belum Login -->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full z-50 top-0 left-0 flex items-center justify-center overflow-y-auto" id="tambahSubjekModal">
    <div class="modal-overlay modal-close absolute w-full h-full bg-gray-900 opacity-75 bg-scroll"></div>

    <div class="modal-container bg-pewter w-full md:max-w-xs mx-auto md:mt-20 rounded-xl shadow-lg z-50">

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content pt-4 text-center">
            <!--Title-->
            <div class="relative flex flex-col items-center pb-3">
                <p class="text-base text-darkBlue font-semibold font-body px-5">Mohon maaf, anda harus login terlebih dahulu</p>
            </div>

            <div class="flex w-full border-t-2 border-gray-600">
                <div class="w-1/2 border-r-2 border-gray-600 py-2 text-center">
                    <span class="font-semibold text-darkBlue">Login</span>
                </div>
                <div class="w-1/2 py-2">
                    <span class="font-semibold text-darkBlue">Kembali</span>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    var openmodal = document.querySelectorAll('.modal-open')
    let selectedModalTargetId = ''
    for (var i = 0; i < openmodal.length; i++) {
        openmodal[i].addEventListener('click', function(event) {
            selectedModalTargetId = event.target.attributes.getNamedItem('data-target').value
            event.preventDefault()
            toggleModal()
        })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    }

    function toggleModal() {
        if (!selectedModalTargetId) {
            return
        }
        const body = document.querySelector('body')
        const modal = document.getElementById(selectedModalTargetId)
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }
</script>





<?= $this->endSection() ?>