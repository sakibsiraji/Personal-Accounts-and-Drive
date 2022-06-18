@extends('master_layout')
@section('content')
<div class="row justify-content-center">
    @foreach ($accounts as $account)
    <div class="col-6 col-sm-4 col-lg-2">
        <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary m-0 mb-4 pb-3">
            <div class="featured-box featured-box-no-borders featured-box-box-shadow">
                <a href="/ExpenseRecordView/{{$account->year}}/{{$account->month}}" class="text-decoration-none">
                    <span class="box-content px-1 py-4 text-center d-block">
                        <span class="text-primary text-8 position-relative top-3 mt-3"><i class="fas fa-bars"></i></span>
                        <span class="elements-list-shadow-icon text-default"><i class="fas fa-bars"></i></span>
                        <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">{{$account->month}}</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection