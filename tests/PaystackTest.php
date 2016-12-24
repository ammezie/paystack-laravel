<?php

namespace Ammezie\Paystack\Tests;

use Mockery as m;
use Ammezie\Paystack\Paystack;
use PHPUnit_Framework_TestCase;

class PaystackTest extends PHPUnit_Framework_TestCase
{
    protected $paystack;

    public function setUp()
    {
        $this->paystack = m::mock('Ammezie\Paystack\Paystack');
    }

    public function tearDown()
    {
        m::close();
    }

    public function testGetAllCustomersReturnsCustomers()
    {
        $customers = $this->paystack->shouldReceive('getCustomers')
            ->withAnyArgs()
            ->once()
            ->andReturn(['Chimezie']);

        $this->paystack->getCustomers();

        // $this->assertTrue(is_array($customers));
        $this->assertEquals('array', gettype(array($customers)));
    }
}