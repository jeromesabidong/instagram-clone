<article class="flex flex-col w-full text-white mb-5">
    
    <div class="flex flex-col mb-1">
        <p>
            <span class="font-bold text-sm">{{ fake()->firstName() }}</span> and <span class="font-bold text-sm">{{ fake()->company() }}</span>
        </p>
        <p class="text-xs">Singapore</p>
    </div>

    <div>
        <img class="rounded" src="https://picsum.photos/seed/123klasd/468/585" alt="">
    </div>

    <div class="flex gap-4 mt-2">
        <x-lucide-heart class="h-7" /> 
        <x-lucide-message-circle class="h-7" />
        <x-lucide-send class="h-7" />

        <x-lucide-bookmark class="h-7" />
    </div>

</article>
