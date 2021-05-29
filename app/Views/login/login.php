<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Register Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">


    <link rel="stylesheet" href="/css/tailwind.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- font oswald -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>

<body class="bg-blueGray font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Image Section -->
        <div class="w-5/12 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="/img/components/background/bg-login.jpg" alt="Background" />
        </div>

        <!-- Register Section -->
        <div class="w-full md:w-7/12 flex flex-col">
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32 mx-6">
                <div class="bg-pewter px-4 py-4 my-10 rounded-xl shadow-md text-black w-full">
                    <h1 class="mt-4 text-3xl text-center">Selamat Datang kembali di</h1>
                    <h1 class="mb-6 text-3xl text-center font-bold">CariGuruPrivat!</h1>
                    <div class="mx-8">

                        <!-- pesan error -->
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form action="<?= route_to('login') ?>" method="post">
                            <?= csrf_field() ?>

                            <input type="hidden" name="role" value="<?= $_GET["role"]; ?>">
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold" for="email">
                                    Email
                                </label>
                                <input id="email" type="email" class="block border-4 border-gray-300 outline-none focus:border-gray-700 w-full p-1.5 rounded-2xl mb-2 <?php if (session('errors.login')) : ?>border-red-500<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>" required>

                                <!-- pesan error -->
                                <?= session('errors.login') ?>
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold" for="password">
                                    Password
                                </label>
                                <input id="password" type="password" class="block border-4 border-gray-300 outline-none focus:border-gray-700  w-full p-1.5 rounded-2xl mb-2 <?php if (session('errors.password')) : ?>border-red-500<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" required>

                                <!-- pesan error -->
                                <?= session('errors.password') ?>
                            </div>

                            <?php if ($config->allowRemembering) : ?>
                                <div class="text-gray-700 text-sm font-bold">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                        <?= lang('Auth.rememberMe') ?>
                                    </label>
                                </div>
                            <?php endif; ?>

                            <div class="text-center">
                                <button type="submit" class="w-auto px-10 text-center py-2 rounded-full bg-blueGray text-white hover:bg-darkBlue focus:outline-none mt-8">Login</button>
                            </div>
                        </form>

                        <?php if ($config->allowRegistration) : ?>
                            <div class="text-center text-sm text-grey-dark mt-20">
                                <a href="<?= route_to('register') ?>" class="no-underline border-b border-grey-dark text-blue-600">
                                    <?= lang('Auth.needAnAccount') ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>