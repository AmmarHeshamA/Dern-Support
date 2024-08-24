@extends('frontend.layouts.app')

@section('title', 'Check Out')

@section('content')

    <!-- header -->
    @include('frontend.layouts.nav.nav-pages')


    <section class="with-bg solid-section">
        <div class="fix-image-wrap" data-image-src="{{ asset('./assets/images/service/tools.jpg') }}" data-parallax="scroll">
        </div>
        <div class="theme-back"></div>
        <div class="container page-info">
            <div class="section-alt-head container-md">
                <h1 class="section-title text-upper text-lg" data-inview-showup="showup-translate-right">Checkout</h1>
            </div>
        </div>
        <div class="section-footer">
            <div class="container" data-inview-showup="showup-translate-down">
                <ul class="page-path">
                    <li><a href="/home">Home</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li><a href="/shop">Shop</a></li>
                    <li class="path-separator"><i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Form -->
    <section class="content-section">
        <div class="container">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form id="billingForm" method="post" enctype="multipart/form-data" action="{{ route('billingdetail.store') }}">
                @csrf
                <div class="row cols-lg rows-lg">
                    <!-- aside -->
                    <div class="sm-col-6" data-inview-showup="showup-translate-right">
                        <h4 class="text-upper">Your Order</h4>
                        <div class="checkout-total-line main-bg">
                            <div class="title text-upper">Product</div>
                            <div class="value text-upper">Total</div>
                        </div>
                        <div class="ins-sm" id="selectedProductsContainer">
                            <!-- Selected products will be displayed here -->
                        </div>
                        <div class="muted-bg ins-sm offs-lg" id="totalSection">
                            <!-- Subtotal, Shipping, Total lines -->
                        </div>

                        <h4 class="text-upper">Payment Details</h4>
                        <p>Please use your Order ID as the payment reference. Your order won't be shipped until the funds
                            have cleared in our account.</p>
                        <div class="field-groups offs-lg">
                            <div class="field-group alt-color text-semibold">
                                <div class="radio"><label><input class="field-control" name="paymentType" type="radio"
                                            value="check"> <span class="check-icon"><span class="check-block"><span
                                                    class="check-pin"></span> </span></span><span class="label">Check
                                            Payment</span></label></div>
                            </div>
                            <div class="field-group alt-color text-semibold">
                                <div class="radio"><label><input class="field-control" name="paymentType" type="radio"
                                            value="cash"> <span class="check-icon"><span class="check-block"><span
                                                    class="check-pin"></span> </span></span><span class="label">Cash On
                                            Delivery</span></label></div>
                            </div>
                            <div class="field-group alt-color text-semibold">
                                <div class="radio"><label><input class="field-control" name="paymentType" type="radio"
                                            data-action-role="show-block" data-block-name="paypalDetails"> <span
                                            class="check-icon"><span class="check-block"><span class="check-pin"></span>
                                            </span></span><span class="label">PayPal</span></label></div>
                            </div>
                            <div class="collapse shift-sm" data-block="paypalDetails"><img class="image"
                                    src="{{ asset('./assets/images/icons/paypal.jpg') }}" alt=""></div>
                        </div>
                        <div class="field-group">
                            <div class="checkbox"><label><input class="field-control" name="terms" type="checkbox"> <span
                                        class="check-icon"><span class="check-block"><span class="check-pin"></span>
                                        </span></span><span class="label">I've read &amp; accept the <a
                                            href="#">terms &amp; conditions</a></span></label></div>
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="sm-col-6" data-inview-showup="showup-translate-left">
                        <div class="card w-100 mx-auto p-3" data-inview-showup="showup-translate-left">
                            <h4 class="text-upper">Billing Details</h4>
                            <!-- name -->
                            <div class="field-group">
                                <div class="field-wrap"><input
                                        class="field-control @error('name_billing_details') is-invalid @enderror"
                                        name="name_billing_details" value="{{ old('name_billing_details') }}"
                                        placeholder="Name"> <span class="field-back"></span></div>
                            </div>
                            <x-input-error class="text-red-800" :messages="$errors->get('name_billing_details')" class="m-2" />
                            <!-- email -->
                            <div class="field-group">
                                <div class="field-wrap"><input
                                        class="field-control @error('email_billing_details') is-invalid @enderror"
                                        name="email_billing_details" value="{{ old('email_billing_details') }}"
                                        placeholder="Email"> <span class="field-back"></span></div>
                            </div>
                            <x-input-error class="text-red-800" :messages="$errors->get('email_billing_details')" class="m-2" />
                            <!-- company -->
                            <div class="field-group">
                                <div class="field-wrap"><input
                                        class="field-control @error('company_billing_details') is-invalid @enderror"
                                        name="company_billing_details" value="{{ old('company_billing_details') }}"
                                        placeholder="Company Name"> <span class="field-back"></span></div>
                            </div>
                            <x-input-error class="text-red-800" :messages="$errors->get('company_billing_details')" class="m-2" />
                            <!-- address -->
                            <div class="field-group">
                                <div class="field-wrap"><input
                                        class="field-control @error('address_billing_details') is-invalid @enderror"
                                        name="address_billing_details" value="{{ old('address_billing_details') }}"
                                        placeholder="Address"> <span class="field-back"></span></div>
                            </div>
                            <x-input-error class="text-red-800" :messages="$errors->get('address_billing_details')" class="m-2" />
                            <!-- City -->
                            <div class="field-group">
                                <div class="field-wrap"><input
                                        class="field-control @error('city_billing_details') is-invalid @enderror"
                                        name="city_billing_details" value="{{ old('city_billing_details') }}"
                                        placeholder="City"> <span class="field-back"></span></div>
                            </div>
                            <x-input-error class="text-red-800" :messages="$errors->get('city_billing_details')" class="m-2" />
                            <!-- Post code -->
                            <div class="field-group">
                                <div class="field-wrap"><input
                                        class="field-control @error('post_code_billing_details') is-invalid @enderror"
                                        name="post_code_billing_details" value="{{ old('post_code_billing_details') }}"
                                        placeholder="Post Code"> <span class="field-back"></span></div>
                            </div>
                            <x-input-error class="text-red-800" :messages="$errors->get('post_code_billing_details')" class="m-2" />
                            <!-- Phone -->
                            <div class="field-group">
                                <div class="field-wrap"><input
                                        class="field-control @error('phone_billing_details') is-invalid @enderror"
                                        name="phone_billing_details" value="{{ old('phone_billing_details') }}"
                                        placeholder="Phone"> <span class="field-back"></span></div>
                            </div>
                            <x-input-error class="text-red-800" :messages="$errors->get('phone_billing_details')" class="m-2" />
                            <!-- Notes -->
                            <div class="field-group shift-md">
                                <div class="field-wrap">
                                    <textarea class="field-control @error('notes_billing_details') is-invalid @enderror" name="notes_billing_details"
                                        placeholder="Order notes"></textarea>
                                    <span class="field-back"></span>
                                </div>
                            </div>
                            <x-input-error class="text-red-800" :messages="$errors->get('notes_billing_details')" class="m-2" />

                            <!-- Hidden fields for cart data -->
                            <input type="hidden" name="categories_billing_details" id="cartData">

                            <div class="btn-block text-center mx-auto">
                                <button class="btn text-upper ajax-disabled" type="submit">
                                    Place order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Clear localStorage when on /order_confirmation route
            if (window.location.pathname === '/order_confirmation') {
                localStorage.removeItem('cart');
            }

            // Retrieve selected products from localStorage
            let selectedProducts = JSON.parse(localStorage.getItem('cart')) || [];

            // Select the container to display selected products
            const selectedProductsContainer = document.getElementById('selectedProductsContainer');
            // Select the container for total section
            const totalSection = document.getElementById('totalSection');
            // Select the hidden input field for cart data
            const cartDataInput = document.getElementById('cartData');

            // Function to generate HTML for selected products
            function generateSelectedProductsHTML(products) {
                let html = '';
                let subtotal = 0;
                products.forEach(product => {
                    const totalPrice = product.price * product.quantity;
                    html += `
                        <div class="checkout-total-line">
                            <div class="title">${product.name} x ${product.quantity}</div>
                            <div class="value">$${totalPrice.toFixed(2)}</div>
                        </div>
                    `;
                    subtotal += totalPrice;
                });
                return {
                    html,
                    subtotal
                };
            }

            // Function to generate HTML for total section
            function generateTotalSectionHTML(subtotal) {
                const shipping = 0; // Assuming free shipping for now
                const total = subtotal + shipping;
                return `
                    <div class="checkout-total-line text-sm text-semibold">
                        <div class="title text-upper">Sub total</div>
                        <div class="value">$${subtotal.toFixed(2)}</div>
                    </div>
                    <div class="checkout-total-line text-semibold">
                        <div class="title text-upper">Shipping</div>
                        <div class="value">$${shipping.toFixed(2)}</div>
                    </div>
                    <div class="checkout-total-line text-bold">
                        <div class="title text-upper">Total</div>
                        <div class="value">$${total.toFixed(2)}</div>
                    </div>
                `;
            }

            // Display selected products and total on the checkout page
            const {
                html,
                subtotal
            } = generateSelectedProductsHTML(selectedProducts);
            selectedProductsContainer.innerHTML = html;
            totalSection.innerHTML = generateTotalSectionHTML(subtotal);

            // Add cart data to hidden input field
            cartDataInput.value = JSON.stringify(selectedProducts);
        });
    </script>




@endsection
