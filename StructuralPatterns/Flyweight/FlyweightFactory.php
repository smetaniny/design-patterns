<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight;

use App\GangOfFourDesignPatterns\StructuralPatterns\Flyweight\Contracts\ClothingItemFlyweight;

/**
 * Класс FlyweightFactory отвечает за создание и управление объектами-приспособленцами (товарами).
 * Он гарантирует, что для одинаковых товаров будет использоваться один и тот же объект.
 *
 * @author Smetanin Sergey
 */
class FlyweightFactory
{
    // Массив для хранения созданных приспособленцев (товаров)
    private array $flyweights = [];

    /**
     * Метод получения объекта-приспособленца (товара). Если товар уже существует, возвращает его;
     * если нет — создаёт новый товар и сохраняет его в массиве.
     *
     * @param string $name        - Название товара
     * @param string $description - Описание товара
     * @param float  $price       - Цена товара
     *
     * @return ClothingItemFlyweight - Возвращает объект приспособленца (товара)
     */
    public function getFlyweight(string $name, string $description, float $price): ClothingItemFlyweight
    {
        // Формируем уникальный ключ для товара на основе его характеристик (название, описание, цена)
        $key = md5($name . $description . $price);

        // Если товар с таким ключом ещё не создан, создаём новый объект и сохраняем его
        if (!isset($this->flyweights[$key])) {
            echo "Создан новый товар: {$name} <br />";
            $this->flyweights[$key] = new TshirtFlyweight($name, $description, $price);
        } else {
            // Если товар уже существует, используем ранее созданный объект
            echo "Использован существующий товар: {$name} <br />";
        }

        // Возвращаем приспособленца (товар)
        return $this->flyweights[$key];
    }
}
