<?php
require_once APPROOT."/views/inc/header.php";
?>

<div class="h-screen bg-gray-50 flex flex-col justify-center sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-10 w-auto" src="https://www.svgrepo.com/show/301692/login.svg" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
            login to your account
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form method="POST" action="#">

                <div class="mt-6">
                    <label for="username" class="block text-sm font-medium leading-5 text-gray-700">Username</label>
                    <input id="name" name="name" placeholder="Username" type="text" required="" value=""
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                        Password
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input id="password" name="password" type="password" required="" placeholder="password"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>


                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Login
                        </button>
                    </span>
                </div>
            </form>

        </div>
    </div>

    <p class="mt-2 text-center text-sm leading-5 text-gray-500 max-w">
        Don't Have an account yet?
        <a href="<?= URLROOT ?>auth/register"
            class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
            Create an Account
        </a>
    </p>
</div>






<?php
require_once APPROOT."/views/inc/footer.php";
?>