<input 
    id="{{ $id }}"
    name="{{ $name }}"
    type="text"
    placeholder="{{ $placeholder }}"
    @if ($required)
        required
    @endif
    @if ($autocomplete)
        autocomplete="on"
    @endif
    class="w-[200px] appearance-none rounded-lg py-[0.75rem]
        text-sm text-blackPOS-2
        border border-solid border-grayPOS-3
        transition-all duration-300 ease-in-out
        hover:bg-grayPOS-2
        focus:border-bluePOS-1 focus-within:bg-grayPOS-2 
        focus-within:outline-none focus-within:outline-0
        {{ $addClass ?? "" }}">