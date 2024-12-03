<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\BehaviorPatterns\ChainOfResponsibility;

/**
 *
 *
 * @author Smetanin Sergey
 */
class FinalizeOrderHandler extends Handler
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
        echo "Заказ успешно обработан! Итоговая сумма: {$order['total']}<br />";
        return $order;
    }
}
