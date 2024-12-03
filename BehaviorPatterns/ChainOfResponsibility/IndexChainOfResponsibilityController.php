<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\BehaviorPatterns\ChainOfResponsibility;

use Exception;

/**
 * Пример реализации цепочки ответственности в интернет-магазине.
 *
 * @author Smetanin Sergey
 */
class IndexChainOfResponsibilityController
{
    /**
     * Обработка заказа с помощью цепочки ответственности.
     */
    public function index(): void
    {
        try {
            // Создаем обработчики
            $stockCheckHandler = new StockCheckHandler(); // Проверка наличия на складе
            $deliveryCheckHandler = new DeliveryCheckHandler(); // Проверка доступности доставки
            $discountHandler = new DiscountHandler(); // Применение скидок
            $finalizeOrderHandler = new FinalizeOrderHandler(); // Завершение обработки заказа

            // Устанавливаем порядок в цепочке
            $stockCheckHandler
                ->setNext($deliveryCheckHandler) // Следующий: проверка доставки
                ->setNext($discountHandler) // Следующий: применение скидок
                ->setNext($finalizeOrderHandler); // Последний: завершение заказа

            // Пример данных заказа
            $order = [
                'items' => [
                    ['name' => 'Куртка', 'stock' => 10], // Товар: куртка, доступно 10 шт.
                    ['name' => 'Штаны', 'stock' => 5],  // Товар: штаны, доступно 5 шт.
                ],
                'region' => 'US', // Регион доставки
                'total' => 120, // Общая сумма заказа
            ];

            // Передача заказа на обработку
            $processedOrder = $stockCheckHandler->handle($order);
        } catch (Exception $e) {
            // Вывод ошибки, если обработка не удалась
            echo 'Ошибка обработки заказа: ' . $e->getMessage() . '<br />';
        }
    }
}
