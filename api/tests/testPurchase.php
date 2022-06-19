<?php
require './../services/PurchaseService.class.php';
require_once('./../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class testPurchase extends TestCase
{
    private $purchaseService;
    protected function setUp(): void
    {
        $this->purchaseService = new PurchaseService();
    }

    protected function tearDown(): void
    {
        $this->purchaseService = NULL;
    }

    public function testGetPurchase()
    {
        $result = $this->purchaseService->getPurchase(7);
        $this->assertNotNull($result);
    }
}
