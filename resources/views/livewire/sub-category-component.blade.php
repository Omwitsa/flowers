<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sub Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{env('APP_ROOT')}}category-component">Category</a></li>
                        <li class="breadcrumb-item active">Sub Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content product-sub-category">
        <div class="row ">
            @foreach ($subCategories as $index => $subCategory)
                <div class="col-sm-10 offset-sm-1 text-center">
                    <h3 >{{ $subCategory->Name }}</h3> 
                    <h6 class="hr-lines">COLLECTION</h6>
                    <h6> {{ $subCategory->HeadSize }} HEADSIZE</h6>

                    <div class="row">
                        <div class="col-sm-10 offset-sm-1">
                            <div class="row variety-section">
                                @foreach ($subCategory->varieties as $v_index => $variety)
                                    <div class="col-sm-4 text-center">
                                        <a href="#"><img src="{{ asset('storage'.env('IMG_STORAGE').$variety->picUrl) }}" alt="{{ $variety->VarietyName }}" class="waves-effect waves-light variety-img"></a>
                                        <h5>{{ $variety->VarietyName }}</h5>
                                        <select wire:model.live="length" required>
                                            <option disabled selected>LENGTH</option>
                                            <option value="len40">40 cm</option>
                                            <option value="len50">50 cm</option>
                                            <option value="len60">60 cm</option>
                                            <option value="len70">70 cm</option>
                                            <option value="len80">80 cm</option>
                                            <option value="len90">90 cm</option>
                                        </select>
                                        
                                        <div class="ordered-quantity">
                                            <button wire:click="decrement({{ $index }}, {{ $v_index }})" wire:key="{{ $variety->id }}" wire:key="{{ $variety->id }}">-</button>
                                            <input type="number" wire:model="subCategories.{{ $index }}.varieties.{{ $v_index }}.quantity" min="1" oninput="validity.valid||(value='');">
                                            <button wire:click="increment({{ $index }}, {{ $v_index }})" wire:key="{{ $variety->id }}">+</button>
                                        </div>

                                        <button type="button" class="btn">ADD</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
