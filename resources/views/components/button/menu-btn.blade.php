<button 
    id="{{ $id }}"
    type="{{ $type }}"
    class="group w-11 h-11 
        flex justify-center items-center rounded-lg
        transition duration-300 ease-linear
        hover:bg-grayPOS-1/10 {{ $addClass ?? '' }}">
    <span class="w-6 h-6
        transition duration-300 ease-in-out
        group-hover:scale-110">
        {{ $icon }}
    </span>
</button>
