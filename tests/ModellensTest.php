<?php
/**
 * Tests for ModelLens
 */

use PHPUnit\Framework\TestCase;
use Modellens\Modellens;

class ModellensTest extends TestCase {
    private Modellens $instance;

    protected function setUp(): void {
        $this->instance = new Modellens(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Modellens::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
