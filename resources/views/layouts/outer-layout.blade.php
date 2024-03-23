<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{asset('css/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>
    @csrf
    @include('layouts.outernav')

    {{ $slot }}

    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            var csrf = $("input[name=_token]").val();

            $('.btn-remove').click(function() {
                var method = 'DELETE';
                var $cartId = $(this).attr('data-cart-id');
                // alert($cartId);
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": csrf,
                    },
                    url: '/remove-item-from-cart/' + $cartId,
                    type: 'POST',
                    data: {
                        _method: method,
                    },
                    dataType: "json",
                    async: false,
                    success: function(res) {
                        console.log(res);
                        if (res.statusCode === 200) {
                            $('#remove_tr_' + $cartId).remove();
                        }
                    },
                    error: function(data) {
                        // alert(data);
                        console.log(data);
                    },
                })

            });

            $('.updateQnt').click(function() {
                var method = 'PATCH';
                var $cartId = $(this).attr('data-up-id');
               var quantity = $('#cartQuant-' + $cartId).val();
                alert($cartId);
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": csrf,
                    },
                    url: '/update-cart/' + $cartId,
                    type: 'POST',
                    data: {
                        _method: method,
                        quantity: quantity
                    },
                    dataType: "json",
                    async: false,
                    success: function(res) {
                        console.log(res);
                        if (res.statusCode === 200) {
                            alert('cart is updated');
                            location.reload();
                        }
                    },
                    error: function(data) {
                        // alert(data);
                        console.log(data);
                    },
                })

            });
        });
    </script>
</body>
