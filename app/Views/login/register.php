<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CariGuruPrivat - Register</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- tailwind -->
    <link rel="stylesheet" href="/css/tailwind.css">

    <!-- icon font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font oswald dan montserrat -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="bg-darkBlue font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Register Section -->
        <div class="w-full md:w-7/12 flex flex-col">
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <div class="bg-pewter px-6 py-4 my-8 rounded-xl shadow-md text-black w-full">
                    <h1 class="text-3xl text-center">Selamat Datang di</h1>
                    <h1 class="mb-4 text-3xl tracking-tight text-center font-black font-logo">CariGuruPrivat</h1>
                    <div class="mx-12">
                        <form action="/login" method="post">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold" for="nama_lengkap">
                                    Nama Lengkap
                                </label>
                                <input id=" nama_lengkap" type="text" class="block border-4 border-gray-300 outline-none focus:border-gray-700  w-full p-1.5 rounded-2xl mb-2" name="fullname" placeholder="" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold" for="email">
                                    Email
                                </label>
                                <input id="email" type="text" class="block border-4 border-gray-300 outline-none focus:border-gray-700 w-full p-1.5 rounded-2xl mb-2" name="email" placeholder="" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold" for="nama_lengkap">
                                    Lokasi
                                </label>
                                <input id="nama_lengkap" type="text" class="block border-4 border-gray-300 outline-none focus:border-gray-700  w-full p-1.5 rounded-2xl mb-2" name="fullname" placeholder="" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold" for="password">
                                    Password
                                </label>
                                <input id="password" type="password" class="block border-4 border-gray-300 outline-none focus:border-gray-700  w-full p-1.5 rounded-2xl mb-2" name="password" placeholder="" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold" for="confirm_password">
                                    Konfirmasi Password
                                </label>
                                <input id="confirm_password" type="password" class="block border-4 border-gray-300 outline-none focus:border-gray-700  w-full p-1.5 rounded-2xl mb-2" name="confirm_password" placeholder="" required>
                            </div>
                            <div class="">
                                <span class="text-gray-700 text-sm font-bold">Daftar sebagai...</span>
                                <div class="flex justify-center">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio h-5 w-5 text-gray-600" name="accountType" value="personal">
                                        <span class="ml-2">Guru</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" class="form-radio h-5 w-5 text-gray-600" name="accountType" value="busines">
                                        <span class="ml-2">Murid</span>
                                    </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="w-auto px-10 text-center py-2 rounded-full bg-darkBlue text-white hover:bg-blueGray focus:outline-none mt-8">Daftar</button>
                            </div>
                        </form>
                        <div class="text-center text-sm text-grey-dark mt-4">
                            Sudah punya akun ?
                            <a class="no-underline border-b border-grey-dark text-blue-600" href="/login">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="md:w-5/12 shadow-2xl">
            <img class="object-cover w-full h-full hidden md:block" src="/img/components/background/bg-daftar.jpg" alt="Background" />
        </div>
    </div>

</body>

</html>