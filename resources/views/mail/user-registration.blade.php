@vite(['resources/css/app.css'])
<div class="bg-black/85 text-white min-h-screen p-12">

    Hello, {{ $user->name }}
    
    <h1 class="py-5 font-bold text-2xl">Welcome to {{ env('APP_NAME') }}</h1>

    <p>Thank you for registering with us! We are excited about the things that you will share.</p>
</div>
