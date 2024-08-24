<!DOCTYPE html>
<html>

<!-- head -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <title>
        {{ config('app.name', 'Dern Support') }} - @yield('title')
    </title>
    <link rel="icon" href="{{ asset('./assets/images/service/logo-title.png') }}" type="image/icon type">

    <link href="{{ asset('./assets/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800,900" rel="stylesheet" />
    <link href="{{ asset('./assets/chosen/chosen.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/jquery-ui-custom/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/pentix/css/pentix.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/css/pex-theme.min.css') }}" rel="stylesheet" type="text/css" />
</head>



<!-- body -->

<body class="body loader-loading">

    @yield('content')


    <!-- Your Card -->
    <div class="block-cart collapse" data-block="cart" data-show-block-class="animation-scale-top-right"
        data-hide-block-class="animation-unscale-top-right">
        <div class="cart-inner">
            <a href="#" class="close-link" data-close-block><i class="fas fa-times" aria-hidden="true"></i></a>
            <h4 class="text-upper text-center">Your cart</h4>
            <div class="items">
                <div class="items-container collapse" data-block="cart"
                    data-show-block-class="animation-scale-top-right"
                    data-hide-block-class="animation-unscale-top-right">
                </div>
            </div>
            <div class="clearfix">
                <div class="row justify-content-center">
                    <a href="/check_out" class="btn text-upper btn-md">checkout</a>
                </div>
            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.getAttribute('data-id');
                    const productName = this.getAttribute('data-name');
                    const productPrice = this.getAttribute('data-price');
                    const productImage = this.getAttribute('data-image');

                    const product = {
                        id: productId,
                        name: productName,
                        price: parseFloat(productPrice),
                        image: productImage,
                        quantity: 1
                    };

                    const existingProductIndex = cart.findIndex(item => item.id === productId);
                    if (existingProductIndex > -1) {
                        cart[existingProductIndex].quantity += 1;
                    } else {
                        cart.push(product);
                    }

                    updateCartUI();
                    saveCartToLocalStorage();
                    openCart(); // Open the cart block
                });
            });

            function updateCartUI() {
                const cartItemsContainer = document.querySelector('.items-container');
                const cartItemCount = document.querySelector('.item-label-sale');
                cartItemsContainer.innerHTML = '';

                cart.forEach(item => {
                    const cartItemHTML = `
                <div class="shop-side-item cart-item">
                    <a href="#" class="remove" data-id="${item.id}"><i class="fas fa-times"></i></a>
                    <div class="item-side-image">
                        <a href="shop-item.html" class="item-image responsive-1by1"><img src="${item.image}" alt="${item.name}" /></a>
                    </div>
                    <div class="item-side">
                        <div class="item-title">
                            <a href="shop-item.html" class="content-link text-upper">${item.name}</a>
                        </div>
                        <div class="item-quantity">Quantity - ${item.quantity}</div>
                        <div class="item-prices">
                            <div class="item-price">$${(item.price * item.quantity).toFixed(2)}</div>
                        </div>
                    </div>
                </div>
            `;
                    cartItemsContainer.insertAdjacentHTML('beforeend', cartItemHTML);
                });

                cartItemCount.textContent = getTotalItemCount();
            }

            function getTotalItemCount() {
                return cart.reduce((total, item) => total + item.quantity, 0);
            }

            function saveCartToLocalStorage() {
                localStorage.setItem('cart', JSON.stringify(cart));
            }

            function openCart() {
                const cartBlock = document.querySelector('.block-cart');
                cartBlock.classList.remove('animation-unscale-top-right');
                cartBlock.classList.add('animation-scale-top-right');

                const item = document.querySelector('.items-container');
                item.classList.add('animation-scale-top-right');
            }

            // Event delegation for remove buttons
            document.querySelector('.items-container').addEventListener('click', function(event) {
                if (event.target.classList.contains('remove') || event.target.closest('.remove')) {
                    const productId = event.target.closest('.remove').getAttribute('data-id');
                    cart = cart.filter(item => item.id !== productId);
                    updateCartUI();
                    saveCartToLocalStorage();
                }
            });

            // Load cart from localStorage on page load
            updateCartUI();
        });
    </script>



    <!-- loader -->
    <div class="loader-block">
        <div class="loader-back alt-bg"></div>
        <div class="loader-image"><img class="image" src="{{ asset('./assets/images/parts/loader.gif') }}"
                alt=""></div>
    </div>

    <a href="#" class="scroll-top disabled"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <!-- footer -->
    <footer class="footer alt-bg">
        <div class="container only-xs-text-justify-center ">
            <div class="solid-section tight">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="footer-logo mb-4">
                            <img src="{{ asset('./assets/images/service/logo-alt.png') }}" alt="Dern Support"
                                class="img-fluid">
                        </div>
                        <div class="footer-text text-justify my-4">Dern-Support is a small IT technical support company
                            that repairs computer systems for businesses and individual customers.</div>
                        <div class="inline-block shift-md text-sm">
                            <a href="#" class="content-link list-item"><i class="fab fa-facebook-f"
                                    aria-hidden="true"></i></a>
                            <a href="#" class="content-link list-item"><i class="fab fa-twitter"
                                    aria-hidden="true"></i></a>
                            <a href="#" class="content-link list-item"><i class="fab fa-pinterest"
                                    aria-hidden="true"></i></a>
                            <a href="#" class="content-link list-item"><i class="fab fa-google-plus-g"
                                    aria-hidden="true"></i></a>
                            <a href="#" class="content-link list-item"><i class="fab fa-dribbble"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mx-4">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-4">
                                <div class="footer-title text-upper">Additional links</div>
                                <ul class="list">
                                    <li><a class="content-link" href="/home">Home</a></li>
                                    <li><a class="content-link" href="/services">Services</a></li>
                                    <li><a class="content-link" href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <div class="footer-title text-upper">Our info</div>
                                <ul class="list">
                                    <li>+20 123456789</li>
                                    <li><a href="mailto:Dern-Support@gmail.com">Dern-Support@gmail.com</a></li>
                                    <li>Egypt</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyrights text-center ins-md solid-border-top">
                &copy; 2024 <b>Ammar Hesham</b>. All Rights Reserved
            </div>
        </div>
    </footer>


    <!-- links script -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
        < /> <
        script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin = "anonymous" >
    </script>
    <script src="{{ asset('./assets/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('./assets/parallax.js/parallax.min.js') }}"></script>
    <script src="{{ asset('./assets/flexslider/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('./assets/owlcarousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('./assets/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('./assets/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('./assets/chosen/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('./assets/jquery-ui-custom/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('./assets/pentix/js/pentix.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('./assets/js/script.js') }}" type="text/javascript"></script>
</body>

</html>
