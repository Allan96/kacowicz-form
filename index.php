<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css?<?= date('sYMDsh') ?>aa">
</head>

<body>

    <section id="formulario-avaliacao">
        <div id="step-0" style="display: block;">
            <div class="container">
                <div class="row p-0 mx-0 align-content-center">
                    <div class="col-12 col-md-5 align-self-center">
                        <small class="upper text-center text-md-left">
                                Avaliação virtual online
                            </small>
                        <h2 class="c-blue upper">
                            Obrigado pela sua visita!
                        </h2>
                        <p>
                            Para que possamos iniciar a sua avaliação prévia, preencha o formulário a seguir. Assim que recebido, nossa equipe entrará em contato com você o mais breve possível.
                        </p>
                        <p>
                            Todos os seus dados, bem como as suas fotos, serão preservados no mais absoluto sigilo.
                        </p>
                        <p class="text-center text-md-left">
                            <button type="button" class="btn btn-primary upper mt-5 button-0 w-50">começar</button>
                        </p>
                    </div>
                    <div class="col-12 d-none d-md-block offset-md-1 col-md-6">
                        <img src="./assets/images/obrigado.jpg" alt="" class="img-fluid">
                    </div>

                </div>

            </div>
        </div>
        <div id="step-1" style="display: none;">
            <div class="container">
                <div class="row min-h-100">
                    <div class="col-12 offset-md-1 col-md-6">
                        <h1 class="c-blue upper text-center text-md-left">passo 1/4: dados pessoais</h1>
                        <form id="form-step-1" method="POST">
                            <div class="form-group">
                                <label class="mt-3" for="nome">Qual é o seu nome completo?</label>
                                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-group">
                                <label class="mt-3" for="data">Qual é a sua data de nascimento?</label>
                                <input type="text" class="form-control" name="data" id="data" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-row">
                                <div class="col-12">
                                    <label>Qual a cidade em que você reside?</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="estado" class="form-control" placeholder="Estado">
                                </div>
                                <div class="col">
                                    <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="mt-3" for="email">Qual é o seu e-mail?</label>
                                <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                            </div>


                            <div class="form-group">
                                <label class="mt-3" for="telefone">Qual é o seu telefone?</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group text-center text-md-left">
                                <button type="button" class="btn btn-primary upper e-button-1">VOLTAR</button>
                                <button type="submit" class="btn btn-primary upper button-1">Próximo</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div id="step-2" style="display: none;">
            <div class="container">
                <div class="row min-h-100">
                    <div class="col-12 offset-md-1 col-md-7">
                        <h1 class="c-blue upper text-center text-md-left">passo 2/4: eSPECIFICAÇÕES E <br class="d-md-none"> PROCEDIMENTOS DA PELE</h1>
                        <form id="form-step-2">
                            <div class="form-row">
                                <div class="col-12">
                                    <label>Qual desses tons mais se aproxima da sua pele?</label>
                                </div>
                                <div class="col-4 col-md my-2 text-center">
                                    <input class="form-check-input" type="radio" name="pele" id="pele-1" value="Pele 1" checked hidden>
                                    <label class="form-check-label" for="pele-1">
                                <img src="./assets/images/pele-1.svg" alt="" class="img-fluid">
                            </label>
                                </div>
                                <div class="col-4 col-md my-2 text-center">
                                    <input class="form-check-input" type="radio" name="pele" id="pele-2" value="Pele 2" hidden>
                                    <label class="form-check-label" for="pele-2">
                                    <img src="./assets/images/pele-2.svg" alt="" class="img-fluid">
                            </label>
                                </div>
                                <div class="col-4 col-md my-2 text-center">
                                    <input class="form-check-input" type="radio" name="pele" id="pele-3" value="Pele 3" hidden>
                                    <label class="form-check-label" for="pele-3">
                                    <img src="./assets/images/pele-3.svg" alt="" class="img-fluid">
                            </label>
                                </div>

                                <div class="col-4 col-md my-2 text-center">
                                    <input class="form-check-input" type="radio" name="pele" id="pele-4" value="Pele 4" hidden>
                                    <label class="form-check-label" for="pele-4">
                                    <img src="./assets/images/pele-4.svg" alt="" class="img-fluid">
                            </label>
                                </div>
                                <div class="col-4 col-md my-2 text-center">
                                    <input class="form-check-input" type="radio" name="pele" id="pele-5" value="Pele 5" hidden>
                                    <label class="form-check-label" for="pele-5">
                                    <img src="./assets/images/pele-5.svg" alt="" class="img-fluid">
                            </label>
                                </div>
                                <div class="col-4 col-md my-2 text-center">
                                    <input class="form-check-input" type="radio" name="pele" id="pele-6" value="Pele 6" hidden>
                                    <label class="form-check-label" for="pele-6">
                                    <img src="./assets/images/pele-6.svg" alt="" class="img-fluid">
                            </label>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="mt-3" for="telefone">Assinale abaixo quais são as suas queixas principais da face:</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasUm" type="checkbox" value="Rugas profundas" id="rugas">
                                    <label class="form-check-label" for="rugas">Rugas profundas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasUm" type="checkbox" value="Manchas senis" id="senis">
                                    <label class="form-check-label" for="senis">Manchas senis</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasUm" type="checkbox" value="Manchas melânicas" id="melanicas">
                                    <label class="form-check-label" for="melanicas">Manchas melânicas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasUm" type="checkbox" value="Melasma" id="melasma">
                                    <label class="form-check-label" for="melasma">Melasma</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasUm" type="checkbox" value="Sequelas de acne" id="acne">
                                    <label class="form-check-label" for="acne">Sequelas de acne</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="mt-3" for="telefone">Assinale abaixo quais são as suas queixas principais da face:</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasDois" type="checkbox" value="Rugas" id="ruga">
                                    <label class="form-check-label" for="ruga">Rugas</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasDois" type="checkbox" value="Manchas faciais" id="faciais">
                                    <label class="form-check-label" for="faciais">Manchas faciais</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasDois" type="checkbox" value="Manchas corporais" id="manchascorporais">
                                    <label class="form-check-label" for="manchascorporais">Manchas corporais</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasDois" type="checkbox" value="Estrias" id="estrias">
                                    <label class="form-check-label" for="estrias">Estrias</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasDois" type="checkbox" value="Flacidez de braço" id="flacidezbraco">
                                    <label class="form-check-label" for="flacidezbraco">Flacidez de braço</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasDois" type="checkbox" value="Flacidez de perna" id="flacidezperna">
                                    <label class="form-check-label" for="flacidezperna">Flacidez de perna</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="queixasDois" type="checkbox" value="Flacidez de abdômen" id="flacidezabdomen">
                                    <label class="form-check-label" for="flacidezabdomen">Flacidez de abdômen</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mt-3" for="problema">Há quanto tempo apresenta o problema (Face e rosto)?</label>
                                <input type="text" class="form-control" name="problema" id="problema" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="mt-3" for="submetido">Já foi submetido a Lifting ou Mini-Lifting facial completo? Se afirmativo, quando?</label>
                                <input type="text" class="form-control" name="submetido" id="submetido" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="mt-3" for="outrostratamentos">Já fez ou ainda faz outros tratamentos para minimizar o problema? Se sim, quais?</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="outrostratamentos" type="checkbox" value="" id="botox">
                                    <label class="form-check-label" for="botox">Botox</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="outrostratamentos" type="checkbox" value="" id="preenchimentos">
                                    <label class="form-check-label" for="preenchimentos">Preenchimento</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="outrostratamentos" type="checkbox" value="" id="fios">
                                    <label class="form-check-label" for="fios">Fios</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="outrostratamentos" type="checkbox" value="" id="pee;omgs">
                                    <label class="form-check-label" for="pee;omgs">Peelings</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="outrostratamentos" type="checkbox" value="" id="cremes">
                                    <label class="form-check-label" for="cremes">Cremes</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mt-3" for="descpele">Como você mesmo (a) descreveria a sua pele?</label>
                                <br>
                                <input type="text" class="form-control" name="descpele" id="descpele" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group text-center text-md-left">
                                <button type="button" class="btn btn-primary upper e-button-2">VOLTAR</button>
                                <button type="submit" class="btn btn-primary upper button-2">Próximo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="step-3" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-12 offset-md-1 col-md-6">
                        <h1 class="c-blue upper text-center text-md-left">passo 3/4: hábitos e saúde</h1>
                        <form id="form-step-3">
                            <div class="form-group">
                                <label class="mt-3" for="problemasaude">Você apresenta ou já apresentou algum problema de saúde (importante ou não)? <br class="d-sm-none"> Se sim, descreva-os.</label>
                                <input type="text" class="form-control" name="problemasaude" id="problema" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="mt-3" for="alergia">Apresenta alguma alergia? Se sim, quais?</label>
                                <input type="text" class="form-control" name="alergia" id="alergia" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="mt-3" for="alergiamedicamento">Você apresenta alguma alergia medicamentosa? Se sim, quais?</label>
                                <input type="text" class="form-control" name="alergiamedicamento" id="alergiamedicamento" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="form-group">
                                <label class="mt-3" for="medicamentorotina">Você faz uso de algum medicamento de rotina? Se afirmativo, há quanto tempo os utiliza e quais são esses medicamentos?</label>
                                <input type="text" class="form-control" name="medicamentorotina" id="medicamentorotina" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="mt-3" for="fumante">Você é fumante? Se sim, quantos cigarros fuma por dia?</label>
                                <input type="text" class="form-control" name="fumante" id="fumante" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="mt-3" for="expossol">Você já se expôs ou ainda se expõe frequentemente ao sol?</label>
                                <input type="text" class="form-control" name="expossol" id="expossol" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="mt-3" for="tumor">Possui histórico de tumor ou cânceres? Se sim, qual o tipo e como o tratou?</label>
                                <input type="text" class="form-control" name="tumor" id="tumor" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="form-group text-center text-md-left">
                                <button type="button" class="btn btn-primary upper e-button-3">VOLTAR</button>
                                <button type="submit" class="btn btn-primary upper button-3">Próximo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div id="step-4" style="display: none">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h1 class="c-blue upper text-center text-md-left">passo 4/4: envio da foto</h1>

                        <h2 class="text-left">
                            Fotos para a avaliação prévia
                        </h2>
                        <p class="text-left">
                            Para que possamos avaliar melhor o seu caso, é importante que você nos <br class="d-none d-md-block"> envie 3 fotos do seu rosto, com boa iluminação e de alta qualidade,<br class="d-none d-md-block"> conforme os exemplos abaixo:
                        </p>
                    </div>
                    <form id="form-step-4" class="row mx-0" method="POST">
                        <div class="col-12 col-md-4 text-center">
                            <small class="upper d-block">primeira foto</small>
                            <img id="imagem-1" class="img-fluid" src="./assets/images/primeira-foto.jpg" alt="">
                            <br>
                            <button type="button" class="btn btn-secondary upper mb-3 mt-5 button-fotos-1"> enviar foto</button>
                            <input type="file" name="fotosUm" id="fotos-1" onchange="document.getElementById('imagem-1').src = window.URL.createObjectURL(this.files[0])" hidden>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <small class="upper d-block">segunda foto</small>
                            <img id="imagem-2" class="img-fluid" src="./assets/images/segunda-foto.jpg" alt="">
                            <br>
                            <button type="button" class="btn btn-secondary upper mb-3 mt-5 button-fotos-2"> enviar foto</button>
                            <input type="file" name="fotosDois" id="fotos-2" onchange="document.getElementById('imagem-2').src = window.URL.createObjectURL(this.files[0])" hidden>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <small class="upper d-block">terceira foto</small>
                            <img id="imagem-3" class="img-fluid" src="./assets/images/terceira-foto.jpg" alt="">
                            <br>
                            <button type="button" class="btn btn-secondary upper mb-3 mt-5 button-fotos-3"> enviar foto</button>
                            <input type="file" name="fotosTres" id="fotos-3" onchange="document.getElementById('imagem-3').src = window.URL.createObjectURL(this.files[0])" hidden>
                        </div>
                        <div class="col-12">
                            <center>
                                <br>
                                <button type="button" class="btn btn-primary upper e-button-4">VOLTAR</button>
                                <button type="submit" class="btn btn-primary upper button-4">Próximo</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="obrigado" style="display: none;">
            <div class="container">
                <div class="row d-flex align-content-center">
                    <div class="col-12 offset-md-1 col-md-6">

                        <small class="upper text-center text-md-left">
                        Avaliação virtual online
                    </small>
                        <h2 class="c-blue upper">
                            Agradecemos o seu contato!
                        </h2>
                        <p>
                            As informações serão devidamente analisadas e posteriormente nossa <br class="d-none d-md-block"> equipe entrará em contato com você.
                        </p>
                        <p class="text-center text-md-left">
                            <a href="#"><button type="button" class="btn btn-primary upper  mt-5">ir para a home</button></a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>