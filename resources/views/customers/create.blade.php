<x-master>
    <x-cards.basic-card title="New Customer" subtitle="Add a new Customer">

        <x-form.form>
            <x-slot name="form_tag">
                <form action="{{ route('customer.store') }}" method="POST" id="customer_create_form" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
            </x-slot>

            <x-form.form_group label="Customer Name" error="name">
                <x-form.form_input type="text" name="name" placeholder="Enter Customer Name" />
            </x-form.form_group>

            <x-form.form_group label="Email" error="email">
                <x-form.form_input type="email" name="email" placeholder="Someone@example.com" />
            </x-form.form_group>

            <x-form.form_group label="Phone" error="phone">
                <x-form.form_input type="text" name="phone" placeholder="Enter Customer's Phone Number " />
            </x-form.form_group>

            <x-form.form_group label="FAX" error="fax">
                <x-form.form_input type="text" name="fax" placeholder="Enter Customer's FAX Number " />
            </x-form.form_group>

            <x-form.form_group label="Address" error="address">
                <x-form.form_textarea type="text" name="address" placeholder="Enter Customer's Address " />
            </x-form.form_group>

            <x-form.form_group label="Customer Type" error="customer_type_id">
                <x-form.form_dropdown name="customer_type_id" id="customer_create_customer_category_select" :model="$customer_types" />
            </x-form.form_group>

            <x-form.form_group label="Image" error="image">
                <x-form.form_image_input id="image_field" name="image" add_title="Add Customer Image" remove_title="Remove Customer Image" />
            </x-form.form_group>

        </x-form.form>

    </x-cards.basic-card>

</x-master>
