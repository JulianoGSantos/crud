<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<header class="container-fluid border border-1 border-start-0 border-end-0 p-4">
    <div class="row g-2">
        <div class="col-6">
            <div class="display-6 mb-2">
                <img src="https://cdn0.iconfinder.com/data/icons/e-commerce-53/512/eCommerce_BestSellers-256.png" alt="home" width="10%">
                 Best Seller
            </div>
        </div>
        <div class="col-2">
            <div class="border p-1 rounded-end mb-2">
                <a href="#" class="btn btn-sm"><img src="https://cdn1.iconfinder.com/data/icons/shopping-223/33/shopping-04-256.png" alt="central de atendimento" width="20%"> Central de atendimento</a>
            </div>
        </div>
        <div class="col-2">
            <div class="border p-1 rounded-end mb-2">
                <a href="login" class="btn btn-sm"><img src="https://cdn0.iconfinder.com/data/icons/ui-essentials-2-3/32/user_interface_ui_basic_app_ui_interface_login_login-256.png" alt="login" width="20%"> Login</a>
            </div>
        </div>
        <div class="col-2">
            <div class="border p-1 rounded-end mb-2">
                <a href="#" class="btn btn-sm"><img src="https://cdn1.iconfinder.com/data/icons/material-core/20/shopping-cart-256.png" alt="carrinho" width="20%"> Meu carrinho</a>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">
    <div class="row bg-dark g-4 justify-content-center gap-5">
        <div class="col-1 p-1">
            <a href="#" class="bg-dark link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Vestuário</a>
        </div>
        <div class="col-1 p-1">
            <a href="#" class="bg-dark link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Calçados</a>
        </div>
        <div class="col-1 p-1">
            <a href="#" class="bg-dark link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Esportes</a>
        </div>
        <div class="col-1 p-1">
            <a href="#" class="bg-dark link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Relógios</a>
        </div>
    </div>
</div>
<div class="container-sm w-100 mt-3">
    <div class="card text-bg-dark w-100">
        <img src="img/sneaker.png" class="card-img" alt="tenis">
        <div class="card-img-overlay">
            <div class="container-sm">
                <div class="row">
                    <div class="card" style="width: 47%;">
                        <div class="card-body">
                        <h5 class="card-title fw-bold">Corrida em alta performance</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Nike</h6>
                        <p class="card-text mt-5">As coisas ficam melhores quando se é um membro da Nike.Tenha acesso exclusivo em primeira mão aos novos lançamentos,inovações, frete grátis, benefícios especiais de aniversário e muito mais.
                            A Nike representa uma cultura global de esporte, estilo e da busca pela grandeza. Somos apaixonados pelo potencial e acreditamos que todos deveriam ter as ferramentas para alcançar o potencial de cada um. Investimos em nossos funcionários, inspirando novas ideias, métodos e produtos que nos levam ao futuro do esporte.</p>
                        <a href="#" class="btn btn-primary mt-5 col-12" role="button">Confira</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-sm w-75 mt-2">
    <div class="row g-4 justify-content-center gap-5">
        <div class="col-2">
            <img src="https://cdn3.iconfinder.com/data/icons/glypho-shopping-and-ecommerce/64/truck-fast-delivery-speed-256.png" alt="entrega" width="20%">
             Entregamos em todo Brasil
        </div>
        <div class="col-2">
            <img src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-card-256.png" alt="cartão de crédito" width="15%">
             Em até 12 vezes sem juros
        </div>
        <div class="col-2">
            <img src="https://cdn4.iconfinder.com/data/icons/e-commerce-ui-outline/64/ecommerce_-_barcode-64.png" alt="boleto" width="15%">
             Desconto de 10% no boleto
        </div>
        <div class="col-2">
            <img src="https://cdn3.iconfinder.com/data/icons/approved-and-checked/85/approved_tick_shield_protection_protect_checked-512.png" alt="seguro" width="15%">
             100% seguro            
        </div>
    </div>
</div>
<div class="container-sm mt-5 mb-5">
    <div class="d-flex flex-row gap-5 g-2">
        <div class="card text-bg-dark">
            <img src="img/sneaker.png" class="card-img" alt="..." width="50%">
            <div class="card-img-overlay">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card text-bg-dark">
            <img src="img/sneaker.png" class="card-img" alt="..." width="50%">
            <div class="card-img-overlay">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
</html>
