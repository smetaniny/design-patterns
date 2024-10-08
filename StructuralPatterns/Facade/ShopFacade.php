<?php
declare(strict_types=1);

namespace App\GangOfFourDesignPatterns\StructuralPatterns\Facade;

use App\GangOfFourDesignPatterns\StructuralPatterns\Facade\Services\OrderService;
use App\GangOfFourDesignPatterns\StructuralPatterns\Facade\Services\PaymentService;
use App\GangOfFourDesignPatterns\StructuralPatterns\Facade\Services\ProductCatalogService;

/**
 * Фасад интернет-магазина (ShopFacade) предоставляет простой интерфейс для взаимодействия с подсистемами магазина:
 * каталогом товаров, системой заказов и платежной системой.
 *
 * @author Smetanin Sergey
 */
class ShopFacade
{
    // Сервисы подсистем, которые фасад скрывает за унифицированным интерфейсом
    protected ProductCatalogService $productCatalogService;
    protected OrderService $orderService;
    protected PaymentService $paymentService;

    /**
     * Конструктор принимает необходимые сервисы подсистем и сохраняет их для последующего использования.
     *
     * @param ProductCatalogService $productCatalogService Сервис для работы с каталогом товаров
     * @param OrderService          $orderService          Сервис для управления заказами
     * @param PaymentService        $paymentService        Сервис для обработки платежей
     */
    public function __construct(
        ProductCatalogService $productCatalogService,
        OrderService $orderService,
        PaymentService $paymentService
    ) {
        $this->productCatalogService = $productCatalogService;
        $this->orderService = $orderService;
        $this->paymentService = $paymentService;
    }

    /**
     * Получить информацию о товаре по его ID через каталог товаров.
     *
     * @param int $productId ID товара
     *
     * @return string Информация о товаре
     */
    public function viewProduct(int $productId): string
    {
        return $this->productCatalogService->getProductDetails($productId);
    }

    /**
     * Оформить заказ на товар с указанным количеством.
     *
     * @param int $productId ID товара
     * @param int $quantity  Количество товара
     *
     * @return string Детали оформленного заказа
     */
    public function placeOrder(int $productId, int $quantity): string
    {
        return $this->orderService->createOrder($productId, $quantity);
    }

    /**
     * Выполнить оплату заказа с помощью предоставленной информации о платеже.
     *
     * @param int    $orderId      ID заказа
     * @param string $paymentInfo  Информация для оплаты
     *
     * @return string Результат обработки платежа
     */
    public function makePayment(int $orderId, string $paymentInfo): string
    {
        return $this->paymentService->processPayment($orderId, $paymentInfo);
    }
}
