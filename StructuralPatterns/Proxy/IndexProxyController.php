<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Proxy;

use App\GangOfFourDesignPatterns\StructuralPatterns\Proxy\Contracts\ProductImage;

/**
 * Контроллер для демонстрации паттерна Proxy
 *
 * @author Smetanin Sergey
 */
class IndexProxyController
{
    /**
     * Точка входа для демонстрации
     */
    public function index(): void
    {
        // Инициализация заместителя вместо реального объекта
        $imageProxy = new ImageProxy('product_image.jpg');

        // Проверка отложенной загрузки
        $this->clientCode($imageProxy);

        echo "\nПовторный вызов display():\n";
        // Проверка повторного вызова, без повторной загрузки ресурса
        $this->clientCode($imageProxy);
    }

    /**
     * Демонстрация работы с объектом через интерфейс
     *
     * @param ProductImage $image
     */
    public function clientCode(ProductImage $image): void
    {
        echo "Клиентский код вызывает display():\n";
        $image->display();
    }
}
