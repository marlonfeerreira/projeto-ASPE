<?php
session_start();

// Verifica se os dados do formulário foram submetidos
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Credenciais fictícias
    $usuarioFicticio = "admin";
    $senhaFicticia = "123456";

    // Obtém as credenciais do formulário
    $usuarioDigitado = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
    $senhaDigitada = isset($_POST["senha"]) ? $_POST["senha"] : "";

    // Verifica se as credenciais estão corretas
    if ($usuarioDigitado === $usuarioFicticio && $senhaDigitada === $senhaFicticia) {
        // Autenticação bem-sucedida, redireciona para a página principal
        header("Location: home.php");
        exit();
    } else {
        // Autenticação falhou, exibe uma mensagem de erro
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Tela de Login IFPE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            padding: 70px;
            font-family: Lato, Arial, Helvetica, sans-serif;
        }

        header {
            height: 95px;
            flex-shrink: 0;

            .header-container {

                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 20px;
            }
        }

        main {
            max-width: 100%;
            width: 100%;

            .auth-container {
                flex-shrink: 0;
                max-width: 100%;
                width: 100%;

                .forms-area {
                    form {

                        display: flex;
                        flex-direction: column;
                        gap: 2px;

                        .input-login {
                            width: 375px;
                            height: 38px;
                            flex-shrink: 0;

                            width: 375px;
                            height: 38px;
                            flex-shrink: 0;
                            border: 1px solid #000;
                            border-radius: 5px;
                            padding-left: 10px;
                        }

                        .esqueci-senha {
                            color: #4183C4;
                            font-family: Lato;
                            font-size: 13px;
                            font-style: normal;
                            font-weight: 400;
                            line-height: 19.999px;
                            /* 153.838% */
                            text-decoration: none;
                        }

                        .botao-enviar {
                            width: 82px;
                            height: 36px;
                            flex-shrink: 0;
                            border-radius: 4px;
                            background: #21BA45;
                            box-shadow: 0px 0px 0px 0px rgba(34, 36, 38, 0.15);
                            border: none;
                            color: #FFFFFF;
                        }
                    }

                }

                .primeiro-acesso {

                    width: 694px;
                    height: 303px;
                    background-color: #ffffff;
                    border-radius: 4px;
                    border: 1px solid;
                    border-color: #22242626;
                    box-shadow: 0px 1px 2px #22242626;
                }

                .primeiro-acesso .rectangle {

                    width: 100%;
                    height: 1px;
                    background-color: #22242626;
                }

                .primeiro-acesso .text-wrapper {

                    width: 196px;
                    font-family: "Lato-Regular", Helvetica;
                    font-weight: 400;
                    color: #000000b2;
                    font-size: 13px;
                    letter-spacing: 0;
                    line-height: 16px;
                }

                .primeiro-acesso .div {

                    width: 54px;
                    font-family: "Lato-Regular", Helvetica;
                    font-weight: 400;
                    color: #4183c4;
                    font-size: 14px;
                    letter-spacing: 0;
                    line-height: 16px;
                }

                .primeiro-acesso .avatar-servidor {

                    width: 13px;
                    height: 13px;
                    object-fit: cover;
                }

                .primeiro-acesso .rectangle-2 {

                    width: 100%;
                    height: 1px;
                    background-color: #22242626;
                }

                .primeiro-acesso .text-wrapper-2 {

                    width: 128px;
                    font-family: "Lato-Regular", Helvetica;
                    font-weight: 400;
                    color: #000000de;
                    font-size: 18px;
                    letter-spacing: 0;
                    line-height: 23.1px;
                }

                .primeiro-acesso .overlap-group {

                    width: 204px;
                    height: 75px;
                }

                .primeiro-acesso .text-wrapper-3 {

                    width: 139px;
                    font-family: "Lato-Regular", Helvetica;
                    font-weight: 400;
                    color: #000000de;
                    font-size: 28px;
                    letter-spacing: 0;
                    line-height: 36px;
                }

                .primeiro-acesso .ifpe-logo {

                    width: 74px;
                    height: 75px;
                }

            }
        }
    </style>
</head>

<body>
    <header>
        <div class="header-container">
            <svg width="222" height="63" viewBox="0 0 222 63" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="222" height="63" rx="4" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_42_22" transform="matrix(0.00144092 0 0 0.00507754 0 -0.0991492)" />
                    </pattern>
                    <image id="image0_42_22" width="694" height="236" xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>
            Instituto Federal de Educação, Ciência e Tecnologia de Pernambuco
        </div>
    </header>
    <main>
        <div class="auth-container flex gap-4">
            <div class="forms-area">
                <h2>Autenticação</h2>
                <?php if (isset($erro)) : ?>
                    <p style="color: red;"><?php echo htmlspecialchars($erro); ?></p>
                <?php endif; ?>
                <form action="index.php" method="post">
                    <span>Usuario:</span>
                    <input type="text" name="usuario" placeholder="Usuário" class="input-login" />
                    <span>Senha:</span>
                    <input type="password" name="senha" placeholder="Senha" class="input-login" />
                    <a href="#" class="esqueci-senha">Esqueci minha senha</a>
                    <input type="submit" value="Entrar" class="botao-enviar" />
                </form>
            </div>

            <div class="primeiro-acesso">
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="74" height="75" viewBox="0 0 74 75" fill="none">
                        <path d="M44.0272 18.861C44.0272 19.4862 43.5287 19.9903 42.9118 19.9903H33.6817C33.0659 19.9903 32.5664 19.4862 32.5664 18.861V9.50407C32.5664 8.88196 33.0659 8.37469 33.6817 8.37469H42.9118C43.5287 8.37469 44.0272 8.88196 44.0272 9.50407V18.861Z" fill="#35972F" />
                        <path d="M57.7817 18.861C57.7817 19.4862 57.2812 19.9903 56.6663 19.9903H47.4342C46.8204 19.9903 46.3188 19.4862 46.3188 18.861V9.50407C46.3188 8.88196 46.8204 8.37469 47.4342 8.37469H56.6663C57.2812 8.37469 57.7817 8.88196 57.7817 9.50407V18.861Z" fill="#35972F" />
                        <path d="M57.7817 46.7387C57.7817 47.3629 57.2812 47.8691 56.6663 47.8691H47.4342C46.8204 47.8691 46.3188 47.3629 46.3188 46.7387V37.3849C46.3188 36.7586 46.8204 36.2514 47.4342 36.2514H56.6663C57.2812 36.2514 57.7817 36.7586 57.7817 37.3849V46.7387Z" fill="#35972F" />
                        <path d="M30.2767 32.7902C30.2767 33.4154 29.7762 33.9216 29.1593 33.9216H19.9293C19.3134 33.9216 18.814 33.4154 18.814 32.7902V23.4354C18.814 22.8101 19.3134 22.305 19.9293 22.305H29.1593C29.7762 22.305 30.2767 22.8101 30.2767 23.4354V32.7902Z" fill="#35972F" />
                        <path d="M44.0272 32.7902C44.0272 33.4154 43.5287 33.9216 42.9118 33.9216H33.6817C33.0659 33.9216 32.5664 33.4154 32.5664 32.7902V23.4354C32.5664 22.8101 33.0659 22.305 33.6817 22.305H42.9118C43.5287 22.305 44.0272 22.8101 44.0272 23.4354V32.7902Z" fill="#35972F" />
                        <path d="M30.2767 46.7387C30.2767 47.3629 29.7762 47.8691 29.1593 47.8691H19.9293C19.3134 47.8691 18.814 47.3629 18.814 46.7387V37.3849C18.814 36.7586 19.3134 36.2514 19.9293 36.2514H29.1593C29.7762 36.2514 30.2767 36.7586 30.2767 37.3849V46.7387Z" fill="#35972F" />
                        <path d="M44.0272 46.7387C44.0272 47.3629 43.5287 47.8691 42.9118 47.8691H33.6817C33.0659 47.8691 32.5664 47.3629 32.5664 46.7387V37.3849C32.5664 36.7586 33.0659 36.2514 33.6817 36.2514H42.9118C43.5287 36.2514 44.0272 36.7586 44.0272 37.3849V46.7387Z" fill="#35972F" />
                        <path d="M30.2767 60.6913C30.2767 61.3165 29.7762 61.8227 29.1593 61.8227H19.9293C19.3134 61.8227 18.814 61.3165 18.814 60.6913V51.3375C18.814 50.7133 19.3134 50.2061 19.9293 50.2061H29.1593C29.7762 50.2061 30.2767 50.7133 30.2767 51.3375V60.6913Z" fill="#35972F" />
                        <path d="M44.0272 60.6913C44.0272 61.3165 43.5287 61.8227 42.9118 61.8227H33.6817C33.0659 61.8227 32.5664 61.3165 32.5664 60.6913V51.3375C32.5664 50.7133 33.0659 50.2061 33.6817 50.2061H42.9118C43.5287 50.2061 44.0272 50.7133 44.0272 51.3375V60.6913Z" fill="#35972F" />
                        <path d="M30.8473 14.1834C30.8473 17.7113 28.0263 20.5715 24.5454 20.5715C21.0647 20.5715 18.2437 17.7113 18.2437 14.1834C18.2437 10.6535 21.0647 7.79336 24.5454 7.79336C28.0263 7.79336 30.8473 10.6535 30.8473 14.1834Z" fill="#C80B0F" />
                    </svg>
                    <div class="text-wrapper-3">ASPE.IFPE</div>
                </div>
                <div class="mb-4">Bem vindo(a)!</div>
                <div class="rectangle mb-2"></div>
                <div class="div  ml-4">Servidor</div>
                <p class="text-wrapper  ml-4">Sou servidor em exercício (IFPE)</p>

                <div class="rectangle-2 mt-2"></div>

            </div>
        </div>
    </main>
</body>

</html>