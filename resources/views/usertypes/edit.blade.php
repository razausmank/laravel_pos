<x-master>
    <x-cards.basic-card title="Update User Type" subtitle="Update type of User">

        <x-form.form>
            <x-slot name="form_tag">
                <form action="{{ route('usertype.update', $usertype) }}" method="POST" id="usertype_edit_form">
                    @csrf
                    @method('PATCH')

            </x-slot>

            <x-form.form_group label="User Type Name" error="name">
                <x-form.form_input type="text" name="name" placeholder="Enter User Type Name" value="{{ $usertype->name }}"/>
            </x-form.form_group>

            <x-form.form_group label="Description" error="description">
                <x-form.form_textarea name="description" placeholder="Enter User Type's Description" value="{{ $usertype->description }}"/>
            </x-form.form_group>
        </x-form.form>



    </x-cards.basic-card>

</x-master>
