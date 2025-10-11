@extends('themes.xylo.layouts.master')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"> 
@endsection
@section('content')
    @php $currency = activeCurrency(); @endphp
    <section class="banner-area inner-banner pt-5 animate__animated animate__fadeIn productinnerbanner">
        <div class="container h-100">
            <div class="row">
                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <a href="#">{{ __('store.checkout.breadcrumb_home') }}</a> <i class="fa fa-angle-right"></i> <a href="#">{{ __('store.checkout.breadcrumb_category') }}</a> <i
                            class="fa fa-angle-right"></i>{{ __('store.checkout.breadcrumb_checkout') }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="cart-page pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <form id="checkout-form" method="POST" action="{{ route('checkout.process') }}">
                        @csrf

                        <!-- Shipping Information -->
                        <div class="shipping_info">
                            <h3 class="cart-heading">{{ __('store.checkout.shipping_information') }}</h3>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <input type="text" name="first_name" class="form-control" placeholder="{{ __('store.checkout.first_name') }}" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" name="last_name" class="form-control" placeholder="{{ __('store.checkout.last_name') }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <input type="text" name="address" class="form-control" placeholder="{{ __('store.checkout.address') }}" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" name="suite" class="form-control" placeholder="{{ __('store.checkout.suite') }}">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <select name="country" class="form-select" required>
                                        <option value="">{{ __('store.checkout.select_country') }}</option>
                                        <option value="1">United States</option>
                                        <!-- Dynamically populate -->
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <input type="text" name="city" class="form-control" placeholder="{{ __('store.checkout.city') }}" required>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <select name="state" class="form-select" required>
                                        <option value="">{{ __('store.checkout.select_state') }}</option>
                                        <option value="1">New York</option>
                                        <!-- Dynamically populate -->
                                    </select>
                                </div>
                                <div class="col-md-3 mt-3">
                                    <input type="text" name="zipcode" class="form-control" placeholder="{{ __('store.checkout.zipcode') }}" required>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>
                                    <input type="checkbox" name="use_as_billing" value="1" checked>{{ __('store.checkout.use_as_billing') }}
                                </label>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="shipping_info">
                            <h3 class="cart-heading mt-5">{{ __('store.checkout.contact_information') }}</h3>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <input type="email" name="email" class="form-control" placeholder="{{ __('store.checkout.email') }}" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input type="text" name="phone" class="form-control" placeholder="{{ __('store.checkout.phone') }}" required>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="shipping_info mt-5">
                            <h3 class="cart-heading">{{ __('store.checkout.payment_method') }}</h3>

                            @foreach($paymentGateways as $gateway)
                                <div class="form-check mt-2">
                                    <input type="radio" name="gateway" value="{{ $gateway->code }}" 
                                        id="gateway-{{ $gateway->id }}" required>
                                    <label for="gateway-{{ $gateway->id }}">{{ $gateway->name }}</label>
                                </div>

                                @if($gateway->code === 'paypal')
                                    <div id="paypal-button-container" class="mt-3" style="display: none;"></div>
                                @endif

                                @if($gateway->code === 'stripe')
                                    <div id="card-element" class="mt-3" style="display: none;"></div>
                                    <div id="card-errors" class="text-danger mt-2"></div>
                                @endif
                            @endforeach

                            <div id="payment-fields">
                                <!-- Stripe/PayPal fields injected with JS -->
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4">
                            <button type="submit" id="place-order" class="btn btn-primary w-100">{{ __('store.checkout.place_order') }}</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-5 mt-5 mt-md-0">
                    <div class="cart-box">
                        <h3 class="cart-heading">{{ __('store.checkout.order_summary') }}</h3>

                        <div class="row border-bottom pb-2 mb-2 mt-4">
                            <div class="col-6 col-md-4">{{ __('store.checkout.subtotal') }}</div>
                            <div class="col-6 col-md-8 text-end">${{ number_format($subtotal, 2) }}</div>
                        </div>
                        <div class="row border-bottom pb-2 mb-2">
                            <div class="col-4 col-md-4">{{ __('store.checkout.shipping') }}</div>
                            <div class="col-8 col-md-8 text-end"><small>{{ __('store.checkout.shipping_info') }}</small></div>
                        </div>
                        <div class="row border-bottom pb-2 mb-2">   
                            <div class="col-6 col-md-4">{{ __('store.checkout.total') }}</div>
                            <div class="col-6 col-md-8 text-end"><span>${{ number_format($total, 2) }}</span></div>
                        </div>

                        <div class="mt-4">
                            <a href="#" class="read-more d-block text-center">{{ __('store.checkout.proceed') }}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<?php /* ?>
<script src="https://js.stripe.com/v3/"></script>
<script>
document.addEventListener("DOMContentLoaded", async () => {
    // Fetch keys from backend
    let response = await fetch("{{ route('stripe.checkout.process') }}");
    let data = await response.json();

    let stripe = Stripe(data.publicKey);
    let elements = stripe.elements();
    let cardElement = elements.create('card');
    cardElement.mount('#card-element');

    document.querySelector('#checkout-form').addEventListener('submit', async (e) => {
        e.preventDefault();

        const {error, paymentIntent} = await stripe.confirmCardPayment(data.clientSecret, {
            payment_method: {
                card: cardElement
            }
        });

        if (error) {
            alert(error.message);
        } else if (paymentIntent.status === 'succeeded') {
            alert("Payment successful!");
            window.location.href = "/order/success";
        }
    });
});
</script>


@if($paypalClientId)
    <script src="https://www.paypal.com/sdk/js?client-id={{ $paypalClientId }}&currency=USD"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (typeof paypal !== "undefined") {
                paypal.Buttons({
                    createOrder: function(data, actions) {
                        return actions.order.create({
                            purchase_units: [{ amount: { value: "{{ $total }}" } }]
                        });
                    },
                    onApprove: function(data, actions) {
                        return actions.order.capture().then(function(details) {
                            fetch("{{ route('checkout.process') }}", {
                                method: "POST",
                                headers: {"X-CSRF-TOKEN": "{{ csrf_token() }}"},
                                body: JSON.stringify({
                                    gateway: "paypal",
                                    order_id: data.orderID
                                })
                            });
                        });
                    }
                }).render('#paypal-button-container');
            } else {
                console.error("PayPal SDK not loaded");
            }
        });
    </script>
@endif
<?php */ ?>
<script src="https://www.paypal.com/sdk/js?client-id={{ $paypalClientId }}&currency=USD"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const gatewayRadios = document.querySelectorAll('input[name="gateway"]');
    const paypalContainer = document.getElementById("paypal-button-container");
    const stripeContainer = document.getElementById("card-element");
    const placeOrderBtn = document.getElementById("place-order");

    let stripe = Stripe("asdasd");
    let elements = stripe.elements();
    let card = elements.create("card");
    card.mount("#card-element");

    // Show correct payment fields
    gatewayRadios.forEach(radio => {
        radio.addEventListener("change", function () {
            if (this.value === "paypal") {
                paypalContainer.style.display = "block";
                stripeContainer.style.display = "none";
            } else if (this.value === "stripe") {
                stripeContainer.style.display = "block";
                paypalContainer.style.display = "none";
            } else {
                paypalContainer.style.display = "none";
                stripeContainer.style.display = "none";
            }
        });
    });

    // PayPal integration
    if (typeof paypal !== "undefined") {
        paypal.Buttons({
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{ amount: { value: "{{ number_format($total, 2, '.', '') }}" } }]
                });
            },
            onApprove: function (data, actions) {
                return actions.order.capture().then(function (details) {
                    // Send to backend
                    fetch("{{ route('checkout.process') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({
                            gateway: "paypal",
                            order_id: data.orderID,
                            details: details
                        })
                    }).then(res => res.json()).then(result => {
                        window.location.href = "/thank-you";
                    });
                });
            }
        }).render("#paypal-button-container");
    }

    // Stripe integration
    const form = document.getElementById("checkout-form");
    form.addEventListener("submit", async function (e) {
        e.preventDefault();

        let selectedGateway = document.querySelector('input[name="gateway"]:checked').value;

        if (selectedGateway === "stripe") {
            const {paymentMethod, error} = await stripe.createPaymentMethod({
                type: "card",
                card: card,
            });

            if (error) {
                document.getElementById("card-errors").textContent = error.message;
            } else {
                // Send paymentMethod.id + form data to backend
                let formData = new FormData(form);
                formData.append("payment_method_id", paymentMethod.id);

                fetch("{{ route('checkout.process') }}", {
                    method: "POST",
                    headers: {"X-CSRF-TOKEN": "{{ csrf_token() }}"},
                    body: formData
                }).then(res => res.json()).then(result => {
                    window.location.href = "/thank-you";
                });
            }
        } else if (selectedGateway === "paypal") {
            alert("Please complete payment with PayPal button");
        } else {
            form.submit();
        }
    });
});
</script>


@endsection