<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Proxy;

use App\GangOfFourDesignPatterns\StructuralPatterns\Proxy\Contracts\ProductImage;

/**
 * Реальный объект, представляющий ресурсоёмкое изображение
 *
 * @author Smetanin Sergey
 */
class RealProductImage implements ProductImage
{
    // Имя файла изображения
    private string $filename;

    /**
     * Загружает изображение при создании объекта
     *
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->filename = $filename;
        // Немедленная загрузка ресурса
        $this->loadImage();
    }

    /**
     * Имитация загрузки изображения
     */
    private function loadImage(): void
    {
        echo "Загрузка изображения {$this->filename} из хранилища...\n";
    }

    /**
     * Отображение изображения
     */
    public function display(): void
    {
        echo "Отображение изображения {$this->filename}\n";
    }
}
