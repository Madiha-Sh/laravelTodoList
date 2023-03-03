<?php

namespace App\Http\Controllers;

use App\Models\Todo_list;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $todos = Todo_list::all();
        return view('/todos')->with('todo_arr', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $name = $request->input('name');
        $todo = new Todo_list();
        $todo->name = $request->input('name');;
        $todo->save();
        // return view('/todos');
        return redirect('/todos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function show(Todo_list $todo_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo_list $todo_list, $todo_id)
    {
        //
        $todo = Todo_list::find($todo_id);
        return view('edit_todo')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo_list $todo_list, $todo_id)
    {
        //
        $edit_todo = Todo_list::find($todo_id);
        $edit_todo->name = $request->input("name");
        $edit_todo->save();
        return redirect('/todos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Todo_list $todo_list)
    public function destroy(Todo_list $todo_list, $todo_id)
    {
        //
        // return $todo_id;

        // Todo_list::find($todo_id)->delete();
        // or
        Todo_list::destroy($todo_id);
        return redirect('/todos');
    }
}
