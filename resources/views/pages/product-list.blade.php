<x-layout.admin>
    {{-- Header --}}
    <div class="flex flex-col gap-10">
        <div class="flex flex-col gap-4">
            {{-- Breadcrumb --}}
            <x-breadcrumb.breadcrumb
                :nav1="'home'"
                :href1="route('dashboard')"
                :nav2="'list product'"
                :href2="null"
                :nav3="null"
                :href3="null"
                :nav4="null"
            />   
            
            {{-- Title --}}
            <x-breadcrumb.title
                title="Product List"
            />
        </div>
    
        {{-- Card --}}
        <x-list.card>
            {{-- Card Header --}}
            <x-list.card-header>
                <x-button.add-button
                    href="{{ route('product.add') }}"
                    name="add product"
                />

                <ul class="flex items-center gap-2">
                    <li>
                        <x-button.icon-btn
                            id="pdfBtn"
                            name="PDF"
                            type="button"
                            :onclick="null"
                            :addClass="null"
                            icon='<img src="{{ asset("assets/img/icon/pdf.png") }}" alt="pdfBtn">'>
                        </x-button.icon-btn>
                    </li>
                </ul>
            </x-list.card-header>   
        </x-list.card>

    </div>
</x-layout.admin>