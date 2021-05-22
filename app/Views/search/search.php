<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="grid justify-items-center bg-blueGray">
    <div class="h-screen items-center">
        <h1 class="text-4xl pt-44 tracking-tight font-heading font-extrabold text-pewter sm:text-5xl md:text-6xl">
            <span class="block xl:pb-4">Temukan Guru yang terbaik</span>
        </h1>
        <div class="container h-screen flex justify-center items-center px-4 sm:px-6 lg:px-8 -mt-64">
            <div class="shadow-lg relative">
                <input type="text" class="h-14 w-96 pr-8 pl-5 rounded z-0 focus:shadow focus:outline-none" placeholder="Search anything...">
                <div class="absolute top-4 right-3">
                    <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>