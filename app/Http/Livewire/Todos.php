<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Todos extends Component
{
    public function render()
    {
        $todos = Todo::where('todo_id', null)->orderBy('order', 'desc')->get();
        return view('livewire.todos', compact('todos'));
    }

    public function check(Todo $todo)
    {
        $todo->done = !$todo->done;
        $todo->save();
    }

    public function up(Todo $todo)
    {
        $todoUper = Todo::where('todo_id', null)->where('order', '>', $todo->order)->orderBy('order', 'asc')->first();
        $tmp = $todoUper->order;
        $todoUper->order = $todo->order;
        $todo->order = $tmp;
        $todo->save();
        $todoUper->save();
    }

    public function down(Todo $todo)
    {
        $todoDown = Todo::where('todo_id', null)->where('order', '<', $todo->order)->orderBy('order', 'desc')->first();
        $tmp = $todoDown->order;
        $todoDown->order = $todo->order;
        $todo->order = $tmp;
        $todo->save();
        $todoDown->save();
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
    }
}
