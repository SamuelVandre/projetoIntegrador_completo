<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre | Nayara Leal Arquitetura</title>

  <link rel="stylesheet" href="../css/sobre.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

 <?php
    include_once('../components/header.php');
  ?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-overlay">
      <img src="../assets/images/nayara_foto.jpg" alt="sla">
    </div>

    <div class="hero-content">
      <h1>Sobre Arquitetura</h1>
      <p>Projetos que transformam espaços em experiências únicas</p>
    </div>
  </section>

  <section class="about">
    <div class="container about-container">

      <div class="about-image">
        <img src="../assets/images/nayara_fotinha.jpg" alt="Arquiteta">
      </div>

      <div class="about-content">
        <span class="section-subtitle">APRESENTAÇÃO</span>

        <p>
          Lorem Ipsum is simply dummy text of the printing and
          typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown
          printer took a galley of type and scrambled it to make a
          type specimen book.
        </p>

        <p>
          It has survived not only five centuries, but also the leap
          into electronic typesetting, remaining essentially unchanged.
          It was popularised in the 1960s.
        </p>
      </div>

    </div>
  </section>

  <?php
    include_once('../components/footer.php');
  ?>
</body>

</html>