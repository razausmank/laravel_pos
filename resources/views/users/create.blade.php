<x-master>
    <x-cards.basic-card title="New User" subtitle="Add a new user through here">

        <form action="{{ route('user.store') }}" method="POST">
        @csrf


            <div class="card-body">
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" name="first_name" class="form-control form-control-solid"  placeholder="Enter First Name"/>
                    @error('first_name')
                        <span class="form-text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Last Name:</label>
                    <input type="text" name="last_name" class="form-control form-control-solid"  placeholder="Enter Last Name"/>
                    @error('last_name')
                        <span class="form-text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control form-control-solid"  placeholder="Enter Username"/>
                    @error('username')
                        <span class="form-text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control form-control-solid"  placeholder="Enter User's Email"/>
                    @error('email')
                        <span class="form-text text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="password" name="password" class="form-control form-control-solid"  placeholder="Enter User's Password"/>
                    @error('password')
                        <span class="form-text text-danger">{{ $message }}</span>
                    @enderror
                </div>





            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>

        </form>

    </x-cards.basic-card>

</x-master>
