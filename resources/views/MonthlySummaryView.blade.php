@extends('master_layout')
@section('content')
<div class="row">
    <div class="col">
        <hr class="solid my-5">
        <h4 class="mb-5"><strong>Income &amp; Expense</strong> Summary</h4>
        <h4 class="text-color-dark font-weight-bold positive-ls-3 mb-0">
            {{$m}}
        </h4>
        <hr class="bg-color-grey-scale-2 mt-2 mb-4">
        <div class="pt-2">
            <div class="price-menu-item d-flex">
                <div class="price-menu-item-content w-100 ms-3 mt-2">
                    <div class="price-menu-item-details">
                        <div class="price-menu-item-title">
                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Total Income in USD</h5>
                        </div>
                        <div class="price-menu-item-line opacity-4"></div>
                        <div class="price-menu-item-price">
                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                <span class="text-2-5">$</span>
                                {{$tiusd}}
                            </strong>
                        </div>
                    </div>
                    <div class="price-menu-item-desc">
                        <p class="text-2-5 line-height-4">Sum of all incomes took place in USA. </p>
                    </div>
                </div>
            </div>
            <div class="price-menu-item d-flex">
                <div class="price-menu-item-content w-100 ms-3 mt-2">
                    <div class="price-menu-item-details">
                        <div class="price-menu-item-title">
                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Total Expense in USD</h5>
                        </div>
                        <div class="price-menu-item-line opacity-4"></div>
                        <div class="price-menu-item-price">
                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                <span class="text-2-5">$</span>
                                {{$teusd}}
                            </strong>
                        </div>
                    </div>
                    <div class="price-menu-item-desc">
                        <p class="text-2-5 line-height-4">Sum of all expenses took place in USA. </p>
                    </div>
                </div>
            </div>
            <div class="price-menu-item d-flex">
                <div class="price-menu-item-content w-100 ms-3 mt-2">
                    <div class="price-menu-item-details">
                        <div class="price-menu-item-title">
                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Net Income in USD</h5>
                        </div>
                        <div class="price-menu-item-price">
                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                <span class="text-2-5">$</span>
                                {{$niusd}}
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="price-menu-item d-flex">
                <div class="price-menu-item-content w-100 ms-3 mt-2">
                    <div class="price-menu-item-details">
                        <div class="price-menu-item-title">
                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Total Income in BDT</h5>
                        </div>
                        <div class="price-menu-item-line opacity-4"></div>
                        <div class="price-menu-item-price">
                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                <span class="text-2-5">BDT</span>
                                {{$tibdt}}
                            </strong>
                        </div>
                    </div>
                    <div class="price-menu-item-desc">
                        <p class="text-2-5 line-height-4">Sum of all incomes took place in Bangladesh. </p>
                    </div>
                </div>
            </div>
            <div class="price-menu-item d-flex">
                <div class="price-menu-item-content w-100 ms-3 mt-2">
                    <div class="price-menu-item-details">
                        <div class="price-menu-item-title">
                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Total Expense in BDT</h5>
                        </div>
                        <div class="price-menu-item-line opacity-4"></div>
                        <div class="price-menu-item-price">
                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                <span class="text-2-5">BDT</span>
                                {{$tebdt}}
                            </strong>
                        </div>
                    </div>
                    <div class="price-menu-item-desc">
                        <p class="text-2-5 line-height-4">Sum of all expenses took place in Bangladesh. </p>
                    </div>
                </div>
            </div>
            <div class="price-menu-item d-flex">
                <div class="price-menu-item-content w-100 ms-3 mt-2">
                    <div class="price-menu-item-details">
                        <div class="price-menu-item-title">
                            <h5 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Net Income in BDT</h5>
                        </div>
                        <div class="price-menu-item-price">
                            <strong class="custom-font-secondary text-color-dark text-4 positive-ls-3">
                                <span class="text-2-5">BDT</span>
                                {{$nibdt}}
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection