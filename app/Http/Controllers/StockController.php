<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\StockRepositoryInterface;
use App\Services\StockService;
use App\Http\Requests\StockBuyRequest;
use App\Http\Requests\StockSellRequest;

class StockController extends Controller
{
    protected $stockRepository;
    protected $stockService;

    public function __construct(StockRepositoryInterface $stockRepository, StockService $stockService)
    {
        $this->stockRepository = $stockRepository;
        $this->stockService = $stockService;
    }

    public function buy(StockBuyRequest $request)
    {
        $data = $request->validated();
        $stock = $this->stockService->buyStock($data);
        return response()->json(['message' => 'Ação comprada com sucesso', 'stock' => $stock]);
    }

    public function sell(StockSellRequest $request, $id)
    {
        $quantity = $request->validated()['quantity'];
        $stock = $this->stockService->sellStock($id, $quantity);
        
        if (!$stock) {
            return response()->json(['message' => 'Ação não encontrada ou com quantidade insuficiente para vender'], 400);
        }

        return response()->json(['message' => 'Ação vendida com sucesso', 'stock' => $stock]);
    }

    public function index()
    {
        $stocks = $this->stockRepository->all();
        return response()->json($stocks);
    }
}