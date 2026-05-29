<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio da Alcione</title>
</head>
<body>
    <?php
    $nome = "Alcione";
    $saudacao = "Oi";
    $titulo = $saudacao . ", Portifolio da " . $nome;
    $subtitulo = "Seja bem vindo ao meu portifolio!!";
    $ano = 2024;

    $projetos = [
        [
            "titulo" => "Meu Portifolio",
            "finalizado" => false,
            "data" => "2024-10-11",
            "descricao" => "Meu primeiro portifolio. Escrito em PHP e HTML."
        ],
        [
            "titulo" => "Lista de tarefas",
            "finalizado" => true,
            "data" => "2024-00-11",
            "descricao" => "Lista de tarefas. Escrito em PHP e HTML."
        ],
    ];
    ?>

    <h1><?= $titulo?></h1>
    <p><?= $subtitulo?></p>
    <p><?php echo $ano?></p>

    <hr/>

    <ul>
        <?php foreach($projetos as $projeto): ?>

        <div <?php if(($ano - 2020) > 2): ?>
            style="background-color: burlywood;"
        <?php endif; ?>>

            <h2><?= $projeto['titulo']?></h2>
            <p><?= $projeto['descricao']?></p>

            <div>
                <p><?= $projeto['data']?></p>

                <div>Projeto:
                    <?php if(!$projeto['finalizado']): ?>
                        <span style="color: red">🚫 Não Finalizado</span>
                    <?php else: ?>
                        <span style="color: green">✅ Finalizado</span>
                    <?php endif; ?>
                </div>
            </div>

        </div>

        <?php endforeach; ?>
    </ul>

</body>
</html>