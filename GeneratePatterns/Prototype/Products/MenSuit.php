<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Products;

use App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Contracts\Prototype;

/**
 *
 * Класс МужскойКостюм, который реализует интерфейс Prototype
 *
 * @author Smetanin Sergey
 */
class MenSuit implements Prototype
{
    // Свойство для хранения размера костюма
    private string $size;

    // Свойство для хранения цвета костюма
    private string $color;

    /**
     * Конструктор для инициализации размера и цвета
     *
     * @param string    $size
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
        return new MenSuit($this->size, $this->color); // Возвращаем новый экземпляр
    }

    /**
     * Получаем информацию о продукте.
     *
     * @return string
     */
    public function getInfo(): string
    {
        return "Men's Suit: Size - {$this->size}, Color - {$this->color}";
    }
}
