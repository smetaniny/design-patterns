<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Facade\Services;

/**
 * Сервис для работы с платежами.
 * Обрабатывает запросы, связанные с оплатой заказов.
 *
 * @author Smetanin Sergey
 */
class PaymentService
{
    /**
     * Обработка платежа по заказу.
     *
     * Здесь можно реализовать логику интеграции с платежными шлюзами
     * или другими системами для выполнения и подтверждения платежей.
     *
     * @param int    $orderId     Идентификатор заказа
     * @param string $paymentInfo Информация о платеже (например, способ оплаты)
     *
     * @return string Сообщение об успешной обработке платежа
     */
    public function processPayment(int $orderId, string $paymentInfo): string
    {
        // Логика для обработки платежа (например, интеграция с платежным API)
        return "Платеж обработан для идентификатора заказа: $orderId используя способ оплаты: $paymentInfo";
    }
}
