<div>
    <a href="{{ $href }}"
        class="bg-bluePOS-1 flex items-center rounded-[20px] 
            h-11 px-4 gap-2
            border border-solid border-bluePOS-1
            text-white
            transition-all duration-300 ease-in-out
            hover:bg-bluePOS-2 hover:border-bluePOS-3">
            <span class="w-6">
                <x-iconsax-lin-add />
            </span>
            <span class="text-sm font-medium capitalize">
                {{ $name }}
            </span>
    </a>
</div>