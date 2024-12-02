<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Proxy;

use App\GangOfFourDesignPatterns\StructuralPatterns\Proxy\Contracts\ProductImage;

/**
 * Виртуальный заместитель для отложенной загрузки ресурсоёмкого объекта
 *
 * @author Smetanin Sergey
 */
class ImageProxy implements ProductImage
{
    // Имя файла изображения
    private string $filename;

    // Ссылка на реальный объект (отложенная инициализация)
    private ?RealProductImage $realImage = null;

    /**
     * Сохраняет информацию о файле для отложенной загрузки
     *
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    /**
     * Управляет доступом к реальному объекту с отложенной загрузкой
     */
    public function display(): void
    {
        if ($this->realImage === null) {
            echo "Создание реального объекта для {$this->filename}\n";
            // Инициализация реального объекта
            $this->realImage = new RealProductImage($this->filename);
        }

        // Делегирование вызова реальному объекту
        $this->realImage->display();
    }
}
