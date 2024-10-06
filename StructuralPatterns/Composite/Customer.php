<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Composite;

use App\GangOfFourDesignPatterns\StructuralPatterns\Composite\Products\Category;
use App\GangOfFourDesignPatterns\StructuralPatterns\Composite\Products\Product;

/**
 * Класс Customer представляет клиента интернет-магазина,
 * который взаимодействует с товарами и корзиной покупок.
 *
 * @author Smetanin Sergey
 */
class Customer
{
    // Корзина покупок клиента
    private ShoppingCart $cart;

    /**
     * Конструктор класса Customer.
     * Инициализирует новую корзину покупок для клиента.
     */
    public function __construct()
    {
        $this->cart = new ShoppingCart();
    }

    /**
     * Метод viewCategory позволяет клиенту просматривать товары в заданной категории.
     *
     * @param Category $category - категория, которую клиент хочет просмотреть.
     */
    public function viewCategory(Category $category): void
    {
        echo '<hr />Перебор всех товаров в категории и вывод их названий и цен <br />';
        echo 'Категория: ' . $category->getName() . '<br />Товары:<br />';
        foreach ($category->getChildren() as $product) {
            echo '- ' . $product->getName() . ' (' . $product->getPrice() . ' RUB)<br />';
        }
    }

    /**
     * Метод addToCart позволяет клиенту добавлять товары в корзину.
     *
     * @param Product $product - товар, который клиент хочет добавить в корзину.
     */
    public function addToCart(Product $product): void
    {
        echo '<hr />Добавление товара в корзину <br />';
        $this->cart->addProduct($product);
        echo "Товар '" . $product->getName() . "' добавлен в корзину.<br />";
    }

    /**
     * Метод getCartTotal возвращает общую стоимость товаров в корзине.
     *
     * @return float - общая стоимость товаров в корзине.
     */
    public function getCartTotal(): float
    {
        return $this->cart->getTotal(); // Получение общей стоимости
    }
}
