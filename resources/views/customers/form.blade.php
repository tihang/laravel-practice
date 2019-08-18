<div class="container pb-4">
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" placeholder="Enter customer name" value="{{old('name') ?? $customer->name}}">
        </div>
        <p style="color:red">{{ $errors -> first('name') }}</p>
    </div>


    <div class="container pb-4">
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="text" name="email" placeholder="Email address" value="{{old('email')  ?? $customer->email}}">
        </div>
        <p style="color:red">{{ $errors -> first('email') }}</p>
    </div>


    <div class="container pb-4">
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input maxlength="11" class="form-control" type="text" name="phone" placeholder="Phone number" value="{{old('phone') ?? $customer->phone}}">
        </div>
        <p style="color:red">{{ $errors -> first('phone')}}</p>
    </div>

    <div class="container pb-4">
        <div class="form-group">
                <label for="company_id">Company</label>
                <select name="company_id" id="company_id" class="form-control">
                    @foreach ($companies as $company)
                    <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
                    @endforeach
                </select>
        </div>
    </div>

    <div class="container pb-5">
        <div class="form-group">
                <label for="active">Status</label>
                <select name="active" id="active" class="form-control">
                        <option value="" disabled>Select customer status</option>
                        <option value="1" {{ $customer->active == 'Active' ? 'selected' : ''}}>Active</option>
                        <option value="0" {{ $customer->active == 'Inactive' ? 'selected' : ''}}>Inactive</option>
                </select>
        </div>
    </div>

    @csrf