<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\BehaviorPatterns\ChainOfResponsibility;


use Exception;

/**
 *
 *
 * @author Smetanin Sergey
 */
class StockCheckHandler extends Handler
{
    /**
     *
     *
     * @param array $order
     *
     * @return array
     * @throws \Exception
     */
    public function handle(array $order): array
    {
        echo 'Проверяем наличие товара на складе...<br />';

        foreach ($order['items'] as $item) {
            if ($item['stock'] <= 0) {
                throw new Exception("Товар \"{$item['name']}\" недоступен!");
            }
        }

        echo 'Все товары в наличии.<br />';
        return parent::handle($order);
    }
}
