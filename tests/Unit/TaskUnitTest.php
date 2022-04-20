<!-- <?php

namespace Tests\Unit;

class TaskUnitTest {

    public function test_create_task(){
        $task = new Task([
            'task' => 'task1',
            'description' => 'this is my first task',
        ]);

        $this->assertEquals('Test Task', $task->task);
    }

    public function test_edit_task(){
        $this->assertTrue(true);
    }

    public function test_delete_task(){
        $this->assertTrue(true);
    }

    public function test_not_eng_name_task(){
        $task = new Task([
            'task' => 'ดีจ้า',
            'description' => 'this is my first task',
        ]);

        $this->assertEquals('Test Task', $task->task);
    }

    public function test_empty_task(){
        try {
            $task = new Task();
            $task->user_id = 1;
            $task->save();
            $this->assertTrue(false);
        }
        catch (QueryException $e) {
            $this->assertTrue(true);
        }

    }

    public function test_duplicate_name_task(){
        $this->assertTrue(true);
    }

} -->