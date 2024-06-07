@extends('ProgressMonitoring.layoutWeekly')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- START FORM -->
<!-- BACK BUTTON -->
<div class="mb-3 row">
    <div class="col-sm-10">
        <a href="{{ url('WeeklyFocus') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>
</div>
<form action='{{ url('WeeklyFocus')}}' method='post'>
    @csrf
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

    <!-- FOCUS -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2>FOCUS</h2>
        <div class="mb-3 row">
            <label for="WF_Description.f" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name='WF_Description[f]' id="WF_Description.f">{{ old('WF_Description.f') }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="WF_SDate.f" class="col-sm-2 col-form-label">Start Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='WF_SDate[f]' id="WF_SDate.f" value="{{ old('WF_SDate.f') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="WF_EDate.f" class="col-sm-2 col-form-label">End Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='WF_EDate[f]' id="WF_EDate.f" value="{{ old('WF_EDate.f') }}">
            </div>
        </div>
    </div>

    <!-- ADMIN -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2>ADMIN</h2>
        <div class="mb-3 row">
            <label for="WF_Description.admin" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name='WF_Description[admin]' id="WF_Description.admin">{{ old('WF_Description.admin') }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="WF_SDate.admin" class="col-sm-2 col-form-label">Start Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='WF_SDate[admin]' id="WF_SDate.admin" value="{{ old('WF_SDate.admin') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="WF_EDate.admin" class="col-sm-2 col-form-label">End Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='WF_EDate[admin]' id="WF_EDate.admin" value="{{ old('WF_EDate.admin') }}">
            </div>
        </div>
    </div>

    <!-- SOCIAL -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2>SOCIAL</h2>
        <div class="mb-3 row">
            <label for="WF_Description.social" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name='WF_Description[social]' id="WF_Description.social">{{ old('WF_Description.social') }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="WF_SDate.social" class="col-sm-2 col-form-label">Start Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='WF_SDate[social]' id="WF_SDate.social" value="{{ old('WF_SDate.social') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="WF_EDate.social" class="col-sm-2 col-form-label">End Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='WF_EDate[social]' id="WF_EDate.social" value="{{ old('WF_EDate.social') }}">
            </div>
        </div>
    </div>

    <!-- RECOVERY -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2>RECOVERY</h2>
        <div class="mb-3 row">
            <label for="WF_Description.recovery" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name='WF_Description[recovery]' id="WF_Description.recovery">{{ old('WF_Description.recovery') }}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="WF_SDate.recovery" class="col-sm-2 col-form-label">Start Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='WF_SDate[recovery]' id="WF_SDate.recovery" value="{{ old('WF_SDate.recovery') }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="WF_EDate.recovery" class="col-sm-2 col-form-label">End Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='WF_EDate[recovery]' id="WF_EDate.recovery" value="{{ old('WF_EDate.recovery') }}">
            </div>
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>
    </div>
</form>
<!-- END FORM -->

@endsection
