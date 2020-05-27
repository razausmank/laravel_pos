<x-master>
    <x-cards.basic-card title="Update User Type" subtitle="Update type of User">

        <form action="{{ route('usertype.update', $usertype) }}" method="POST">
        @csrf
        @method('PATCH')


            <div class="card-body">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control form-control-solid"  placeholder="User Type Name" value="{{ $usertype->name }}"/>
                    <x-form_field_error field="name" />

                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control form-control-solid"  placeholder="Description" value="{{ $usertype->description }}"/>
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
