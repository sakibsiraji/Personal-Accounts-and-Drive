@extends('master_layout')
@section('content')
<h4>Income and Expense Records</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Date</th>
            <th>Sector</th>
            <th>Detail</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($accounts as $account)
        <tr>
            <td>{{$account->date}} {{$account->month}} {{$account->year}}</td>
            <td>{{$account->record_sector}}, {{$account->country}}</td>
            <td>{{$account->record_detail}}</td>
            <td>
                @if(empty($account->amount_usd))
                ৳ {{$account->amount_bdt}}
                @else
                $ {{$account->amount_usd}}
                @endif
            </td>
            <td>
                <div class="row">
                    <div class="col-md-6 col-sm-6" style="text-align:center">
                        @if(empty($account->voucher))
                        {{$account->voucher}}
                        @else
                        <a href="{{url('viewVoucher', $account->id)}}" class="btn btn-outline-primary"><i class="fa-solid fa-file-invoice-dollar"></i></a>
                        @endif
                    </div>
                    <!--<div class="col-md-4 col-sm-4">
                        <a href="editAccountRecord" class="btn btn-outline-warning"><i class="fa-solid fa-file-word"></i></a>
                    </div>-->
                    <div class="col-md-6 col-sm-6" style="text-align:center">
                        <a onclick="alert('are you sure? You want to delete.')" href="{{url('account_record/delete',$account->id)}}" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection