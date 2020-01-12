    <!DOCTYPE html>
    <html lang="pt">

    <head>
        <title>The Form of Form | Trienal de Arquitetura de Lisboa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styles.css" rel="stylesheet" type="text/css">
        <link href="stylesprograma.css" rel="stylesheet" type="text/css">
        <link href="favicon.ico" rel="icon" type="image/x-icon">
        <link rel="stylesheet" href="fontes/font-awesome/css/font-awesome.min.css">
        <link href="slick-1.6.0/slick-1.6.0/slick/slick.css" rel="stylesheet" type="text/css">
        <link href="slick-1.6.0/slick-1.6.0/slick/slick-theme.css" rel="stylesheet" type="text/css">
        <script src="jquery-3.2.1.min.js">


        </script>
        <script src="slick-1.6.0/slick-1.6.0/slick/slick.js" type="text/javascript">


        </script>
        <script src="myscript.js">


        </script>
    </head>

    <body>
        <div id="tudo">
            <header>
        <div>
        <a href="index.php"><img src="imagens/logo.png" alt="logo"></a>

        <nav>
            <ul>
                <li><a id="programa-a" href="page-programa.php#inicioprograma">Programa</a></li>
                <li><a href="page-inscricoes.php#inscricoes">Inscrições</a></li>
                <li><a href="page-comochegar.php#chegar-ancora">Como chegar</a></li>
                <li><a href="page-noticias.php#noticiasdestaque">Notícias</a></li>
            </ul>
            </nav>
             <div id="iconmenu"><i class="fa fa-bars"></i>
                        </div>

    <div id="menuresponsive">
    <ul>
                <li><a id="programa-a" href="page-programa.php#inicioprograma">Programa</a></li>
                <li><a href="page-inscricoes.php#inscricoes">Inscrições</a></li>
                <li><a href="page-comochegar.php#chegar-ancora">Como chegar</a></li>
                <li><a href="page-noticias.php#noticiasdestaque">Notícias</a></li>
            </ul>
    </div>

        </div>
    </header>
                <?php
            include 'slider.html';
            $page = 1;
            if (isset($_GET['p']))
                if (($_GET['p'] >= 1) && ($_GET['p'] <= 4))
                    $page = $_GET['p'];?>
                    <main>
                        <div id="inicioprograma">
                            <h2>Programa</h2>
                            <p id="organizar">Organizar programa por...</p>
                            <div id="botoesprograma">
                                <div id="botoeslimite">
                                <a href="#organizar">
                                    <div class="button-programa <?php if ($page == 1) echo ' selectedprog'; ?>" id="button-programa1">
                                        <p>Exposição/Espaço</p>
                                    </div>
                                </a>
                                <a href="#organizar">
                                    <div class="button-programa <?php if ($page == 2) echo ' selectedprog'; ?>" id="button-programa2">
                                        <p>Data/Hora</p>
                                    </div>
                                </a>
                                <a href="#organizar">
                                    <div class="button-programa <?php if ($page == 3) echo ' selectedprog'; ?>" id="button-programa3">
                                        <p>Público Alvo</p>
                                    </div>
                                </a>
                                <a href="#organizar">
                                    <div class="button-programa <?php if ($page == 4) echo ' selectedprog'; ?>" id="button-programa4" style="margin-right:0!important;">
                                        <p>Tipologia</p>
                                    </div>
                                </a>
                            </div>
                                </div>
                            <div class="spacer"></div>
                            <div class="pag-programa<?php if ($page == 1) echo ' selectedpage'; ?>" id="pag-programa1">
                                 <div class="expomargem">
                                    <a  href="page-aformadaforma.php" class="imgexpo"><img alt="" src="imagens/programa/prog1.jpg"></a>
                                    <div class="exp-principal bordercolor1">
                                        <a  href="page-aformadaforma.php" class="infoexpo">
                                            <p class="exp-tipologia">Exposição</p>
                                            <p class="exp-nome color1">A Forma da Forma</p>
                                            <p class="exp-data">6 Outubro - 2 Dezembro</p>
                                            <p class="exp-local">MAAT - Museu de Arte, Arquitetura e Tecnologia</p>
                                        </a>
                                        <img alt="" class="seta setacolor1" id="setaimg01" src="imagens/seta2.png">
                                        <img alt="" class="setabaixo setacolor1" id="setabaixoimg01" src="imagens/seta3.png">
                                    </div>
                                </div>
                                <table class="table-exp tablecolor1" id="table-exp01">
                                    <tr>
                                        <th class="t1 color1">Nome/Título</th>
                                        <th class="t2 color1">Público-Alvo</th>
                                        <th class="t3 color1">Tipologia</th>
                                        <th class="t4 color1">Preço</th>
                                    </tr>
                                    <tr>
                                        <td class="t1">A Semente da Cabana</td>
                                        <td class="t2">Docentes</td>
                                        <td class="t3">Workshop</td>
                                        <td class="t4">65€ por pessoa</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">As Formas da Arquitetura</td>
                                        <td class="t2">Ensino Secundário</td>
                                        <td class="t3">Visita Orientada</td>
                                        <td class="t4">20€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">As Formas das Coisas</td>
                                        <td class="t2">3º Ciclo do Ensino Básico</td>
                                        <td class="t3">Visita Orientada</td>
                                        <td class="t4">20€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">Atlas: Com o Mundo às Costas</td>
                                        <td class="t2">1º Ciclo do Ensino Básico</td>
                                        <td class="t3">Visita e Jogo</td>
                                        <td class="t4">30€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">Sobre a Persistência das Formas: Diálogos entre Formas</td>
                                        <td class="t2">Adultos e Jovens</td>
                                        <td class="t3">Visitas Comentadas</td>
                                        <td class="t4">Gratuito</td>
                                    </tr>
                                </table>

                                <div class="expomargem">
                                    <a class="imgexpo"  href="page-obra.php"><img alt="" src="imagens/programa/prog2.jpg"></a>
                                    <div class="exp-principal bordercolor2">
                                        <a class="infoexpo"  href="page-obra.php">
                                            <p class="exp-tipologia">Exposição</p>
                                            <p class="exp-nome color2">Obra</p>
                                            <p class="exp-data">7 Outubro - 11 Dezembro</p>
                                            <p class="exp-local">Fundação Calouste Gulbenkian</p>
                                        </a>
                                        <img alt="" class="seta setacolor2" id="setaimg03" src="imagens/seta2.png">
                                        <img alt="" class="setabaixo setacolor2" id="setabaixoimg03" src="imagens/seta3.png">
                                    </div>
                                </div>
                                <table class="table-exp tablecolor2" id="table-exp03">
                                    <tr>
                                        <th class="t1 color2">Nome/Título</th>
                                        <th class="t2 color2">Público-Alvo</th>
                                        <th class="t3 color2">Tipologia</th>
                                        <th class="t4 color2">Preço</th>
                                    </tr>
                                    <tr>
                                        <td class="t1">A Semente da Cabana</td>
                                        <td class="t2">Docentes</td>
                                        <td class="t3">Workshop</td>
                                        <td class="t4">65€ por pessoa</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">As Formas da Arquitetura</td>
                                        <td class="t2">Ensino Secundário</td>
                                        <td class="t3">Visita Orientada</td>
                                        <td class="t4">20€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">As Formas das Coisas</td>
                                        <td class="t2">3º Ciclo do Ensino Básico</td>
                                        <td class="t3">Visita Orientada</td>
                                        <td class="t4">20€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">Atlas: Com o Mundo às Costas</td>
                                        <td class="t2">1º Ciclo do Ensino Básico</td>
                                        <td class="t3">Visita e Jogo</td>
                                        <td class="t4">30€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">Sobre a Persistência das Formas: Diálogos entre Formas</td>
                                        <td class="t2">Adultos e Jovens</td>
                                        <td class="t3">Visitas Comentadas</td>
                                        <td class="t4">Gratuito</td>
                                    </tr>
                                </table>

                                <div class="expomargem">
                                    <a class="imgexpo" href="page-omundonosnossosolhos.php"><img alt="" src="imagens/programa/prog3.jpg"></a>
                                    <div class="exp-principal bordercolor3">
                                        <a class="infoexpo" href="page-omundonosnossosolhos.php">
                                            <p class="exp-tipologia">Exposição</p>
                                            <p class="exp-nome color3">O Mundo nos Nossos Olhos</p>
                                            <p class="exp-data">8 Outubro - 15 Janeiro</p>
                                            <p class="exp-local">Garagem Sul – Centro Cultural de Belém</p>
                                        </a>
                                        <img alt="" class="seta setacolor3" id="setaimg05" src="imagens/seta2.png">
                                        <img alt="" class="setabaixo setacolor3" id="setabaixoimg05" src="imagens/seta3.png">
                                    </div>
                                </div>
                                <table class="table-exp tablecolor3" id="table-exp05">
                                    <tr>
                                        <th class="t1 color3">Nome/Título</th>
                                        <th class="t2 color3">Público-Alvo</th>
                                        <th class="t3 color3">Tipologia</th>
                                        <th class="t4 color3">Preço</th>
                                    </tr>
                                    <tr>
                                        <td class="t1">A Semente da Cabana</td>
                                        <td class="t2">Docentes</td>
                                        <td class="t3">Workshop</td>
                                        <td class="t4">65€ por pessoa</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">As Formas da Arquitetura</td>
                                        <td class="t2">Ensino Secundário</td>
                                        <td class="t3">Visita Orientada</td>
                                        <td class="t4">20€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">As Formas das Coisas</td>
                                        <td class="t2">3º Ciclo do Ensino Básico</td>
                                        <td class="t3">Visita Orientada</td>
                                        <td class="t4">20€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">Atlas: Com o Mundo às Costas</td>
                                        <td class="t2">1º Ciclo do Ensino Básico</td>
                                        <td class="t3">Visita e Jogo</td>
                                        <td class="t4">30€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">Sobre a Persistência das Formas: Diálogos entre Formas</td>
                                        <td class="t2">Adultos e Jovens</td>
                                        <td class="t3">Visitas Comentadas</td>
                                        <td class="t4">Gratuito</td>
                                    </tr>
                                </table>

                                <div class="expomargem">
                                    <a class="imgexpo" href="page-sineslogisticaabeiramar.php"><img alt="" src="imagens/programa/prog4.jpg"></a>
                                    <div class="exp-principal bordercolor4">
                                        <a class="infoexpo" href="page-sineslogisticaabeiramar.php">
                                            <p class="exp-tipologia">Exposição</p>
                                            <p class="exp-nome color4">Sines: Logística à Beira-Mar</p>
                                            <p class="exp-data">11 Outubro - 10 Dezembro</p>
                                            <p class="exp-local">Sede da Trienal de Lisboa</p>
                                        </a>
                                        <img alt="" class="seta setacolor4" id="setaimg06" src="imagens/seta2.png">
                                        <img alt="" class="setabaixo setacolor4" id="setabaixoimg06" src="imagens/seta3.png">
                                    </div>
                                </div>
                                <table class="table-exp tablecolor4" id="table-exp06">
                                    <tr>
                                        <th class="t1 color4">Nome/Título</th>
                                        <th class="t2 color4">Público-Alvo</th>
                                        <th class="t3 color4">Tipologia</th>
                                        <th class="t4 color4">Preço</th>
                                    </tr>
                                    <tr>
                                        <td class="t1">A Semente da Cabana</td>
                                        <td class="t2">Docentes</td>
                                        <td class="t3">Workshop</td>
                                        <td class="t4">65€ por pessoa</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">As Formas da Arquitetura</td>
                                        <td class="t2">Ensino Secundário</td>
                                        <td class="t3">Visita Orientada</td>
                                        <td class="t4">20€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">As Formas das Coisas</td>
                                        <td class="t2">3º Ciclo do Ensino Básico</td>
                                        <td class="t3">Visita Orientada</td>
                                        <td class="t4">20€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">Atlas: Com o Mundo às Costas</td>
                                        <td class="t2">1º Ciclo do Ensino Básico</td>
                                        <td class="t3">Visita e Jogo</td>
                                        <td class="t4">30€ por grupo</td>
                                    </tr>
                                    <tr>
                                        <td class="t1">Sobre a Persistência das Formas: Diálogos entre Formas</td>
                                        <td class="t2">Adultos e Jovens</td>
                                        <td class="t3">Visitas Comentadas</td>
                                        <td class="t4">Gratuito</td>
                                    </tr>
                                </table>

                                <div class="expomargem">
                                    <div class="imgexpo"><img alt="" src="imagens/programa/prog5.jpg"></div>
                                    <div class="exp-principal bordercolor4">
                                        <div class="infoexpo">
                                            <p class="exp-tipologia">Exposição Satélite</p>
                                            <p class="exp-nome color4">Os Limites da Paisagem</p>
                                            <p class="exp-data">9 Outubro - 11 Dezembro</p>
                                            <p class="exp-local">Casa Roque Gameiro</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="expomargem">
                                    <div class="imgexpo"><img alt="" src="imagens/programa/prog6.jpg"></div>
                                    <div class="exp-principal bordercolor2">
                                        <div class="infoexpo">
                                            <p class="exp-tipologia">Exposição Satélite</p>
                                            <p class="exp-nome color5">Ruínas do Apocalipse</p>
                                            <p class="exp-data">14 Novembro - 12 Dezembro</p>
                                            <p class="exp-local">Teatro Thalia</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="expomargem">
                                    <div class="imgexpo"><img alt="" src="imagens/programa/prog7.jpg"></div>
                                    <div class="exp-principal bordercolor2">
                                        <div class="infoexpo">
                                            <p class="exp-tipologia">Exposição Satélite</p>
                                            <p class="exp-nome color5">Uma História Triangular</p>
                                            <p class="exp-data">9 Novembro - 11 Dezembro</p>
                                            <p class="exp-local">Palácio Pombal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="pag-programa<?php if ($page == 2) echo ' selectedpage'; ?>" id="pag-programa2">
                            <div class="meses">
                                <ul>
                                    <li>
                                        <a class="messelected" id="mes01">Outubro</a>
                                    </li>
                                    <li>
                                        <a id="mes02">Novembro</a>
                                    </li>
                                    <li>
                                        <a id="mes03">Dezembro</a>
                                    </li>
                                    <li>
                                        <a id="mes04">Janeiro</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="spacermeses"></div>
                            <div class="mes-content" id="mes-content01">
                                <h4>Outubro</h4>
                                <div class="prog-data-esq">
                                    <p class="dia">05</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">15:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">16:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="prog-data-dir">
                                    <p class="dia">06</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">17:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="prog-data-esq">
                                    <p class="dia">07</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td></tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">16:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td></tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">18:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td></tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="prog-data-dir">
                                    <p class="dia">08</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">20:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="mes-content" id="mes-content02">
                                <h4>Novembro</h4>
                                <div class="prog-data-esq">
                                    <p class="dia">05</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">15:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">16:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="prog-data-dir">
                                    <p class="dia">06</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">17:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="prog-data-esq">
                                    <p class="dia">07</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">16:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td></tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">18:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="mes-content" id="mes-content03">
                                <h4>Dezembro</h4>
                                <div class="prog-data-esq">
                                    <p class="dia">05</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">15:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">16:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="prog-data-dir">
                                    <p class="dia">06</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">17:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="prog-data-esq">
                                    <p class="dia">07</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">16:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">18:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="mes-content" id="mes-content04">
                                <h4>Janeiro</h4>
                                <div class="prog-data-esq">
                                    <p class="dia">05</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">15:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">16:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="prog-data-dir">
                                    <p class="dia">06</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">17:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="prog-data-esq">
                                    <p class="dia">07</p>
                                    <div class="horas">
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">14:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">16:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                        <table class="table-data">
                                            <tr>
                                                <td class="data">18:00</td>
                                                <td class="data-nome">A Forma da Forma</td>
                                                <td class="data-tipologia">Inauguração de exposição</td>
                                                <td class="data-local">MAAT</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pag-programa<?php if ($page == 3) echo ' selectedpage'; ?>" id="pag-programa3">
                            <div class="meses">
                                <ul>
                                    <li>
                                        <a class="messelected" id="mes05">Pré-Escolar e Ensino Básico</a>
                                    </li>
                                    <li>
                                        <a id="mes06">Ensino Secundário e Superior</a>
                                    </li>
                                    <li>
                                        <a id="mes07">Profissionais</a>
                                    </li>
                                    <li>
                                        <a id="mes08">Famílias e Grupos</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="spacermeses"></div>
                            <div class="mes-content" id="mes-content05">
                                <h4>Pré Escolar e Ensino Básico</h4>
                                <div class="pag3-esq pag3-color2 margin">
                                    <p class="pag3-tipologia color2">Visita & Jogo</p>
                                    <p class="pag3-titulo">Nos Bolsos de...Um Arquiteto</p>
                                    <p class="pag3-description">Nesta visita exploramos as memórias esquecidas nos bolsos como forma de melhor conhecer o universo dos arquitectos e o processo de construção da obra.</p>
                                    <h6 class="
    color2">Horário</h6>
                                    <p class="pag3-details">6 Out a 11 Dez - 10:00 às 18:00</p>
                                    <h6 class="
    color2">Local</h6>
                                    <p class="pag3-details">Fundação Calouste Gulbenkian</p>
                                    <h6 class="
    color2">Marcações</h6>
                                    <p class="pag3-details">descobrirmarcacoes@gulbenkian.pt</p>
                                    <h6 class="
    color2">Preço</h6>
                                    <p class="pag3-details">1€/pessoa</p>
                                </div>


                                <div class="pag3-esq pag3-color2">
                                    <p class="pag3-tipologia color3">Visita & Jogo</p>
                                    <p class="pag3-titulo">Mapear o Mundo</p>
                                    <p class="pag3-description">Que forma pode ter uma cidade?  Durante a oficina vamos imaginar e construir colectivamente um Mapa-mundi com novas formas para a cidade.</p>
                                    <h6 class="
    color3">Horário</h6>
                                    <p class="pag3-details">8 de Out a 11 de Jan - 10:00 às 18:00</p>
                                    <h6 class="
    color3">Local</h6>
                                    <p class="pag3-details">Garagem Sul – Centro Cultural de Belém</p>
                                    <h6 class="
    color3">Marcações</h6>
                                    <p class="pag3-details">garagemsul@ccb.pt</p>
                                    <h6 class="
    color3">Preço</h6>
                                    <p class="pag3-details">4€/pessoa</p>
                                </div>
                           </div>

                            <div class="mes-content" id="mes-content06">
                                <h4>Ensino Secundário e Superior</h4>
                                <div class="pag3-esq pag3-color2 margin">
                                    <p class="pag3-tipologia color3">Visita Orientada</p>
                                    <p class="pag3-titulo">A Desenhar a Cidade</p>
                                    <p class="pag3-description">Nesta visita vamos aprender através de alguns exemplos presentes na exposição, como se desenham as cidades, como podemos transformá-las e como podemos compreendê-las.</p>
                                    <h6 class="
    color3">Horário</h6>
                                    <p class="pag3-details">8 Out a 11 Jan - 10:00 às 18:00</p>
                                    <h6 class="
    color3">Local</h6>
                                    <p class="pag3-details">Fundação Calouste Gulbenkian</p>
                                    <h6 class="
    color3">Marcações</h6>
                                    <p class="pag3-details">garagemsul@ccb.pt</p>
                                    <h6 class="
    color3">Preço</h6>
                                    <p class="pag3-details">4€/pessoa</p>
                                </div>


                                <div class="pag3-esq pag3-color2">
                                    <p class="pag3-tipologia color1">Visita Orientada</p>
                                    <p class="pag3-titulo">As Formas da Arquitectura</p>
                                    <p class="pag3-description">Iremos abordar as questões fundamentais da exposição de forma participativa recorrendo a alguns exemplos históricos pensar e debater sobre a sobrevivência das formas.</p>
                                    <h6 class="
    color1">Horário</h6>
                                    <p class="pag3-details">6 de Out a 11 de Dez - 12:00 às 20:00</p>
                                    <h6 class="
    color1">Local</h6>
                                    <p class="pag3-details">MAAT – Museu Arte Arquitetura e Tecnologia</p>
                                    <h6 class="
    color1">Marcações</h6>
                                    <p class="pag3-details">visitar.maat@edp.pt </p>
                                    <h6 class="
    color1">Preço</h6>
                                    <p class="pag3-details">20€/grupo</p>
                                </div>
                           </div>

                            <div class="mes-content" id="mes-content07">
                                <h4>Profissionais</h4>
                                <div class="pag3-esq pag3-color2 margin">
                                    <p class="pag3-tipologia color1">Curso</p>
                                    <p class="pag3-titulo">A Desenhar a Cidade</p>
                                    <p class="pag3-description">Esta formação explora estratégias que abram caminhos para uma educação do indivíduo, sensível à construção do lugar arquitectónico e da sua forma.</p>
                                    <h6 class="
    color1">Horário</h6>
                                    <p class="pag3-details">Sábados de 29 Out a 26 Nov - 15:00 às 20:00</p>
                                    <h6 class="
    color1">Local</h6>
                                    <p class="pag3-details">MAAT – Museu Arte Arquitetura e Tecnologia</p>
                                    <h6 class="
    color1">Marcações</h6>
                                    <p class="pag3-details">visitar.maat@edp.pt</p>
                                    <h6 class="
    color1">Preço</h6>
                                    <p class="pag3-details">65€/pessoa</p>
                                </div>

                           </div>

                            <div class="mes-content" id="mes-content08">
                                <h4>Famílias e Grupos</h4>
                                <div class="pag3-esq pag3-color2 margin">
                                    <p class="pag3-tipologia color1">Visita & Oficina</p>
                                    <p class="pag3-titulo">Cartografar o Mundo pelos Nossos Olhos</p>
                                    <p class="pag3-description">Nesta oficina pretendemos cartografar o nosso mundo, mapear a nossa realidade, elaborando mapas que têm por base as memórias do mundo que vivenciamos.</p>
                                    <h6 class="
    color1">Horário</h6>
                                    <p class="pag3-details">Domingos de 8 Out a 15 Dez - 11:00 às 12:00</p>
                                    <h6 class="
    color1">Local</h6>
                                    <p class="pag3-details">Garagem Sul – Centro Cultural de Belém</p>
                                    <h6 class="
    color1">Marcações</h6>
                                    <p class="pag3-details">garagemsul@ccb.pt</p>
                                    <h6 class="
    color1">Preço</h6>
                                    <p class="pag3-details">6€/pessoa</p>
                                </div>

                           </div>

                        </div>

                            <div class="pag-programa<?php if ($page == 4) echo ' selectedpage'; ?>" id="pag-programa4">
                            <div class="meses">
                                <ul>
                                    <li>
                                        <a class="messelected" id="mes09">Workshops e Jogos</a>
                                    </li>
                                    <li>
                                        <a id="mes10">Conferências</a>
                                    </li>
                                    <li>
                                        <a id="mes11">Filmes</a>
                                    </li>
                                    <li>
                                        <a id="mes12">Visitas orientadas</a>
                                    </li>
                                     <li>
                                        <a id="mes13">Exposições e Instalações</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="spacermeses"></div>
                            <div class="mes-content" id="mes-content09">
                                <h4>Workshops e Jogos</h4>
                                <div class="pag3-esq pag3-color2 margin">
                                    <p class="pag3-tipologia color2">Visita & Jogo</p>
                                    <p class="pag3-titulo">Nos Bolsos de...Um Arquiteto</p>
                                    <p class="pag3-description">Nesta visita exploramos as memórias esquecidas nos bolsos como forma de melhor conhecer o universo dos arquitectos e o processo de construção da obra.</p>
                                    <h6 class="
    color2">Horário</h6>
                                    <p class="pag3-details">6 Out a 11 Dez - 10:00 às 18:00</p>
                                    <h6 class="
    color2">Local</h6>
                                    <p class="pag3-details">Fundação Calouste Gulbenkian</p>
                                    <h6 class="
    color2">Marcações</h6>
                                    <p class="pag3-details">descobrirmarcacoes@gulbenkian.pt</p>
                                    <h6 class="
    color2">Preço</h6>
                                    <p class="pag3-details">1€/pessoa</p>
                                </div>


                                <div class="pag3-esq pag3-color2">
                                    <p class="pag3-tipologia color3">Visita & Jogo</p>
                                    <p class="pag3-titulo">Mapear o Mundo</p>
                                    <p class="pag3-description">Que forma pode ter uma cidade?  Durante a oficina vamos imaginar e construir colectivamente um Mapa-mundi com novas formas para a cidade.</p>
                                    <h6 class="
    color3">Horário</h6>
                                    <p class="pag3-details">8 de Out a 11 de Jan - 10:00 às 18:00</p>
                                    <h6 class="
    color3">Local</h6>
                                    <p class="pag3-details">Garagem Sul – Centro Cultural de Belém</p>
                                    <h6 class="
    color3">Marcações</h6>
                                    <p class="pag3-details">garagemsul@ccb.pt</p>
                                    <h6 class="
    color3">Preço</h6>
                                    <p class="pag3-details">4€/pessoa</p>
                                </div>
                           </div>

                            <div class="mes-content" id="mes-content10">
                                <h4>Conferências</h4>
                                <div class="pag3-esq pag3-color2 margin">
                                    <p class="pag3-tipologia color3">Visita Orientada</p>
                                    <p class="pag3-titulo">A Desenhar a Cidade</p>
                                    <p class="pag3-description">Nesta visita vamos aprender através de alguns exemplos presentes na exposição, como se desenham as cidades, como podemos transformá-las e como podemos compreendê-las.</p>
                                    <h6 class="
    color3">Horário</h6>
                                    <p class="pag3-details">8 Out a 11 Jan - 10:00 às 18:00</p>
                                    <h6 class="
    color3">Local</h6>
                                    <p class="pag3-details">Fundação Calouste Gulbenkian</p>
                                    <h6 class="
    color3">Marcações</h6>
                                    <p class="pag3-details">garagemsul@ccb.pt</p>
                                    <h6 class="
    color3">Preço</h6>
                                    <p class="pag3-details">4€/pessoa</p>
                                </div>


                                <div class="pag3-esq pag3-color2">
                                    <p class="pag3-tipologia color1">Visita Orientada</p>
                                    <p class="pag3-titulo">As Formas da Arquitectura</p>
                                    <p class="pag3-description">Iremos abordar as questões fundamentais da exposição de forma participativa recorrendo a alguns exemplos históricos pensar e debater sobre a sobrevivência das formas.</p>
                                    <h6 class="
    color1">Horário</h6>
                                    <p class="pag3-details">6 de Out a 11 de Dez - 12:00 às 20:00</p>
                                    <h6 class="
    color1">Local</h6>
                                    <p class="pag3-details">MAAT – Museu Arte Arquitetura e Tecnologia</p>
                                    <h6 class="
    color1">Marcações</h6>
                                    <p class="pag3-details">visitar.maat@edp.pt </p>
                                    <h6 class="
    color1">Preço</h6>
                                    <p class="pag3-details">20€/grupo</p>
                                </div>
                           </div>

                            <div class="mes-content" id="mes-content11">
                                <h4>Filmes</h4>
                                <div class="pag3-esq pag3-color2 margin">
                                    <p class="pag3-tipologia color1">Curso</p>
                                    <p class="pag3-titulo">A Desenhar a Cidade</p>
                                    <p class="pag3-description">Esta formação explora estratégias que abram caminhos para uma educação do indivíduo, sensível à construção do lugar arquitectónico e da sua forma.</p>
                                    <h6 class="
    color1">Horário</h6>
                                    <p class="pag3-details">Sábados de 29 Out a 26 Nov - 15:00 às 20:00</p>
                                    <h6 class="
    color1">Local</h6>
                                    <p class="pag3-details">MAAT – Museu Arte Arquitetura e Tecnologia</p>
                                    <h6 class="
    color1">Marcações</h6>
                                    <p class="pag3-details">visitar.maat@edp.pt</p>
                                    <h6 class="
    color1">Preço</h6>
                                    <p class="pag3-details">65€/pessoa</p>
                                </div>

                           </div>

                            <div class="mes-content" id="mes-content12">
                                <h4>Visitas orientadas</h4>
                                <div class="pag3-esq pag3-color2 margin">
                                    <p class="pag3-tipologia color1">Visita & Oficina</p>
                                    <p class="pag3-titulo">Cartografar o Mundo</p>
                                    <p class="pag3-description">Nesta oficina pretendemos cartografar o nosso mundo, mapear a nossa realidade, elaborando mapas que têm por base as memórias do mundo que vivenciamos.</p>
                                    <h6 class="
    color1">Horário</h6>
                                    <p class="pag3-details">Domingos de 8 Out a 15 Dez - 11:00 às 12:00</p>
                                    <h6 class="
    color1">Local</h6>
                                    <p class="pag3-details">Garagem Sul – Centro Cultural de Belém</p>
                                    <h6 class="
    color1">Marcações</h6>
                                    <p class="pag3-details">garagemsul@ccb.pt</p>
                                    <h6 class="
    color1">Preço</h6>
                                    <p class="pag3-details">6€/pessoa</p>
                                </div>


                           </div>

                             <div class="mes-content" id="mes-content13">
                                <h4>Exposições e Instalações</h4>
                                <div class="pag3-esq pag3-color2 margin">
                                    <p class="pag3-tipologia color1">Visita & Oficina</p>
                                    <p class="pag3-titulo">Cartografar o Mundo pelos Nossos Olhos</p>
                                    <p class="pag3-description">Nesta oficina pretendemos cartografar o nosso mundo, mapear a nossa realidade, elaborando mapas que têm por base as memórias do mundo que vivenciamos.</p>
                                    <h6 class="
    color1">Horário</h6>
                                    <p class="pag3-details">Todos os domingos de 8 Out a 15 Dez - 11:00 às 12:00</p>
                                    <h6 class="
    color1">Local</h6>
                                    <p class="pag3-details">Garagem Sul – Centro Cultural de Belém</p>
                                    <h6 class="
    color1">Marcações</h6>
                                    <p class="pag3-details">garagemsul@ccb.pt</p>
                                    <h6 class="
    color1">Preço</h6>
                                    <p class="pag3-details">6€/pessoa</p>
                                </div>


                           </div>
                        </div>
              </div>
                    </main>
            <footer>
    <div class="footer1">
        <div class="footer-content">
        <div class="blocofooter1">
            <h6>Contacte-nos</h6>
            <div class="footerline"><i class="fa fa-home"></i><p>Campo de Santa Clara, 142-145 1100-474 Lisboa, Portugal</p></div>
            <div class="footerline"><i class="fa fa-phone"></i><p>+351 213 469 366</p></div>
            <div class="footerline"><i class="fa fa-envelope"></i><p>trienal@trienaldelisboa.com</p></div>
        </div>
        <div class="blocofooter">
            <h6>Conecte-se</h6>
            <div class="footerline"><i class="fa fa-facebook"></i><a href="https://www.facebook.com/trienaldelisboa/" target="_blank">Facebook</a></div>
            <div class="footerline"><i class="fa fa-instagram"></i><a href="https://www.instagram.com/trienaldelisboa/" target="_blank">Instagram</a></div>
            <div class="footerline"><i class="fa fa-pinterest-p"></i><a href="https://www.pinterest.pt/trienallisboa/" target="_blank">Pinterest</a></div>
            <div class="footerline"><i class="fa fa-twitter"></i><a href="https://twitter.com/trienaldelisboa" target="_blank">Twitter</a></div>
        </div>
            <div class="blocofooter">
            <h6>Edicões passadas</h6>
            <div class="footerline"><a href="https://www.facebook.com/trienaldelisboa/" target="_blank">2013 Close, Closer</a></div>
            <div class="footerline"><a href="https://www.instagram.com/trienaldelisboa/" target="_blank">2010 Falemos de Casas</a></div>
            <div class="footerline"><a href="https://www.pinterest.pt/trienallisboa/" target="_blank">2007 Vazios Urbanos</a></div>
        </div>
         <div class="blocofooter3">
            <h6>Acompanhe as novidades</h6>
            <input type="text" placeholder="Nome Completo">
             <input type="text" placeholder="Email"><input type="submit">
        </div>
        </div></div>
    <div class="footer2">
        <p><span class="spanbold"> &copy;2017 The Form of Form</span> - 4ª edicão do Trienal de Arquitura de Lisboa</p></div>
        </footer>
        </div>
    </body>

    </html>
