<?php
/**
 * Tests for TokenVaultPro
 */

use PHPUnit\Framework\TestCase;
use Tokenvaultpro\Tokenvaultpro;

class TokenvaultproTest extends TestCase {
    private Tokenvaultpro $instance;

    protected function setUp(): void {
        $this->instance = new Tokenvaultpro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenvaultpro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
