<x-master>
    <x-cards.basic-card title="New Customer Type" subtitle="Add a new type of Customer">

        <x-form.form>
            <x-slot name="form_tag">
                <form action="{{ route('customertype.store') }}" method="POST" id="customer_type_create_form">
                    @csrf
                    @method('POST')
            </x-slot>

            <x-form.form_group label="Customer Type Name" error="name">
                <x-form.form_input type="text" name="name" placeholder="Enter Customer Type Name" />
            </x-form.form_group>

            <x-form.form_group label="Description" error="description">
                <x-form.form_textarea name="description" placeholder="Enter Customer Type's Description" />
            </x-form.form_group>
        </x-form.form>

    </x-cards.basic-card>

</x-master>
