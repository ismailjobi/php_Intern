<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;
use Exception;

class ToDoController extends Controller
{
    // Show all TODO list
    public function Index()
    {
        try {
            $ToDo = ToDo::all();
            $data = compact('ToDo');
            return view("welcome")->with($data);
        } catch (Exception $e) {
            return back()->withErrors(['custom_error' => 'There was an issue loading the ToDo list. Please try again later.']);
        }
    }

    // Create a method to add the ToDo data
    public function Add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'task' => 'required',
            'dueDate' => 'required',
        ]);

        try {
            $data = new ToDo();
            $data->name = $request->name;
            $data->task = $request->task;
            $data->dueDate = $request->dueDate;
            $data->save();

            return redirect(route("todo.home"))->with('success', 'ToDo added successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['custom_error' => 'Failed to add ToDo. Please check your inputs and try again.']);
        }
    }

    // Delete a ToDo
    public function Delete($id)
    {
        try {
            ToDo::findOrFail($id)->delete();
            return redirect(route("todo.home"))->with('success', 'ToDo deleted successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['custom_error' => 'Unable to delete the ToDo. It may not exist.']);
        }
    }

    // Show the update page for a specific ToDo
    public function Update($id)
    {
        try {
            $ToDo = ToDo::findOrFail($id);
            $data = compact('ToDo');
            return view("update")->with($data);
        } catch (Exception $e) {
            return back()->withErrors(['custom_error' => 'The requested ToDo could not be found.']);
        }
    }

    // Update a ToDo
    public function UpdateData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'task' => 'required',
            'dueDate' => 'required',
        ]);

        try {
            $id = $request->id;
            $exobj = ToDo::findOrFail($id);
            $exobj->name = $request->name;
            $exobj->task = $request->task;
            $exobj->dueDate = $request->dueDate;
            $exobj->save();

            return redirect(route("todo.home"))->with('success', 'ToDo updated successfully!');
        } catch (Exception $e) {
            return back()->withErrors(['custom_error' => 'Unable to update the ToDo. Please check your inputs and try again.']);
        }
    }
}
