
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
        <div class="col-sm-10">
            <a href="{{ url('WeeklyFocus') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
        <span>
            <center>
            <h2>Add New Task</h2>
        </center>
        </span>
    </div>
    
    @if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <form action='{{ url('WeeklyFocus/storeItem')}}' method='post'>
        @csrf
        <!-- Select type -->
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <select class="form-select" name="type" id="type">
                    <option value="focus">FOCUS</option>
                    <option value="admin">ADMIN</option>
                    <option value="social">SOCIAL</option>
                    <option value="recovery">RECOVERY</option>
                </select>
            </div>
        </div>
        <!-- Description -->
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name='description' id="description">{{ old('WF_Description') }}</textarea>
            </div>
        </div>
        <!-- Start Date -->
        <div class="mb-3 row">
            <label for="start_date" class="col-sm-2 col-form-label">Start Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='start_date' id="start_date" value="{{ old('WF_SDate') }}">
            </div>
        </div>
        <!-- End Date -->
        <div class="mb-3 row">
            <label for="end_date" class="col-sm-2 col-form-label">End Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='end_date' id="end_date" value="{{ old('WF_EDate') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
    </form>
</div>

