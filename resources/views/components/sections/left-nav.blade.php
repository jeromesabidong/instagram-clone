<nav class="text-white mx-5 my-10 ">
    <h1 class="text-center font-bold text-xl mb-10">{{ env('APP_NAME') }}</h1>

    <x-sections.nav-link href="{{ url('dashboard') }}">
        <x-lucide-house class="h-7" />
        <p class="text-lg">Home</p>
    </x-sections.nav-link>

    <x-sections.nav-link href="#">
        <x-lucide-search class="h-7" />
        <p class="text-lg">Search</p>
    </x-sections.nav-link>

    <x-sections.nav-link href="#">
        <x-lucide-compass class="h-7" />
        <p class="text-lg">Explore</p>
    </x-sections.nav-link>

    <x-sections.nav-link href="#">
        <x-lucide-film class="h-7" />
        <p class="text-lg">Reels</p>
    </x-sections.nav-link>

    <x-sections.nav-link href="#">
        <x-lucide-message-circle class="h-7" />
        <p class="text-lg">Messages</p>
    </x-sections.nav-link>

    <x-sections.nav-link href="#">
        <x-lucide-heart class="h-7" />
        <p class="text-lg">Notifications</p>
    </x-sections.nav-link>

    <x-sections.nav-link href="#">
        <x-lucide-square-plus class="h-7" />
        <p class="text-lg">Create</p>
    </x-sections.nav-link>

    <x-sections.nav-link href="#">
        <x-lucide-circle-user-round class="h-7" />
        <p class="text-lg">Profile</p>
    </x-sections.nav-link>

    <div class="space-y-1 w-full fixed bottom-0">

        <x-sections.nav-link href="#">
            <x-lucide-at-sign class="h-7" />
            <p class="text-lg">Threads</p>
        </x-sections.nav-link>

        <x-sections.nav-link href="#">
            <x-lucide-menu class="h-7" />
            <p class="text-lg">More</p>
        </x-sections.nav-link>

    </div>
</nav>
