<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME')}}</title>

    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="bg-black min-h-screen">
        <div class="relative isolate px-6 pt-10 lg:px-8">
            <div class="mx-auto max-w-[325px] pb-32">
                <div class="text-center font-archivo">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

</body>

</html>