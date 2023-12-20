<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="container-sm mt-5">
        <form action="#" class="row border b-3 g-2 justify-content-around align-items-center">
            <div class="col-md-4">
                <label for="iname" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="iname">
            </div>
            <div class="col-md-4">
                <label for="ilastname" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" name="lastname" id="ilastname">
            </div>
            <div class="row g-2 justify-content-around">
                <div class="col-md-4">
                    <label for="igender" class="form-label">Sexo</label>
                    <select class="form-select" name="gender" id="igender">
                        <option selected>selecione</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="icpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf" id="icpf">
                </div>
            </div>
            <div class="row g-2 justify-content-around">
                <div class="col-md-4">
                    <label for="iphone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" name="phone" id="iphone">
                </div>
                <div class="col-md-4">
                    <label for="icellphone" class="form-label">Celular</label>
                    <input type="text" class="form-control" name="cellphone" id="icellphone">
                </div>
            </div>
            <div class="row g-2 justify-content-around">
                <div class="col-md-4">
                    <label for="ibirth" class="form-label">Nascimento</label>
                    <input type="date" class="form-control" name="birth" id="ibirth">
                </div>
                <div class="col-md-4">
                    <label for="icep" class="form-label">Cep</label>
                    <input type="text" class="form-control" name="cep" id="icep">
                </div>
            </div>
            <div class="row g-2 justify-content-around">
                <div class="col-md-6">
                    <label for="istreet" class="form-label">Rua</label>
                    <input type="text" class="form-control" name="street" id="istreet">
                </div>
                <div class="col-md-2">
                    <label for="inumber" class="form-label">Número</label>
                    <input type="text" class="form-control" name="number" id="inumber">
                </div>
            </div>
            <div class="row g-2 justify-content-around">
                <div class="col-md-4">
                    <label for="icomplement" class="form-label">Complemento</label>
                    <input type="text" class="form-control" name="complement" id="complement">
                </div>
                <div class="col-md-4">
                    <label for="idistrict" class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="district" id="idistrict">
                </div>
            </div>
            <div class="row g-2 justify-content-around">
                <div class="col-md-6">
                    <label for="icomplement" class="form-label">Complemento</label>
                    <input type="text" class="form-control" name="complement" id="complement">
                </div>
                <div class="col-md-2">
                    <label for="idistrict" class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="district" id="idistrict">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5 mb-5">
                    <button type="button" class="col-md-2 btn btn-success" value="cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>