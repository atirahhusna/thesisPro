@extends('ProgressMonitoring.layoutWeekly')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
        <div class="col-sm-10">
            <a href="{{ url('WeeklyFocus') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    @if (Session::has('success'))
<div class="pt-3">
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
</div>
@endif
    
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

    <form>
        @csrf
        <!-- Select type -->
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                {{ $data->WF_Type }}
            </div>
        </div>
        <!-- Description -->
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                {{ $data->WF_Description }}
            </div>
        </div>
        <!-- Start Date -->
        <div class="mb-3 row">
            <label for="start_date" class="col-sm-2 col-form-label">Start Date</label>
            <div class="col-sm-10">
                <div class="col-sm-10">
                    {{ $data->WF_SDate }}
                </div>
            </div>
        </div>
        <!-- End Date -->
        <div class="mb-3 row">
            <label for="end_date" class="col-sm-2 col-form-label">End Date</label>
            <div class="col-sm-10">
                <div class="col-sm-10">
                    {{ $data->WF_EDate}}
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <center>
                <a href='{{ url('WeeklyFocus/'.$data->WF_Description.'/edit') }}' class="btn btn-primary" >Edit</a>
            </center>
            </div>
        </div>
    </form>
</div>
@endsection
