<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Decorator\Products;

/**
 * Абстрактный класс Decorator является базовым классом для всех декораторов,
 * которые могут добавлять дополнительные обязанности к объектам Product.
 *
 * Он наследует от класса Product и содержит ссылку на объект Product,
 * позволяя декораторам расширять функциональность базовых продуктов.
 *
 * @author Smetanin Sergey
 */
abstract class Decorator extends Product {
    // Хранит ссылку на оборачиваемый объект Product
    protected Product $product;

    /**
     * Конструктор принимает объект Product и сохраняет его в свойстве $product.
     *
     * @param Product $product Объект, который будет обернут декоратором.
     */
    public function __construct(Product $product) {
        $this->product = $product;
    }

    /**
     * Получает описание продукта, обернутого в декоратор.
     *
     * Конкретные реализации этого метода должны добавлять свою
     * информацию к описанию базового продукта.
     *
     * @return string Описание продукта с учетом декоратора.
     */
    abstract public function getDescription(): string;

    /**
     * Получает стоимость продукта, обернутого в декоратор.
     *
     * Конкретные реализации этого метода должны учитывать как
     * стоимость базового продукта, так и дополнительные
     * расходы, связанные с декорацией.
     *
     * @return float Цена продукта с учетом декоратора.
     */
    abstract public function cost(): float;
}
