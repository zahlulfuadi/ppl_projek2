<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="bg-blueGray font-sans leading-normal tracking-normal pt-12">

    <div class="flex flex-col md:flex-row">

        <div class="main-content flex-1 mt-12 md:mt-2 pb-24 md:pb-5">

            <div class="flex flex-wrap pt-8 px-20 min-h-screen-3/4">

                <div class="w-full p-4 py-2">
                    <!--Metric Card-->
                    <div class="bg-pewter border border-gray-600 rounded-lg shadow-xl p-5 h-full">
                        <h5 class="font-bold font-heading text-3xl text-center text-gray-600">Edit Subjek</h5>
                        <div class="text-justify mt-2 space-y-3">
                            <form action="#" class="mt-5">
                                <table class="table-auto w-full text-sm justify-start">
                                    <tbody>
                                        <tr class="leading-loose">
                                            <td class="flex justify-end text-darkBlue font-semibold">
                                                <label for="nama-subjek">Nama mapel:</label>
                                            </td>
                                            <td class="pl-5">
                                                <?php
                                                // $mapel = '';
                                                // foreach ($detail_mapel as $key => $value) {
                                                //     $mapel .= $value['nama'];
                                                //     $mapel .= (($key + 1) != count($detail_mapel)) ? ", " : "";
                                                // }
                                                ?>
                                                <input id="nama-subjek" name="nama-subjek" type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="<?php //$detail_mapel[0]['nama']; 
                                                                                                                                                                                                    ?>">
                                            </td>
                                        </tr>
                                        <tr class="leading-loose">
                                            <td class="flex justify-end text-darkBlue font-semibold">
                                                <label for="materi">Materi:</label>
                                            </td>
                                            <td class="pl-5">
                                                <select id="materi" name="materi[]" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" multiple>
                                                    <?php //foreach ($daftar_subjek as $key => $value) :
                                                    //echo "<option value='" . $value['nama'] . "' "">ENGLISH</option>";
                                                    //echo (($key + 1) != count($daftar_subjek)) ? ", " : "";
                                                    //}
                                                    ?>
                                                    <option value='english' selected>ENGLISH</option>
                                                    <option value='maths' selected>MATHS</option>
                                                    <option value='computer'>COMPUTER</option>
                                                    <option value='physics'>PHYSICS</option>
                                                    <option value='chemistry'>CHEMISTRY</option>
                                                    <option value='hindi'>HINDI</option>
                                                </select>
                                                <!-- <input type="text" class="w-full bg-white text-gray-800 border-2 border-opacity-50 border-gray-600 px-2" value="Aljabar, Aritmatika, Geometri"> -->
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
                    <!--/Metric Card-->
                </div>
            </div>

        </div>
    </div>

    <?= $this->endSection() ?>