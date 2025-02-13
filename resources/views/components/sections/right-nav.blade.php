<div class="flex flex-col gap-4 mt-10 mx-8">
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->

    <section class="flex place-items-center gap-2">
        <div>
            <img class="rounded-[42px]" src="https://picsum.photos/seed/123123/42" alt="profile picture">
        </div>

        <p class="flex flex-col">
            <span class="font-bold">jrvs</span>
            <span class=" text-white/70 text-sm">Jerome S</span>
        </p>

        <p class="font-bold text-blue text-sm ml-auto">Switch</p>
    </section>

    <section class="flex items-center">
        <span class=" text-slate-400 font-bold">Suggested for you</span>
        <span class=" ml-auto font-bold text-xs"> See all</span>
    </section>

    <section class="flex flex-col gap-4">
        @for ($i = 0; $i <= 7; $i++)
        <div class="flex place-items-center gap-2">
            <div>
                <img class="rounded-[42px]" src="https://picsum.photos/42"  alt="profile picture">
            </div>

            <p class="flex flex-col">
                <span class="font-bold">jrvs</span>
                <span class=" text-white/70 text-sm">Followed by Jerome S </span>
            </p>

            <p class="font-bold text-blue text-xs ml-auto">Follow</p>
        </div>
        @endfor
    </section>
</div>
