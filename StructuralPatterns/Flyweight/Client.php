<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight;

use App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight\Contracts\ClothingItemFlyweight;

/**
 * Класс Client представляет клиента интернет-магазина, который может добавлять товары в свою корзину
 * и отображать содержимое корзины.
 *
 * @author Smetanin Sergey
 */
class Client
{
    // Массив для хранения элементов корзины покупок
    private array $shoppingCart = [];

    /**
     * Метод для добавления товара в корзину. Создаёт новый элемент корзины с заданными параметрами
     * и добавляет его в массив корзины.
     *
     * @param ClothingItemFlyweight $flyweight - Приспособленец (товар)
     * @param string                $size      - Размер товара
     * @param string                $color     - Цвет товара
     * @param int                   $quantity  - Количество товара
     */
    public function addItemToCart(ClothingItemFlyweight $flyweight, string $size, string $color, int $quantity): void
    {
        // Создаём новый элемент корзины и добавляем его в массив
        $cartItem = new ShoppingCartItem($flyweight, $size, $color, $quantity);
        $this->shoppingCart[] = $cartItem;
    }

    /**
     * Метод для отображения содержимого корзины. Проходит по всем элементам корзины
     * и вызывает метод display() для каждого из них.
     */
    public function displayCart(): void
    {
        foreach ($this->shoppingCart as $item) {
            $item->display(); // Отображаем данные о товаре
        }
    }
}
