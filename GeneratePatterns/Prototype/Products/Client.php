<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Products;

use App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Contracts\Prototype;

/**
 * Класс Client, который работает с объектами Prototype
 *
 * @author Smetanin Sergey
 */
class Client
{
    // Хранит ссылку на прототип
    private Prototype $prototype;

    /**
     * Конструктор, который принимает объект типа Prototype
     *
     * @param Prototype $prototype
     */
    public function __construct(Prototype $prototype)
    {
        // Устанавливаем прототип
        $this->prototype = $prototype;
    }

    /**
     * Метод для создания копии одежды, используя прототип
     *
     * @return Prototype
     */
    public function createClothes(): Prototype
    {
        // Клонирование объекта
        return $this->prototype->clone();
    }
}
