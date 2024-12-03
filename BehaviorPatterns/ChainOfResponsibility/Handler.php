<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\BehaviorPatterns\ChainOfResponsibility;


/**
 *
 *
 * @author Smetanin Sergey
 */
abstract class Handler
{
    protected ?Handler $nextHandler = null;

    /**
     *
     *
     * @param Handler $handler
     *
     * @return Handler
     */
    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    /**
     *
     *
     * @param array $order
     *
     * @return array
     */
    public function handle(array $order): array
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($order);
        }
        return $order;
    }
}
