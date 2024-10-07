<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Client;

use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Abstracts\MobileProductDisplay;
use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Abstracts\WebProductDisplay;
use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\Accessory;
use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\Dress;
use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\MenSuit;
use App\GangOfFourDesignPatterns\StructuralPatterns\Bridge\Implementors\WomenSuit;

/**
 * Класс Client отвечает за создание объектов абстракции и их реализаций,
 * демонстрируя использование паттерна "Мост".
 * Он позволяет отображать различные категории одежды на веб-сайте и в мобильном приложении.
 *
 * @author Smetanin Sergey
 */
class Client
{
    /**
     * Основной метод, который создает объекты и демонстрирует работу паттерна "Мост".
     * В этом методе создаются различные реализации одежды и уточненные абстракции
     * для отображения товаров на разных платформах (веб и мобильное приложение).
     *
     * @return void
     */
    public function main(): void
    {
        // Создаем реализации одежды
        $womenSuit = new WomenSuit(); // Реализация для женских костюмов
        $menSuit = new MenSuit();     // Реализация для мужских костюмов
        $dress = new Dress();         // Реализация для платьев
        $accessory = new Accessory(); // Реализация для аксессуаров

        // Создаем уточненные абстракции для отображения на веб-сайте
        $webDisplay1 = new WebProductDisplay($womenSuit); // Отображение женского костюма на веб-сайте
        $webDisplay2 = new WebProductDisplay($menSuit);   // Отображение мужского костюма на веб-сайте
        $webDisplay3 = new WebProductDisplay($dress);     // Отображение платья на веб-сайте
        $webDisplay4 = new WebProductDisplay($accessory); // Отображение аксессуара на веб-сайте

        // Создаем уточненные абстракции для отображения в мобильном приложении
        $mobileDisplay1 = new MobileProductDisplay($womenSuit); // Отображение женского костюма в мобильном приложении
        $mobileDisplay2 = new MobileProductDisplay($menSuit);   // Отображение мужского костюма в мобильном приложении
        $mobileDisplay3 = new MobileProductDisplay($dress);     // Отображение платья в мобильном приложении
        $mobileDisplay4 = new MobileProductDisplay($accessory); // Отображение аксессуара в мобильном приложении

        // Отображаем одежду на веб-сайте
        $webDisplay1->showProduct(); // Отображение женского костюма
        $webDisplay2->showProduct(); // Отображение мужского костюма
        $webDisplay3->showProduct(); // Отображение платья
        $webDisplay4->showProduct(); // Отображение аксессуара

        // Отображаем одежду в мобильном приложении
        $mobileDisplay1->showProduct(); // Отображение женского костюма
        $mobileDisplay2->showProduct(); // Отображение мужского костюма
        $mobileDisplay3->showProduct(); // Отображение платья
        $mobileDisplay4->showProduct(); // Отображение аксессуара
    }
}
