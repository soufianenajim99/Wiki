<?php

interface WikiInterface {
    public function displayWiki();
    public function addWiki(Wiki $wiki);
    public function editWiki(Wiki $wiki,$id);
    public function deleteWiki($id);
}


?>