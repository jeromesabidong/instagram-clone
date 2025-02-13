<x-guest-layout>
    <div class="flex justify-center items-centered">
        <img class="rounded-lg w-[325px]" src="{{ Vite::asset('resources/images/landing-image.jpg') }}" alt="">
    </div>

    <h1 class="text-4xl text-white/90 mt-8"> Share what you're into with the people <span class="bg-gradient-to-r from-orange-500 via-purple-500 to-pink-500 inline-block text-transparent bg-clip-text">who get you.</span> </h1>
  
    <div class="mt-4 font-semibold flex flex-col">
        <x-link-button href="{{ url('/register') }}">Sign up</x-link-button>
        <a href="{{ route('login') }}" class="text-blue px-12 py-2 mt-2 text-sm">Log in</a>
    </div>
</x-guest-layout>