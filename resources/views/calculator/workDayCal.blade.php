@extends('layouts.app')

@section('content')
<div class="createNew">
    <div>
        <h2>Working Days Calculator</h2>
    </div>
    <form method="POST" action="/calculate">
        {{ csrf_field() }}
        <div class="form-group">
            <label >Staff ID:</label>
            <input type="text" class="form-control" id="employees_id" name="employees_id" required>
        </div>

        <div class="form-group">
            <label>Working Days:</label><br>
            <label><input type="checkbox" name="working_days[]" value="Monday"> Monday</label><br>
            <label><input type="checkbox" name="working_days[]" value="Tuesday"> Tuesday</label><br>
            <label><input type="checkbox" name="working_days[]" value="Wednesday"> Wednesday</label><br>
            <label><input type="checkbox" name="working_days[]" value="Thursday"> Thursday</label><br>
            <label><input type="checkbox" name="working_days[]" value="Friday"> Friday</label><br>
            <label><input type="checkbox" name="working_days[]" value="Saturday"> Saturday</label><br>
            <label><input type="checkbox" name="working_days[]" value="Sunday"> Sunday</label>
        </div>

        <div class="form-group">
            <label >No. of Working Days:</label>
            <input type="text" class="form-control" id="num_of_days" name="num_of_days" required>
        </div>

        <div class="form-group">
            <label >Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>

        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <div>
        <h2>Last Working Date is</h2>
        <h3>{{ $last }}</h3>
    </div>
</div>
@endsection