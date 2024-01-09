<?php

interface UserInterface {
    public function displayUser();
    public function addUser(User $user);
    public function editUser(User $user,$id);
    public function deleteUser($id);
}


?>