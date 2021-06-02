<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="bg-blueGray font-sans leading-normal tracking-normal pt-12">

    <div class="flex flex-col md:flex-row">

        <div class="main-content flex-1 mt-12 md:mt-2 pb-24 md:pb-5">


            <div class="flex flex-wrap pt-8 px-20 min-h-screen-3/4">
                <div class="w-full md:w-3/12 p-4 py-2">
                    <!--Metric Card-->

                    <div class="bg-pewter border border-gray-600 rounded-lg shadow-xl p-5 h-full">
                        <div class="flex flex-col items-center">
                            <div class="px-auto">
                                <img src="http://gokubi.com/wp-content/uploads/2013/10/Steve-Andersen-Headshot-square1.jpeg" class="w-36 rounded-full p-2" alt="foto profil">
                            </div>
                            <div class="flex flex-col text-center">
                                <h5 class="font-bold font-heading text-3xl uppercase text-gray-600"><?= $profile['fullname']; ?></h5>
                                <span class="text-xs text-blue-700 font-base px-2 my-3">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <?= $profile['lokasi']; ?>
                                </span>
                                <button type="submit" class="modal-open w-auto cursor-pointer px-4 text-center py-1.5 rounded-xl bg-darkBlue text-white border-2 border-gray-400 hover:bg-white hover:border-darkBlue hover:text-darkBlue focus:outline-none mb-8" data-toggle="modal" data-target="editProfilModal">
                                    Edit Profil
                                </button>
                                <div>
                                    <span class="text-left block leading-none text-sm font-semibold"> Bidang studi yang diajarkan: </span>
                                    <span class="text-left block text-xs italic"> (klik untuk lihat detail) </span>
                                    <div class="flex flex-row flex-wrap justify-around gap-y-1 py-2">
                                        <?php foreach ($daftar_subjek as $subjek) : ?>
                                            <span class="modal-open bg-white cursor-pointer text-gray-700 font-semibold text-xs px-4 py-0.5 border border-gray-600 rounded-md" data-toggle="modal" data-target="detailSubjekModal">
                                                <?= $subjek['nama']; ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="text-xs mt-3">
                                    <span class="modal-open cursor-pointer bg-banana hover:bg-yellow-200 text-white font-semibold py-1 px-2 border-2 border-yellow-700 border-opacity-25 rounded-lg mr-3" data-toggle="modal" data-target="tambahSubjekModal">
                                        Tambahkan Subjek
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-9/12 p-4 py-2">
                    <!--Metric Card-->
                    <div class="bg-pewter border border-gray-600 rounded-lg shadow-xl p-5 h-full">
                        <h5 class="font-bold font-heading text-3xl text-gray-600">Tentang Anda</h5>
                        <div class="text-justify mt-2 space-y-3">
                            <p>
                                <?= $profile['deskripsi']; ?>
                            </p>
                            <!-- <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                            </p> -->
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>

        </div>
    </div>




    <!--Modal Edit Profil-->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center overflow-y-auto" id="editProfilModal">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-75 bg-scroll"></div>

        <div class="modal-container bg-pewter w-full md:max-w-2xl mx-auto md:mt-20 rounded shadow-lg z-50">

            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-center px-6">
                <!--Title-->
                <div class="relative flex flex-col items-center pb-3">
                    <p class="text-2xl text-darkBlue font-bold font-heading">Edit Profil</p>
                    <div class="modal-close absolute top-0 right-0 cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                    <div class="">
                        <img src="http://gokubi.com/wp-content/uploads/2013/10/Steve-Andersen-Headshot-square1.jpeg" class="w-24 rounded-full p-2" alt="foto profil">
                    </div>
                </div>

                <!--Body-->
                <form action="#" class="">
                    <table class="table-auto w-full text-sm -mx-10">
                        <tbody>
                            <tr>
                                <td class="flex items-start justify-end text-darkBlue">
                                    <label for="nama-lengkap">Nama Lengkap:</label>
                                </td>
                                <td class="pl-5 py-1">
                                    <input id="nama-lengkap" name="nama-lengkap" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="John Doe">
                                </td>
                            </tr>
                            <tr>
                                <td class="flex items-start justify-end text-darkBlue">
                                    <label for="email">Email:</label>
                                </td>
                                <td class="pl-5 py-1">
                                    <input id="email" name="email" type="email" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="johndoe@gmail.com">
                                </td>
                            </tr>
                            <tr>
                                <td class="flex items-start justify-end text-darkBlue">
                                    <label for="password">Password:</label>
                                </td>
                                <td class="pl-5 py-1">
                                    <input id="password" name="password" type="password" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="password">
                                </td>
                            </tr>
                            <tr>
                                <td class="flex items-start justify-end text-darkBlue">
                                    <label for="lokasi">Lokasi:</label>
                                </td>
                                <td class="pl-5 py-1">
                                    <input id="lokasi" name="lokasi" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="DKI Jakarta">
                                </td>
                            </tr>
                            <tr>
                                <td class="flex items-start justify-end text-darkBlue">
                                    <label for="deskripsi-diri">Deskripsi Diri:</label>
                                </td>
                                <td class="pl-5 py-1">
                                    <textarea id="deskripsi-diri" name="deskripsi_diri" rows="4" class="whitespace-normal w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 max-h-28 px-2">ini harus satu baris</textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--Footer-->
                    <div class="flex justify-center pt-2 text-sm">
                        <button type="submit" class="w-auto cursor-pointer px-8 text-center py-0.5 rounded-xl bg-darkBlue text-white border-2 hover:bg-white hover:border-darkBlue hover:text-darkBlue focus:outline-none my-4">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal Detail Subjek -->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center overflow-y-auto" id="detailSubjekModal">
        <div class="modal-overlay modal-close absolute w-full h-full bg-gray-900 opacity-75 bg-scroll"></div>

        <div class="modal-container bg-pewter w-full md:max-w-xl mx-auto md:mt-20 rounded shadow-lg z-50">

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-center px-6">
                <!--Title-->
                <div class="relative flex flex-col items-center pb-3">
                    <p class="text-2xl text-darkBlue font-bold font-heading">Detail Subjek</p>
                </div>

                <!--Body-->
                <table class="table-auto w-full text-sm mt-5">
                    <tbody>
                        <tr class="leading-loose">
                            <td class="flex justify-end text-darkBlue font-semibold">
                                Nama subjek:
                            </td>
                            <td class="pl-5">
                                <span class="flex justify-start w-full text-gray-800 px-2">
                                    Matematika
                                </span>
                            </td>
                        </tr>
                        <tr class="leading-loose">
                            <td class="flex justify-end text-darkBlue font-semibold">
                                Materi:
                            </td>
                            <td class="pl-5">
                                <span class="flex justify-start w-full text-gray-800 px-2">
                                    Aljabar, Aritmatika, Geometri
                                </span>
                            </td>
                        </tr>
                        <tr class="leading-loose">
                            <td class="flex justify-end text-darkBlue font-semibold">
                                Tingkat:
                            </td>
                            <td class="pl-5">
                                <span class="flex justify-start w-full text-gray-800 px-2">
                                    SMA Kelas X, SMA Kelas XI, SMA Kelas XII
                                </span>
                            </td>
                        </tr>
                        <tr class="leading-loose">
                            <td class="flex justify-end text-darkBlue font-semibold">
                                Jenis kursus:
                            </td>
                            <td class="pl-5">
                                <span class="flex justify-start w-full text-gray-800 px-2">
                                    Privat
                                </span>
                            </td>
                        </tr>
                        <tr class="leading-loose">
                            <td class="flex justify-end text-darkBlue font-semibold">
                                Harga (per jam):
                            </td>
                            <td class="pl-5">
                                <span class="flex justify-start w-full text-gray-800 px-2">
                                    Rp 75.000
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--Footer-->
                <div class="flex flex-col gap-y-2 items-center pt-20 pb-10 text-sm">
                    <span class="modal-open cursor-pointer w-36 text-center py-0.5 rounded-xl bg-darkBlue text-white border-2 border-darkBlue hover:bg-white hover:text-darkBlue focus:outline-none" data-toggle="modal" data-target="editSubjekModal">
                        Edit
                    </span>
                    <span class="modal-close cursor-pointer w-36 text-center py-0.5 rounded-xl bg-blueGray text-white border-2 border-darkBlue hover:bg-white hover:text-darkBlue focus:outline-none">
                        Kembali
                    </span>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Edit Subjek -->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center overflow-y-auto" id="editSubjekModal">
        <div class="modal-overlay modal-close absolute w-full h-full bg-gray-900 opacity-75 bg-scroll"></div>

        <div class="modal-container bg-pewter w-full md:max-w-xl mx-auto md:mt-20 rounded shadow-lg z-50">

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-center px-6">
                <!--Title-->
                <div class="relative flex flex-col items-center pb-3">
                    <p class="text-2xl text-darkBlue font-bold font-heading">Edit Subjek</p>
                </div>

                <!--Body-->
                <form action="#" class="mt-5">
                    <table class="table-auto w-full text-sm">
                        <tbody>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    <label for="nama-subjek">Nama subjek:</label>
                                </td>
                                <td class="pl-5">
                                    <input id="nama-subjek" name="nama-subjek" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="Matematika">
                                </td>
                            </tr>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    <label for="materi">Materi:</label>
                                </td>
                                <td class="pl-5">
                                    <input id="materi" name="materi" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="Aljabar, Aritmatika, Geometri">
                                </td>
                            </tr>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    <label for="tingkat">Tingkat:</label>
                                </td>
                                <td class="pl-5">
                                    <input id="tingkat" name="tingkat" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="SMA Kelas X, SMA Kelas XI, SMA Kelas XII">
                                </td>
                            </tr>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    Jenis kursus:
                                </td>
                                <td>
                                    <div class="flex flex-row justify-start">
                                        <div class="w-1/2 px-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio h-5 w-5 text-gray-600" name="jenis-kursus" value="privat" checked>
                                                <span class="ml-2">Privat</span>
                                            </label>
                                        </div>
                                        <div class="w-1/2 text-gray-800 px-2">
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio h-5 w-5 text-gray-600" name="jenis-kursus" value="kelompok">
                                                <span class="ml-2">Kelompok</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    <label for="harga">Harga (per jam):</label>
                                </td>
                                <td class="pl-5">
                                    <input id="harga" name="harga" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="75.000">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--Footer-->
                    <div class="flex flex-col gap-y-2 items-center pt-20 pb-10 text-sm">
                        <button type="submit" class="cursor-pointer w-36 text-center py-0.5 rounded-xl bg-darkBlue text-white border-2 border-darkBlue hover:bg-white hover:text-darkBlue focus:outline-none">
                            Simpan
                        </button>
                        <span class="modal-close cursor-pointer w-36 text-center py-0.5 rounded-xl bg-blueGray text-white border-2 border-darkBlue hover:bg-white hover:text-darkBlue focus:outline-none">
                            Kembali
                        </span>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal Tambah Subjek -->
    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center overflow-y-auto" id="tambahSubjekModal">
        <div class="modal-overlay modal-close absolute w-full h-full bg-gray-900 opacity-75 bg-scroll"></div>

        <div class="modal-container bg-pewter w-full md:max-w-xl mx-auto md:mt-20 rounded shadow-lg z-50">

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-center px-6">
                <!--Title-->
                <div class="relative flex flex-col items-center pb-3">
                    <p class="text-2xl text-darkBlue font-bold font-heading">Tambah Subjek</p>
                </div>

                <!--Body-->
                <form action="#" class="mt-5">
                    <table class="table-auto w-full text-sm">
                        <tbody>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    <label for="nama-subjek">Nama subjek:</label>
                                </td>
                                <td class="pl-5">
                                    <input id="nama-subjek" name="nama-subjek" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" placeholder="Matematika">
                                </td>
                            </tr>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    <label for="materi">Materi:</label>
                                </td>
                                <td class="pl-5">
                                    <input id="materi" name="materi" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" placeholder="Aljabar, Aritmatika, Geometri">
                                </td>
                            </tr>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    <label for="tingkat">Tingkat:</label>
                                </td>
                                <td class="pl-5">
                                    <input id="tingkat" name="tingkat" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" placeholder="SMA Kelas X, SMA Kelas XI, SMA Kelas XII">
                                </td>
                            </tr>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    Jenis kursus:
                                </td>
                                <td>
                                    <div class="flex flex-row justify-start">
                                        <div class="w-1/2 px-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio h-5 w-5 text-gray-600" name="jenis-kursus" value="privat">
                                                <span class="ml-2">Privat</span>
                                            </label>
                                        </div>
                                        <div class="w-1/2 text-gray-800 px-2">
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio h-5 w-5 text-gray-600" name="jenis-kursus" value="kelompok">
                                                <span class="ml-2">Kelompok</span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="leading-loose">
                                <td class="flex justify-end text-darkBlue font-semibold">
                                    <label for="harga">Harga (per jam):</label>
                                </td>
                                <td class="pl-5">
                                    <input id="harga" name="harga" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" placeholder="75.000">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--Footer-->
                    <div class="flex flex-col gap-y-2 items-center pt-20 pb-10 text-sm">
                        <button type="submit" class="cursor-pointer w-36 text-center py-0.5 rounded-xl bg-darkBlue text-white border-2 border-darkBlue hover:bg-white hover:text-darkBlue focus:outline-none">
                            Simpan
                        </button>
                        <span class="modal-close cursor-pointer w-36 text-center py-0.5 rounded-xl bg-blueGray text-white border-2 border-darkBlue hover:bg-white hover:text-darkBlue focus:outline-none">
                            Kembali
                        </span>
                    </div>
                </form>

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