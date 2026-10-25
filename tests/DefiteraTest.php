<?php
/**
 * Tests for DefiTera
 */

use PHPUnit\Framework\TestCase;
use Defitera\Defitera;

class DefiteraTest extends TestCase {
    private Defitera $instance;

    protected function setUp(): void {
        $this->instance = new Defitera(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defitera::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
