<div class="relative">
    <label for="{{ $id }}"
        class="capitalize select-none">
        Work with select
    </label>
    <select 
        id="{{ $id }}"
        name="{{ $name }}"
        @if ($required)
            required
        @endif
        class="h-[calc(3.5rem+calc(1px*2))] appearance-none
            pt[1.625rem] pr-8 pb-[.625rem] pl-3
            border border-solid border-grayPOS-3
            transition-all duration-300 ease-in-out
            focus:border-bluePOS-1 focus-within:bg-grayPOS-2">
        {{ $slot }}
    </select>
</div>