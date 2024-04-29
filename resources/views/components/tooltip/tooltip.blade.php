<div id="{{ $id }}"
    class="absolute z-[1] bottom-[110%] left-1/2 -translate-x-1/2
        bg-blackPOS-1 rounded-lg px-2 py-1
        transition-all duration-300 ease-in-out
        opacity-0 invisible">
    <span class="text-white text-[10px] font-semibold">{{ $slot }}</span>
    <span class="absolute top-[80%] left-1/2 -translate-x-1/2 rotate-45
        bg-blackPOS-1 w-2 h-2"></span>
</div>