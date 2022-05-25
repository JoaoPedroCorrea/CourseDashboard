<?php
require_once('cookie.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Curso PHP</title>
</head>
<body>
        <header class="cabecalho">
            <h1>Curso PHP</h1>
            <h2>Índice dos Exercícios</h2>
        </header>
        <nav class="navegacao">
            <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
            <a href="logout.php">Sair</a>
        </nav>
    <main class="principal">
        <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo roxo">
                        <h3>Database</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=db&file=createDB">Create Database</a></li>
                        <li><a href="exercicio.php?dir=db&file=createTables">Create Tables</a></li>
                        <li><a href="exercicio.php?dir=db&file=select">Select</a></li>
                        <li><a href="exercicio.php?dir=db&file=insert_01">Insert #01</a></li>
                        <li><a href="exercicio.php?dir=db&file=insert_02">Insert #02</a></li>
                        <li><a href="exercicio.php?dir=db&file=delete_01">Delete #01</a></li>
                        <li><a href="exercicio.php?dir=db&file=delete_02">Delete #02</a></li>
                        <li><a href="exercicio.php?dir=db&file=update">Update</a></li>
                        <li><a href="exercicio.php?dir=db&file=connection_pdo">Connection PDO</a></li>
                        <li><a href="exercicio.php?dir=db&file=insert_pdo">Insert PDO</a></li>
                        <li><a href="exercicio.php?dir=db&file=select_pdo">Select PDO</a></li>
                        <li><a href="exercicio.php?dir=db&file=delete_pdo">Delete PDO</a></li>
                        <li><a href="exercicio.php?dir=db&file=update_pdo">Update PDO</a></li>
                        </ul>
                    </div>
                    <div class="modulo laranja">
                        <h3>Formulário</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=formulario&file=formulario">Formulário</a></li>
                        </ul>
                    </div>
                    <div class="modulo azul">
                        <h3>API</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=api&file=datas_01">Datas #01</a></li>
                        <li><a href="exercicio.php?dir=api&file=datas_02">Datas #02</a></li>
                        <li><a href="exercicio.php?dir=api&file=escrever_arquivo">Escrever Arquivos</a></li>
                        <li><a href="exercicio.php?dir=api&file=ler_arquivo">Ler Arquivos</a></li>
                        <li><a href="exercicio.php?dir=api&file=upload">Upload</a></li>
                        <li><a href="exercicio.php?dir=api&file=download">Download</a></li>
                        <li><a href="exercicio.php?dir=api&file=imagens">Imagens</a></li>
                        </ul>
                    </div>
                    <div class="modulo verde">
                        <h3>Cookies e Sessão</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=sessao&file=basico_sessao">Básico</a></li>
                        <li><a href="exercicio.php?dir=sessao&file=gerenciando_sessao">Gerenciando Sessão</a></li>
                        </ul>
                    </div>
                    <div class="modulo amarelo-escuro">
                        <h3>Tratamento de Erros</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=tratamento_erro&file=try_catch">Try/Catch</a></li>
                        <li><a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">Erros Personalizados</a></li>
                        <li><a href="exercicio.php?dir=tratamento_erro&file=desafio_intdiv_teste">Desafio intdiv</a></li>
                        <li><a href="exercicio.php?dir=tratamento_erro&file=gerenciador_erro">Error Handler</a></li>
                        </ul>
                    </div>
                    <div class="modulo laranja-escuro">
                        <h3>Namespace</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=namespace&file=basico">Básico</a></li>
                        <li><a href="exercicio.php?dir=namespace&file=sub_namespaces">Sub-Namespace</a></li>
                        <li><a href="exercicio.php?dir=namespace&file=use_as">Use/As</a></li>
                        </ul>
                    </div>
                    <div class="modulo roxo-escuro">
                        <h3>Includes</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=includes&file=include">Include</a></li>
                        <li><a href="exercicio.php?dir=includes&file=include_funcao">Include em Função</a></li>
                        <li><a href="exercicio.php?dir=includes&file=include_require">Include vs. Require</a></li>
                        <li><a href="exercicio.php?dir=includes&file=require_return">Require & Return</a></li>
                        <li><a href="exercicio.php?dir=includes&file=include_once">Include Once</a></li>
                        </ul>
                    </div>
                    <div class="modulo azul-escuro">
                        <h3>Paradigma O.O.</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=classes_objetos&file=classe">Classes e Objetos</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=desafio_data">Desafio Data</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=construtor_destrutor">Construtor e Destrutor</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=heranca">Herança</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=static">Membros Estáticos</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=interface">Interfaces</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=abstract">Abstract</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=desafio_erros">Desafio 7 Erros</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=final">Modificador Final</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=trait_01">Trait #01</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=trait_02">Trait #02</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=magic_methods">Metodos Mágicos</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=polimorfismo">Polimorfismo</a></li>
                        </ul>
                    </div>
                    <div class="modulo vermelho-escuro">
                    <h3>Funções</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=funcoes&file=escopo">Função & Escopo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_retorno">Argumentos e Retorno</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=palindromo">Desafio Palindromo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_variaveis">Argumentos Variáveis</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_padrao">Argumento Padrão</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=tipos">Declarando Tipos</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=funcoes_anonimas">Funções Anonimas</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=closure_callable">Closure & Callable</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=recursividade">Recursividade</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=desafio_recursividade">Desafio Recursividade</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando Função</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=map_filter">Map & Filter</a></li>
                        </ul>
                    </div>
                    <div class="modulo verde-escuro">
                        <h3>Estruturas de Controle 2</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=repeticoes&file=for">Laço For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_for">Desafio For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=foreach">Foreach</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=break_continue">Break/Continue</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_impressao">Desafio Impressão</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=while">While/Do While</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela">Desafio Tabela</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela2">Desafio Tabela 2</a></li>
                        </ul>
                    </div>
                    <div class="modulo laranja">
                        <h3>Arrays</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=array&file=basico">Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=mapa">Mapa</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_index">Desafio Index</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a></li>
                        <li><a href="exercicio.php?dir=array&file=operacoes">Operações</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio Sorteio</a></li>
                        <li><a href="exercicio.php?dir=array&file=multi">Arrays Multidimensionais</a></li>
                        <li><a href="exercicio.php?dir=array&file=constantes">Arrays Constantes</a></li>
                        <li><a href="exercicio.php?dir=array&file=get">$_GET</a></li>
                        <li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
                        <li><a href="exercicio.php?dir=array&file=comparacao">Comparação Arrays</a></li>
                        </ul>
                    </div>
                    <div class="modulo azul">
                        <h3>Estruturas de Controle</h3>
                        <ul>
                            <li><a href="exercicio.php?dir=controle&file=if_else">If else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_op_logicos">Desafio Op. Lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternário</a></li>
                        <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a></li>
                        </ul>
                    </div>
                    <div class="modulo roxo">
                        <h3>Variáveis</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs. Referencia</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                        </ul>
                    </div>    
                    <div class="modulo vermelho">
                        <h3>Tipos</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=boolean">Tipo Boolean</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                        </ul>
                    </div>
                    <div class="modulo verde">
                        <h3>Básico</h3>
                        <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                        </ul>
                    </div>
                </nav>
        </div>
    </main>
    <footer class="rodape">
        ESSENTIAL UNIVERSITY © <?= date('Y'); ?>
    </footer>
</body>
</html>