<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Pet Shop</title>

</head>

<body>

    <div class="container">
        <h1>CADASTRE SEU PET</h1>

        <img src="imagens/pata.png" alt="erro">

        <form action="dados.php" method="POST">
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome do Pet:</label>
                <input type="text" name="campoNome" placeholder="Pipoca" id="idNome" class="form-control">
            </div>

            <div class="mb-3">
                <label for="idRaca" class="form-label">Raça do Pet:</label>
                <input type="text" name="campoRaca" placeholder="Pastor Alemão" id="idRaca" class="form-control">
            </div>

            <div>
                <select class="form-select" aria-label="Default select example" name="campoEspecie">
                    <option selected>Selecione a espécie do seu pet</option>
                    <option value="1">Cachorro</option>
                    <option value="2">Gato</option>
                    <option value="3">Pássaro</option>
                    <option value="4">Ramster</option>
                    <option value="5">Outro</option>
                </select>
            </div>

            <div>
                <label for="idCor" class="form-label">Cor:</label>
                <input type="text" name="campoCor" placeholder="Branco" id="idCor" class="form-control">
            </div>

            <div class="mb-3">
                <label for="idObs" class="form-label">Observação::</label>
                <textarea name="campoObs" id="idObs" class="form-control"></textarea>
            </div>

            <div>Selecione o Tamanho do seu Pet</div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="campoTamanho" id="flexRadioDefault1" value="Pequeno">
                <label class="form-check-label" for="flexRadioDefault1">
                    Pequeno
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="campoTamanho" id="flexRadioDefault2" checked
                    value="Médio">
                <label class="form-check-label" for="flexRadioDefault2">
                    Médio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="campoTamanho" id="flexRadioDefault3" value="Grande"
                    checked>
                <label class="form-check-label" for="flexRadioDefault3">
                    Grande
                </label>
            </div>

            <button type="submit" class="btn btn-dark">Enviar</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
