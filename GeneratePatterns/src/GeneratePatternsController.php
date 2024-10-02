<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Builders\SuitBuilder;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories\MenClothingFactory;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories\WomenClothingFactory;

/**
 * Контроллер для демонстрации паттернов (Абстрактная фабрика, Абстрактный метод,
 * Строитель, Прототип, Синглтон) на основе URL фильтров.
 *
 * Этот контроллер разбирает входящий URL, чтобы определить, какой тип одежды создать
 * (например, костюм или платье), и использует соответствующую фабрику или строителя
 * для создания объекта одежды.
 *
 * @author Smetanin Sergey
 */
class GeneratePatternsController
{
    /**
     * Основной метод, который демонстрирует использование паттернов проектирования.
     *
     * Этот метод разбирает URL, выбирает нужную фабрику (для мужчин или женщин)
     * и создает либо костюм с использованием строителя, либо платье с использованием фабрики.
     *
     * Используемые паттерны:
     * - Абстрактная фабрика для создания одежды
     * - Строитель для создания компонентов костюма
     * - Прототип может использоваться для клонирования объектов (если необходимо)
     * - Синглтон для управления доступом к каталогу продуктов
     */
    public function index(): void
    {
        // Разбор URL для извлечения фильтров
        $filters = $this->extractFiltersFromUrl('catalog/мужской/платье/');

        // Определяем фабрику на основе пола
        if ($filters['gender'] === 'женщинам') {
            // Используем фабрику для создания женской одежды
            $factory = new WomenClothingFactory();
        } else {
            // Используем фабрику для создания мужской одежды
            $factory = new MenClothingFactory();
        }

        // Определяем, какой тип одежды требуется (платье или костюм)
        if ($filters['clothingType'] === 'костюм') {
            // Используем строителя для создания костюма
            $builder = new SuitBuilder();
            // Создаем компоненты костюма
            $builder->createJacket();
            $builder->createTrousers();
            $builder->createVest();
            // Получаем готовый продукт
            $product = $builder->getResult();
        } else {
            // Используем фабрику для создания платья
            $product = $factory->createClothingItem('платье');
        }

        // Выводим описание и цену созданного продукта
        echo 'Описание продукта: ' . $product->getDescription() . "\n";
        echo 'Цена продукта: ' . $product->getPrice() . " руб.\n";
    }

    /**
     * Извлекает фильтры из переданного URL.
     *
     * @param string $url URL, содержащий параметры для фильтрации.
     *
     * @return array Ассоциативный массив с фильтрами: 'gender' и 'clothingType'.
     */
    private function extractFiltersFromUrl(string $url): array
    {
        // Разбираем URL, например: catalog/женщинам/платье/
        $segments = explode('/', trim($url, '/'));

        return [
            'gender' => $segments[1],     // женщинам или мужчинам
            'clothingType' => $segments[2] // костюм или платье
        ];
    }
}
