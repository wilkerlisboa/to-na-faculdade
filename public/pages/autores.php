<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <title>Dashboard</title>
</head>
<bod
    <div class="container">
        <!-- BUTÕES -->
        <div class="buttons">
            <button onclick="solicitarNome('Abrir caixa')" class="campo"><img src="../icon/shopping-cart.svg" alt="" srcset="">Abrir caixa</button>
            <button onclick="solicitarNome('Fechar caixa')" class="campo"><img src="../icon/x.svg" alt="" srcset="">Fechar caixa</button>
            <button onclick="information()"class="campo"><img src="../icon/info.svg" alt="" srcset="">Informações</button>
            <button onclick="mesa()" class="campo"><img src="../icon/hexagon.svg" alt="" srcset="">Mesa</button>
            <button onclick="produto()" class="campo"><img src="../icon/shopping-bag.svg" alt="" srcset="">Produtos</button>
            <button onclick="suporte()" class="campo"><img src="../icon/terminal.svg" alt="" srcset="">Autores</button>
            <button onclick="suporte()" class="campo"><img src="../icon/headphones.svg" alt="" srcset="">Suporte</button>
            <button onclick="home()" class="campo"><img src="../icon/log-out.svg" alt="" srcset="">Sair</button>
        </div>
        <!-- HOME -->
        <p id="usuario">bem vindo sr (a): <?php echo $_SESSION['nome_usuario'];?></p>
    </div>
    <img src="../imagem/logo2.png" alt="" srcset="" class="imagem-suporte">
    <div class="suporte">
        <h1 class="title-suporte">Bem-vindo ao "Tô na Faculdade"!</h1>
        <p class="text-suporte">Estamos felizes em receber você em nosso ponto de venda com o tema dos Simpsons, um lugar onde o humor e a nostalgia se encontram para criar uma experiência única para nossos clientes. Nosso objetivo é fornecer um atendimento excepcional, sempre com um sorriso no rosto, assim como os personagens da nossa série favorita.<br>Quem somos:<br>Nosso time é composto por cinco desenvolvedores talentosos e apaixonados que trabalharam incansavelmente para trazer este projeto à vida. Conheça os nossos membros:<br>⚛️<strong>Wilker Lisboa:</strong> Especialista em desenvolvimento e implementação de sistemas, Wilker é a mente técnica por trás das funcionalidades do nosso PDV.<br>⚛️<strong>Jennifer Lucena:</strong> Responsável pelo design e pela experiência do usuário, Jennifer garante que cada interação seja intuitiva e agradável.<br>⚛️<strong>Anthony Kauã:</strong> Desenvolvedor front-end, Anthony cuida da aparência e da usabilidade da interface, tornando nosso PDV visualmente atraente e fácil de usar.<br>⚛️<strong>Pedro Henrique:</strong> Focado em back-end, Pedro assegura que nossos sistemas funcionem de maneira eficiente e segura, lidando com toda a lógica do servidor.<br>⚛️<strong>Sara Sangues:</strong> Especialista em QA (Quality Assurance), Sara garante que nosso PDV opere sem falhas, testando e validando cada funcionalidade.<br>Nossa missão:<br>No "Tô na Faculdade", acreditamos que cada cliente merece um atendimento personalizado e de qualidade. Inspirados pelo humor irreverente e pela diversão dos Simpsons, buscamos criar um ambiente acolhedor e descontraído, onde todos se sintam à vontade para explorar e aproveitar nossos serviços.<br>O que oferecemos:<br>👩‍🏭Atendimento personalizado: Nossa equipe está sempre pronta para ajudar, oferecendo suporte rápido e eficaz para qualquer dúvida ou necessidade.<br>👩‍💻Tecnologia de ponta: Utilizamos as mais recentes inovações em tecnologia para garantir uma experiência de compra ágil e segura.<br>😏Ambiente temático: Cada detalhe do nosso PDV é inspirado nos Simpsons, proporcionando uma experiência única e nostálgica para os fãs da série.<br><strong>Casa Precisa de Ajuda?</strong><br>Se você precisar de qualquer assistência enquanto estiver conosco, não hesite em pedir ajuda. Nossa equipe está disponível para responder a todas as suas perguntas e resolver quaisquer problemas que possam surgir. Estamos aqui para garantir que sua experiência seja a melhor possível.<br>Agradecemos por escolher o "Tô na Faculdade"! Estamos ansiosos para tornar sua visita inesquecível.</p>
    </div>
    
    <script src="../js/script.js"></script>
</body>
</html>
 