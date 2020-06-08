<x-master>
    <x-cards.basic-card title="New User" subtitle="Add a new user through here">

        <form action="{{ route('user.store') }}" method="POST">
        @csrf
        @method('POST')


            <div class="card-body">
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" name="first_name" class="form-control form-control-solid"  placeholder="Enter First Name"/>
                    <x-form.form_field_error field="first_name" />

                </div>

                <div class="form-group">
                    <label>Last Name:</label>
                    <input type="text" name="last_name" class="form-control form-control-solid"  placeholder="Enter Last Name"/>
                    <x-form.form_field_error field="last_name" />

                </div>

                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control form-control-solid"  placeholder="Enter Username"/>
                    <x-form.form_field_error field="username" />

                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control form-control-solid"  placeholder="Enter User's Email"/>
                    <x-form.form_field_error field="email" />

                </div>

                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" class="form-control form-control-solid"  placeholder="Enter User's Password"/>
                    <x-form.form_field_error field="password" />

                </div>

                <div class="form-group">
                    <label>User Type :</label>
                    <select name="usertype_id" id="user_type_select" class="form-control form-control-solid">
                        @foreach ($usertypes as $usertype)
                            <option value="{{ $usertype->id }}"> {{ $usertype->name }} </option>
                        @endforeach
                    </select>
                    <x-form.form_field_error field="usertype_id" />
                </div>

            </div>

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>


        </form>

    </x-cards.basic-card>

</x-master>
