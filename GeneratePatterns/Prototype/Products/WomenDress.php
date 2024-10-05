<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Products;

use App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Contracts\Prototype;

/**
 * Класс, представляющий женское платье, реализующий интерфейс Prototype
 *
 * @author Smetanin Sergey
 */
class WomenDress implements Prototype
{
    // Свойство для хранения размера платья
    private string $size;

    // Свойство для хранения цвета платья
    private string $color;

    /**
     * Конструктор для инициализации размера и цвета
     *
     * @param string $size
     * @param string $color
     */
    public function __construct(string $size, string $color)
    {
        // Устанавливаем размер
        $this->size = $size;

        // Устанавливаем цвет
        $this->color = $color;
    }

    /**
     * Возвращает копию объекта.
     *
     * @return Prototype
     */
    public function clone(): Prototype
    {
        // Возвращаем новый экземпляр
        return new WomenDress($this->size, $this->color);
    }

    /**
     * Получаем информацию о продукте.
     *
     * @return string
     */
    public function getInfo(): string
    {
        return "Women's Dress: Size - {$this->size}, Color - {$this->color}";
    }
}
