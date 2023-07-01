# Descrição
Codificação em PHP Laravel para um Backend baseado em arquitetura de eventos para uma corretora de valores que seja bastante completo e tenha o códido totalmente desacoplado e siga boas praticas de progração. Implementado uso de Banco de dados relacional MongoDB.

O StockController faz parte de um aplicativo que lida com a compra e venda de ações. Ele é responsável por lidar com as solicitações HTTP relacionadas às transações de ações. O controlador depende de um StockRepository para buscar dados de um banco de dados e de um StockService para processar a lógica de negócio relacionada a ações.

O StockService é um componente que contém a lógica de negócio relacionada à compra e venda de ações no contexto de um aplicativo Laravel. Ele interage com um repositório StockRepository para lidar com operações de banco de dados relacionadas a ações.

O StockRepository é um componente responsável por interagir com o banco de dados para operações CRUD (Create, Read, Update, Delete) relacionadas a ações de estoque em um aplicativo Laravel. Ele utiliza o ORM Eloquent para manipular dados em um banco de dados MongoDB.

# Funcionalidades
1. Criar uma nova ação no banco de dados
2. Encontrar uma ação pelo ID
3. Atualizar uma ação existente
4. Excluir uma ação pelo ID
5. Listar todas as ações disponíveis

# Funcionalidades
- Comprar ações
- Vender ações
- Listar todas as ações disponíveis

# Instalação
1. Antes de usar este controlador, certifique-se de ter uma aplicação Laravel configurada. O controlador é projetado para ser usado com Laravel.

3. Clone o repositório ou copie o arquivo StockController.php para o diretório app/Http/Controllers da sua aplicação Laravel.

5. Certifique-se de que as dependências usadas pelo controlador estejam instaladas:

7. Execute composer require com os pacotes relevantes.
8. Associe o StockRepositoryInterface à sua implementação no AppServiceProvider.

Uso
O StockController fornece os seguintes endpoints:

# Comprar Ações
- Endpoint: /stocks/buy
- Método HTTP: POST
- Corpo da Solicitação:

{
    "symbol": "string",
    "quantity": "integer",
    "price": "number"
}

# Resposta: 
Um objeto JSON com uma mensagem de sucesso e o objeto de ação que foi comprado.
Exemplo:

{
    "message": "Ação comprada com sucesso",
    "stock": {
        "id": 1,
        "symbol": "AAPL",
        "quantity": 100,
        "price": 150.00
    }
}

# Vender Ações
- Endpoint: /stocks/sell/{id}
- Método HTTP: POST
- Corpo da Solicitação:

# Resposta: 
Um objeto JSON com uma mensagem de sucesso e o objeto da ação que foi vendida, ou uma mensagem de erro se a ação não for encontrada ou não houver ações suficientes para vender.
# Exemplo:
{
    "message": "Ação vendida com sucesso",
    "stock": {
        "id": 1,
        "symbol": "AAPL",
        "quantity": 50,
        "price": 150.00
    }
}

# Listar Todas as Ações
- Endpoint: /stocks
- Método HTTP: GET
- Resposta: Um array JSON de todas as ações.
- Exemplo:
[    {        "id": 1,        "symbol": "AAPL",        "quantity": 50,        "price": 150.00    },    {        "id": 2,        "symbol": "GOOGL",        "quantity": 30,        "price": 2800.00    }]

# Dependências

- Laravel
- Uma implementação de StockRepository vinculada ao StockRepositoryInterface
- Classe StockService
- StockBuyRequest e StockSellRequest para validação de entrada
- Contribuição
- Contribuições, issues e solicitações de recursos são bem-vindas. Sinta-se à vontade para verificar a página de issues se quiser contribuir.

# Autor
Emerson Amorim
