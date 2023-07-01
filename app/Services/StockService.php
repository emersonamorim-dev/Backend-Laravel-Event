<?php

namespace App\Services;

use App\Repositories\Interfaces\StockRepositoryInterface;

class StockService
{
    protected $stockRepository;

    public function __construct(StockRepositoryInterface $stockRepository)
    {
        $this->stockRepository = $stockRepository;
    }

    public function buyStock(array $data)
    {

        // Cria um novo registro de estoque com os dados fornecidos.
        $stock = $this->stockRepository->create([
            'symbol' => $data['symbol'],
            'price' => $data['price'],
            'quantity' => $data['quantity']
        ]);


        // Retornando o estoque criado.
        return $stock;
    }

    public function sellStock($id, $quantity)
    {
        // Buscando a ação pelo ID.
        $stock = $this->stockRepository->findById($id);

        // Verificando se a ação existe e se a quantidade é suficiente.
        if (!$stock || $stock->quantity < $quantity) {
            return false;
        }

        // Atualizando a quantidade da ação.
        $stock->quantity -= $quantity;

        // Salvando a ação atualizada.
        if ($stock->quantity > 0) {
            $this->stockRepository->update($stock);
        } else {
            // Se a quantidade é 0, então podemos remover a ação.
            $this->stockRepository->delete($stock);
        }

        // Retorna o objeto de estoque atualizado.
        return $stock;
    }
}
