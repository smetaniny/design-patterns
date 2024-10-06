<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Composite;

use App\GangOfFourDesignPatterns\StructuralPatterns\Composite\Products\Product;

/**
 * Класс для корзины покупок
 *
 * @author Smetanin Sergey
 */
class ShoppingCart {
    private array$products = [];

    /**
     *
     *
     * @param Product $product
     */
    public function addProduct(Product $product): void {
        $this->products[] = $product;
    }

    /**
     *
     *
     * @param Product $product
     */
    public function removeProduct(Product $product): void {
        foreach ($this->products as $key => $item) {
            if ($item === $product) {
                unset($this->products[$key]);
            }
        }
    }

    /**
     *
     *
     * @return float
     */
    public function getTotal(): float {
        $total = 0.0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }
}
