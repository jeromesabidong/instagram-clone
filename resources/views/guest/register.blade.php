<x-guest.layout>
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

        <form action="{{ url('/register') }}" method="post">
            @csrf
            <div class="flex flex-col gap-3 mt-5">
                <x-guest.text-field name="email" :required="true" placeholder="Email Address" />
                <x-guest.text-field name="password" required="true" placeholder="Password" mask="true" />
                <x-guest.text-field name="name" required="true" placeholder="Full Name" />
                <x-guest.text-field name="username" required="true" placeholder="Username" />

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

    <div class="mt-6">
        <p>Get the app.</p>
    </div>

    <div class="mt-2 flex gap-3 h-12 justify-center items-center">
        <div class="flex-grow border rounded-lg text-right px-2">
            <a href="#">
                <p class="text-xl flex flex-col py-1">
                    <span class="text-xs">Download on the</span>
                    <br>
                    App Store
                </p>
            </a>
        </div>
        
        <div class="flex-grow border rounded-lg text-left px-2">
            <a href="#">
                <p class="text-xl flex flex-col py-1">
                    <span class="text-xs">Get it on</span>
                    <br>
                    Google Play
                </p>
            </a>
        </div>
    </div>

</x-guest.layout>