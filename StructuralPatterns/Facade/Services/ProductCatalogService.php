<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Facade\Services;

/**
 * Сервис для работы с каталогом продуктов.
 * Обрабатывает запросы, связанные с информацией о продуктах.
 *
 * @author Smetanin Sergey
 */
class ProductCatalogService
{
    /**
     * Получить подробную информацию о продукте по его идентификатору.
     *
     * Здесь можно реализовать логику получения данных о продукте, например,
     * обращение к базе данных или к API внешних сервисов.
     *
     * @param int $productId Идентификатор продукта
     *
     * @return string Подробная информация о продукте
     */
    public function getProductDetails($productId): string
    {
        // Логика для получения информации о товаре из базы данных
        return "Подробная информация о продукте для идентификатора продукта: $productId";
    }
}
