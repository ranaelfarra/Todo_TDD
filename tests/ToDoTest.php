<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Managers\TodoManager;
class ToDoTest extends TestCase
{
    use DatabaseTransactions;

    private $todo;

    protected function setUp()
    {
        parent::setUp();

        $this->todo = new TodoManager();

    }
    protected function tearDown()
    {
        $this->todo = NULL;
    }

    public function test_open_todo_page()
    {
        $this->visitRoute('todo.index');
    }

    public function test_create_new_todo(){

        $new_todo = ['description' => 'Add new Todo'];

        $result = $this->todo->store($new_todo);

        $this->assertEquals(true,$result);
    }
    public function test_list_all_todos(){

        $list_todos = $this->todo->listAllTodos();

        $this->assertNotEquals(false,$list_todos);

    }
}