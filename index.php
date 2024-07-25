<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem é Erik Kaiser?</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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
        <!-- Seção de contato -->
        <section>
            <h2>Contato</h2>
            <form id="contactForm" action="process_form.php" method="post">
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

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Erik Vagner Kaiser da Silva. Todos os direitos reservados.</p>
    </footer>

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
