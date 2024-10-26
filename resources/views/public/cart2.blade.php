@php

    $total = 0;

    $data_user = UserModel::with('has_event')
        ->where('id', auth()->user()->id)
        ->whereNotNull('id_event')
        ->whereNot('payment_status', 'PAID')
        ->where('is_paid', 'Yes')
        ->orWhereNull('is_paid')
        ->where('id', auth()->user()->id)
        ->whereNotNull('id_event')
        ->first();

    $total = $data_user->amount ?? 0;

    $relationship = false;

    if ($data_user) {
        $relationship = UserModel::where('reference_id', auth()->user()->id)
            ->whereNot('payment_status', 'PAID')
            ->where('is_paid', 'Yes')
            ->orWhereNull('is_paid')
            ->where('reference_id', auth()->user()->id)
            ->get();

        $total = $total + $relationship->sum('amount');
    }

@endphp


<div class="head-right">
    <div style="position: relative" class="cart">
        <a class="nav-cart-trigger">
            <i class="icon-ShoppingCart"></i>
            <span class="shopping-cart-items-count">1</span>
        </a>
        <!--car-box-->
        <div class="minicar-overlay"></div>
        <div class="nav-shop-cart ">
            <div class="minicar-header">
                <span class="title">Registration Data</span>
                <span class="minicart-close"></span>
            </div>
            <div class="widget_shopping_cart_content">
                <div class="minicar-body">


                    @if (!empty($data_user))

                    <div class="time">
                        <img src="{{ asset('zunzo/images/retinal/fire.png') }}" alt="">
                        <p>Your cart will expire on <span id="timer-sell-out1">{{ !empty($data_user->payment_expired) ? $data_user->payment_expired->diffForHumans() : '' }}</span>
                            Please checkout now
                            before your items sell
                            out!</p>
                    </div>

                        <ul class="cart_list">

                            <li class="mini_cart_item">
                                <div class="title">
                                    <a href="#">{{ $data_user->field_name }}</a>
                                    <span class="size">{{ $data_user->has_event->field_name ?? '' }}</span>
                                </div>
                                <div class="wrap-remove">
                                    <span class="quantity">{{ number_format($data_user->amount, 0, ',', '.') ?? '' }}
                                    </span>
                                </div>
                            </li>

                            @if ($relationship)
                                @foreach ($relationship as $item)
                                    <li class="mini_cart_item">
                                        <div class="title">
                                            <a href="#">{{ $item->field_name }}</a>
                                            <span class="size">{{ $item->has_event->field_name ?? '' }}</span>
                                        </div>
                                        <div class="wrap-remove">
                                            <a href="{{ route('remove', ['id' => $item->id]) }}">Remove</a>
                                            <span class="quantity">{{ number_format($item->amount, 0, ',', '.') ?? '' }}
                                            </span>
                                        </div>
                                    </li>
                                @endforeach
                            @endif

                        </ul>
                    @endif

                </div>
                <div class="minicar-footer">
                    <ul class="tab-menu container p-3">
                            <form class="row" method="POST" action="{{ route('discount') }}">
                                @csrf
                                <div class="col-md-8">
                                    <input type="text" class="input-cart ml-3" value="{{ $data_user->discount_code ?? null }}" placeholder="COUPON" name="coupon" id="">
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-secondary btn-lg btn-cart" type="submit">Apply</button>
                                </div>

                                <div class="col-md-12 mt-3">
                                    @error('coupon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </form>


                    </ul>
                    <form id="registerform" class="register-form" method="POST" action="{{ route('checkout') }}">
                        @csrf
                        <div class="view-cart">
                            <p class="total">
                                <strong>Subtotal</strong> <span
                                    class="currency-symbol">{{ number_format($total ?? 0, 0, ',', '.') ?? '' }}</span>
                            </p>
                        </div>

                        <div class="view-cart">
                            <p class="total">
                                <strong>Discount</strong> <span
                                    class="currency-symbol">{{ number_format($data_user->discount_value ?? 0, 0, ',', '.') ?? '' }}</span>
                            </p>
                        </div>

                        <div class="view-cart">
                            <p class="total">
                                <strong>Grand Total</strong> <span
                                    class="currency-symbol">{{ number_format($data_user->total ?? 0, 0, ',', '.') ?? '' }}</span>
                            </p>
                        </div>

                        <div class="view-cart">
                            <div class="row">
                                @if (!empty($data_user->payment_url) && $data_user->payment_expired > \Carbon\Carbon::now())
                                <a href="{{ $data_user->payment_url }}" class="btn btn-secondary btn-lg btn-block" type="submit">Payment</a>
                                @else
                                <button class="btn btn-secondary btn-lg btn-block" type="submit">Checkout</button>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!--car-box-->
    </div>
</div>
