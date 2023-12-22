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
    <div class="container-sm mt-3 mb-5">
        <form action="{{route('store')}}" method="POST" class="row border border-3 border-info rounded g-2 justify-content-around align-items-center">
            @csrf
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
                    <input type="text" class="form-control" name="complement" id="icomplement">
                </div>
                <div class="col-md-4">
                    <label for="idistrict" class="form-label">Bairro</label>
                    <input type="text" class="form-control" name="district" id="idistrict">
                </div>
            </div>
            <div class="row g-2 justify-content-around">
                <div class="col-md-5">
                    <label for="icity" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="city" id="icity">
                </div>
                <div class="col-md-3">
                    <label for="istate" class="form-label">Estado</label>
                    <select class="form-select" name="state" id="istate">
                        <option selected>selecione</option>
                        <option value="Acre (AC)">Acre (AC)</option>
                        <option value="Alagoas (AL)">Alagoas (AL)</option>
                        <option value="Amapá (AP)">Amapá (AP)</option>
                        <option value="Amazonas (AM)">Amazonas (AM)</option>
                        <option value="Bahia (BA)">Bahia (BA)</option>
                        <option value="Ceará (CE)">Ceará (CE)</option>
                        <option value="Distrito Federal (DF)">Distrito Federal (DF)</option>
                        <option value="Espírito Santo (ES)">Espírito Santo (ES)</option>
                        <option value="Goiás (GO)">Goiás (GO)</option>
                        <option value="Maranhão (MA)">Maranhão (MA)</option>
                        <option value="Mato Grosso (MT)">Mato Grosso (MT)</option>
                        <option value="Mato Grosso do Sul (MS)">Mato Grosso do Sul (MS)</option>
                        <option value="Minas Gerais (MG)">Minas Gerais (MG)</option>
                        <option value="Pará (PA)">Pará (PA)</option>
                        <option value="Paraíba (PB)">Paraíba (PB)</option>
                        <option value="Paraná (PR)">Paraná (PR)</option>
                        <option value="Pernambuco (PE)">Pernambuco (PE)</option>
                        <option value="Piauí (PI)">Piauí (PI)</option>
                        <option value="Rio de Janeiro (RJ)">Rio de Janeiro (RJ)</option>
                        <option value="Rio Grande do Norte (RN)">Rio Grande do Norte (RN)</option>
                        <option value="Rio Grande do Sul (RS)">Rio Grande do Sul (RS)</option>
                        <option value="Rondônia (RO)">Rondônia (RO)</option>
                        <option value="Roraima (RR)">Roraima (RR)</option>
                        <option value="Santa Catarina (SC)">Santa Catarina (SC)</option>
                        <option value="São Paulo (SP)">São Paulo (SP)</option>
                        <option value="Sergipe (SE)">Sergipe (SE)</option>
                        <option value="Tocantins (TO)">Tocantins (TO)</option>
                    </select>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mt-5 mb-3 col-4" value="Cadastrar">
        </form>
    </div>
</body>
</html>