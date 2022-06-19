<?php
require './../services/MedicineService.class.php';
require_once('./../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class testMedicine extends TestCase
{
    private $medicineService;
    protected function setUp(): void
    {
        $this->medicineService = new MedicineService();
    }

    protected function tearDown(): void
    {
        $this->medicineService = NULL;
    }

    public function testGetMedicine()
    {
        $result = $this->medicineService->get_medicines(0, 1, null, '-id', true);
        $this->assertNotNull($result);
    }
}
