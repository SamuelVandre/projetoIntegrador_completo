<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos | Nayara Leal Arquitetura</title>

    <link rel="stylesheet" href="../css/projeto.css">
</head>

<body>

    <?php
    include_once('../components/header.php');
    ?>

    <main>

    <figure class="hero">
        <img src="../assets/images/imagensProjetos/casaterreanublado.jpeg" alt="projetos">
        <figcaption>
            <h1>Projetos</h1>
            <h2>Projetos inteligentes que unem beleza, funcionalidade e segurança.</h2>
        </figcaption>
    </figure>

        <h3>Projetos Residenciais</h3>

    <section class="projetos">

        <figure class="projeto">
            <img src="../assets/images/imagensProjetos/casa_sobrado_porta_marrom.jpeg" alt="">
            <div class="projetoDesc">
                <figcaption>
                    Casa Sobrado cod.00001
                </figcaption>
            </div>
        </figure>

        <figure class="projeto">
            <img src="../assets/images/imagensProjetos/sobrado_praia_outra.jpeg" alt="">
            <div class="projetoDesc">
                <figcaption>
                    Casa Sobrado cod.00002
                </figcaption>
            </div>
        </figure>

        <figure class="projeto">
            <img src="../assets/images/imagensProjetos/banheiro_perto.jpeg" alt="">
            <div class="projetoDesc">
                <figcaption>
                    Banheiro cod.00003
                </figcaption>
            </div>
        </figure>

    </section>

    <h3>Projetos Comerciais</h3>

    <section class="projetos">

        <figure class="projeto">
            <img src="../assets/images/imagensProjetos/shopee.jpg" alt="shopee">
            <div class="projetoDesc">
                <figcaption>
                    Prédio Comercial cod.00001
                </figcaption>
            </div>
        </figure>

        <figure class="projeto">
            <img src="../assets/images/imagensProjetos/escritorio_persiana.jpeg" alt="shopee">
            <div class="projetoDesc">
                <figcaption>
                    Escritório cod.01310
                </figcaption>
            </div>
        </figure>

        <figure class="projeto">
         <img src="../assets/images/imagensProjetos/shopee.jpg" alt="shopee">
            <div class="projetoDesc">
                <figcaption>
                    Prédio Comercial cod.01018
                </figcaption>
            </div>
        </figure>

    </section>

        <h3>Projetos Personalizados</h3>

        <section class="personalizados">

        <div class="personalizado">
            <img src="../assets/images/imagensProjetos/escritorio_persiana.jpeg" alt="escritório com persiana">
            <div class="texto">
                Transforme sua ideia em um projeto completo, moderno e totalmente planejado.
            </div>
        </div>

        <div class="personalizado">
            <img src="../assets/images/imagensProjetos/banheiro_marmore.jpeg" alt="banheiro com marmore">
            <div class="texto">
                Projetos residenciais, comerciais e corporativos adaptados às necessidades de cada cliente.
            </div>
        </div>

        <div class="personalizado">
            <img src="../assets/images/imagensProjetos/sala.jpeg" alt="sala moderna">
            <div class="texto">
                Soluções técnicas que garantem eficiência e segurança em todas as etapas da obra.
            </div>
        </div>

        </section>

        <?php
        include_once('../components/footer.php');
        ?>

        <script src="../js/projeto.js"></script>
    </main>

</body>

</html>