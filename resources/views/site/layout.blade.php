<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<header class="container-fluid border border-1 border-start-0 border-end-0 p-4">
    @yield('top')
    <div class="row g-4">
        <div class="col-6">
            <div class="display-6 mb-2">
                <a href="/" class="btn btn-primary">
                    <img src="https://cdn0.iconfinder.com/data/icons/e-commerce-53/512/eCommerce_BestSellers-256.png" alt="home" width="20%">
                    <span class="h2"> Best Seller</span>
                </a>
            </div>
        </div>
        <div class="col-2">
            <div class="border p-1 rounded-end bg-warning bg-opacity-75">
                <a href="#" class="btn btn-sm"><img src="https://cdn1.iconfinder.com/data/icons/shopping-223/33/shopping-04-256.png" alt="central de atendimento" width="20%"> Atendimento</a>
            </div>
        </div>
        <div class="col-2">
            <div class="border p-1 rounded-end bg-primary opacity-75">
                <a href="login" class="btn btn-sm"><img src="https://cdn0.iconfinder.com/data/icons/ui-essentials-2-3/32/user_interface_ui_basic_app_ui_interface_login_login-256.png" alt="login" width="20%"> Login</a>
            </div>
        </div>
        <div class="col-2">
            <div class="border p-1 rounded-end bg-success bg-opacity-75">
                <a href="#" class="btn btn-sm"><img src="https://cdn1.iconfinder.com/data/icons/material-core/20/shopping-cart-256.png" alt="carrinho" width="20%"> Meu carrinho</a>
            </div>
        </div>
    </div>
</header>
<body>
    @yield('content')
</body>
</html>