<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviexpress | Climatização, Piscinas, Saunas e Ar Condicionado em Florianópolis e Região</title>
    <meta name="description" content="Especialistas em climatização, piscinas e saunas em Florianópolis. Venda, instalação e manutenção de aquecedores, filtros, bombas, robôs e ar condicionado. Atendimento rápido via WhatsApp.">
    <meta name="keywords" content="climatização, piscinas, aquecedor piscina, filtro piscina, bomba d'água, gerador de cloro, robô limpeza piscina, sauna, ar condicionado, manutenção ar condicionado Florianópolis">
    <meta name="author" content="Maicol Manasses Menezes Cheiram">
    <meta name="geo.region" content="BR-SC">
    <meta name="geo.placename" content="Florianópolis">
    <meta name="geo.position" content="-27.5954;-48.5480">
    <meta name="ICBM" content="-27.5954, -48.5480">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://serviexpress.com.br/">
    <meta property="og:title" content="Serviexpress | Piscinas, Climatização e Refrigeração">
    <meta property="og:description" content="Venda, instalação e manutenção de equipamentos para piscinas, saunas e ar condicionado.">
    <meta property="og:image" content="https://serviexpress.com.br/src/Serviexpress_logo.png">
    <meta property="og:url" content="https://serviexpress.com.br/">
    <meta property="og:type" content="website">
    <link rel="icon" href="/src/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://images.unsplash.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        html {
            scroll-behavior: smooth;
        }

        .hero {
            min-height: 80vh;
            padding-bottom: 60px;
            background-image: url("https://images.unsplash.com/photo-1463134836706-8bcc60f7d78b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTM5fHxhYnN0cmFjdCUyMGJhY2tncm91bmR8ZW58MHx8MHx8fDA%3D");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            ;
        }

        .swiper {
            padding: 40px 0;
        }

        .card img {
            height: 180px;
            object-fit: contain;
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .sodralogo {
            height: 50px;
            margin-top: 10px;
        }

        .list-group-item {
            background-color: #edeeee;
        }

        .list-group-item:hover {
            background-color: #f8f9fa;
        }
    </style>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Serviexpress",
            "image": "https://serviexpress.com.br/src/Serviexpress_logo.png",
            "url": "https://serviexpress.com.br",
            "telephone": "+55 48 99628-7489",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Florianópolis",
                "addressRegion": "SC",
                "addressCountry": "BR"
            },
            "sameAs": [
                "https://wa.me/5548996287489"
            ],
            "description": "Empresa especializada em climatização, equipamentos para piscinas, saunas e ar condicionado.",
            "areaServed": "Florianópolis e região"
        }
    </script>
</head>

<body style="background-color: #f8f9fa;">

    <?php include __DIR__ . '/includes/nav.php'; ?>

    <section class="hero">
        <div class="container">
            <img src="src/Serviexpress_logo.png" alt="Logo da Empresa" width="400" class="img-fluid mb-4">
            <h1 class="display-6 fw-bold text-dark">Venda, Instalação e Manutenção de Equipamentos para Piscinas e Saunas em Florianópolis e Região</h1>
            <a href="#servicos" class="btn btn-success btn-lg px-4 rounded-pill mt-3 mx-2">NOSSOS SERVIÇOS</a>
            <a href="https://wa.me/5548996287489" class="btn btn-outline-success btn-lg px-4 rounded-pill mt-3">NOSSO WHATSAPP</a>
        </div>
        <?php include __DIR__ . '/includes/wave.php'; ?>
    </section>

    <main>

        <section id="produtos" class="container py-5">
            <h2 class="text-center mb-4">Atendimento em Florianópolis e Região</h2>
            <p class="text-muted small">
                A Serviexpress é referência em Florianópolis na venda, instalação e manutenção de equipamentos para piscinas, saunas e ar condicionado. Trabalhamos com aquecedores, filtros, bombas d'água, geradores de cloro e robôs de limpeza, oferecendo soluções completas para conforto térmico e lazer.
            </p>
            <h3 class="text-center mb-0">Equipamentos em Destaque</h3>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="src/aquecedores/aquecedor_TFI-PRO.png" alt="Aquecedor para piscinas TFI-PRO" class="card-img-top">
                            <div class="card-body">
                                <h5>Trocador de Calor TFI - PRO</h5>
                                <p class="small text-muted">Ideal para aquecimento eficiente de piscinas.</p>
                                <a href="aquecedores-piscinas.php" class="btn btn-outline-primary btn-sm">
                                    Ver modelos
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="src/robos/robo_rb7.png" alt="Robô para Limpeza de piscinas RB7" class="card-img-top">
                            <div class="card-body">
                                <h5>Robô de Limpeza RB7</h5>
                                <p class="small text-muted">Limpador automático para piscinas.</p>
                                <a href="robos.php" class="btn btn-outline-primary btn-sm">
                                    Ver modelos
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="src/filtros/filtro_compacto_FM30.png" alt="Filtro Compacto c/ Carrinho" class="card-img-top">
                            <div class="card-body">
                                <h5>Filtro Compacto c/ Carrinho</h5>
                                <p class="small text-muted">Filtro de piscina compacto com carrinho.</p>
                                <a href="filtros.php" class="btn btn-outline-primary btn-sm">
                                    Ver modelos
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="src/geradores/gerador_GS42.png" alt="Gerador de Cloro GS-42" class="card-img-top">
                            <div class="card-body">
                                <h5>Gerador de Cloro GS-42</h5>
                                <p class="small text-muted">Gerador de cloro com tecnologia avançada.</p>
                                <a href="geradores.php" class="btn btn-outline-primary btn-sm">
                                    Ver modelos
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="src/saunas/sauna_umida_steam_inox.png" alt="Sauna a Vapor Steam Inox" class="card-img-top">
                            <div class="card-body">
                                <h5>Sauna a Vapor Steam Inox</h5>
                                <p class="small text-muted">Sauna a vapor com acabamento em aço inox.</p>
                                <a href="saunas.php" class="btn btn-outline-primary btn-sm">
                                    Ver modelos
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="src/bombas/bomba_BMP.png" alt="Bomba D'àgua BMP" class="card-img-top">
                            <div class="card-body">
                                <h5>Bomba D'àgua BMP</h5>
                                <p class="small text-muted">Bomba d'água com alto desempenho.</p>
                                <a href="bombas.php" class="btn btn-outline-primary btn-sm">
                                    Ver modelos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <img class="sodralogo img-fluid mx-auto d-block" src="src/Sodramar_logo.png" alt="Logo da Sodramar">
            <figcaption class="text-center" style="font-size: x-small; letter-spacing: 3px;">Revenda Autorizada</figcaption>
        </section>

        <section id="servicos" class="bg-secondary bg-opacity-25 py-5">
            <div class="container">
                <h2 class="text-center section-title">Venda, Instalação & Manutenção Técnica</h2>
                <div class="row text-center">
                    <div class="col-md-4 mb-4">
                        <h4>Piscinas & Aquecimento</h4>
                        <p class="text-muted">
                            Venda, instalação e manutenção de equipamentos para piscinas.</p>
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action" href="aquecedores-piscinas.php">Aquecedores</a>
                            <a class="list-group-item" href="robos-limpeza.php">Robôs de Limpeza</a>
                            <a class="list-group-item" href="filtros-piscinas.php">Filtros</a>
                            <a class="list-group-item" href="geradores-cloro.php">Geradores de Cloro</a>
                            <a class="list-group-item" href="bombas-piscinas.php">Bombas d'Água</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h4>Saunas</h4>
                        <p class="text-muted">Venda, instalação e manutenção de equipamentos para saunas.</p>
                        <div class="list-group">
                            <a class="list-group-item" href="saunas.php">Saunas Secas</a>
                            <a class="list-group-item" href="saunas.php">Saunas a Vapor</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h4>Ar Condicionado & Refrigeração</h4>
                        <p class="text-muted"> Instalação, higienização e reparos em sistemas Split, Inverter e ACJ</p>
                        <div class="list-group">
                            <a class="list-group-item" href="servicos.php">Serviços</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 20,

            grabCursor: true,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },

            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                576: {
                    slidesPerView: 2
                },
                992: {
                    slidesPerView: 3
                }
            }
        });
    </script>
</body>

</html>