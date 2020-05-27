<x-master>
    <x-cards.basic-card title="New User Type" subtitle="Add a new type of User">

        <form action="{{ route('usertype.store') }}" method="POST">
        @csrf


            <div class="card-body">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control form-control-solid"  placeholder="User Type Name"/>
                    <x-form_field_error field="name" />

                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control form-control-solid"  placeholder="Description"/>
                    <x-form_field_error field="description" />

                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>

        </form>

    </x-cards.basic-card>

</x-master>
