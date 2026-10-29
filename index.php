<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion & Glam</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #d4c098">
    <nav class="navbar navbar-expand-lg bg-custom navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-basket2-fill me-2"></i>Fashion & Glam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#categorias">Categoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#duvidas">Duvidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contatos">Contatos</a>
                    </li>
                    <li>
                        <a class="nav-link active" href="login.php">Entrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="inicio">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">

                <div class="carousel-item active
             text-white text-center p-5" style="background-color:  #733F2D ;">
                    <h1>A moda é sobre o que você é, não apenas o que você veste.</h1>
                    <p class="fs-5">Mais do que roupas, oferecemos confiança. Mais do que tecidos, entregamos estilo.</p>

                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid " style="background-color: #d4c098;">
        <br>
        <div class="container ">
            <div class="alert alert-light text-center" role="alert">
                <i class="bi bi-truck"></i>
                <strong>Frete grátis!</strong>
                Para compras acima de R$ 500,00.
            </div><br>
            <div class="text-center  py-5" id="categorias">
                <h2 class="text-white">Nossas Categorias</h2>
                <p class="text-white mb-5">Encontre tudo o que precisa com conforto e estilo para o seu dia a dia.</p>
            </div>
            <div class="row mb-5 g-3 text-center">
                <div class="col col-md">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <img width="100" height="100" src="https://img.icons8.com/doodle/96/pretty-woman.png" alt="pretty-woman" />




                            <h5 class="card-title">Feminino</h5>
                            <p class="card-text mb-4">Estilo que é só seu.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <img width="100" height="100" src="https://img.icons8.com/doodle/96/user-male--v1.png" alt="user-male--v1" />
                            <h5 class="card-title">Masculino</h5>
                            <p class="card-text mb-4">Conforto e atitude.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <img width="100" height="100" src="https://img.icons8.com/keek/100/girl.png" alt="girl" />
                            <h5 class="card-title">Infantil</h5>
                            <p class="card-text mb-4">Muita fofura em cada peça</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <img width="100" height="100" src="https://img.icons8.com/external-goofy-color-kerismaker/96/external-Fat-Female-fitness-goofy-color-kerismaker.png" alt="external-Fat-Female-fitness-goofy-color-kerismaker" />
                            <h5 class="card-title">Plus Size</h5>
                            <p class="card-text">Beleza em todos os tamanhos.</p>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <section class="container-fluid text-white mt-5" style="background-color:  #733F2D ;">
        <br>

        <div class="container text-center mb-5" id="produtos">
            <div class="">
                <h2 class=" fw-bold">Produtos em Destaque</h2>
                <p class="text-white ">Conheça alguns dos produtos que estão em alta.</p>
            </div>
            <div class="row pb-5 py-5 g-3">
                <div class="col col-mg ">
                    <div class="card mx-auto">
                        <img src=" img/vestido.png" class="card-img-top" ;>
                        <div class="card-body">
                            <span class="badge text-bg-danger">Oferta</span>
                            <h5 class="card-title">Vestido</h5>
                            <p class="card-text">Elegância que veste bem, estilo que combina com você.</p>

                            <p class="text-secondary text-decoration-line-through mb-0">R$ 349,99 </p>

                            <h4 class="text-dark">R$ 229,99</h4>

                            <div>
                                <button type="button" class="btn btn-outline-success w-100" data-bs-toggle="modal"
                                    data-bs-target="#detalhesProduto">

                                    <i class="bi bi-eye me-1"></i>
                                    Ver detalhes
                                </button>
                                <a href="https://wa.me/5534955884411?text=Olá%20tenho%20interesse%20na%20costela%20de%20Loja."
                                    target="_blank" class="btn btn-success w-100 mt-2">
                                    <i class="bi bi-whatsapp"></i>
                                    Comprar pelo WhatsApp
                                </a>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col col-mg">
                    <div class="card mx-auto"">
                        <img src=" img/masculino.png" class="card-img-top" ;
                        object-fit: cover;>
                        <div class="card-body">
                            <span class="badge text-bg-danger">Oferta</span>
                            <h5 class="card-title">Terno</h5>
                            <p class="card-text">Estilo, sofisticação e atitude. Tudo em um só lugar.</p>


                            <p class="text-secondary text-decoration-line-through mb-0">R$ 319,29</p>

                            <h4 class="text-success">R$ 289,00</h4>

                            <div>
                                <button type="button" class="btn btn-outline-success w-100" data-bs-toggle="modal"
                                    data-bs-target="#detalhesProduto">

                                    <i class="bi bi-eye me-1"></i>
                                    Ver detalhes
                                </button>
                                <a href="https://wa.me/5534955884411?text=Olá%20tenho%20interesse%20na%20costela%20de%20Loja."
                                    target="_blank" class="btn btn-success w-100 mt-2">
                                    <i class="bi bi-whatsapp"></i>
                                    Comprar pelo WhatsApp
                                </a>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col col-mg">
                    <div class="card mx-auto" ;>
                        <img src="img/vestido_infantil.png" ,
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge text-bg-danger">Oferta</span>
                            <h5 class="card-title">Vestido de crochê infantil</h5>
                            <p class="card-text">O vestido perfeito existe. </p><br>


                            <p class="text-secondary text-decoration-line-through mb-0">R$ 669,90</p>


                            <h4 class="text-success">R$ 459,90</h4>

                            <div>
                                <button type="button" class="btn btn-outline-success w-100" data-bs-toggle="modal"
                                    data-bs-target="#detalhesProduto">

                                    <i class="bi bi-eye me-1"></i>
                                    Ver detalhes
                                </button>
                                <a href="https://wa.me/5534955884411?text=Olá%20tenho%20interesse%20na%20costela%20de%20Loja."
                                    class="btn btn-success w-100 mt-2">
                                    <i class="bi bi-whatsapp"></i>
                                    Comprar pelo WhatsApp
                                </a>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="col col-mg">
                    <div class="card mx-auto">
                        <img src="img/plus_size.png" class="card-img-top" ;
                            object-fit: cover;>
                        <div class="card-body">
                            <span class="badge text-bg-danger">Oferta</span>
                            <h5 class="card-title">Conjunto plus size</h5>
                            <p class="card-text">Se vista com confiança, se vista de você.</p>


                            <p class="text-secondary text-decoration-line-through mb-0">R$ 499,56</p>

                            <h4 class="text-success">R$249,21</h4>

                            <div>
                                <button type="button" class="btn btn-outline-success w-100" data-bs-toggle="modal"
                                    data-bs-target="#detalhesProduto">

                                    <i class="bi bi-eye me-1"></i>
                                    Ver detalhes
                                </button>
                                <a href="https://wa.me/5534955884411?text=Olá%20tenho%20interesse%20na%20costela%20de%20Loja."
                                    target="_blank" class="btn btn-success w-100 mt-2">
                                    <i class="bi bi-whatsapp"></i>
                                    Comprar pelo WhatsApp
                                </a>
                            </div>


                        </div>
                    </div>
                </div>




            </div>

        </div>

    </section>

    <section>
        <div class="modal" tabindex="-1" id="detalhesProduto">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Vestido Feminino</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Tamanho: </strong>P / M</p>
                        <p><strong>Composição: </strong> 100% poliéster.</p>
                        <p><strong>MOdelagem: </strong>Soltinha, valoriza todos os tipos de corpo.</p>
                        <p><strong>Detalhes: </strong>Vestido longo, mangas longas, não transparente, forro interno . </p>
                        <p><strong>Preço: </strong>R$ 229,99</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <a href="https://wa.me/5534955884411?text=Olá%20tenho%20interesse%20na%20costela%20de%20Loja."
                            target="_blank" class="btn btn-success mt-2">
                            <i class="bi bi-whatsapp"></i>
                            Comprar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row text-center g-4">

                <div class="col-12 col-md-4">
                    <div class="fs-1 text-success">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h5>
                        Entrega
                    </h5>
                    <p class="text-secondary">
                        Consulte disponibilidade e prazo
                        para sua região.
                    </p>
                </div>

                <div class="col-12 col-md-4">
                    <div class="fs-1 text-success">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5>
                        Compra Segura
                    </h5>
                    <p class="text-secondary">
                        Atendimento personalizado
                        antes da compra.
                    </p>
                </div>

                <div class="col-12 col-md-4">
                    <div class="fs-1 text-success">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <h5>
                        Suporte
                    </h5>
                    <p class="text-secondary">
                        Tire suas dúvidas.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid p-5" style="background-color:  #733F2D">
        <div class="container">
            <div class="text-center mt-5" id="duvidas">

                <div class="text-white">
                    <h2 class="mt-5 fw-bold">Perguntas Frequentes</h2>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed custom-accordion" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne" style="background-color: #733F2D; color: #ffffff;">
                                Vocês realizam entrega?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div style="background-color: #d4c098; color: #ffffff;" class="accordion-body">Sim. Consulte nossa equipe pelo WhatsApp para verificar disponibilidade e valor.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed custom-accordion" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo" style="background-color: #733F2D; color: #ffffff;">
                                Como faço para comprar?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div style="background-color: #d4c098; color: #ffffff;" class="accordion-body">Escolha os produtos, Clique em "comparar", selecione o tamanho e cor desejada, depois é só preencher seus dados e finalizar no pagamento.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed custom-accordion" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree" style="background-color: #733F2D; color: #ffffff;">
                                Quais são as formas de pagamento?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div style="background-color: #d4c098; color: #ffffff;" class="accordion-body">Entre em contato com a nossa equipe para consultar as formas de pagamento disponíveis para seu pedido.</div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed custom-accordion" type="button" data-bs-toggle="collapse"
                                data-bs-target="#resposta4" aria-expanded="false"
                                aria-controls="resposta4" style="background-color: #733F2D; color: #ffffff;">
                                Posso retirar meu pedido na loja?
                            </button>
                        </h2>
                        <div id="resposta4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div style="background-color: #d4c098; color: #ffffff;" class="accordion-body">
                                Sim. A retirada poderá ser combinada previamente com nossa equipe.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="pb-5" id="contatos">
        <div class="container mt-5 pt-2" id="contato">

            <div class="text-center">
                <h2 class="mt-5 fw-bold">Entre em Contato</h2>
                <p class="text-secondary">Envie sua dúvida para nossa equipe.</p>
            </div>

            <div class="row justify-content-center tec">
                <div class="col-12 col-md-6">
                    <form action="cadastroContato.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome"
                                placeholder="Entre com o seu nome completo" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email"
                                placeholder="nome@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                            <input type="number" name="telefone" class="form-control" id="telefone"
                                placeholder="(34) 99999-9999" required>
                        </div>

                        <label for="exampleFormControlInput1" class="form-label">Dúvidas</label>
                        <select name="assunto" id="assunto" class="form-select">
                            <option value="Produto">Dúvida sobre produto</option>
                            <option value="Entrega">Entrega</option>
                            <option value="Pagamento">Pagamento</option>
                        </select>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
                        </div>

                        <button class="btn btn-success w-100 ">
                            <i class="bi bi-send me-2"></i>
                            Enviar mensagem
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-success text-white text-center py-5">
        <div class="container">
            <h2 class="fw-bold">
                Fale com a Fashion & Glam
            </h2>
            <p>
                Faça seu pedido ou acompanhe
                nossas novidades nas redes sociais.
            </p>
            <div class="d-flex
                       justify-content-center
                       flex-wrap
                       gap-2">

                <a href="https://wa.me/5534999999999?text=Olá%20gostaria%20de%20conhecer%20os%20produtos%20da%20loja"
                    target="_blank" class="btn btn-light">
                    <i class="bi bi-whatsapp"></i>
                    WhatsApp
                </a>

                <a href="https://www.instagram.com/nomedoperfil/" target="_blank" class="btn btn-dark">
                    <i class="bi bi-instagram"></i>
                    Instagram
                </a>
            </div>
        </div>
    </section>
    </main>
    <footer class="bg-dark text-white pt-4">
        <div class="container">
            <div class="row">
                <div class="col col-md">
                    <h5><i class="bi bi-flower1 me-2"></i>Fashion & Glam</a></h5>
                    <p class="">Detalhes que fazem toda diferença.</p>
                </div>
                <div class="col col-md text-md-end">
                    <p><strong>Atendimento:</strong> Segunda a sábado</p>
                    <p>© 2026 Fashion & Glam- Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
































































</div>












</section>


</body>

</html>