<?php
/**
 * Tests for BlockPulse
 */

use PHPUnit\Framework\TestCase;
use Blockpulse\Blockpulse;

class BlockpulseTest extends TestCase {
    private Blockpulse $instance;

    protected function setUp(): void {
        $this->instance = new Blockpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
