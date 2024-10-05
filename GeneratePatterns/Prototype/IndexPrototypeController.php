<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\GeneratePatterns\Prototype;

use App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Products\Client;
use App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Products\MenSuit;
use App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Products\WomenDress;
use App\GangOfFourDesignPatterns\GeneratePatterns\Prototype\Products\WomenSuit;

/**
 * Создаем прототипы одежды.
 *
 * @author Smetanin Sergey
 */
class IndexPrototypeController
{
    /**
     * Создаем прототипы одежды.
     */
    public function index(): void
    {
        // Прототип мужского костюма
        $menSuit = new MenSuit('L', 'Black');
        // Прототип женского костюма
        $womenSuit = new WomenSuit('M', 'Blue');
        // Прототип женского платья
        $womenDress = new WomenDress('S', 'Red');

        // Создаем клиента, который работает с мужским костюмом
        $client = new Client($menSuit);
        $clonedMenSuit = $client->createClothes(); // Клонируем мужской костюм
        echo $clonedMenSuit->getInfo() . '<br />'; // Выводим информацию о клоне

        // Создаем клиента, который работает с женским костюмом
        $client = new Client($womenSuit);
        $clonedWomenSuit = $client->createClothes(); // Клонируем женский костюм
        echo $clonedWomenSuit->getInfo() . '<br />'; // Выводим информацию о клоне

        // Создаем клиента, который работает с женским платьем
        $client = new Client($womenDress);
        $clonedWomenDress = $client->createClothes(); // Клонируем женское платье
        echo $clonedWomenDress->getInfo() . '<br />'; // Выводим информацию о клоне

    }
}
