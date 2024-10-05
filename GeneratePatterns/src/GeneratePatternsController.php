<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\src;

use App\GangOfFourDesignPatterns\GeneratePatterns\src\Builders\SuitBuilder;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories\MenClothingFactory;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Factories\WomenClothingFactory;
use App\GangOfFourDesignPatterns\GeneratePatterns\src\Prototypes\DressPrototype;
use function explode;
use function trim;

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
        $segments = explode('/', trim('catalog/женщинам/платье/', '/'));

        $filters = [
            'gender' => $segments[1],
            'clothingType' => $segments[2]
        ];

        if ($filters['gender'] === 'женщинам') {
            $factory = new WomenClothingFactory();
        } else {
            $factory = new MenClothingFactory();
        }

        if ($filters['clothingType'] === 'костюм') {
            $builder = new SuitBuilder();
            $builder->createJacket();
            $builder->createTrousers();
            $builder->createVest();
            $product = $builder->getResult();
        } else {
            // Создаем базовое платье
            $dress = $factory->createClothingItem('платье');

            // Используем прототип для клонирования платья
            $dressPrototype = new DressPrototype($dress);
            $clonedDress = $dressPrototype->clone();

            // Изменяем некоторые атрибуты клонированного платья
            $clonedDress->setPrice(3978); // Устанавливаем новую цену для клона

            // Выводим описание и цену созданного продукта
            echo 'Описание оригинального платья: ' . $dress->getDescription() . '<br />';
            echo 'Цена оригинального платья: ' . $dress->getPrice() . ' руб.<br />';

            echo 'Описание клонированного платья: ' . $clonedDress->getDescription() . '<br />';
            echo 'Цена клонированного платья: ' . $clonedDress->getPrice() . ' руб.<br />';
        }
    }
}
