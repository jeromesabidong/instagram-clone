<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="bg-black min-h-screen">
        <div class="relative isolate px-6 pt-10 lg:px-8">
            <div class="mx-auto max-w-[325px] pb-32">
                <div class="text-center font-archivo text-white">
                    {{ $slot }}
                </div>
            </div>
        </div>


        <div class="text-xs text-gray-600 flex flex-col gap-2 mx-auto max-w-screen-lg">
            <div class="flex justify-center items-center gap-2 w-full">
                <a href="#">Meta</a>
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Jobs</a>
                <a href="#">Help</a>
                <a href="#">API</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Locations</a>
                <a href="#">Instagram Lite</a>
                <a href="#">Threads</a>
                <a href="#">Contact Uploading & Non-Users</a>
                <a href="#">Meta Verified</a>
            </div>

            <div class="flex justify-center items-center gap-2">
                &copy; {{ date('Y') }} by Jerome S
            </div>
        </div>


    </div>

</body>

</html>
