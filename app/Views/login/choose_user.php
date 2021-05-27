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

<body class="bg-blueGray font-family-karla h-screen">

    <div class="w-full h-full flex flex-wrap">

        <!-- Image Section -->
        <div class="md:w-5/12 shadow-2xl">
            <img class="object-cover w-full h-full hidden md:block" src="/img/components/background/bg-login.jpg" alt="Background" />
        </div>

        <!-- Login Section -->
        <div class="w-full md:w-7/12 flex flex-col">
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32 mx-6">
                <div class="bg-pewter px-6 py-4 my-8 rounded-xl shadow-md text-black w-full">
                    <h1 class="text-2xl text-center">Selamat Datang kembali di</h1>
                    <h1 class="mb-4 text-3xl tracking-tight text-center font-black font-logo">CariGuruPrivat</h1>
                    <div class="mx-12 mt-10">

                        <span>Login sebagai..</span>
                        <div class="grid grid-cols-2 gap-3 place-items-center mt-2 mb-24">
                            <form action="/login" method="post">
                                <div class="bg-white cursor-pointer hover:bg-blueGray hover:border-darkBlue border-2 border-gray-300 py-2 mx-2 rounded-xl text-center">
                                    <input type="hidden" name="role" id="role_guru" value="guru">
                                    <button type="submit" class="focus:outline-none">
                                        <img src="/img/components/icon/guru.png" class="w-4/5 mx-auto p-1 my-2" alt="icon guru">
                                        <span>Guru</span>
                                    </button>
                                </div>
                            </form>
                            <form action="/login" method="post">
                                <div class="bg-white cursor-pointer hover:bg-blueGray hover:border-darkBlue border-2 border-gray-300 py-2 mx-2 rounded-xl text-center">
                                    <input type="hidden" name="role" id="role_murid" value="murid">
                                    <button type="submit" class="focus:outline-none">
                                        <img src="/img/components/icon/murid.png" class="w-4/5 mx-auto p-1 my-2" alt="icon guru">
                                        <span>Murid</span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="text-center text-sm text-grey-dark mt-4">
                            Belum punya akun ?
                            <a class="no-underline border-b border-grey-dark text-blue-600" href="/register">
                                Daftar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>