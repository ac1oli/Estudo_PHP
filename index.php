<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">

    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Indice dos exercicios</h2>
    </header>

    <main class="principal">

        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Seção 1 - Basico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>Seção 2 - Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=opAritimetrica">Op. Aritimetricas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio precedencia</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=boolean">Tipo Boolean</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=convercoes">Converções</a></li>
                    </ul>
                </div>

                <div class="modulo azul">
                    <h3>Seção 3 - Variaveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variaveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio de Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variaveis Variaveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variavel">Desafio Variavel</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_vs_referencia">Valor VS Referencia</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constante">Constante</a></li>
                    </ul>
                </div>

                <div class="modulo roxo">
                    <h3>Seção 4 - Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">IF - Else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=if_operadores_relacionados">Operadores Relacional</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Logicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Op. Logicos</a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </main>

    <footer class="rodape">
        Alexsandro Acioli &copy; <?= date('Y');?>
    </footer> 
</body>
</html>