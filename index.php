<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem é Erik Kaiser?</title>
    <style>
        /* Reset CSS básico */
    h1, p, ul, li, input, textarea, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

    body{
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    color: #333;
    line-height: 1.6;
}

/* Estilo para cabeçalho */
header {
    background-color: #0051ff;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header h1 {
    font-size: 24px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

/* Estilo para o conteúdo */
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Estilo para seções */
section {
    flex: 1;
    background-color: rgba(255, 255, 255, 0.5); /* Fundo branco com transparência */
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

section h2 {
    border-bottom: 2px solid #0051ff;
    padding-bottom: 5px;
    font-size: 20px;
    margin-bottom: 15px;
    text-transform: uppercase;
    font-weight: bold;
    transition: color 0.3s ease;
    cursor: pointer;
}

section h2:hover {
    color: #003bb3;
}

/* Estilo para competências */
.competencias {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.competencia {
    background-color: #0051ff;
    color: #fff;
    border-radius: 8px;
    padding: 10px 15px;
    margin: 5px;
    transition: background-color 0.3s ease;
    cursor: pointer;
    font-weight: bold;
    text-transform: uppercase;
}

.competencia:hover {
    background-color: #003bb3;
}

/* Estilo para o formulário */
form {
    display: flex;
    flex-direction: column;
    max-width: 400px;
    margin: 0 auto;
}

label {
    margin: 10px 0 5px;
    font-weight: bold;
}

input, textarea {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

button {
    padding: 10px;
    background-color: #0051ff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #003bb3;
}

/* Estilo para o link de contato */
.contato {
    text-align: center;
    margin-top: 20px;
}

.contato a {
    color: #0051ff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.contato a:hover {
    text-decoration: underline;
    color: #003bb3;
}

/* Estilo para a foto */
#foto {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 4px solid #0051ff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

#foto:hover {
    transform: scale(1.1);
}
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8; /* Cor de fundo padrão */
    color: #333; /* Cor do texto */
    line-height: 1.6; /* Espaçamento entre linhas */
}

body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('https://c4.wallpaperflare.com/wallpaper/326/811/673/numeros-tecnologia-tunel-wallpaper-preview.jpg'); /* Substitua pelo caminho da sua imagem */
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    filter: blur(5px); /* Opcional: adicione um desfoque à imagem de fundo */
    z-index: -1; /* Coloca a imagem de fundo atrás do conteúdo */
}

/* Adiciona sobreposição */
body::after {
    content: "";
    position: static;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.623); /* Sobreposição semitransparente */
    z-index: -1; /* Coloca a sobreposição atrás do conteúdo */
}

    </style>
</head>
<body>
    <div id="usuarios">

    </div>
    <script>
        fetch('data.json')
        .then(response => response.json())
        .then(data => {
        console.log(data.biografia);
        console.log(data.competencias);
        console.log(data.cursos);
        })
        .catch(error => console.error('Erro ao carregar JSON:', error));
    </script>
    <!-- Cabeçalho -->
    <header>
        <h1>Erik Vagner Kaiser da Silva</h1>
    </header>

    <!-- Conteúdo principal -->
    <div class="container">
        <!-- Seção de biografia -->
        <section>
            <h2>Biografia</h2>
            <img id="foto" src="https://i.imgur.com/bHoNqcG.jpeg" alt="Foto de Erik Vagner Kaiser da Silva">
            <p>Olá! Meu nome é Erik Vagner Kaiser da Silva. Sou apaixonado por tecnologia e tenho foco em desenvolver habilidades na área de (T.I). Estou sempre em busca de aprender e crescer profissionalmente.</p>
        </section>

        <!-- Seção de competências -->
        <section>
            <h2>Competências</h2>
            <div class="competencias">
                <div class="competencia">HTML / CSS / JavaScript</div>
                <div class="competencia">Criatividade</div>
                <div class="competencia">Trabalho em equipe</div>
                <div class="competencia">Hardware/Software</div>
                <div class="competencia">Música</div>
            </div>
        </section>

        <!-- Seção de cursos -->
        <section>
            <h2>Cursos</h2>
            <ul>
                <li><strong>SENAC PARANÁ - TECNOLOGIA DA INFORMAÇÃO:</strong> Desenvolvi atividades com foco em HARDWARE, incluindo montagem e entendimento completo de recursos, defeitos e soluções computacionais.</li>
                <li><strong>SENAC PARANÁ - LÓGICA DE PROGRAMAÇÃO:</strong> Amplo aprendizado nas linguagens de marcação HTML e CSS, assim como programação em JavaScript, TypeScript e Node.js.</li>
                <li><strong>SICOOB - TÉCNICAS DE VENDAS:</strong> Desenvolvi habilidades essenciais para o sucesso na interação com clientes. Aprendi a compreender suas necessidades, aprimorar a comunicação e resolver problemas de forma eficaz.</li>
            </ul>
        </section>

        <!-- Seção de contato -->
        <section>
            <h2>Contato</h2>
            <form id="contactForm" action="https://formspree.io/f/xleqyykq" method="post">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                
                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="4" placeholder="Digite sua mensagem" required></textarea>
                
                <button type="submit">Enviar</button>
            </form>
            <div class="contato">
                <a href="https://linktr.ee/erikvagnerkaiserdasilva">Clique aqui e inicie sua conversa</a>
            </div>
        </section>
    </div>

    <!-- Script JavaScript -->
    <script>
        // Adicionando interatividade à foto
        const foto = document.getElementById('foto');
        foto.addEventListener('mouseenter', () => {
            foto.style.transform = 'scale(1.1)';
        });

        foto.addEventListener('mouseleave', () => {
            foto.style.transform = 'scale(1)';
        });
    </script>
</body>
</html>
