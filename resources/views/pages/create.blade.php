<x-master>

    <x-cards.basic-card title="New Page" subtitle="Yo man this was hard">

        <form action="{{ route('page.store') }}" method="POST">
        @csrf
        @method('POST')

            <div class="card-body">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control form-control-solid"  placeholder="Enter page name"/>
                    <x-form_field_error field="name" />
                </div>

                <div class="form-group">
                    <label>URL:</label>
                    <input type="text" name="url" class="form-control form-control-solid"  placeholder="Enter page url"/>
                    <x-form_field_error field="url" />
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control form-control-solid"  placeholder="Enter page Description"/>
                    <x-form_field_error field="description" />
                </div>

                <div class="form-group">
                    <label>Sort Order:</label>
                    <input type="number" name="sort_order" class="form-control form-control-solid"  placeholder="Enter page Sort Order"/>
                    <x-form_field_error field="sort_order" />
                </div>

                <div class="form-group">
                    <label>Parent Page :</label>
                    <select name="parent_page_id" id="parent_page_select" class="form-control form-control-solid">
                        <option value>No Parent Page</option>
                        @foreach ($pages as $page)
                            <option value="{{ $page->id }}"> {{ $page->name }} </option>
                        @endforeach
                    </select>
                    <x-form_field_error field="parent_page_id" />

                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>

        </form>

    </x-cards.basic-card>

</x-master>
