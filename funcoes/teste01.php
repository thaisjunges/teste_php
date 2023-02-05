<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>
            Teste 01
        </title>
    </head>
        <body>
            
            <form method="post">
                
            <!--CRIAR UMA FUNCÃO QUE RECEBEU UMA PALAVRA(STRING) E VERIFIQUE SE NELA CONTEM A LETRA
            M OU N, SE CONTEM M DEVE SUBSTITUIR POR N E VICE VERSA E DEVOLVER A PALAVRA COM A ALTERAÇÃO-->

            <!--Usuário entrando com a informação(parâmetro)-->
            <label for="teste">Digite uma palavra: </label>
            <input type="text" name="quero_testar">
            <button type="submit">Enviar</button>
            </form>

            <?php 
    
            //Função que esta recebendo a informação(parâmetro) do usuário
            function troca_letras($quero_testar)
            {

                //Criando variavel para a informação(parâmetro)
                //$quero_testar = strtolower($_POST["quero_testar"]);
                $nova_letra = "";
                $comprimento_str = strlen($quero_testar);

                //Percorrendo cada caractere 
                for ($i = 0; $i < $comprimento_str; $i++) {
                    if ($quero_testar[$i] == 'm') {
                        $nova_letra .= 'n';
                    } elseif ($quero_testar[$i] == 'n') {
                        $nova_letra .= 'm';
                    } else {
                        $nova_letra .= $quero_testar[$i]  ;
                    }
                }
                return $nova_letra;
            }
                  
                
            if ($_POST["quero_testar"]) {
                $quero_testar = strtolower($_POST["quero_testar"]);
                echo 'A palavra digitada é: ' . troca_letras($quero_testar);
               
            }
           

            ?>

            
        </body>
</html>