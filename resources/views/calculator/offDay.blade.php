@extends('layout.app')

@section('body')
<div class="createNew">
    <div>
        <h2>Off Day</h2>
    </div>
    <table>
      <tr>
        <th>Name</th>
        <th>Employee ID</th>
        <th>Applied Date</th>
      </tr>
      <tr>
        <td>{{$employee->name}}</td>
        <td>{{$off_day->employees_id}}</td>
        <td>{{$off_day->applied_date}}</td>
      </tr>
    </table>
</div>
@endsection