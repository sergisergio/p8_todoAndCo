<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    private $task;
    public function setUp(): void
    {
      $this->task = new Task();
    }

    public function testIsDone(){
        $this->task->toggle(true);
        $this->assertEquals($this->task->IsDone(), 1);
    }
}
