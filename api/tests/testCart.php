<?php
require './../services/CartService.class.php';
require_once('./../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class testCart extends TestCase
{
    private $cartService;
    protected function setUp(): void
    {
        $this->cartService = new CartService();
    }

    protected function tearDown(): void
    {
        $this->cartService = NULL;
    }

    public function testCart()
    {
        $result = $this->cartService->get_total(176);
        $this->assertEquals(0, $result);
    }
}
