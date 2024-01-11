<?php
require_once "inc/aside.php";
?>

<!-- Add user Button -->
<div class="mb-4 flex justify-end">
    <button
        class="openpp bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
        Add user
    </button>
</div>

<div class="rounded-xl shadow-lg bg-white ">
    <div class="container mx-auto p-8">

        <div class="overflow-x-auto tablee">
            <table class="min-w-full bg-white font-[sans-serif]">
                <thead class="bg-gray-800 whitespace-nowrap">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            FullName User
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Email User
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Role User
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="whitespace-nowrap divide-y divide-gray-200">
                    <?php
            foreach ($data["user"] as $cat) {
            ?>
                    <tr class="hover:bg-blue-50">
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->user_fullname ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->user_email ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->user_role ?>
                        </td>
                        <td class="px-6 py-4">
                            <button>
                                <a href="<?= URLROOT ?>categorie/editCategory/<?= $cat->category_id ?>" class="p-2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </button>
                            <button>
                                <a href="<?= URLROOT ?>categorie/deleteCategory/<?= $cat->category_id ?>" class="p-2">
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

<div class=" w-screen container mx-auto  p4-10 flex items-center justify-center popupfo hidden h-3/6 overflow-hidden ">
    <div
        class="absolute max-w-md mx-auto flex items-center justify-center bg-white overflow-hidden md:max-w-xl h-screen z-50 top-0 right-0 ">
        <div class="md:flex border-4 border-solid border-indigo-500">
            <div class="w-full px-6 py-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800">Ajouter une categorie</h2>

                <form class="mt-6">
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Nom de Categorie
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="John Doe">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Description de categorie
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="John Doe">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Image de categorie
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="John Doe">
                    </div>

                    <button
                        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>




<?php
require_once "inc/footer.php";
?>