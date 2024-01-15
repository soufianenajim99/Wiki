<?php
require_once "inc/aside.php";
?>

<!-- Add Category Button -->
<!-- <div class="mb-4 flex justify-end">
    <button
        class="openpp bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">
        Ajouter un Wiki
    </button>

</div> -->
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
                                <a href="<?= URLROOT ?>admin/archiveWiki/<?= $cat->wiki_id ?>" class="p-2">
                                    <i class="fa-solid fa-box-archive"></i></a>
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






<?php
require_once "inc/footer.php";
?>