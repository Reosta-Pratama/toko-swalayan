<form action="{{ $action }}"
    method="get"
    enctype="multipart/form-data"
    class="flex flex-col gap-2 px-6 pb-2">
    @csrf
    {{ $slot }}
</form>