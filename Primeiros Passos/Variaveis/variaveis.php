<?php

  $nome = "Vinicius";
  echo "<strong>$nome</strong><br>"; //aprensenta o valor
  var_dump($nome); // apresenta o tipo da variável, o tanho e o valor

  //Nome de variáves (Padrão)
    //serem explicativas
    //camelcase
  $anoNascimento = 1990;
  $nomeCompleto = "Vinicius Führ de Borba";

  //Variaveis com numero
    //Errado
  
      // $1nome = "Vinicius";
    //Certo
      $nome1 = "Vinicius";
      // ou
      $_nome = "Vinicius";
      
    //concatenação (. entre duas variáveis)
      $nomeCompleto2 = $nome1 . $_nome;

      echo $nomeCompleto2;

      // exit;
      //para a execução do programa, o que tiver pra baixo não sera executado

    //variáveis reservadas
      //não podem ser nome de variáveis
      //$this ou $_SERVER

  //Apagando variáveis(unset)
  unset($nome1, $_nome);

  //verifica se a variavel foi definida(isset)
  if(isset($nome1)){
    echo($nome1 . $_nome);
  }

  echo($nome1 . $_nome);
  //apresentara um Notice informando que a variável não é definida(nula)


  //Tipos de Dados (8 tipos no PHP)
    //Tipos Básicos
      //Integer, Float, String e Boolean
        //string
          $nomeEmpresa = "TGW";
          $site = 'www.udemy.com';
        //integer 
          $ano = 2021;
        //float
          $salario = 1203.06;
        //boolean
          $bloqueado = false;
    
    //Tipos Compostos
      //Array e object

        //array
          $frutas = array("Abacaxi", "Laranja", "Manga");
        //pegar um elemento na sua posição
        echo "<br>$frutas[2]<br>";

        //object
          $nascimento = new DateTime();
          var_dump($nascimento);
        
    //Tipos Especiais
      //Resource e null

        //resource
          $arquivo = fopen("variaveis.php", "r");
          var_dump($arquivo);

        //null é ausencia de valor
        //vazio foi iniciado mas não tem valor
        //quando destroi uma variável ele fica nula
        //null
          $nulo = null;
        //vazio
          $texto = "";


  //Variáves pré-definidas(arrays superglobais)
    //Variáveis externas
      //Example: $_POST or $_GET
        $nome3 = (int)$_GET["a"];
        $nome4 = (int)$_GET["b"];
        //query string
          //? usado para passar parametros
            //?a=123 depois do .php(url da pagina)
          //(int) converte o valor para inteiro
          //?a=123&b=456
            //& usado para acrecentar uma informação na url neste caso o nome4

        var_dump($nome3);
        var_dump($nome4);

        //pega o IP do provedor de acesso
          $ip = $_SERVER["REMOTE_ADDR"];
        //pega o caminho
          $ip = $_SERVER["SCRIPT_NAME"];

          echo $ip;

    //Variaveis de ambiente(superglobais, são acessiveis por todo o programa)


  //Escope de Variável
    //Até onde a variável será enxergada/acessível

    //Variável de escopo local
      //Só será acessível ao arquivo onde ela foi criada(example: dentro de uma function)

      //escopo global
      $nome5 = "Vinicius";

      function test(){
        //escopo local
          //não vai rechonhecer, pois estão em escopos diferentes
          //somente será reconhecida quando usar global para escutar a variável
        global $nome5;
        echo $nome5;
      };
      //por estarem em escopos diferentes eles podem ter o 
      //mesmo nome e não interferem uma na outra

      function test2(){
        $nome5 = "Carlos";

        echo $nome5."Teste2";
      }

      function test3(){
        global $message;
        $message = "olá";
      }

      test();
      test2();

      test3();

      $message;

      echo $message;
?>
