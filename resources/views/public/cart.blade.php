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
                <span class="title">{{ __('Registration Data') }}</span>
                <span class="minicart-close"></span>
            </div>

            @if(!empty($data_user))
            <div class="widget_shopping_cart_content">
                <div class="minicar-body">

                    @if (!empty($data_user->payment_expired))

                    <div class="time">
                        <img src="{{ asset('zunzo/images/retinal/fire.png') }}" alt="">
                        <p>Your cart will expire on <span id="timer-sell-out1">{{ !empty($data_user->payment_expired) ? $data_user->payment_expired->diffForHumans() : '' }}</span>
                            Please checkout now
                            before your items sell
                            out!</p>
                    </div>

                    @endif

                </div>
                <div class="minicar-footer">

                    <div class="view-cart">
                        <p class="total">
                            <strong>{{ $data_user->field_name }} ({{ $data_user->has_event->field_name ?? '' }})</strong>
                            <span class="currency-symbol">
                                {{ number_format($data_user->amount ?? 0, 0, ',', '.') ?? '' }}
                            </span>
                        </p>
                    </div>

                    {{-- //disini relationship --}}

                    @if ($relationship)
                        @foreach ($relationship as $item)

                        <div class="view-cart">
                            <p class="total">
                                    <strong class="col-sm-10">
                                        <a class="btn-remove" style="position: absolute;background: #DB4444;color:aliceblue;padding: 0px 10px;border-radius: 5px;margin-top:4px" href="{{ route('remove', ['id' => $item->id]) }}">X</a>
                                        <span style="position: relative;margin-left:40px;">
                                            {{ $item->field_name }}
                                        </span>
                                    </strong>
                                <span class="currency-symbol">
                                    {{ number_format($item->amount ?? 0, 0, ',', '.') ?? '' }}
                                </span>
                            </p>
                        </div>

                        @endforeach
                    @endif

                    <div class="view-cart">
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
                    </div>

                    <form id="registerform" class="register-form" method="POST" action="{{ route('checkout') }}">
                        @csrf
                        <div class="view-cart">
                            <p class="total">
                                <strong>{{ __('Subtotal') }}</strong>
                                <span class="currency-symbol">
                                    {{ number_format($total ?? 0, 0, ',', '.') ?? '' }}
                                </span>
                            </p>
                        </div>

                        <div class="view-cart">
                            <p class="total">
                                <strong>{{ __('Discount') }}</strong>
                                <span
                                    class="currency-symbol">-{{ number_format($data_user->discount_value ?? 0, 0, ',', '.') ?? '' }}</span>
                            </p>
                        </div>

                        <div class="view-cart">
                            <p class="total">
                                <strong>{{ __('Admin Fee') }}</strong> <span
                                    class="currency-symbol">{{ number_format(env('ADMIN_FEE', 0) ?? 0, 0, ',', '.') ?? '' }}</span>
                            </p>
                        </div>

                        <div class="view-cart">
                            <p class="total">
                                <strong>{{ __('Grand Total') }}</strong> <span
                                    class="currency-symbol">{{ number_format($data_user->total ?? 0, 0, ',', '.') ?? '' }}</span>
                            </p>
                        </div>

                        <div class="view-cart">
                            <div class="row">
                                @if (!empty($data_user->payment_url) && $data_user->payment_expired > \Carbon\Carbon::now())
                                <a href="{{ $data_user->payment_url }}" class="btn btn-secondary btn-lg btn-block" type="submit">{{ __('Payment') }}</a>
                                @else
                                <button class="btn btn-secondary btn-lg btn-block" type="submit">{{ __('Checkout') }}</button>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            @endif
        </div>

        <!--car-box-->
    </div>
</div>
