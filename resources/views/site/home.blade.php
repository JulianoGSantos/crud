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
    <div class="row g-4">
        <div class="col-6">
            <div class="display-6 mb-2">
                <img src="https://cdn0.iconfinder.com/data/icons/e-commerce-53/512/eCommerce_BestSellers-256.png" alt="home" width="15%">
                 Best Seller
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
<div class="container-sm mt-5">
<div class="card">
    <div class="row g-0">
        <div class="col-md-7">
            <img src="img/sneaker.png" class="img-fluid rounded-start" width="100%" alt="tenis">
        </div>
        <div class="col-md-5">
            <div class="card-body">
                <h3 class="card-title">Corrida com estilo</h3>
                <h4 class="card-subtitletext-body-secondary">Nike</h4>
                <p class="card-text">As coisas ficam melhores quando se é um membro da Nike.Tenha acesso exclusivo em primeira mão aos novos lançamentos,inovações, frete grátis, benefícios especiais de aniversário e muito mais. A Nike representa uma cultura global de esporte, estilo e da busca pela grandeza. Somos apaixonados pelo potencial e acreditamos que todos deveriam ter as ferramentas para alcançar o potencial de cada um. Investimos em nossos funcionários, inspirando novas ideias, métodos e produtos que nos levam ao futuro do esporte.</p>
                <div class="d-grid col-6 mt-4 mx-auto">
                    <a href="#" class="btn btn-primary">Confira</a>
                </div>
            </div>
        </div>
    </div>
</div>    
</div>
<div class="container-sm w-75 mt-4">
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
<div class="container-sm mt-4 mb-5">
    <div class="d-flex flex-row gap-5">
        <div class="card text-bg-dark">
            <img src="img/relogios.png" class="card-img" alt="..." width="50%">
            <div class="card-img-overlay">
              <h5 class="card-title">Exclusivo</h5>
            </div>
        </div>
        <div class="card text-bg-dark">
            <img src="img/fashion.png" class="card-img" alt="..." width="50%">
            <div class="card-img-overlay">
              <h5 class="card-title">Coleçao 2024</h5>
            </div>
        </div>
    </div>
</div>
<div class="container-sm mb-5">
    <div class="card">
        <h3 class="card-header fw-bold">Mais vendidos</h3>
        <div class="row text-center">
            <div class="col-3 border-end p-3">
                <img src="img/vestuario.png" alt="profile" class="card-img-top">
                <div class="card-body">
                    <p class="text-muted fw-bold">Camisa Aspen</p>
                    <p class="fw-bold">R$129,00</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="col-3 border-end p-3">
                <img src="img/tenis.png" alt="profile" class="card-img-top">
                <div class="card-body">
                    <p class="text-muted fw-bold">Tênis Asics</p>
                    <p class="fw-bold">R$399,00</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="col-3 border-end p-3">
                <img src="img/esporte.png" alt="profile" class="card-img-top">
                <div class="card-body">
                    <p class="text-muted fw-bold">Bola</p>
                    <p class="fw-bold">R$180,00</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="col-3 p-3">
                <img src="img/relogio.png" alt="profile" class="card-img-top">
                <div class="card-body">
                    <p class="text-muted fw-bold">Relógio Hugo Boss</p>
                    <p class="fw-bold">R$1299,00</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-sm mb-5">
    <div class="card">
        <h3 class="card-header fw-bold">Promoções</h3>
        <div class="row text-center">
            <div class="col-3 border-end p-3">
                <img src="img/promocao1.png" alt="profile" class="card-img-top">
                <div class="card-body">
                    <p class="text-muted fw-bold">Vestido Sara</p>
                    <p class="fw-bold">R$249,00</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="col-3 border-end p-3">
                <img src="img/promocao2.png" alt="profile" class="card-img-top">
                <div class="card-body">
                    <p class="text-muted fw-bold">sandália Marisa</p>
                    <p class="fw-bold">R$79,00</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="col-3 border-end p-3">
                <img src="img/promocao3.png" alt="profile" class="card-img-top">
                <div class="card-body">
                    <p class="text-muted fw-bold">Sapato Veneza</p>
                    <p class="fw-bold">R$89,00</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="col-3 p-3">
                <img src="img/promocao4.png" alt="profile" class="card-img-top">
                <div class="card-body">
                    <p class="text-muted fw-bold">sandália Nara</p>
                    <p class="fw-bold">R$49,00</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row bg-dark">
        <div class="col-1">
            .
        </div>
    </div>
    <div class="row bg-dark">
        <div class="col-1">
            .
        </div>
    </div>
</div>
<div class="container-sm mt-2">
    <div class="row gap-5 justify-content-center">
        <div class="col-2">
            <h5 class="fw-bold">Atendimento</h5>
            <p class="fw-bold">telefone</p>
            <p>(15)3272-5454</p><br>
            <p class="fw-bold">whatsapp</p>
            <p>(15)98132-7777</p><br>
            <p class="fw-bold">email</p>atendimento@bestseller.com
        </div>
        <div class="col-2">
            <h5 class="fw-bold">Institucional</h5>
            <p><a href="#" class="btn btn-xl fw-bold p-0">Missão</a></p>
            <p><a href="#" class="btn btn-xl fw-bold p-0">Visão</a></p>
            <p><a href="#" class="btn btn-xl fw-bold p-0">Valor</a></p>
        </div>
        <div class="col-2">
            <h5 class="fw-bold">Categorias</h5>
            <p><a href="#" class="btn btn-xl fw-bold p-0">Vestuário</a></p>
            <p><a href="#" class="btn btn-xl fw-bold p-0">Calçados</a></p>
            <p><a href="#" class="btn btn-xl fw-bold p-0">Esportes</a></p>
            <p><a href="#" class="btn btn-xl fw-bold p-0">Relógios</a></p>
        </div>
        <div class="col-2">
            <h5 class="fw-bold">Redes Sociais</h5>
            <p><a href="#" class="btn btn-xl fw-bold p-0">Instagram</a></p>
            <p><a href="#" class="btn btn-xl fw-bold p-0">Facebook</a></p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row bg-dark bg-opacity-10 gap-4 p-2">
        <div class="col-5 display-6">
            <img src="https://cdn0.iconfinder.com/data/icons/e-commerce-53/512/eCommerce_BestSellers-256.png" alt="home" width="30%">
             Best Seller
        </div>
        <div class="col-4">
            <h5 class="fw-bold">Formas de Pagamento</h5>
            <div class="row g-4">
                <div class="col-2">

                    <img src="https://cdn3.iconfinder.com/data/icons/credit-cards-icon-set/64/Visa.png" alt="visa" width="100%">
                </div>
                <div class="col-2">
                    <img src="https://cdn2.iconfinder.com/data/icons/credit-cards-6/156/mastercard-256.png" alt="mastercard" width="100%">
                    
                </div>
                <div class="col-2">
                    <img src="https://cdn2.iconfinder.com/data/icons/credit-cards-6/156/american_express-256.png" alt="american express" width="100%">
                    
                </div>
                <div class="col-2">
                    <img src="https://cdn4.iconfinder.com/data/icons/payment-method/160/payment_method_paypal-256.png" alt="paypal" width="100%">
                    
                </div>
            </div>
        </div>
        <div class="col-2">
            <h5 class="fw-bold">Nossas Redes</h5>
            <div class="row g-4 gap-3">
                <div class="col-2">
                    <a href="#">
                        <img src="https://cdn4.iconfinder.com/data/icons/logos-brands-7/512/instagram_icon-instagram_buttoninstegram-256.png" alt="instagram" width="400%">
                    </a>
                </div>
                <div class="col-2">
                    <a href="#">
                        <img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/83-facebook-256.png" alt="instagram" width="370%">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
