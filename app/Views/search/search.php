<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="grid justify-items-center bg-blueGray">
    <div class="h-screen items-center text-center">
        <h1 class="text-4xl pt-44 tracking-tight font-heading font-extrabold text-pewter sm:text-5xl md:text-6xl">
            <span class="block xl:pb-4">Temukan Guru yang terbaik</span>
        </h1>
        <div class="container h-screen flex justify-center items-center -mt-64">
            <div class="w-full justify-self-center mx-auto">
                <!-- form pencarian -->
                <form action="#">
                    <div class="flex flex-row justify-center mx-auto shadow-lg">
                        <input type="text" class="py-4 pl-2 w-96 text-sm rounded-l-lg focus:outline-none" placeholder="Matematika">
                        <input type="text" class="py-4 pl-2 w-96 text-sm border-l-2 border-gray-500 border-opacity-50 focus:outline-none" placeholder="DKI Jakarta">
                        <button type="submit" class="bg-white rounded-r-lg focus:outline-none">
                            <span class="bg-blue-800 flex items-center rounded-r-lg py-2 px-8 w-full h-full">
                                <i class="fa fa-search text-white text-2xl"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>