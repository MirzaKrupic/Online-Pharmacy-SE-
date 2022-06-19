<?php
require './../services/AccountService.class.php';
require_once('./../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class testLogin extends TestCase
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

    public function testLogin()
    {
        $result = $this->accountService->login([
            "email" => 'naidafatic@gmail.com',
            "password" => '123'
        ]);
        $this->assertEquals(176, $result['id']);
    }

    public function testLoginFalse()
    {
        $result = $this->accountService->login([
            "email" => 'naidafatic@gmail.com',
            "password" => '123'
        ]);
        $this->assertNotEquals(174, $result['id']);
    }
}
