<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>
<!-- Signup form -->
<div class="border border-gray-300 p-8 rounded-lg shadow-md">
    <h2 class="text-center text-2xl font-bold mb-6">Sign up to your account</h2>
    <form class="space-y-6" action="includes/signup.inc.php" method="POST">
        <div>
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
            <div class="mt-2">
                <input name="username" type="text"
                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                address</label>
            <div class="mt-2">
                <input name="email" type="text"
                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            </div>
        </div>
        <div>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
                <input name="password" type="password"
                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            </div>
        </div>
        <div>
            <button type="submit"
                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                up</button>
        </div>
    </form>
    <?php check_signup_errors(); ?>
</div>