<?php get_header(); ?>

<main>
    <section class="bannerPrincipal">
        <?php
        $banner_principal = get_field('banner_principal');
        if ($banner_principal) {
            echo '<img src="' . esc_url($banner_principal['url']) . '" alt="' . esc_attr($banner_principal['alt']) . '">';
        }
        ?>
        <div class="bannerText">
            <h1>Você ou seu familiar precisam de ajuda?</h1>
            <p>Trabalhamos há mais de 22 anos na recuperação de adictos e estamos prontos para lhe auxiliar.</p>
            <button class="btn button  buttonMobileNone" type="button">Saiba mais</button>
        </div>
    </section>
    <section class="primarySection">
        <div class="imgPrimarySection">
            <div class="imgTop1">
                <div class="comment">
                    <?php
                    $foto_depoimento = get_field('foto_depoimento');
                    if ($foto_depoimento) {
                        echo '<img src="' . esc_url($foto_depoimento['url']) . '" alt="' . esc_attr($foto_depoimento['alt']) . '">';
                    }
                    ?>
                    <p>“Belíssimo trabalho! Excelente equipe! Atendimento rápido!”</p>
                </div>
                <?php
                $imagem_conheca_1 = get_field('imagem_conheca_1');
                if ($imagem_conheca_1) {
                    echo '<img src="' . esc_url($imagem_conheca_1['url']) . '" alt="' . esc_attr($imagem_conheca_1['alt']) . '">';
                }
                ?>
            </div>
            <div class="imgTop2">
                <?php
                $imagem_conheca_2 = get_field('imagem_conheca_2');
                if ($imagem_conheca_2) {
                    echo '<img src="' . esc_url($imagem_conheca_2['url']) . '" alt="' . esc_attr($imagem_conheca_2['alt']) . '">';
                }
                ?>
            </div>
        </div>
        <div class="descPrimarySection">
            <div class="separator"></div>
            <h2>Conheça a Atratis</h2>
            <p>Fruto do desejo de resgatar vidas, em março de 1999 o Instituto Atratis foi fundado pelo Psicólogo e especialista em dependência química, Osmar Diógenes. O instituto acolhe, trata e contribui diretamente na recuperação de álcool, maconha, cocaína, crack, drogas sintéticas, medicamentos e drogas ilícitas, permitindo que seus residentes retornem à sociedade e às suas famílias para que vivam com dignidade.</p>

            <button class="btn button" type="button">Saiba Mais</button>
        </div>
    </section>
    <section class="secondarySection">
        <div class="secondaryTitle">
            <div class="separator"></div>
            <h4>Tratamentos que oferecemos</h4>
        </div>
        <div class="cardsPrimary row container">
            <div class="col-sm-3 cardPrimary">
                <?php
                $imagem_tratamentos_1 = get_field('imagem_tratamentos_1');
                if ($imagem_tratamentos_1) {
                    echo '<img src="' . esc_url($imagem_tratamentos_1['url']) . '" alt="' . esc_attr($imagem_tratamentos_1['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <h5>Tratamento Psiquiátrico</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu duis nunc ultrices amet. Diam nec blandit volutpat sagittis malesuada aliquet habitant elit, suspendisse. Et enim arcu.</p>
                    <button class="btn button" type="button">Saiba mais</button>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <?php
                $imagem_tratamentos_2 = get_field('imagem_tratamentos_2');
                if ($imagem_tratamentos_2) {
                    echo '<img src="' . esc_url($imagem_tratamentos_2['url']) . '" alt="' . esc_attr($imagem_tratamentos_2['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <h5>Tratamento dependência química</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu duis nunc ultrices amet. Diam nec blandit volutpat sagittis malesuada aliquet habitant elit, suspendisse. Et enim arcu.</p>
                    <button class="btn button" type="button">Saiba mais</button>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <?php
                $imagem_tratamentos_3 = get_field('imagem_tratamentos_3');
                if ($imagem_tratamentos_3) {
                    echo '<img src="' . esc_url($imagem_tratamentos_3['url']) . '" alt="' . esc_attr($imagem_tratamentos_3['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <h5>Tratamento alcoolismo</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu duis nunc ultrices amet. Diam nec blandit volutpat sagittis malesuada aliquet habitant elit, suspendisse. Et enim arcu.</p>
                    <button class="btn button" type="button">Saiba mais</button>
                </div>
            </div>
        </div>
    </section>
    <section class="tertiarySection">
        <div>
            <div class="separator"></div>
            <h4>Planos que aceitamos</h4>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <?php
                $logo_planos_1 = get_field('logo_planos_1');
                if ($logo_planos_1) {
                    echo '<img src="' . esc_url($logo_planos_1['url']) . '" alt="' . esc_attr($logo_planos_1['alt']) . '">';
                }
                ?>
            </div>
            <div class="item">
                <?php
                $logo_planos_2 = get_field('logo_planos_2');
                if ($logo_planos_2) {
                    echo '<img src="' . esc_url($logo_planos_2['url']) . '" alt="' . esc_attr($logo_planos_2['alt']) . '">';
                }
                ?>
            </div>
            <div class="item">
                <?php
                $logo_planos_3 = get_field('logo_planos_3');
                if ($logo_planos_3) {
                    echo '<img src="' . esc_url($logo_planos_3['url']) . '" alt="' . esc_attr($logo_planos_3['alt']) . '">';
                }
                ?>
            </div>
            <div class="item">
                <?php
                $logo_planos_4 = get_field('logo_planos_4');
                if ($logo_planos_4) {
                    echo '<img src="' . esc_url($logo_planos_4['url']) . '" alt="' . esc_attr($logo_planos_4['alt']) . '">';
                }
                ?>
            </div>
            <div class="item">
                <?php
                $logo_planos_5 = get_field('logo_planos_5');
                if ($logo_planos_5) {
                    echo '<img src="' . esc_url($logo_planos_5['url']) . '" alt="' . esc_attr($logo_planos_5['alt']) . '">';
                }
                ?>
            </div>
        </div>
        <div class="justifyCenter"><button class="btn button" type="button">Ver todos</button></div>
    </section>
    <section class="quarterlySection quarterBackgroundSection">
        <?php
        $fundo_diferenciais = get_field('fundo_diferenciais');
        if ($fundo_diferenciais) {
            echo '<img class="background-image" src="' . esc_url($fundo_diferenciais['url']) . '" alt="' . esc_attr($fundo_diferenciais['alt']) . '">';
        }
        ?>
        <div class="cardsQuarterly row container">
            <div class="col-sm-3 cardPrimary">
                <div class="textCardPrimary">
                    <div class="separator"></div>
                    <h4>Nossos Diferenciais</h4>
                    <p>Conte com uma Instituição experiente, são mais de 22 anos e mais de xxx pacientes tratados.</p>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <div class="textCardPrimary">
                    <?php
                    $icone_diferencial_1 = get_field('icone_diferencial_1');
                    if ($icone_diferencial_1) {
                        echo '<img src="' . esc_url($icone_diferencial_1['url']) . '" alt="' . esc_attr($icone_diferencial_1['alt']) . '">';
                    }
                    ?>
                    <h6>Internações voluntárias e involuntárias com Médicos de Plantão 24h.</h6>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <div class="textCardPrimary">
                    <?php
                    $icone_diferencial_2 = get_field('icone_diferencial_2');
                    if ($icone_diferencial_2) {
                        echo '<img src="' . esc_url($icone_diferencial_2['url']) . '" alt="' . esc_attr($icone_diferencial_2['alt']) . '">';
                    }
                    ?>
                    <h6>Setores separados por sexo: Homens / Mulheres.</h6>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <div class="textCardPrimary">
                    <?php
                    $icone_diferencial_3 = get_field('icone_diferencial_3');
                    if ($icone_diferencial_3) {
                        echo '<img src="' . esc_url($icone_diferencial_3['url']) . '" alt="' . esc_attr($icone_diferencial_3['alt']) . '">';
                    }
                    ?>
                    <h6>Internações via Plano de Saúde e de Forma Particular.</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="quinarySection">
        <div class="quinaryTitle">
            <div class="separator"></div>
            <h4>O que falam as pessoas que passaram pelos nossos tratamentos</h4>
        </div>
        <div class="cardsPrimary row container">
            <div class="col-sm-3 cardPrimary">
                <?php
                $foto_depoimento_2 = get_field('foto_depoimento_2');
                if ($foto_depoimento_2) {
                    echo '<img src="' . esc_url($foto_depoimento_2['url']) . '" alt="' . esc_attr($foto_depoimento_2['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis dolor at nisl sit. Rhoncus suscipit in feugiat donec. Etiam facilisis etiam neque volutpat. ”</p>
                    <h6>Lavinia Castro</h6>
                    <h5>Tratamento Psicológico</h5>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <?php
                $foto_depoimento_3 = get_field('foto_depoimento_3');
                if ($foto_depoimento_3) {
                    echo '<img src="' . esc_url($foto_depoimento_3['url']) . '" alt="' . esc_attr($foto_depoimento_3['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis dolor at nisl sit. Rhoncus suscipit in feugiat donec. Etiam facilisis etiam neque volutpat. ”</p>
                    <h6>Thiago Carvalho</h6>
                    <h5>Tratamento Alcoolismo</h5>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <?php
                $foto_depoimento_4 = get_field('foto_depoimento_4');
                if ($foto_depoimento_4) {
                    echo '<img src="' . esc_url($foto_depoimento_4['url']) . '" alt="' . esc_attr($foto_depoimento_4['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis dolor at nisl sit. Rhoncus suscipit in feugiat donec. Etiam facilisis etiam neque volutpat. ”</p>
                    <h6>Kauan Ferreira</h6>
                    <h5>Tratamento Psicológico</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="senarioSection">
        <div class="titleSenario">
            <div class="separator"></div>
            <h4>Blog Atratis</h4>
        </div>
        <div class="cardsPrimary row container">
            <div class="col-sm-3 cardPrimary">
                <?php
                $foto_blog = get_field('foto_blog');
                if ($foto_blog) {
                    echo '<img src="' . esc_url($foto_blog['url']) . '" alt="' . esc_attr($foto_blog['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <h5>Auctor faucibus.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus eu tincidunt dolor, diam ut leo eget auctor ut. Dictum congue vitae dolor.</p>
                    <button class="btn button" type="button">Saiba mais</button>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <?php
                $foto_blog_1 = get_field('foto_blog_1');
                if ($foto_blog_1) {
                    echo '<img src="' . esc_url($foto_blog_1['url']) . '" alt="' . esc_attr($foto_blog_1['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <h5>Auctor faucibus.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus eu tincidunt dolor, diam ut leo eget auctor ut. Dictum congue vitae dolor.</p>
                    <button class="btn button" type="button">Saiba mais</button>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <?php
                $foto_blog_2 = get_field('foto_blog_2');
                if ($foto_blog_2) {
                    echo '<img src="' . esc_url($foto_blog_2['url']) . '" alt="' . esc_attr($foto_blog_2['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <h5>Auctor faucibus.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus eu tincidunt dolor, diam ut leo eget auctor ut. Dictum congue vitae dolor.</p>
                    <button class="btn button" type="button">Saiba mais</button>
                </div>
            </div>
            <div class="col-sm-3 cardPrimary">
                <?php
                $foto_blog_3 = get_field('foto_blog_3');
                if ($foto_blog_3) {
                    echo '<img src="' . esc_url($foto_blog_3['url']) . '" alt="' . esc_attr($foto_blog_3['alt']) . '">';
                }
                ?><div class="textCardPrimary">
                    <h5>Auctor faucibus.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus eu tincidunt dolor, diam ut leo eget auctor ut. Dictum congue vitae dolor.</p>
                    <button class="btn button" type="button">Saiba mais</button>
                </div>
            </div>
        </div>
    </section>
    <section class="septenarySection row container">
        <div class="contact col-sm-5">
            <div class="separator"></div>
            <h2>Entre em contato com o time da Atratis</h2>
            <div class="descriContact">
                <p>Preencha o formulário e em breve nossa equipe entrará em contato.</p>
            </div>
            <div class="iconContact">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M17 2.91006C16.0832 1.98399 14.9912 1.24973 13.7876 0.750111C12.5841 0.250494 11.2931 -0.00448012 9.99 5.95696e-05C4.53 5.95696e-05 0.0800002 4.45006 0.0800002 9.91006C0.0800002 11.6601 0.54 13.3601 1.4 14.8601L0 20.0001L5.25 18.6201C6.7 19.4101 8.33 19.8301 9.99 19.8301C15.45 19.8301 19.9 15.3801 19.9 9.92006C19.9 7.27006 18.87 4.78006 17 2.91006ZM9.99 18.1501C8.51 18.1501 7.06 17.7501 5.79 17.0001L5.49 16.8201L2.37 17.6401L3.2 14.6001L3 14.2901C2.17775 12.977 1.74114 11.4593 1.74 9.91006C1.74 5.37006 5.44 1.67006 9.98 1.67006C12.18 1.67006 14.25 2.53006 15.8 4.09006C16.5675 4.85402 17.1757 5.76272 17.5894 6.76348C18.0031 7.76425 18.214 8.83717 18.21 9.92006C18.23 14.4601 14.53 18.1501 9.99 18.1501ZM14.51 11.9901C14.26 11.8701 13.04 11.2701 12.82 11.1801C12.59 11.1001 12.43 11.0601 12.26 11.3001C12.09 11.5501 11.62 12.1101 11.48 12.2701C11.34 12.4401 11.19 12.4601 10.94 12.3301C10.69 12.2101 9.89 11.9401 8.95 11.1001C8.21 10.4401 7.72 9.63006 7.57 9.38006C7.43 9.13006 7.55 9.00006 7.68 8.87006C7.79 8.76006 7.93 8.58006 8.05 8.44006C8.17 8.30006 8.22 8.19006 8.3 8.03006C8.38 7.86006 8.34 7.72006 8.28 7.60006C8.22 7.48006 7.72 6.26006 7.52 5.76006C7.32 5.28006 7.11 5.34006 6.96 5.33006H6.48C6.31 5.33006 6.05 5.39006 5.82 5.64006C5.6 5.89006 4.96 6.49006 4.96 7.71006C4.96 8.93006 5.85 10.1101 5.97 10.2701C6.09 10.4401 7.72 12.9401 10.2 14.0101C10.79 14.2701 11.25 14.4201 11.61 14.5301C12.2 14.7201 12.74 14.6901 13.17 14.6301C13.65 14.5601 14.64 14.0301 14.84 13.4501C15.05 12.8701 15.05 12.3801 14.98 12.2701C14.91 12.1601 14.76 12.1101 14.51 11.9901Z" fill="#288F45" />
                </svg>
                <p>(85) 9.8194-1721</p>
            </div>
            <div class="iconContact">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="22" viewBox="0 0 18 22" fill="none">
                    <path d="M17 9C17 15 9 21 9 21C9 21 1 15 1 9C1 6.87827 1.84285 4.84344 3.34315 3.34315C4.84344 1.84285 6.87827 1 9 1C11.1217 1 13.1566 1.84285 14.6569 3.34315C16.1571 4.84344 17 6.87827 17 9Z" stroke="#288F45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M9 12C10.6569 12 12 10.6569 12 9C12 7.34315 10.6569 6 9 6C7.34315 6 6 7.34315 6 9C6 10.6569 7.34315 12 9 12Z" stroke="#288F45" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="descriAddress">
                    <p class="addressContact">Av. Santos Dumont, 6740
                        Sala 1716, Cocó, Fortaleza <strong>•</strong> Ceará
                    </p>
                </div>
            </div>
        </div>
        <div class="form col-sm-5">
            <form>
                <h4>Deixe a sua mensagem</h4>
                <div class="row">
                    <div class="col">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="telefone">Telefone</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="col">
                        <label for="Endereço">Endereço</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" id="mensagem" rows="3"></textarea>
                </div>
                <div class="acceptTerms">
                    <div class="form-group checkTerms">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Aceito as Políticas de Privacidade.
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btnForm">Enviar</button>
                </div>
            </form>
        </div>
    </section>


</main>


<?php get_footer(); ?>
