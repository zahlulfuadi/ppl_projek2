<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="grid justify-items-center bg-blueGray">
    <div class="w-full min-h-screen items-center pt-28">
        <div class="w-2/3 justify-self-center mx-auto">
            <!-- form pencarian -->
            <form action="/search-results" method="get">
                <div class="flex flex-row justify-center mx-auto">
                    <input type="text" class="py-2 pl-2 w-72 text-sm rounded-l-lg focus:outline-none" placeholder="Matematika">
                    <input type="text" class="py-2 pl-2 w-72 text-sm border-l-2 border-gray-500 border-opacity-50 focus:outline-none" placeholder="DKI Jakarta">
                    <button type="submit" class="bg-white rounded-r-lg focus:outline-none">
                        <span class="bg-blue-800 flex items-center rounded-r-lg py-2 px-4 w-full h-full">
                            <i class="fa fa-search text-white"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>

        <div class="flex flex-col my-16 px-20">
            <div class="bg-gray-300 border-2 border-gray-500 text-xs p-2">
                <!-- <span>Urutkan Berdasarkan</span>
                <span class="ml-5 py-0.5 px-1.5 rounded cursor-pointer bg-white">Rating <i class="fa fa-caret-down"></i></span>
                <span class="ml-1 py-0.5 px-1.5 rounded bg-white">
                    <i class="fa fa-arrow-down"></i>
                </span> -->
            </div>
            <div class="bg-pewter border-l-2 border-r-2 border-b-2 border-gray-500">
                <div class="py-4 px-5">
                    <?php for ($i = 0; $i < count($guru) / 3; $i++) : ?>
                        <div class="flex py-2">
                            <?php for ($j = 0; $j <  count($guru); $j++) :
                                // dd($guru[$j]['nama']);
                            ?>

                                <a href="/profil-guru">
                                    <div class="flex-1 relative bg-white border-2 border-gray-500 rounded-lg shadow-xl py-2 px-5 mx-6">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <img src="http://gokubi.com/wp-content/uploads/2013/10/Steve-Andersen-Headshot-square1.jpeg" class="w-28 rounded-full p-2" alt="foto profil">
                                            </div>
                                            <div class="flex-1 text-left">
                                                <h5 class="font-bold font-heading text-xl uppercase text-gray-600"><?= $guru[$j]['nama']; ?></h5>
                                                <h3 class="font-semibold text-sm">Rp <?= number_format($guru[$j]['biaya_belajar'], 2, ',', '.'); ?>/jam</h3>
                                                <div class="text-xs mt-2">
                                                    <p>
                                                        <?= substr($guru[$j]['deskripsi'], 0, 50) . "..."; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="absolute top-0 right-0 p-1">
                                            <span class="bg-white text-banana font-semibold px-0.5 border border-banana text-xs rounded">
                                                <i class="fa fa-star"></i>
                                                5.0
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            <?php endfor; ?>
                        </div>
                    <?php endfor; ?>

                    <!-- pagination -->
                    <!-- <div class="flex justify-center py-5">
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                1
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                2
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                3
                            </a>
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                ...
                            </span>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                8
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                9
                            </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                10
                            </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>