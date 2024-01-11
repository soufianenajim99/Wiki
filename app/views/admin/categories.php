<?php
require_once "inc/aside.php";
?>

<!-- Add Category Button -->
<div class="mb-4 flex justify-end">
    <button
        class="openpp bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
        Add Category
    </button>

</div>
<div class="h-full rounded-xl shadow-lg bg-white tablee ">
    <div class="container mx-auto p-8">

        <div class="overflow-x-auto tablee">
            <table class="min-w-full bg-white font-[sans-serif]">
                <thead class="bg-gray-800 whitespace-nowrap">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Id de Categorie
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Nom Categorie

                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Description de Categorie
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="whitespace-nowrap divide-y divide-gray-200">
                    <?php
            foreach ($data["cats"] as $cat) {
            ?>
                    <tr class="hover:bg-blue-50">
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->category_id ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->category_name ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->category_desc ?>
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

<div class="flex items-center justify-center popupfo hidden overflow-hidden ">
    <div
        class="absolute max-w-md mx-auto flex items-center border-l-4 border-black-800 justify-center bg-white overflow-hidden md:max-w-xl h-screen z-50 top-0 right-0 ">
        <div class="md:flex">
            <div class="w-full px-6 py-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800">Ajouter une categorie</h2>

                <form class="mt-6" method="post" action="">
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Nom de Categorie
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="name" type="text" placeholder="John Doe">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Description de categorie
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="desc" type="text" placeholder="John Doe">
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




<?php
require_once "inc/footer.php";
?>