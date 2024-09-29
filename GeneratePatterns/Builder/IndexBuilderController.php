<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Builder;

use App\GangOfFourDesignPatterns\GeneratePatterns\Builder\Builders\SuitBuilder;
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
        // SuitBuilder реализует методы для сборки частей костюма
        $suitBuilder = new SuitBuilder();

        // Создаем директора и передаем ему строителя
        // Директор управляет процессом сборки, используя переданный строитель
        $director = new ClothingDirector($suitBuilder);

        // Запускаем процесс сборки костюма
        // Директор вызывает методы строителя для создания частей костюма
        $director->construct();

        // Получаем готовый костюм из строителя
        // После завершения сборки мы можем получить собранный объект Suit
        $suit = $suitBuilder->getSuit();

        // Выводим описание готового костюма на экран
        // Метод getDescription() возвращает текстовое описание собранного костюма
        echo $suit->getDescription();
    }
}
