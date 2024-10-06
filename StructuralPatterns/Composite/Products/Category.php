<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Composite\Products;

/**
 * Класс Category представляет категорию товаров и может содержать другие товары или категории.
 * Позволяет управлять иерархией категорий в интернет-магазине.
 *
 * @author Smetanin Sergey
 */
class Category
{
    // Название категории
    private string $name;

    // Массив объектов типа Product или Category
    private array $children = [];

    /**
     * Конструктор класса Category.
     * Инициализирует новую категорию с указанным названием.
     *
     * @param string $name - Название категории.
     */
    public function __construct(string $name)
    {
        // Инициализация названия категории
        $this->name = $name;
    }

    /**
     * Метод getName возвращает название категории.
     *
     * @return string - Название категории.
     */
    public function getName(): string
    {
        // Возврат названия категории
        return $this->name;
    }

    /**
     * Метод add добавляет товар или подкатегорию в категорию.
     *
     * @param Product $product - Объект товара или подкатегории, который необходимо добавить.
     */
    public function add(Product $product): void
    {
        // Добавление элемента в массив дочерних элементов
        $this->children[] = $product;
    }

    /**
     * Метод remove удаляет указанный товар или подкатегорию из категории.
     *
     * @param Product $product - Объект товара или подкатегории, который необходимо удалить.
     */
    public function remove(Product $product): void
    {
        foreach ($this->children as $key => $child) {
            // Если найден элемент, совпадающий с удаляемым
            if ($child === $product) {
                // Удаление элемента из массива
                unset($this->children[$key]);
                break; // Прерывание цикла после удаления
            }
        }
    }

    /**
     * Метод getChild возвращает дочерний элемент по заданному индексу.
     *
     * @param int $index - Индекс дочернего элемента.
     *
     * @return Product|null - Возвращает дочерний элемент или null, если элемент не найден.
     */
    public function getChild(int $index): ?Product
    {
        // Возврат дочернего элемента по индексу или null
        return $this->children[$index] ?? null;
    }

    /**
     * Метод getChildren возвращает массив всех дочерних элементов категории.
     *
     * @return array - Массив дочерних элементов.
     */
    public function getChildren(): array
    {
        // Возврат массива дочерних элементов
        return $this->children;
    }

    /**
     * Метод setChildren позволяет установить массив дочерних элементов категории.
     *
     * @param Product[] $children - Массив дочерних элементов.
     * @return $this - Возвращает текущий экземпляр класса для цепочного вызова методов.
     */
    public function setChildren(array $children): Category
    {
        // Установка новых дочерних элементов
        $this->children = $children;
        return $this; // Позволяет продолжать вызов методов на текущем объекте
    }
}
