<x-guest-layout>
    <div class="px-8 py-10 border border-gray-800">
        <h1 class="text-2xl">{{ env("APP_NAME") }}</h1>
    
        <h3 class="pt-5 font-bold text-slate-400">Sign up to see photos and videos from your friends</h3>
    
        <div class="mt-4 flex">
            <x-link-button href="#">Log in with Facebook</x-link-button>
        </div>
    
        <div class="flex justify-center items-center space-x-4 mt-5">
            <div class="flex-grow h-[1px] relative bg-slate-800"></div>
            <span class="text-slate-500 font-semibold text-sm">OR</span>
            <div class="flex-grow h-[1px] relative bg-slate-800"></div>
        </div>

        <form action="{{ url('guest/register') }}" method="post">
            <div class="flex flex-col gap-3 mt-5">
                <input class="flex-grow bg-slate-800 border border-gray-700 rounded-sm px-3 py-2 text-xs" type="text" name="email" id="email" placeholder="Email Address" required>
                <input class="flex-grow bg-slate-800 border border-gray-700 rounded-sm px-3 py-2 text-xs" type="text" name="password" id="password" placeholder="Password" required>
                <input class="flex-grow bg-slate-800 border border-gray-700 rounded-sm px-3 py-2 text-xs" type="text" name="name" id="name" placeholder="Full Name" required>
                <input class="flex-grow bg-slate-800 border border-gray-700 rounded-sm px-3 py-2 text-xs" type="text" name="username" id="username" placeholder="Username" required>

                <p class=" text-gray-500 text-xs mt-1">
                    People who use our service may have uploaded your contact information to {{ env('APP_NAME') }}. 
                    <a class="text-gray-300" href="#">Learn more</a>
                </p>

                <x-button submit="{{ true }}">Sign Up</x-button>
            </div>
        </form>
            
    </div>

    <div class="mt-5 px-8 py-5 border border-gray-800">
        <p>
            Have an account? 
            <a class="text-blue" href="{{ url(route('login')) }}">Login</a>
        </p>
    </div>
</x-guest-layout>