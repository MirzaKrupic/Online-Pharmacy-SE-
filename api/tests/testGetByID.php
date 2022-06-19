<?php
require './../services/AccountService.class.php';
require_once('./../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class testGetByID extends TestCase
{
    private $accountService;
    protected function setUp(): void
    {
        $this->accountService = new AccountService();
    }

    protected function tearDown(): void
    {
        $this->accountService = NULL;
    }

    public function testGetByID()
    {
        $result = $this->accountService->get_account_by_id(174);
        $this->assertNotNull($result);
    }
}
