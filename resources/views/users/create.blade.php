<x-master>
    <x-cards.basic-card title="New User" subtitle="Add a new user through here">

        <x-form.form>
            <x-slot name="form_tag">
                <form action="{{ route('user.store') }}" method="POST" id="user_create_form">
                    @csrf
                    @method('POST')
            </x-slot>

            <x-form.form_group label="First Name" error="first_name">
                <x-form.form_input type="text" name="first_name" placeholder="Enter First Name" />
            </x-form.form_group>

            <x-form.form_group label="Last Name" error="last_name">
                <x-form.form_input type="text" name="last_name" placeholder="Enter Last Name" />
            </x-form.form_group>

            <x-form.form_group label="UserName" error="username">
                <x-form.form_input type="text" name="username" placeholder="Enter Username" />
            </x-form.form_group>

            <x-form.form_group label="Email" error="email">
                <x-form.form_input type="email" name="email" placeholder="Enter User's Email" />
            </x-form.form_group>

            <x-form.form_group label="Password" error="password">
                <x-form.form_input type="password" name="password" placeholder="Enter User's Password" />
            </x-form.form_group>

            <x-form.form_group label="User Type" error="usertype_id">
                <x-form.form_dropdown name="usertype_id" id="user_create_usertype_select" :model="$usertypes" />
            </x-form.form_group>

        </x-form.form>

    </x-cards.basic-card>

</x-master>


<script>

</script>
