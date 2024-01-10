<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="<?= URLCSS ?>">
    <link rel="stylesheet" href="<?= URLROOT ?>public/css/style.css">

    <title>Document</title>
</head>

<body class="h-full">
    <div class="mainn"></div>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />

    <div class="fixed bg-white text-blue-800 px-10 py-1 z-10 w-full navv active-popup">
        <div class="flex items-center justify-between py-2 text-5x1">
            <a href="<?= URLROOT ?>phome/index"><img src="<?= URLROOT ?>public/img/WIKI.png" loading="lazy"
                    style="color:transparent" width="100" height="100"></a>

            <div class="flex items-center text-gray-500">
                <span class="material-icons-outlined p-2" style="font-size: 30px">search</span>
                <span class="material-icons-outlined p-2" style="font-size: 30px">notifications</span>
                <div class="bg-center bg-cover bg-no-repeat rounded-full inline-block h-12 w-12 ml-2"
                    style="background-image: url(<?= URLROOT ?>public/img/Wallpaper.jpg)">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-grey-100 min-h-screen">

        <div class="flex flex-row pt-24 px-10 pb-4">
            <div class="w-2/12 mr-6 asidd active-popup">
                <div class="bg-white rounded-xl shadow-lg mb-6 px-6 py-4 h-80vh">
                    <a href="<?= URLROOT ?>admin/dashboard"
                        class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">dashboard</span>
                        Dashboard
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="<?= URLROOT ?>admin/categories"
                        class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">tune</span>
                        Categories
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="<?= URLROOT ?>admin/tags" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">file_copy</span>
                        Tags
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="<?= URLROOT ?>admin/wikis" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">file_copy</span>
                        Wiki's
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="<?= URLROOT ?>admin/users" class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">file_copy</span>
                        Users
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="<?= URLROOT ?>admin/profile"
                        class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">face</span>
                        Profile
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                    <a href="<?= URLROOT ?>admin/logout"
                        class="inline-block text-gray-600 hover:text-black my-4 w-full">
                        <span class="material-icons-outlined float-left pr-2">power_settings_new</span>
                        Log out
                        <span class="material-icons-outlined float-right">keyboard_arrow_right</span>
                    </a>
                </div>

            </div>

            <div class="w-10/12">

                <!-- Add Category Button -->
                <div class="mb-4 flex justify-end">
                    <button
                        class="openpp bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
                        Editer un Tag
                    </button>
                </div>
                <div class="h-full rounded-xl shadow-lg bg-white active-popup tablee ">
                    <div class="container mx-auto p-8">

                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white font-[sans-serif]">
                                <thead class="bg-gray-800 whitespace-nowrap">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                                            Id Tag
                                        </th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                                            Nom Tag
                                        </th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="whitespace-nowrap divide-y divide-gray-200">
                                    <?php
                foreach ($data["tags"] as $tag) {
                ?>

                                    <tr class="hover:bg-blue-50">
                                        <td class="px-6 py-4 text-sm">
                                            <?= $tag->tag_id ?>
                                        </td>
                                        <td class="px-6 py-4 text-sm">
                                            <?= $tag->tag_name ?>

                                        </td>
                                        <td class="px-6 py-4">
                                            <button>
                                                <a href="<?= URLROOT ?>tags/editTag/<?= $tag->tag_id ?>" class="p-2">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                            </button>
                                            <button>
                                                <a href="<?= URLROOT ?>tags/deleteTag/<?= $tag->tag_id ?>" class="p-2">
                                                    <i class="fa-solid fa-trash"></i></a>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                }
                ?>
                                </tbody>
                            </table>
                        </div>


                    </div>

                </div>

                <div class=" container mx-auto  p4-10 flex items-center justify-center popupfo h-3/6 overflow-hidden ">
                    <div
                        class="absolute max-w-md mx-auto flex items-center justify-center bg-white overflow-hidden md:max-w-xl h-screen z-50 top-0 right-0 ">
                        <div class="md:flex border-l-4 border-black-800">
                            <div class="w-full px-6 py-6 md:p-8">
                                <h2 class="text-2xl font-bold text-gray-800">Editer une Tag</h2>

                                <form class="mt-6" method="post" action="">
                                    <div class="mb-6">
                                        <label class="block text-gray-800 font-bold mb-2" for="name">
                                            Nom de Tag
                                        </label>
                                        <input
                                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                            id="name" name="name" type="text" value="<?= $data["new"]->tag_name ?>">
                                    </div>
                                    <button
                                        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                        type="submit">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="<?= URLROOT ?>public/js/main.js"></script>
</body>

</html>