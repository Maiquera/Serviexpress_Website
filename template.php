<?php
include __DIR__ . '/produtos.php';
$categoria = $_GET['cat'] ?? 'bombas';
$data = $produtos[$categoria];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['seo']['title'] ?></title>
    <meta name="description" content="<?= $data['seo']['description'] ?>">
    <meta name="keywords" content="<?= $data['seo']['keywords'] ?>">

    <meta name="author" content="Maicol Manasses Menezes Cheiram">
    <meta name="geo.region" content="BR-SC">
    <meta name="geo.placename" content="Florianópolis">
    <meta name="geo.position" content="-27.5954;-48.5480">
    <meta name="ICBM" content="-27.5954, -48.5480">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="<?= $data['seo']['url'] ?>">
    <meta property="og:title" content="<?= $data['seo']['title'] ?>">
    <meta property="og:description" content="<?= $data['seo']['description'] ?>">
    <meta property="og:image" content="https://serviexpress.com.br/src/Serviexpress_logo.png">
    <meta property="og:url" content="<?= $data['seo']['url'] ?>">
    <meta property="og:type" content="website">
    <link rel="icon" href="/src/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://images.unsplash.com">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "<?= $data['titulo'] ?? 'Serviexpress' ?>",
            "description": "<?= $data['description'] ?? '' ?>",
            "brand": {
                "@type": "Brand",
                "name": "Sodramar"
            },
            "url": "<?= $data['seo']['url'] ?? '' ?>",
            "offers": {
                "@type": "AggregateOffer",
                "priceCurrency": "BRL",
                "lowPrice": "500",
                "highPrice": "70000",
                "offerCount": "<?= count($data['preco']) ?>"
            }
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        html {
            scroll-behavior: smooth;
        }

        .hero {
            min-height: 80vh;
            padding-bottom: 60px;
            background-image: url('<?= $data['hero'] ?>');
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
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 2;
        }

        .sodralogo {
            height: 50px;
            margin-top: 10px;
        }

        .card {
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body style="background-color: #f8f9fa;">
    <?php include __DIR__ . '/includes/nav.php'; ?>

    <section class="hero">
        <div class="container hero-content">
            <img src="src/Serviexpress_logo.png" class="img-fluid">
            <h1 class="display-4 fw-bold mt-3"><?= $data['titulo'] ?></h1>
            <p class="lead"><?= $data['descricao'] ?></p>
            <a href="https://wa.me/5548996287489" class="btn btn-success btn-lg px-4 rounded-pill"><i class="bi bi-whatsapp me-2"></i>Fale Conosco</a>
        </div>
        <?php include __DIR__ . '/includes/wave.php'; ?>
    </section>

    <main class="container">

        <section class="container mb-2">
            <h2 class="text-center"><?= $data['subtitulo'] ?></h2>
            <p> <?= $data['texto'] ?> </p>
        </section>

        <h2 class="text-center fw-bold" style="text-decoration: underline;">MODELOS</h2>
        <p class="text-center">CONFIRA AS MELHORES OPÇÕES DE <?= $data['produto'] ?></p>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php foreach ($data['itens'] as $item): ?>

                <div class="col">
                    <div class="card h-100 shadow-sm border-0">

                        <img src="<?= $item['imagem'] ?>"
                            alt="<?= $item['nome'] ?> - <?= $data['produto'] ?> em Florianópolis e Região"
                            loading="lazy"
                            class="card-img-top p-3 mx-auto d-block">

                        <div class="card-body d-flex flex-column">

                            <h5><?= $item['nome'] ?></h5>

                            <p class="text-success">✔ <?= $item['beneficio'] ?></p>

                            <ul class="small text-muted">
                                <?php foreach ($item['specs'] as $spec): ?>
                                    <li><?= $spec ?></li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="mt-auto">
                                <a href="<?= $item['detalhes'] ?>" target="_blank" rel="noopener noreferrer">+ Detalhes</a>
                                <p class="fw-bold text-end">A partir de <?= $item['preco'] ?></p>

                                <a href="https://wa.me/5548996287489?text=<?= urlencode($item['link']) ?>"
                                    class="btn btn-success w-100">
                                    Comprar Agora
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
        <section class="d-flex flex-column">
            <img class="sodralogo img-fluid mx-auto d-block" src="src/Sodramar_logo.png" alt="Logo da Sodramar">
            <figcaption class="text-center" style="font-size: x-small; letter-spacing: 3px;">Revenda Autorizada</figcaption>
            <hr class="mb-4">
            <p class="text-muted">Confira também:
                <a href="<?= $data['link_proximo'] ?>"><?= $data['nome_proximo'] ?></a>
            </p>

            <h3>Qual o melhor modelo para sua necessidade?</h3>
            <p><?= $data['escolha'] ?></p>
            <a href="https://wa.me/5548996287489" class="btn btn-success mx-auto my-2">
                Fale com o nosso especialista
            </a>
        </section>

    </main>
    <a href="https://wa.me/5548996287489"
        class="btn btn-success position-fixed"
        style="bottom:20px; right:20px; border-radius:50px;">
        💬 Orçamento
    </a>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>