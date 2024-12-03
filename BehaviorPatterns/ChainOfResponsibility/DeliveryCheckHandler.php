<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\BehaviorPatterns\ChainOfResponsibility;

use Exception;

/**
 *
 *
 * @author Smetanin Sergey
 */
class DeliveryCheckHandler extends Handler
{
    /**
     * @throws \Exception
     */
    public function handle(array $order): array
    {
        echo 'Проверяем возможность доставки в регион...<br />';

        if (!in_array($order['region'], ['US', 'EU', 'CA'])) {
            throw new Exception("Доставка в регион \"{$order['region']}\" недоступна!");
        }

        echo 'Доставка доступна.<br />';
        return parent::handle($order);
    }
}

