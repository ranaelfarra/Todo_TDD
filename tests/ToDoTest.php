<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Managers\TodoManager;
use App\Models\Todo;
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

        parent::tearDown ();

    }

    public function test_open_todo_page()
    {
        $this->visitRoute('todo.index');
    }

    public function test_create_new_todo(){

        $todo = ['description' => 'Add new Todo'];

        $result = $this->todo->store($todo);

        $this->assertInstanceOf(Todo::class,$result);
    }
    public function test_list_all_todos(){

        $list_todos = $this->todo->listAllUndoneTodos();

        $this->assertNotEquals(false,$list_todos);

    }

    public function test_mark_todos_as_done(){

        $todos_id = array_column(factory(App\Models\Todo::class, 3)->create()->toArray() , 'id');

        $result = $this->todo->markTodos($todos_id);

        $this->assertNotEquals(false,$result);

    }

    public function test_list_all_done_todos(){

        $list_todos = $this->todo->listAllDoneTodos();

        $this->assertNotEquals(false,$list_todos);

    }

    public function test_delete_todos(){


        $todos['id'] = array_column(factory(App\Models\Todo::class, 3)->create(['done' => 1])->toArray() , 'id');

        $this->todo->delete($todos['id']);

        $this->notSeeInDatabase('to_dos',$todos);
    }
}