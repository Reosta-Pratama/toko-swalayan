<x-layout.admin>
    {{-- Header --}}
    <div class="flex flex-col gap-10">
        <div class="flex flex-col gap-4">
            {{-- Breadcrumb --}}
            <x-breadcrumb.breadcrumb
                :nav1="'home'"
                :href1="route('dashboard')"
                :nav2="'list brand'"
                :href2="null"
                :nav3="null"
                :href3="null"
                :nav4="null"
            />   
            
            {{-- Title --}}
            <x-breadcrumb.title
                title="List brand"
            />
        </div>
    
        {{-- Card --}}
        <x-list.card>
            {{-- Card Header --}}
            <x-list.card-header
                addClass="justify-between">
                {{-- Add Data --}}
                <x-button.add-button
                    href="{{ route('product.add') }}"
                    name="add brand"
                />

                {{-- Print Data --}}
                @include('pages.brands.print')
            </x-list.card-header>   

            {{-- Filtering, Sorting, Searching --}}
            <x-container.form-search
                action="">
                @include('pages.brands.search')
            </x-container.form-search>

            {{-- Table Data --}}
            @include('pages.brands.table')
        </x-list.card>
    </div>

    <script src="{{ asset('assets/js/tooltip.js') }}"></script>
</x-layout.admin>