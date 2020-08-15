<x-master>
    <x-cards.basic-card title="Edit Customer Type" subtitle="Edit type of Customer">

        <x-form.form>
            <x-slot name="form_tag">
                <form action="{{ route('customertype.update' , $customertype) }}" method="POST" id="customer_type_edit_form">
                    @csrf
                    @method('PATCH')
            </x-slot>

            <x-form.form_group label="Customer Type Name" error="name">
                <x-form.form_input type="text" name="name" placeholder="Enter Customer Type Name" value="{{ $customertype->name }}"/>
            </x-form.form_group>

            <x-form.form_group label="Description" error="description">
                <x-form.form_textarea name="description" placeholder="Enter Customer Type's Description" value="{{ $customertype->description }}"/>
            </x-form.form_group>
        </x-form.form>

    </x-cards.basic-card>

</x-master>
