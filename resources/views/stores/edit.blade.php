<x-master>
    <x-cards.basic-card title="New Store" subtitle="Add a Store">

        <x-form.form>
            <x-slot name="form_tag">
                <form action="{{ route('store.update' , $store ) }}" method="POST" id="store_edit_form">
                    @csrf
                    @method('PATCH')
            </x-slot>

            <x-form.form_group label="Name" error="name">
                <x-form.form_input type="text" name="name" placeholder="Enter Store Name" value="{{ $store->name }}" />
            </x-form.form_group>

            <x-form.form_group label="Address" error="address">
                <x-form.form_textarea name="address" placeholder="Enter Address" value="{{ $store->address }}"/>
            </x-form.form_group>


        </x-form.form>

    </x-cards.basic-card>

</x-master>
