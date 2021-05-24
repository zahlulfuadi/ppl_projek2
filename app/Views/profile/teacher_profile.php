<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="bg-blueGray font-sans leading-normal tracking-normal pt-12">

    <div class="flex flex-col md:flex-row">

        <div class="main-content flex-1 mt-12 md:mt-2 pb-24 md:pb-5">


            <div class="flex flex-wrap pt-8 px-20">
                <div class="flex flex-wrap w-full md:w-1/2">
                    <div class="w-full p-4 py-2">
                        <!--Metric Card-->
                        <div class="relative bg-pewter border border-gray-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <img src="http://gokubi.com/wp-content/uploads/2013/10/Steve-Andersen-Headshot-square1.jpeg" class="w-36 rounded-full p-2" alt="foto profil">
                                </div>
                                <div class="flex-1 text-left">
                                    <h5 class="font-bold font-heading text-3xl uppercase text-gray-600">John Doe</h5>
                                    <div class="text-xs my-1">
                                        <span class="bg-white text-banana font-semibold px-2 border border-banana rounded mr-3">
                                            <i class="fa fa-star"></i>
                                            5.0 (43 ulasan)
                                        </span>
                                        <span class="bg-white text-blue-700 font-semibold px-2 border border-blue-500 rounded">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            DKI Jakarta
                                        </span>
                                    </div>
                                    <h3 class="font-bold text-xl">Rp 75.000/jam</h3>
                                    <div class="text-xs mt-3">
                                        <span class="cursor-pointer bg-banana text-white font-semibold py-0.5 px-2 border-2 border-yellow-700 border-opacity-25 rounded-lg mr-3">
                                            Buat reservasi khusus
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute top-0 right-0 p-4 text-red-600">
                                <i class="fa fa-flag text-xl cursor-pointer" aria-hidden="true"></i>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full p-4 py-2">
                        <!--Metric Card-->
                        <div class="bg-pewter border border-gray-600 rounded-lg shadow-xl p-2 px-4">
                            <div class="flex flex-col items-start">
                                <div class="flex-1 text-left">
                                    <div class="text-xs my-1 mb-4">
                                        <span class="block text-base font-semibold text-gray-600 mb-1.5">Materi yang diajarkan</span>
                                        <span class="bg-white text-gray-700 font-semibold px-4 py-0.5 border border-gray-600 rounded-md mr-2">
                                            Aljabar
                                        </span>
                                        <span class="bg-white text-gray-700 font-semibold px-4 py-0.5 border border-gray-600 rounded-md mr-2">
                                            Aritmatika
                                        </span>
                                        <span class="bg-white text-gray-700 font-semibold px-4 py-0.5 border border-gray-600 rounded-md mr-2">
                                            Geometri
                                        </span>
                                    </div>
                                    <div class="text-xs my-1 mb-4">
                                        <span class="block text-base font-semibold text-gray-600 mb-1.5">Tingkat</span>
                                        <span class="bg-white text-gray-700 font-semibold px-4 py-0.5 border border-gray-600 rounded-md mr-2">
                                            SMA Kelas X
                                        </span>
                                        <span class="bg-white text-gray-700 font-semibold px-4 py-0.5 border border-gray-600 rounded-md mr-2">
                                            SMA Kelas XI
                                        </span>
                                        <span class="bg-white text-gray-700 font-semibold px-4 py-0.5 border border-gray-600 rounded-md mr-2">
                                            SMA Kelas XII
                                        </span>
                                    </div>
                                    <div class="text-xs my-1 mb-4">
                                        <span class="block text-base font-semibold text-gray-600 mb-1.5">Kursus yang ditawarkan</span>
                                        <span class="bg-white text-gray-700 font-semibold px-4 py-0.5 border border-gray-600 rounded-md mr-2">
                                            Privat
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-4 py-2">
                    <!--Metric Card-->
                    <div class="bg-pewter border border-gray-600 rounded-lg shadow-xl p-5 h-full">
                        <h5 class="font-bold font-heading text-3xl text-gray-600">Tentang John Doe</h5>
                        <div class="text-justify mt-2 space-y-3">
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                            </p>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>

            <!-- ulasan -->
            <div class="pt-4 px-20">
                <div class="w-full p-4 py-2">
                    <!--Metric Card-->
                    <div class="bg-pewter border border-gray-600 rounded-lg shadow-xl h-full">
                        <h5 class="font-bold font-heading text-3xl text-gray-600 p-5">43 ulasan pada John Doe</h5>
                        <div class="text-justify mt-2 space-y-3">
                            <div class="border-b border-gray-500 px-5 pb-5">
                                <span class="font-bold"> Murid A </span>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                    Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                                </p>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                    Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                                </p>
                            </div>
                            <div class="border-b border-gray-500 px-5 pb-5">
                                <span class="font-bold"> Murid B </span>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                    Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                                </p>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                    Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                                </p>
                            </div>
                            <div class="px-5 pb-5">
                                <span class="font-bold"> Murid C </span>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                    Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                                </p>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus saepe sequi odio.
                                    Numquam laborum fugiat at eveniet accusamus enim autem distinctio hic eaque quibusdam corrupti fuga, voluptatum assumenda! Asperiores, veniam!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="w-auto cursor-pointer px-4 text-center py-1.5 rounded-xl bg-darkBlue text-white border-2 border-gray-400 hover:bg-white hover:border-darkBlue hover:text-darkBlue focus:outline-none mt-8 mb-24">Tampilkan lebih banyak ulasan</button>
            </div>
        </div>
    </div>




    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>

    <?= $this->endSection() ?>