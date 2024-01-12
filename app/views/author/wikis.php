<?php
require_once "inc/aside.php";
?>

<!-- Add Category Button  -->
<div class="mb-4 flex justify-end">
    <a href="<?= URLROOT ?>author/addWiki">

        <button
            class="openpp bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
            Ajouter un Wiki
        </button>
    </a>

</div>
<div class="rounded-xl shadow-lg bg-white tablee ">
    <div class="container mx-auto p-8">

        <div class="overflow-x-auto tablee">
            <table class="min-w-full bg-white font-[sans-serif]">
                <thead class="bg-gray-800 whitespace-nowrap">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Titre Wiki
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Date de Wiki
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Category de Wiki
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Auteur de Wiki
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Statut de Wiki
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="whitespace-nowrap divide-y divide-gray-200">
                    <?php
            foreach ($data["wiki"] as $cat) {
            ?>
                    <tr class="hover:bg-blue-50">
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->wiki_title ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->created_at ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->category_name ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?= $cat->user_fullname ?>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <?php if($cat->wiki_statut){
                                echo "Non Archivee";
                            } else{
                                echo "Archivee";
                            }
                                ?>
                        </td>
                        <td class="px-6 py-4">
                            <button>
                                <a href="<?= URLROOT ?>categorie/editCategory/<?= $cat->category_id ?>" class="p-2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                            </button>
                            <button>
                                <a href="<?= URLROOT ?>Wiki/deleteWiki/<?= $cat->wiki_id ?>" class="p-2">
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

<div class=" container mx-auto p4-10 flex items-center justify-center popupfo hidden h-3/6 overflow-hidden ">
    <div
        class="absolute w-screen mx-auto flex items-center justify-center bg-white overflow-hidden md:max-w-xl h-screen z-50 top-0 right-0 ">
        <div class="md:flex border-l-4 border-black-800">
            <div class="w-full px-6 py-6 md:p-8">
                <h2 class="text-2xl font-bold text-gray-800">Ajouter un Wiki</h2>

                <form class="mt-6" method="post" action="">
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Titre De Wiki
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="name" type="text" placeholder="John Doe">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Contenu De Wiki
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="desc" type="text" placeholder="John Doe">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Description De Wiki
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" name="desc" type="text" placeholder="John Doe">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Auteur De Wiki
                        </label>
                        <select name="Category"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Select Category</option>
                            <?php foreach ($data["category"] as $category) {
                                 echo "<option value = '$category->Id_category'>$category->Name_cate</option>";
                                    } ?>
                        </select>

                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Cayegory De Wiki
                        </label>
                        <select name="Category"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Select Category</option>
                            <?php foreach ($data["category"] as $category) {
                                 echo "<option value = '$category->Id_category'>$category->Name_cate</option>";
                                    } ?>
                        </select>

                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-800 font-bold mb-2" for="name">
                            Tags De Wiki
                        </label>
                        <select name="Category"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Select Category</option>
                            <?php foreach ($data["category"] as $category) {
                                 echo "<option value = '$category->Id_category'>$category->Name_cate</option>";
                                    } ?>
                        </select>

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

</body>

</html>