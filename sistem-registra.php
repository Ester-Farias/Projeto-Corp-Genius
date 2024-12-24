<?php
    session_start();

    //Formatando os itens recebidos do formulário part 1
    $titulo = str_replace('#', '-' , $_POST['titulo']);
    $categoria_value = $_POST['categoria'];
    $descricao = str_replace('#', '-' , $_POST['descricao']);
    $pp = str_replace('#', '-' , $_POST['pp']);
    
    $categoria_options = [
        '1' => 'Hardware',
        '2' => 'Software',
        '3' => 'RH',
        '4' => 'Outro',
    ];
    
    // Check if the selected option value exists in the mapping, and if so, assign its text
    if (isset($categoria_options[$categoria_value])) {
        $categoria = $categoria_options[$categoria_value];
    } else {
        // Handle the case where the value is not found (default to a specific value or show an error)
        $categoria = 'Categoria não especificada';
    }
    //Ao abrir o arquivo, se ele ainda não existe, ele é criado
    $arquivo = fopen('arquivo.md', 'a'); //O segundo parâmetro indica se é leitura, escrita e etc.
    
    //Separando os itens das categorias enviados com #
                                                                // PHP_EOL --->Constante que cria quebra de linha
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $pp . '#' . $descricao . PHP_EOL;
    
    // Escrevendo os itens que foi enviado do formulário dentro do arquivo criado.
    fwrite($arquivo, $texto);//1 parâmetro é o arquivo //2 parâmetro é o que será adicionado no arquivo
    // Depois de escrever no arquivo precisamos fecha-lo
    fclose($arquivo);
    // Redirecionando o usuário para home após ele submeter o formulário
    header('Location: home2.php');
    echo $texto;
?>