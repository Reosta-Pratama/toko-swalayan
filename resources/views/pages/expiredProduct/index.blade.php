<x-layout.admin>
    {{-- Header --}}
    <div class="flex flex-col gap-10">
        <div class="flex flex-col gap-4">
            {{-- Breadcrumb --}}
            <x-breadcrumb.breadcrumb
                :nav1="'home'"
                :href1="route('dashboard')"
                :nav2="'expired product'"
                :href2="null"
                :nav3="null"
                :href3="null"
                :nav4="null"
            />   
            
            {{-- Title --}}
            <x-breadcrumb.title
                title="expired Product"
            />
        </div>
    
        {{-- Card --}}
        <x-list.card>
            {{-- Card Header --}}
            <x-list.card-header
                addClass="justify-end">
                {{-- Print Data --}}
                @include('pages.expiredProduct.print')
            </x-list.card-header>   

            {{-- Filtering, Sorting, Searching --}}
            <x-container.form-search
                action="">
                @include('pages.expiredProduct.search')
            </x-container.form-search>

            {{-- Table Data --}}
            @include('pages.expiredProduct.table')
        </x-list.card>
    </div>

    <script src="{{ asset('assets/js/tooltip.js') }}"></script>
</x-layout.admin>