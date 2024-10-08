<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Facade\Services;

/**
 * Сервис для работы с заказами.
 * Обрабатывает запросы, связанные с созданием заказов на товары.
 *
 * @author Smetanin Sergey
 */
class OrderService
{
    /**
     * Создание нового заказа.
     *
     * Здесь можно реализовать логику, которая создаёт заказ в системе,
     * добавляет его в базу данных или отправляет информацию в другую систему.
     *
     * @param int $productId Идентификатор продукта, который заказывает клиент
     * @param int $quantity  Количество товара, которое заказывает клиент
     *
     * @return string Сообщение об успешном создании заказа
     */
    public function createOrder(int $productId, int $quantity): string
    {
        // Логика создания заказа (например, добавление записи в базу данных)
        return "Заказ создан для идентификатора продукта: $productId с количеством: $quantity";
    }
}
