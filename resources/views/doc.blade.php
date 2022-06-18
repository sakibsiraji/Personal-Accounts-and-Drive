@extends('master_layout')
@section('content')
<div>
    <iframe height="750px" width="100%" src="/record_file/{{$record->record_file}}" frameborder="1"></iframe>
</div>
@endsection