<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ env("APP_NAME") }}</title>

    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="bg-black text-white font-archivo h-screen">
        <div class="grid grid-cols-12 gap-1">
            <div class="col-span-2">
                <x-sections.left-nav />
            </div>
            <div class="col-span-6 mx-auto px-10 pt-10 border-l-[1px] border-slate-800 max-h-screen overflow-y-scroll scrollbar-none">
                {{ $slot }}
            </div>
            <div class="col-span-4">
                <x-sections.right-nav />
            </div>
        </div>
    </div>
</body>
</html>