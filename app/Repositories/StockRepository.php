<?php

namespace App\Repositories;

use App\Models\Stock;
use Jenssegers\Mongodb\Eloquent\Model;

class StockRepository
{
    public function create(array $data)
    {
        return Stock::create($data);
    }

    public function findById($id)
    {
        return Stock::find($id);
    }

    public function update($id, array $data)
    {
        $stock = Stock::find($id);
        if ($stock) {
            $stock->update($data);
            return $stock;
        }
        return null;
    }

    public function delete($id)
    {
        return Stock::destroy($id);
    }

    public function all()
    {
        return Stock::all();
    }
}