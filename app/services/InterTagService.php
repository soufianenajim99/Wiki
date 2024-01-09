<?php

interface TagInterface {
    public function displayTag();
    public function addTag(Tag $tag);
    public function editTag(Tag $tag,$id);
    public function deleteTag($id);
}

?>