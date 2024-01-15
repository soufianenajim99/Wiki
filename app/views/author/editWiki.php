<?php
require_once "inc/aside.php";
?>

<div class="bg-white border-4 rounded-lg shadow relative m-10">

    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Modifiez Wiki
        </h3>

    </div>
    <div class="p-6 space-y-6">
        <form method="post" action="" enctype="multipart/form-data">
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Wiki Titre</label>
                    <input type="text" name="titre" id="category"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        value="<?=$data["wiki"]->wiki_title ?>" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Category de Wiki</label>
                    <select name="Category"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">Select Category</option>
                        <?php foreach ($data["cats"] as $category) {
                                 echo "<option value = '$category->category_id'>$category->category_name</option>";
                                    } ?>
                    </select>
                </div>
                <div class="col-span-full">
                    <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Wiki Tags</label>
                    <div
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <?php
                    foreach ($data["tag"] as $tag) {
                        ?>
                        <label for=""><?= $tag->tag_name?></label>
                        <input type="checkbox" name="tags[]" value="<?= $tag->tag_id?>" />
                        <?php
                    }
                    ?>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">Wiki Image</label>
                    <div class="mx-auto max-w-xs">
                        <label for="example1" class="mb-1 block text-sm font-medium text-gray-700">Upload Image</label>
                        <input id="example1" type="file" name="image"
                            class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-gray-500 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-gray-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="product-details" class="text-sm font-medium text-gray-900 block mb-2">description
                        Wiki</label>
                    <textarea id="product-details" rows="6" name="desc"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"
                        placeholder="<?=$data["wiki"]->wiki_desc ?>"></textarea>
                </div>
                <div class="col-span-full">
                    <label for="product-details" class="text-sm font-medium text-gray-900 block mb-2">Contenu de
                        Wiki</label>
                    <textarea id="product-details" rows="6" name="content"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"
                        placeholder="<?=$data["wiki"]->wiki_content ?>"></textarea>
                </div>
            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
                <button
                    class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="submit">Modifiez Wiki</button>
            </div>
        </form>
    </div>


</div>

</div>
</div>
</div>

</body>

</html>