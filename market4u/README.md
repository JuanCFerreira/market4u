# Desafio Market4u

**Descrição do desafio:**

O desafio consiste na criação de uma aplicação API com a linguagem PHP, utilizando a leitura e escrita de dados em um banco MySQL.
O objetivo da aplicação é simular a escrita e leitura de uma transação com produtos realizada no sistema.

A API deve possibilitar a leitura e escrita de pelo menos os seguintes atributos;
* Id de identificação da transação;
* Cliente que efetuou a transação;
* Data da transação;
* Valor a ser pago da transação;
* Local que a transação ocorreu;
* Produtos da transação;
* Quantidade de produtos vendida;
* Valor de venda unitário de cada produto;

## Requesitos para rodar
* Configurar conexão ao banco pelo arquivo env
* Rodar os seguintes comandos na raiz da aplicação:
``` 
 composer install  
 php artisan migrate 
 php artisan serve 
 ```

## Endpoints

### Leitura: 
``` GET /api/transaction ```


### Gravação:
``` 
POST /api/transaction 
```

**Data:**
* client (numero)
* date
* value (double)
* location (text)
* products (json)

**Exemplo de JSON na coluna 'products':**

~~~ JSON
[
    {
        "product" : 2,
        "quantity" : 1,
        "unitary_value" : 5.50
    },
    {
        "product" : 3,
        "quantity" : 1,
        "unitary_value" : 5.40
    }
]
~~~

***Estou deixando a collection que usei no Postman na raiz do projeto***
