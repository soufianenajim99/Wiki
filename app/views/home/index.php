<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLCSS ?>">

    <title>Document</title>
</head>

<body>
    <header class="sticky inset-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur-lg">
        <nav
            class="mx-auto flex justify-around max-w-screen gap-8 px-6 transition-all duration-200 ease-in-out lg:px-12 py-4 ">
            <div class="relative flex items-center justify-center">
                <a href="/">
                    <img src="<?= URLROOT ?>public/img/WIKI.png" loading="lazy" style="color:transparent" width="100"
                        height="100"></a>
            </div>
            <ul class="hidden items-center justify-center gap-6 md:flex">
                <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                    <a href="#">Wiki</a>
                </li>
                <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                    <a href="#">About</a>
                </li>
                <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                    <a href="#">Contact</a>
                </li>
            </ul>
            <div class="hidden items-center justify-center gap-6 md:flex">
                <a href="<?= URLROOT ?>auth/login" class="font-dm text-sm font-medium text-slate-700">Sign in</a>
                <a href="<?= URLROOT ?>auth/register"
                    class="rounded-md bg-gradient-to-r from-indigo-600 to-indigo-900 px-3 py-1.5 font-dm text-sm font-medium text-white shadow-md shadow-indigo-400/50 transition-transform duration-200 ease-in-out hover:scale-[1.03]">Sign
                    up for free
                </a>
            </div>
        </nav>
    </header>

    <div class="dark:bg-gray-800 mt-20">
        <div class="dark:bg-transparent">
            <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
                <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                    <h1
                        class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-white font-black leading-10">
                        Explore a vast World Behind Each
                        <span class="text-violet-800 dark:text-violet-500">Wiki</span>
                        Land.
                    </h1>
                    <p
                        class="mt-5 sm:mt-10 lg:w-10/12 text-gray-600 dark:text-gray-300 font-normal text-center text-xl">
                        A Community build tailwind component library.
                    </p>
                </div>
                <div class="flex w-11/12 md:w-8/12 xl:w-6/12">
                    <div class="flex rounded-md w-full">
                        <input type="text" name="q"
                            class="w-full p-3 rounded-md rounded-r-none border border-2 border-gray-300 placeholder-current dark:bg-gray-500  dark:text-gray-300 dark:border-none "
                            placeholder="keyword" />
                        <button
                            class="inline-flex items-center gap-2 bg-violet-700 text-white text-lg font-semibold py-3 px-6 rounded-r-md">
                            <span>Find</span>
                            <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>