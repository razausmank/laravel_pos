<x-master>
    <x-cards.basic-card title="New User Type" subtitle="Add a new type of User">

        <x-form.form>
            <x-slot name="form_tag">
                <form action="{{ route('usertype.store') }}" method="POST" id="usertype_create_form">
                    @csrf
                    @method('POST')
            </x-slot>

            <x-form.form_group label="User Type Name" error="name">
                <x-form.form_input type="text" name="name" placeholder="Enter User Type Name" />
            </x-form.form_group>

            <x-form.form_group label="Description" error="description">
                <x-form.form_textarea name="description" placeholder="Enter User Type's Description" />
            </x-form.form_group>
        </x-form.form>

    </x-cards.basic-card>

</x-master>
