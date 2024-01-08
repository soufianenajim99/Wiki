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
                <a href="#" class="font-dm text-sm font-medium text-slate-700">Sign in</a>
                <a href="#"
                    class="rounded-md bg-gradient-to-r from-indigo-600 to-indigo-900 px-3 py-1.5 font-dm text-sm font-medium text-white shadow-md shadow-indigo-400/50 transition-transform duration-200 ease-in-out hover:scale-[1.03]">Sign
                    up for free
                </a>
            </div>
        </nav>
    </header>
</body>

</html>