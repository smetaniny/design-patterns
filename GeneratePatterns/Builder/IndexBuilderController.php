<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Builder;

use App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Builders\SuitBuilder; // Убедитесь, что это именно SuitBuilder
use App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Directors\ClothingDirector;

/**
 * Контроллер, который управляет процессом создания костюма
 *
 * @author Smetanin Sergey
 */
class IndexBuilderController
{
    /**
     * Метод для запуска процесса сборки костюма
     *
     * @return void
     */
    public function index(): void
    {
        // Создаем конкретного строителя для костюмов
        $suitBuilder = new SuitBuilder();

        // Создаем директора и передаем ему строителя
        $director = new ClothingDirector($suitBuilder);

        // Запускаем процесс сборки костюма
        $director->construct();

        // Получаем готовый костюм из строителя
        $suit = $suitBuilder->getSuit();

        // Выводим описание готового костюма на экран
        echo $suit->getDescription();
    }
}
