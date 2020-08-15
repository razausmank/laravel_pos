<x-master>
    <x-cards.basic-card title="New Store" subtitle="Add a Store">

        <x-form.form>
            <x-slot name="form_tag">
                <form action="{{ route('store.store') }}" method="POST" id="store_create_form">
                    @csrf
                    @method('POST')
            </x-slot>

            <x-form.form_group label="Name" error="name">
                <x-form.form_input type="text" name="name" placeholder="Enter Store Name" />
            </x-form.form_group>

            <x-form.form_group label="Address" error="address">
                <x-form.form_textarea name="address" placeholder="Enter Address" />
            </x-form.form_group>


        </x-form.form>

    </x-cards.basic-card>

</x-master>
