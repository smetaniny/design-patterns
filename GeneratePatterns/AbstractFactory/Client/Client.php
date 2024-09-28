<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Client;

use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories\Contracts\DressFactory;
use App\GangOfFourDesignPatterns\GeneratePatterns\AbstractFactory\Factories\Contracts\SuitFactory;

/**
 * Клиентский класс, который использует фабрики для создания костюмов и платьев.
 *
 * Этот класс служит для демонстрации использования фабрик, созданных в паттерне "Абстрактная Фабрика".
 * Он инкапсулирует взаимодействие с фабриками и предоставляет методы для создания конкретных
 * видов одежды (костюмы и платья).
 */
class Client
{
    // Фабрика для создания костюмов
    private SuitFactory $suitFactory;

    // Фабрика для создания платьев
    private DressFactory $dressFactory;

    /**
     * Конструктор принимает фабрики костюмов и платьев.
     *
     * @param SuitFactory  $suitFactory  Фабрика костюмов, используемая для создания различных типов костюмов.
     * @param DressFactory $dressFactory Фабрика платьев, используемая для создания различных типов платьев.
     */
    public function __construct(
        SuitFactory  $suitFactory,
        DressFactory $dressFactory,
    )
    {
        // Инициализация фабрики костюмов
        $this->suitFactory = $suitFactory;
        // Инициализация фабрики платьев
        $this->dressFactory = $dressFactory;
    }

    /**
     * Метод, который демонстрирует создание костюмов.
     * Он вызывает методы фабрики костюмов для создания различных типов костюмов
     * и выводит их классы на экран.
     */
    public function run(): void
    {
        // Создание и отображение классов женских и мужских костюмов
        echo get_class(object: $this->suitFactory->createWomensSuit()) . '<br/>';
        echo get_class(object: $this->suitFactory->createMensSuit()) . '<br/>';
        echo get_class(object: $this->suitFactory->createSpringWomensSuit()) . '<br/>';
        echo get_class(object: $this->suitFactory->createAutumnMensSuit()) . '<br/>';
    }

    /**
     * Метод для демонстрации создания платьев.
     * Он вызывает методы фабрики платьев для создания различных типов платьев
     * и выводит их классы на экран.
     */
    public function runDresses(): void
    {
        // Создание и отображение классов различных женских платьев
        echo get_class(object: $this->dressFactory->createAutumnWomensDress()) . '<br/>';
        echo get_class(object: $this->dressFactory->createSummerWomensDress()) . '<br/>';
        echo get_class(object: $this->dressFactory->createSpringWomensDress()) . '<br/>';
    }
}
