<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Core\Http\Request;

class HttpRequestTest extends TestCase
{
    /**
     * @covers
     */
    public function testHttpRequest()
    {
        $testValue = 'test';
        $_GET['user'] = $testValue;
        $httpRequest = new Request();
        $this->assertSame($testValue, $httpRequest->getQuery()['user']);
    }

    /**
     * @covers
     */
    public function testHttpRequestQueryFull()
    {
        $testValue = 'test';
        $_GET['user'] = $testValue;
        $httpRequest = new Request();
        $this->assertSame(['user' => $testValue], $httpRequest->getQuery());
    }
}
