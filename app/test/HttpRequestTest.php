<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Core\HttpRequest;

class HttpRequestTest extends TestCase
{
    /**
     * @covers
     */
    public function testHttpRequest()
    {
        $testValue = 'test';
        $_GET['user'] = $testValue;
        $httpRequest = new HttpRequest();
        $this->assertSame($testValue, $httpRequest->getQuery()['user']);
    }

    /**
     * @covers
     */
    public function testHttpRequestQueryFull()
    {
        $testValue = 'test';
        $_GET['user'] = $testValue;
        $httpRequest = new HttpRequest();
        $this->assertSame(['user' => $testValue], $httpRequest->getQuery());
    }
}
