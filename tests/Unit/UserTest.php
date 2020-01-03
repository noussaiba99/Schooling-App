<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use tp_Igl\Http\Controllers\EtudiantController;
class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $et = new EtudiantController();
        $this->assertTrue($et->same("test", "test"), "Test 1 failed");
        $this->assertTrue($et->same("", ""), "Test 2 failed");
        $this->assertFalse($et->same("", "nothing"), "Test 3 failed");
        $this->assertFalse($et->same("test", "tttt"), "Test 4 failed");
    }
}
