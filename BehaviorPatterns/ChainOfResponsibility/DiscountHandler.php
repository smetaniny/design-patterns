<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\BehaviorPatterns\ChainOfResponsibility;

/**
 *
 *
 * @author Smetanin Sergey
 */
class DiscountHandler extends Handler
{
    /**
     *
     *
     * @param array $order
     *
     * @return array
     */
    public function handle(array $order): array
    {
        echo 'Применяем скидки, если возможно...<br />';

        if ($order['total'] > 100) {
            $order['total'] *= 0.9; // 10% скидка
            echo "Скидка применена! Новая сумма заказа: {$order['total']}<br />";
        } else {
            echo 'Скидок нет.<br />';
        }

        return parent::handle($order);
    }
}
