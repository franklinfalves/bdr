# Teste de BDR – Analista Desenvolvedor Home Office  - Franklin Alves

## Questão 1 - Pasta "questao1"
* Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.

### Solução: 
 * Olá Amigos, nesta questão ultilizei um laço de repetição (For) para impressão de números de 1 a 100,
a codificação está seguindo os padrões PSR-2 conforme pedido, seguindo todas as boas normas de formatação como:
espaços entre palavras chaves, fechamento, linhas, parênteses etc. Logo após isso uso o Switch case, ultilizando 
ele julgo um código mais organizado e a leitura fica mais clara para outro programador. Gosto muito de utilizar
a função FMOD para testar o resto da divisão (no caso por zero), nada impediria de usar outras funções. Na questão não pede, mas Coloquei um <BR> no final da linha para uma quebra e ter um apresentação mais adequada do resultado no browser, padrões php ultilizam o \n, porém o br é melhor para compatilibilidade no browser. Para um PLUS, ultilizo ainda uma clase Multiplos com um método publico show(), caso fosse necessário utilizar esta função em outras partes do projeto, no exemplo abaixo eu apenas fiz uma chamada da classe junto com a seu método através do :: para mostrar o exemplo rodando ;)

### Instalação
* Depois de colocado no servidor php de preferencia, apenas coloque no diretorio e acesse pelo http://localhost/questao1

## Questão 2 - Pasta "questao2"
* Refatore o código abaixo, fazendo as alterações que julgar necessário.
```
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
    header("Location: http://www.google.com");
    exit();
}
```

### Solução: 
```
<?php
function redirect()
{
    header("Location: http://www.google.com");
    exit();
}

$verifySessionLoginIn = (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true);
$verifyCookieLoginIn  = (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true);

if ($verifySessionLoginIn || $verifyCookieLoginIn) {
    redirect();
}
```
* Criei um método simplório para redirecionamento chamado redirect(), eliminando assim as repetições em código de uma chamada muito simples como constava no enunciado. Adaptei o código para o PSR-2, tornei mais legível a leitura do código, jogando as comparações de sessão e cookie em apenas uma linha e atribuindo a apenas uma variável, logo após ultizo apenas uma condição || ou, para a chama do redirect, assim não será necessário muitos If's ;)

### Instalação
* Para executar a solução acesse http://localhost/questao1

## Questão 3 - Pasta "questao3"
* Refatore o código abaixo, fazendo as alterações que julgar necessário.
```
<?php
class MyUserClass {
    public function getUserList() {
        $dbconn = new DatabaseConnection('localhost','user','password');
        $results = $dbconn->query('select name from user');
        sort($results);
        return $results;
    }
}
```

### Solução: 
* abaixo temos a nossa Classe Connect que implementa um padrão de projeto chamado Singleton, nele apenas uma instância de Conexao será preservada durante toda a aplicação. Ao solicitar um “getInstance()” na nossa classe Conexao, é verificado se a mesma já possui uma instância criada em memória, caso contrário ele irá iniciar o processo de criação. Foi adicionado a biblioteca PDO para otimização e segurança da codificação, uma vez ela instalada no projeto pode ser utilizada conforme o exemplo decorrido. Depois isolo a função getUserList afim de retornar apenas o que é proposto (a lista de usuário), retiro a função SORT e atribuo ao SQL esta função, passando a responsabilidade apenas para a camda de persistencia como sugere a maioria das padronizações, ordenando os nomes dos usuários por ordem alfabética no ASC do SQL. No final a função é chamda getUserList();


### Instalação
* Criação de um Banco de Dados em um servidor próprio, assim, passando os parâmentros de conexão corretamente para os parâmetros da classe, e logo após criar a tabela com um insert válido para teste, segue abaixo.
```
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

INSERT INTO `user`(`id`,`name`) VALUES (1,'Franklin'),(2,'Paul');
```

## Questão 4 - Pasta "questao4"
* Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por prioridade.

Desenvolver utilizando:
* Linguagem PHP (ou framework CakePHP);
* Banco de dados MySQL;

Diferenciais:
* Criação de interface para visualização da lista de tarefas; (Implementado)
* Interface com drag and drop; (implementado)
* Interface responsiva (desktop e mobile); (Implementado)

### Solução: 
* Fazer a importação do arquivo bdr.sql onde consta uma tabela task, para inclusão de atividades.
- Operações do API Index, View, Add, Edit e Delete
- Desenvolvido em Codeinigter

### Requisitos
* PHP 5.6.0 ou superior.
* MySQL

### Instalação
* Criar banco de dados mysql e adicionar a tabela tarefas:
* Criar um banco de dados e adicionar a tabela com o comando:
```
CREATE TABLE `task`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NULL,
  `description` varchar(255) NULL,
  `priority` int(11) NULL,
  PRIMARY KEY (`id`)
);
```
* Colocar a pasta "questao4" no servidor
* Reconfigurar os dados de acesso a banco no arquivo "http://localhost/bdr/questao4/config/database.php" adequando "hostname", "username", "password" e "database" apartir da linha 78;

* Acessar - http://localhost/bdr/questao4/index.php/action/read