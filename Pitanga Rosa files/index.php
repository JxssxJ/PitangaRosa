<?php
// Verifica se a API foi acionada
if (isset($_POST["Reproduzir"])) {
    header("location:./api/chama_api.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Primeiro site com tecnologia Bootstrap">
    <meta name="keywords" content="Bootstrap, site e tecnologia.">
    <meta name="author" content="Max Henrique Fontes Sinche">
    <title>Associação Pitanga Rosa</title>

    <link href="/pages/produto.php">
    <!-- Tipografia (fonte) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Link para o Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--link para o arquivo css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icone da aba -->
    <link rel="shortcut icon" href="img/Icone-PhotoRoom.png-PhotoRoom.png" type="image/x-icon">
    <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <!-- link do FontAwesome -->
    <script src="https://kit.fontawesome.com/8309987a03.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <!-- Barra de navegação -->
        <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                <a href="#" class="navbar-brand">
                    <img id="logo" src="img/Icone-PhotoRoom.png-PhotoRoom.png" alt="Logo Pitanga Rosa">
                </a>
                <a> <img id="NomePitanga" src="img/Nome-PhotoRoom.png-PhotoRoom.png" width="50%"
                        alt="Nome Pitanga Rosa"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>             
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="home-menu" href="#">Home</a>
                        <a class="nav-item nav-link" id="about-menu" href="#about-area">Sobre Nós</a>
                        <a class="nav-item nav-link" id="principio-menu" href="#services-area">Conceito</a>
                        <a class="nav-item nav-link" id="services-menu" href="#plantas">Plantas</a>
                        <a class="nav-item nav-link" id="services-menu" href="#produtos">Produtos</a>
                        <a class="nav-item nav-link" id="contact-menu" href="#contact-area">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Conteúdo principal -->
    <main>
        <div class="container-fluid">
            <!-- Slide  -->
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/pessoas-edit2.jpg" class="d-block w-100" alt="Projetos de e-commerce">
                        <div class="carousel-caption d-md-block">
                            <h2>Quem é a Associação Pitanga Rosa?</h2>
                            <p class="descricao">Vivenciar os conhecimentos ancestrais, no uso das plantas medicinais
                                para cuidar e
                                transformar vidas.</p>
                            <a href="#about-area" class="main-btn">Quem Somos</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Planta_Slide.jpg" class="d-block w-100" alt="Engenharia de Software">
                        <div class="carousel-caption d-md-block">
                            <h2>Mas afinal, o que são plantas medicinais?</h2>
                            <p class="descricao">Como cultivar e os cuidados no uso das plantas medicinais</p>
                            <a href="#services-area" class="main-btn">Conheça a Importância</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/plantas_med2.jpg" class="d-block w-100" alt="Manutenção em Software">
                        <div class="carousel-caption d-md-block">
                            <h2>O poder de cura pelas plantas</h2>
                            <p class="descricao">O cultivo e uso das plantas medicinais apresenta inúmeros benefícios
                                para a saúde humana
                                e do planeta.</p>
                            <a href="#plantas" class="main-btn">Plantas Medicinais</a>
                        </div>
                    </div>
                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div vw class="enabled">
                <div vw-access-button class="active"></div>
                <div vw-plugin-wrapper>
                    <div class="vw-plugin-top-wrapper"></div>
                </div>
            </div>
            <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
            <script>
                new window.VLibras.Widget('https://vlibras.gov.br/app');
            </script>

            <!-- Sobre a empresa -->
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Sobre a Associação Pitanga Rosa</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="img/pitanga-rosa2.jpg" alt="Agência hDC">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">Uma Associação Voluntária</h3>
                            <p>A Associação Pitanga Rosa é um coletivo formado por mulheres de diversas comunidades,
                                sendo que sua sede está localizada na comunidade de Faxinal dos Rosas, zona rural do
                                município de Chapecó, estado de Santa Catarina. A entidade desenvolve suas ações com
                                base no trabalho voluntário e coletivo, tendo como objetivo principal dedicar-se ao
                                estudo e
                                pesquisa alternativa na produção, plantio, processamento e conservação das plantas
                                medicinais, e sementes crioulas como também a formação, capacitação e divulgação para o
                                bem comum, da utilidade das plantas para prevenção da saúde e da biodiversidade.</p>
                            <p><i>"Eu participo do grupo como voluntária, fico mais na parte da preservação das sementes
                                    crioulas [...] No nosso grupo nós damos muita importância para o resgate das
                                    sementes,
                                    pois muitas delas estão em extinção. Nós resgatamos para fazer o plantio e a gente
                                    ter uma
                                    diversidade de alimentação, porque a nossa saúde também depende disso [...] Nós
                                    achamos que a semente é o patrimônio da humanidade a serviço dos povos [..] Não dá
                                    pra
                                    nós corrermos o risco de deixar que ela só vise lucro, mas sim, ela tem que servir
                                    como
                                    alimento para as populações de agora e as que hão de vir [...] Então, que o seu
                                    alimento
                                    seja o seu remédio e que o seu remédio seja o seu alimento.
                                    ."</i>
                                (Carmen da Rosa Killian Munarini®, 2021).</p>
                        </div>
                        <div class="col-12">
                            <p>O trabalho e a organização coletiva deste grupo são compreendidos como uma tecnologia
                                social, uma vez que seus processos e produtos apresentam alternativas para problema
                                sociais de forma simples, sustentável e inovadora.
                            </p>
                            <p>A formação desse coletivo partiu da iniciativa de um grupo de mulheres que em sua
                                maioria,
                                atuaram junto a Pastoral da Saúde e tiveram militância no Movimento das Mulheres
                                Camponesas (MMC), coletivo voltado para a discussão dos direitos sociais e a vida das
                                mulheres agricultoras. Uma das demandas observadas pelo coletivo, era quanto a saúde da
                                comunidade, pois a produção de alimentos contaminados com agrotóxicos, gerava uma
                                série de enfermidades e doenças.</p>
                            <p><i>"A gente viveu desde o berço, se alimentando de frutas nativas daqui, do que se
                                    produzia
                                    na propriedade. Desde a horta e os conhecimentos dos chás. Me criei com a minha avó,
                                    fazendo chá e a mãe sempre nessa luta das plantas, melhorando e buscando novas
                                    espécies, isso foi se ampliando"</i> (Andréia da Silva Fossá, 2016)</p>
                            <p><i>"A Associação Pitanga Rosa é muito importante para a nossa comunidade, porque ela nos
                                    anima, nós vamos lá fazemos remédios, nós conversamos e os tratamentos tem ajudado
                                    muita gente, principalmente agora, com essas doenças que estão aí [...] Há muitos
                                    anos
                                    nós convivemos ali, trabalhando, fazendo o que é preciso, ajudando as pessoas que
                                    necessitam [...] É uma família muito unida." </i>(Geni Killian Pedroso®, 2021)
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Serviços da empresa -->
            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">A importância das plantas medicinais</h3>
                        </div>

                        <div class="col-md-6">

                            <p>A história nos mostra que há muitos anos, homens e mulheres desenvolveram habilidades
                                com as plantas medicinais, aprendendo a identificar, conhecer, manusear e a valer-se de
                                suas propriedades sobre o organismo humano. Por muito tempo, as plantas foram a fonte
                                de subsistência curativa mais importante para aliviar e tratar muitas doenças. Estes
                                conhecimentos foram se somando de geração em geração, e se tornando parte dos
                                saberes populares ancestrais da humanidade.</p>
                            <p>Os Saberes populares, manifestados como chás medicinais, artesanatos, mandingas,
                                práticas de cura, culinária, entre outros, fazem parte da prática cultural de
                                determinado local
                                e coletivo. São conhecimentos obtidos empiricamente, a partir do "fazer", que são
                                transmitidos e validados de geração em geração, ou seja, de forma ancestral,
                                principalmente por meio da linguagem oral, de gestos e atitudes.
                            </p>
                            <p>Pesquisas regionais, desenvolvidas no oeste catarinense, sobre o uso das plantas
                                medicinais, identificam que o cultivo e processamento das mesmas para o cuidado da
                                saúde, são parte da herança cultural dos povos indígenas e dos descendentes de
                                africanos.
                            </p>
                            <p>Esses saberes combinados aos usos e costumes dos caboclos, muitos deles benzedores e
                                benzedeiras, além de outros povos e grupos étnicos, como os descendentes de europeus
                                que povoaram a região, foram sendo repassados e incorporados aos conhecimentos de
                                diferentes culturas, principalmente durante o período da colonização. Sua importância
                                está
                                relacionada especialmente à saúde preventiva e aos cuidados por meio da medicina
                                popular (tradicional).</p>
                            <br><br><br>
                        </div>

                        <div class="col-md-6">
                            <img class="img-fluid" src="img/plantas_med.jpg">
                        </div>

                        <div class="col-12">

                            <h3 class="main-title">Mas afinal, o que são plantas medicinais?</h3>
                        </div>
                        <div class="col-6">
                            <p>As plantas medicinais, são aquelas que apresentam princípio ativo e ou ação farmacológica
                                que ajudam na cura e tratamento de várias doenças. Ou seja, a planta, no todo ou em
                                parte
                                (raiz, caule, folha, flor, fruto ou semente) apresenta propriedades medicinais e
                                curativas.
                            </p>
                            <p>O cultivo e uso das plantas medicinais apresenta inúmeros benefícios para a saúde humana
                                e do planeta. Existem várias formas de prevenir, combater e amenizar os sintomas das
                                doenças e ter uma melhor qualidade de vida. Iremos apresentar duas que consideramos
                                importantes e estão alinhadas com as práticas da Associação Pitanga Rosa:</p>

                            <p><strong>Homeopatia:</strong> tem seu princípio baseado na cura pelo semelhante. Os
                                medicamentos
                                homeopáticos têm substâncias que causam os mesmos sintomas produzidos pela doença,
                                mas em doses extremamente reduzidas, estimulando o corpo a buscar o equilíbrio".
                            </p>

                        </div>

                        <div class="col-6">
                            <img class="img-fluid" src="img/plantas_med3.jpg">
                        </div>

                        <div class="col-12">
                            <p><strong>Fitoterapia:</strong> parte do princípio de uso de substâncias que causam ações
                                contrárias aos
                                sintomas ou às alterações das doenças. Os remédios fitoterápicos são de origem
                                exclusivamente vegetal, ou seja, a terapia, neste caso, é feita através de plantas
                                medicinais
                                que contêm compostos ativos, de uso milenar, muitos deles comprovados em nível
                                farmacológico.
                            </p>
                            <p>O cultivo e uso das plantas medicinais apresenta inúmeros benefícios para a saúde humana
                                e do planeta. Existem várias formas de prevenir, combater e amenizar os sintomas das
                                doenças e ter uma melhor qualidade de vida. Iremos apresentar duas que consideramos
                                importantes e estão alinhadas com as práticas da Associação Pitanga Rosa:</p>

                            <br><br><br>
                        </div>

                        <div class="row">

                            <div class="col-12">
                                <h3 class="main-title">Você sabe o que é o princípio ativo de uma planta?</h3>
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/principio_ativo.jpg">
                            </div>
                            <div class="col-6">
                                <p>O princípio ativo é o grupo de substâncias produzido pela planta a partir da sua
                                    interação
                                    com o ambiente. Podem ser definidos também, como componentes químicos produzidos
                                    pelas plantas que conferem atividade terapêutica. Estas substâncias não são
                                    concentradas
                                    de forma homogênea, sendo assim podem estar em alguma parte ou espalhadas em toda a
                                    planta (raiz, caule, folhas, flores, frutos,
                                    sementes).
                                </p>
                                <p>Para garantir o princípio ativo das plantas é necessário observar o estágio de
                                    desenvolvimento, solo saudável, adubação orgânica, qualidade da semente, quantidade
                                    de
                                    água necessária, clima, época certa para colheita, fase lunar e garantir que as
                                    plantas não
                                    sejam contaminadas por agrotóxicos</p>
                                <br><br><br>

                            </div>
                            <div class="col-12">
                                <h3 class="main-title">Plantas tóxicas</h3>
                            </div>
                            <div class="col-12">
                                <p>Apesar de muitas plantas serem úteis ao homem, existem aquelas que produzem
                                    substâncias tóxicas ou venenosas. É preciso conhecer bem as características de cada
                                    planta para poder utilizá-las como remédio. Sua utilização inadequada poderá trazer
                                    efeitos
                                    indesejados. É necessário ter conhecimento da doença ou do sintoma apresentado e
                                    fazer
                                    a seleção correta da planta a ser utilizada, além de preparação adequada. A forma de
                                    uso,
                                    a frequência e a quantidade também são aspectos muito importantes. A dosagem deve
                                    observar a idade e o tipo de metabolismo de cada pessoa. Procure se informar antes
                                    de
                                    utilizar as plantas.
                                    <br><br><br>
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <h3 class="main-title">O poder de cura pelas plantas</h3>
                        </div>
                        <div class="col-12">
                            <p>Agora, vamos conhecer algumas indicações de plantas, seus benefícios e o poder medicinal
                                para cura e cuidado com a saúde. Mas antes de tratar sobre isso, vamos falar sobre dois
                                termos muito importantes que estão relacionados à nossa saúde e aos benefícios que
                                podemos obter a partir das plantas medicinais.
                            </p>
                            <p>Os seres vivos, para além da questão biofisiológica, que diz respeito ao corpo em seus
                                aspectos físicos, é revestido por um campo de energia vibracional?3. Da mesma forma, as
                                plantas, que também são seres vivos, além de cuidar, proteger e curar o nosso corpo
                                físico,
                                atuam sobre o nosso campo de energia vibracional.
                            </p>
                            <p>Geralmente, ao tratar sobre a ação curativa das plantas, relacionamos essas propriedades
                                ao efeito das composições químicas, que atuam sobre nosso organismo. Essa antiga
                                medicina é conhecida como Fitoterapia, como vimos no Capítulo 1.
                            </p>
                            <p>Contudo, os seres vivos, como é o caso das plantas, por possuírem o que chamamos de
                                vibração energética, tem um poder oculto, relacionado a energia sutil contida nelas, a
                                isso
                                chamamos Fito energética ou Fito energia.
                            </p>
                            <p>A partir dessas informações, as plantas que iremos detalhar a seguir, serão apresentadas
                                considerando seus benefícios e propriedades tanto na função fitoterápica, quanto
                                fitoenergética.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dados da empresa -->

            <!-- Time da empresa -->
            <div id="plantas">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Plantas</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/alecrim.png" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">Alecrim</h5>
                                    <audio controls>
                                    <source src="./audio_elevenlabs/alecrim.mp3" type="audio/mpeg">
                                    </audio>
                                    <p class="card-text"><b>Função fitoterápica:</b> É uma planta antioxidante,
                                        antisséptica, depurativa do sangue, tônica
                                        cardíaca e antirreumática. Combate o envelhecimento cutanco com crericia.
                                        Provoca suor. É
                                        indicada para histeria, nervosismo, tosses, bronquite, cisna, dismenorreia,
                                        dispepsia,
                                        escrofulose, febres tifoides, hepatite, gases intestinais.
                                        <br>
                                        <b>Função fito energética:</b> Libera traumas, medos e outros aspectos
                                        negativos. Gera vontade
                                        de mudar e conhecer o novo, incentiva a pessoa a ter bom humor e sabedoria para
                                        viver
                                        com alegria e amor.
                                        <br>
                                        <b>Importante:</b> Em doses elevadas pode causar gastrite e nefrite.
                                        Contraindicada em caso de
                                        diabetes, hipertensão arterial e na gestação.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/acafrao.png" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">AÇAFRÃO</h5>
                                    </form>
                                    <audio controls>
                                    <source src="./audio_elevenlabs/acafrao.mp3" type="audio/mpeg">
                                    </audio>
                                    <p class="card-text"><b>Função fitoterápica:</b> É uma planta antiespasmódica,
                                        calmante, diurética. Restaura o fluxo menstrual. Facilita a circulação e a
                                        digestão. Indicada para os problemas de figado, bílis, icterícia, estômago e
                                        gases. Normaliza as funções renais e o colesterol. Apresenta bons resultados nos
                                        casos de asma, coqueluche, histeria. Indicada nas doenças das vias urinárias.
                                        <br>
                                        <b>Função fito energética:</b> Elimina a necessidade de mentir, traz bons
                                        costumes, auxilia na agilidade para decidir e ter senso de direção, gera boas
                                        práticas e costumes positivos na vida.
                                        <br>
                                        <b>Importante:</b> O uso dessa planta não é recomendado para gestantes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/Camomila.png" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">CAMOMILA</h5>
                                    <p class="card-text"><b>Função fitoterápica:</b> É uma planta estimulante da
                                        vesícula biliar. Combate insônia, histeria, cólicas estomacais, intestinais,
                                        biliares e constipação intestinal. Fortalece e acalma o sistema nervoso. É
                                        benéfica para esgotamento geral. Útil para caibras ou dores abdominais, gases,
                                        diarreia, distúrbios da menstruação, uterinos ou ovarianos. Indicada para
                                        alergias, febres, dores de dente ou de feridas. Provoca sudorese e acalma dores.
                                        Cura urticárias úmidas ou pruriginosas. Usada em nevralgias e dores nas juntas,
                                        também cansaço nas pernas. Pode-se inalar o chá em casos de resfriados ou
                                        catarro das vias respiratórias. Elimina líquidos retidos no organismo.
                                        <br>
                                        <b>Função fito energética:</b> Elimina a raiva, ódio, as mágoas, o medo e a
                                        falta de fé. Gera esperança, otimismo e acalma.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/cidreira.png" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">CAPIM-CIDREIRA</h5>
                                    <audio controls>
                                    <source src="./audio_elevenlabs/capim-cidreira.mp3" type="audio/mpeg">
                                    </audio>
                                    <p class="card-text"><b>Função fitoterápica:</b> Possui ação antibacteriana,
                                        analgésica e anti-inflamatória. Planta diurética, ajuda a melhorar a digestão e
                                        tratar alterações do estômago. Auxilia no combate a insônia, tem propriedade
                                        calmantes. Auxilia na produção de leite para gestantes. Tem propriedades
                                        antissépticas capazes de eliminar as bactérias ruins do intestino, ao mesmo
                                        tempo em que ajuda as bactérias boas. Auxilia a aliviar a gripe, diminuindo a
                                        tosse, a asma e o excesso de secreção, quando utilizada na aromaterapia.
                                        <br>
                                        <b>Função fito energética:</b> Traz um sono vitalizador e energizante, gera
                                        harmonia e elimina a ansiedade, pesadelos, insônia e desordens do sono.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/carqueja.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">CARQUEJA</h5>
                                    <p class="card-text"><b>Função fitoterápica:</b> É uma planta indicada para anemia,
                                        gastrite, febre, artrite e
                                        reumatismo, diabetes, inflamação dos rins, hepatite e cálculos biliares. Combate
                                        dores
                                        estomacais, má digestão, vermes intestinais, inflamações urinárias, doenças da
                                        próstata.
                                        Auxilia na desintoxicação do organismo. Cura diarreia e males do baço, bexiga,
                                        rins e
                                        inflamações da garganta. É benéfica para circulação do sangue, hidropisia,
                                        angina e gota.
                                        <br>
                                        <b>Função fito energética:</b> Traz tolerância, limpa o sentimento de solidão,
                                        atua contra sentimento de possessividade e egocentrismo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/funcho.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">FUNCHO</h5>
                                    <p class="card-text"><b>Função fitoterápica:</b> É uma planta diurética e benéfica
                                        às vias urinárias. Combate cólicas e
                                        espasmos, má digestão, vômitos e diarreias. Estimula o apetite, elimina gases,
                                        restaura o
                                        fluxo menstrual e é expectorante. Elimina mau hálito, toxinas e melhora a pele.
                                        Auxilia na
                                        produção de leite materno
                                        <br>
                                        <b>Função fito energética:</b> Desenvolve o desejo de buscar e aperfeiçoar seus
                                        talentos e virtudes, trazer força para materializar sonhos, expressar seus
                                        projetos e sentimentos, através da fala. Gera transformação interna.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/hortela.png" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">HORTELÃ MENTA</h5>
                                    <p class="card-text"><b>Função fitoterápica:</b> É uma planta digestiva, tônica,
                                        estimulante, antiespasmódica,
                                        carminativa, expectorante e biliar. Combate distúrbios digestivos, cólicas,
                                        náuseas, vômitos,
                                        insônia, amarelão, palpitações, tremedeiras, tonturas, cãibras, icterícia,
                                        verminose.
                                        Fortalece e acalma o sistema nervoso. Indicada para dismenorreia, cólica
                                        uterinas,
                                        prostatite. Eficaz contra o catarro das mucosas. Auxilia na produção de leite
                                        materno.
                                        Indicada para dores de dentes, dores de cabeça, tosses, fadiga geral e picada de
                                        insetos.
                                        <br>

                                        <b>Função fito energética:</b> Abre caminhos na vida. Ajuda a entender e
                                        trabalhar as dificuldades de relacionamentos. Ajuda a mudar o pensamento e gerar
                                        vitalidade energética.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/majerona.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">MANJERONA</h5>
                                    <p class="card-text"><b>Função fitoterápica:</b> A planta possui ação
                                        antiespasmódica, expectorante.
                                        cicatrizante, digestiva, antimicrobiana, anti-inflamatória e antioxidante.
                                        Possui efeito
                                        calmante , combate a prisão de ventre, ajuda na regulação do ciclo menstrual
                                        auxilia na
                                        digestão fortalece a imunidade.
                                        <br>
                                        <b>Função fito energética:</b> Traz a sensibilidade de perceber os outros à sua
                                        volta, ajuda a
                                        tornar-se solidário ao sofrimento do próximo, cria espírito de equipe, incentiva
                                        o trabalho em
                                        grupo, ajuda a respeitar a opinião dos outros e viver em paz.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/manjericao.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">MANJERICÃO</h5>
                                    <p class="card-text"><b>Função fitoterápica:</b> Possui propriedades
                                        antibacterianas, antioxidantes, antiespasmódicas
                                        e digestivas. Reforça o sistema imunológico, reduz o estresse, ameniza sintomas
                                        de
                                        resfriados, melhora o sistema digestivo. Pode auxiliar no tratamento de
                                        artrites. Serve como
                                        repelente natural de insetos devido ao seu forte odor, que afasta moscas e
                                        mosquitos.
                                        <br>

                                        <b>Função fito energética:</b> Abre a consciência para enxergar o que está
                                        errado, estimula a busca da verdade a qualquer preço, abençoa as escolhas e
                                        decisões, irradia energia mental.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/salvia.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">SÁLVIA</h5>
                                    <p class="card-text"><b>Função fitoterápica:</b> É uma planta digestiva,
                                        estimulante, anti-inflamatória, analgésica,
                                        depurativa do sangue e tônica geral. Fortalece os nervos e o organismo todo.
                                        Acalma
                                        tremores das mãos. Combate depressão, fraqueza, diabetes, colesterol, males da
                                        menopausa, menstruação dolorosa, tosse, catarros, mau-hálito e excesso de suor
                                        noturno.
                                        Protege contra infartos e fortalece em paralisias. É usada em cãibras, dores de
                                        coluna,
                                        doenças das glândulas e tremores das juntas. Recupera o fígado, elimina gases
                                        abdominais. Elimina catarros estomacais e pulmonares em todas as afecções
                                        dentárias e
                                        bucais.
                                        <br>

                                        <b>Função fito energética:</b> Ajuda a explicar as coisas de forma correta, usar
                                        linguajar criativo e dinâmico, ser criativo e rápido nas palavras, estimula o
                                        dom da palavra.
                                        <br>
                                        <b>Importante:</b> Contraindicado em caso de gravidez, no aleitamento materno,
                                        em portadores de
                                        epilepsia e em pessoas que usam medicação para o coração.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="produtos">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Produtos</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/homeopatia.jpeg" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">Homeopatias</h5>
                                    <p class="card-text">Tem seu princípio baseado na cura pelo semelhante. Os
                                        medicamentos
                                        homeopáticos têm substâncias que causam os mesmos sintomas produzidos pela
                                        doença,
                                        mas em doses extremamente reduzidas, estimulando o corpo a buscar o equilíbrio".
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <img src="img/almofada.jpeg" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">Travesseiros</h5>
                                    <audio controls>
                                    <source src="./audio_elevenlabs/travesseiros1.mp3" type="audio/mpeg">
                                    </audio>
                                    <p class="card-text">Os travesseiros com aromas são eficientes porque o núcleo do
                                        nosso nervo olfativo fica perto do tálamo, área do cérebro responsável pelo
                                        controle de algumas funções como sono, pressão arterial e as emoções. As
                                        combinações de ervas podem ser as mais diversas, dependendo do seu estado de
                                        espírito e de suas necessidades.</p>
                                </div>
                            </div>
                        </div>


                        <!-- Call to action -->
                        <div id="call-area">
                            <div class="container">
                                <div class="row">
                                    <h3 class="call-title">Nossa Visão:</h3>
                                    <p> Ser uma referência na construção e socialização de práticas relacionadas às
                                        plantas
                                        medicinais, alimentação saudável e preservação da biodiversidade, no Oeste
                                        Catarinense.</p>
                                </div>
                            </div>
                        </div>
                    </div>
    </main>
    <!-- Rodapé -->
    <footer>
        <!-- Contatos  -->
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em contato conosco</h3>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-title">Ligue para:</span> (49) 991931313</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-title">Envie um e-mail:</span> contato@pitangarosa.com</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><span class="contact-title">Venha nos visitar:</span> Linha, Faxinal dos Rosas, Chapecó - SC,
                            89804-000</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                        <p>Ou nos deixe uma mensagem</p>
                    </div>
                    <div class="col-md-6" id="contact-form">
                        <form action="">
                            <input type="email" class="form-control" placeholder="Digite seu email" name="email">
                            <input type="text" class="form-control" placeholder="Assunto" name="subject">
                            <textarea class="form-control" rows="3" placeholder="Sua mensagem..."
                                name="message"></textarea>
                            <input type="submit" class="main-btn" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Créditos  -->
        <div id="copy-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Associação Pitanga Rosa &copy; 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts do projeto  -->
    <script src="js/scripts.js"></script>
</body>

</html>