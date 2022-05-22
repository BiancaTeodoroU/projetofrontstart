<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bianca Teodoro Urtado</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>

    <header>
        <div class="container">
            <img src="assets/logo.png" alt="Logo com uma barra reta roxa e ao lado o nome de Bianca Teodoro">
            <h2>Hello,</h2>
            <h1 class="title-pink">I am Bianca Teodoro</h1>
            <p>Estudante do curso de Análise e Desenvolvimento de Sistemas da Instituição Universitária de Toledo Prudente, estou no 3º termo. Tenho ênfase e competências para ser desenvolvedora Front-End. 
            <br>Adoro aprender coisas novas e trabalhar em equipe.</p>
            <button onclick="window.open('https://api.whatsapp.com/send?phone=5518997000509')">Entre em contato</button>
        </div>
    </header>
    <nav>
        <img src="assets/logo.png" alt="Logo com uma barra reta roxa e ao lado o nome de Bianca Teodoro">
        <ul>
            <a href="#aboutme"><i data-feather="user"></i>Sobre mim</a>
            <a href="#services"><i data-feather="briefcase"></i>Serviços</a>
            <a href="#portfolio"><i data-feather="image"></i>Portifólio</a>
            <a href="#curriculo"><i data-feather="file-text"></i>Curriculo</a>
            <a href="#contact"><i data-feather="send"></i>Contato</a>
        </ul>
    </nav>
    <section id="aboutme" class="about-me">
        <div class="container">
            <h1 class="title-pink">Sobre mim</h1>
            <p>Prudentina de 19 anos, estou estudando para ser desenvolvedora front-end. Estou fazendo a faculdade de análise e desenvolvimento de sistemas da Instituição Universitária de Toledo Prudente. E desde fevereiro de 2022 estou estudando focada na parte frontend usando: html, css, js e pug. 
                <br><br>
                Adoro estudar sobre novas tecnologias e estou sempre pronta para um novo desafio.</p>
        </div>
        <div class="img-container">
            <div class="line purple"></div>
            <div class="line pink"></div>
            <img src="assets/profile.jpeg" alt="Bianca Teodoro">
        </div>
    </section>
    <section id="services" class="services">
        <h1 class="title-pink">Serviços</h1>
        <div class="services-container">
            <div class="service-card">
                <img src="assets/icone - dev web.png" alt="Ícone de terminal">
                <h2 class="title-purple">Desenvolvimento de sites</h2>
                <p>Desenvolvimento de sites empresariais. Faça sua empresa ser facilmente encontrada online.</p>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio">
        <h1 class="title-pink">Portfólio</h1>
        <div class="portfolio-container">
            <div class="portfolio-card">
                <div class="img-container">
                    <div class="line green"></div>
                    <img src="assets/prova devweb.png" alt="Imagem do portfolio">
                </div>
                <div class="language-container">
                    <ul>
                        <li>html</li>
                        <li>css</li>
                        <li>js</li>
                    </ul>
                </div>
                <p><b>Linktree</b></p>
                <p>
                    Projeto feito usando html, css e js com o objetivo de apresentar para a prova de desenvolvimento web front-end uma interface diferente, e maneiras de melhora no agronegócio.
                </p>
            </div>
            <div class="portfolio-card">
                <div class="img-container">
                    <div class="line green"></div>
                    <img src="assets/layout.png" alt="Imagem do portfolio">
                </div>
                <div class="language-container">
                    <ul>
                        <li>html</li>
                        <li>css</li>
                    </ul>
                </div>
                <p><b>Linktree</b></p>
                <p>
                    Projeto feito usando html, e css com o objetivo de treino para aprender mais sobre as estilizações que são possiveis atráves do css.
                </p>
            </div>
            <div class="portfolio-card">
                <div class="img-container">
                    <div class="line green"></div>
                    <img src="assets/formulario.png" alt="Imagem do portfolio">
                </div>
                <div class="language-container">
                    <ul>
                        <li>html</li>
                        <li>css</li>
                    </ul>
                </div>
                <p><b>Linktree</b></p>
                <p>
                    Projeto feito usando html, css com o objetivo de aprender a fazer um formulário para contato.
                </p>
            </div>
        </div>
    </section>

    <section id="curriculo" class="curriculo">
        <h1 class="title-pink">Currículo</h1>
        <div class="container">
            <img class="curriculo-img" src="assets/image-curriculo.png" alt="imagem de curriculo">
            <div class="content">
                <div class="curriculo-info">
                    <span>Nome</span><b>Bianca Teodoro Urtado</b>
                    <span>Idade</span><b>19 anos</b>
                    <span>Formação</span><b>Cursando análise e desenvolvimento de sistemas</b>
                    <span>Cidade</span><b>Presidente Prudente</b>
                    <span>Telefone</span><b>(18) 99700-0509</b>
                    <span>Email</span><b>biancaurtado645@gmail.com</b>
                    <span>Freelance</span><b>Disponível</b>
                    <span>Exp</span><b>HTML, CSS, JS, e Pug</b>
                    <span>Idiomas</span><b>Ingles (Básico)</b>
                </div>
                <button class="secondary-button">
                    <img src="assets/save.png" alt="icone de curriculo">
                    Baixe meu currículo completo
                </button>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h1>Vamos trabalhar juntos?</h1>
        <p>Se você gostou do meu trabalho e quer que eu tire sua ideia do papel ou faça parte do seu time, entre em contato comigo! </p>
        <button onclick="window.open('https://api.whatsapp.com/send?phone=5518997000509')">Entre em contato</button>

        <div class="social-media">
            <a href="https://www.instagram.com/bianca_teodorou/"><img src="assets/icon-instagram.png" alt="instagram logo"></a>
            <a href="https://www.linkedin.com/in/bianca-teodoro-urtado-ba37a1215/"><img src="assets/icon-likedin.png" alt="linkedin logo"></a>
            <a href="https://api.whatsapp.com/send?phone=5518997000509"><img src="assets/icon-whatsapp.png" alt="whatsapp logo"></a>
            <a href="https://github.com/BiancaTeodoroU"><img src="assets/icon-github.png" alt="github logo"></a>
        </div>
    </section>
    <footer>
        <p>Made by Bianca Teodoro Urtado - 2022</p>
    </footer>



    <script>
        feather.replace()
    </script>
</body>
</html>