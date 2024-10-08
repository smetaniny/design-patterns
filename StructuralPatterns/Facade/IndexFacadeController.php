<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Facade;

use App\Facades\Shop;
use Illuminate\Http\Request;

/**
 * Контроллер для демонстрации использования фасада в интернет-магазине.
 * Фасад `Shop` используется для упрощения взаимодействия с логикой магазина,
 * скрывая взаимодействие с подсистемами (каталог, заказы, платежи).
 *
 * @author Smetanin Sergey
 */
class IndexFacadeController
{
    /**
     * Метод для просмотра информации о товаре по его ID.
     * Взаимодействует с фасадом `Shop` для получения сведений о товаре.
     *
     * @param int $productId ID товара
     */
    public function viewProduct(int $productId): void
    {
        // Получаем информацию о товаре через фасад
        $productDetails = Shop::viewProduct($productId);

        // Выводим информацию о товаре (здесь может быть реальный вывод через представление)
        echo $productDetails;
    }

    /**
     * Метод для оформления заказа на товар.
     * Взаимодействует с фасадом `Shop` для создания нового заказа.
     *
     * @param int     $productId ID товара
     * @param Request $request   HTTP-запрос, содержащий данные заказа (например, количество товара)
     */
    public function orderProduct(int $productId, Request $request): void
    {
        // Извлекаем количество товара из запроса, если не указано — используем 1
        $quantity = $request->input('quantity') ?: 1;

        // Оформляем заказ через фасад
        $orderDetails = Shop::placeOrder($productId, $quantity);

        // Выводим информацию о созданном заказе
        echo $orderDetails;
    }

    /**
     * Метод для оплаты заказа.
     * Взаимодействует с фасадом `Shop` для обработки платежа за заказ.
     *
     * @param int     $orderId ID заказа
     * @param Request $request HTTP-запрос, содержащий информацию об оплате (например, способ оплаты)
     */
    public function payForOrder(int $orderId, Request $request): void
    {
        // Извлекаем информацию о платеже из запроса, если не указана — используем способ "online"
        $paymentInfo = $request->input('payment_info') ?: 'online';

        // Обрабатываем платеж через фасад
        $paymentResult = Shop::makePayment($orderId, $paymentInfo);

        // Выводим результат платежа
        echo $paymentResult;
    }
}
