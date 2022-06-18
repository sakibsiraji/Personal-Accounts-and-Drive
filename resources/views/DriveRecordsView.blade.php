@extends('master_layout')
@section('content')
<h4>Drive Records</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Record Detail</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
        <tr>
            <td>{{$record->record_detail}}</td>
            <td>
                <div class="row">
                    <div class="col-md-6 col-sm-6" style="text-align:center">
                        <a href="{{url('/viewDocument', $record->id)}}" class="btn btn-outline-primary"><i class="fa-solid fa-file-word"></i></a>
                    </div>
                    <div class="col-md-6 col-sm-6" style="text-align:center">
                        <a onclick="alert('are you sure? You want to delete.')" href="{{url('drive_record/delete',$record->id)}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection