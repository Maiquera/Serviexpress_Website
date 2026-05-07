<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicexpress - Soluções em Climatização, Piscinas e Refrigeração</title>
    <meta name="keywords" content="sobre servicexpress, climatização florianopolis, manutenção ar condicionado florianopolis, piscinas e saunas SC, assistência técnica sodramar">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://serviexpress.com.br/sobre.php">
    <meta property="og:title" content="Servicexpress | Especialistas em Climatização em Florianópolis">
    <meta property="og:description" content="Mais de 20 anos de experiência em climatização, piscinas e refrigeração. Atendimento rápido e especializado.">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <meta property="og:image" content="https://serviexpress.com.br/src/Serviexpress_logo.png">
    <meta property="og:url" content="https://serviexpress.com.br/sobre.php">
    <meta property="og:type" content="website">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Servicexpress",
            "image": "https://serviexpress.com.br/src/Serviexpress_logo.png",
            "url": "https://serviexpress.com.br/sobre.php",
            "telephone": "+55 48 99628-7489",
            "email": "contato@servicexpress.com.br",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Florianópolis",
                "addressRegion": "SC",
                "addressCountry": "BR"
            },
            "description": "Empresa com mais de 20 anos de experiência em climatização, piscinas, saunas e refrigeração.",
            "areaServed": "Santa Catarina"
        }
    </script>
</head>

<body>
    <?php include __DIR__ . '/includes/nav.php'; ?>
    <main>
        <section class="container mt-5">
            <img src="src/Serviexpress_logo.png" alt="Logo da Empresa" width="400" class="img-fluid mb-4 mx-auto d-block">
            <h1 class="display-4 fw-bold text-dark text-center">Sobre a Servicexpress</h1>
            <p class="text-center text-muted mb-4">
                Especialistas em climatização, equipamentos para piscinas, saunas e ar condicionado com mais de 20 anos de experiência em Florianópolis e região.
            </p>

            <h2 class="fw-bold mt-5">Nossa História</h2>
            <p class="fs-5 fw-light">
                A Servicexpress nasceu com o objetivo de oferecer soluções rápidas e eficientes em climatização e refrigeração.
                Com mais de 20 anos de experiência, atuamos em Florianópolis e região com serviços de instalação, manutenção e conserto de ar condicionado, equipamentos para piscinas e saunas.
                <br>
                Somos parceiros autorizados da <b>Sodramar</b>, garantindo qualidade, peças originais e suporte técnico especializado em toda Santa Catarina.
            </p>
        </section>

        <section id="contato" class="py-5 bg-light">
            <div class="container py-4">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <p class="text-muted">
                            Atendemos Florianópolis, São José, Palhoça e diversas cidades de Santa Catarina com serviços técnicos especializados.
                        </p>
                        <h2 class="fw-bold mb-3">Vamos conversar?</h2>
                        <p class="text-muted mb-4">Solicite um orçamento ou agende uma visita técnica para o seu equipamento. Respondemos rapidamente.</p>

                        <div class="d-flex mb-4">
                            <div class="fs-4 text-primary me-3">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold">Telefone / WhatsApp</h5>
                                <p class="text-muted mb-0">(48) 99628-7489</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="fs-4 text-primary me-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold">E-mail</h5>
                                <p class="text-muted mb-0">contato@servicexpress.com.br</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="fs-4 text-primary me-3">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold">Sede da Empresa</h5>
                                <p class="text-muted mb-0">Florianópolis, Santa Catarina</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="card border-0 p-4 p-md-5 bg-white rounded-4 shadow-sm">
                            <form action="email.php" method="POST" onsubmit="alert('Obrigado! Entraremos em contato em breve.'); return false;">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Seu Nome</label>
                                        <input type="text" name="nome" class="form-control rounded-3 py-2" placeholder="Nome completo" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Telefone/WhatsApp</label>
                                        <input type="tel" name="telefone" class="form-control rounded-3 py-2" placeholder="(00) 00000-0000" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label fw-semibold">Serviço de Interesse</label>
                                        <select name="servico" class="form-select rounded-3 py-2" required>
                                            <option value="" disabled selected>Selecione uma opção</option>
                                            <option value="sodramar">Saunas, Piscinas & Equipamentos Sodramar</option>
                                            <option value="ar-condicionado">Ar Condicionado (Instalação/Manutenção)</option>
                                            <option value="refrigeracao">Refrigeração Geral & Balcões Exposidores</option>
                                            <option value="lava-seca">Máquinas Lava e Seca</option>
                                            <option value="outros">Outros serviços / Consulta regional</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label fw-semibold">Mensagem / Detalhes do Equipamento</label>
                                        <textarea name="mensagem" class="form-control rounded-3" rows="4" placeholder="Descreva brevemente sua necessidade..." required></textarea>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <button type="submit" class="btn btn-primary btn-lg px-4 rounded-pill w-100">Enviar Solicitação</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/includes/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>