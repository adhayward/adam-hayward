<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Validator;
 
class TaskController extends Controller
{
    /**
     * Show the tasks
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();
 
        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        $validator = Validator::make(request()->post(), [
            'name' => 'required|max:255',
        ]);
    
        if ($validator->fails()) {
            return redirect('tasks')
                ->withInput()
                ->withErrors($validator);
        }
    
        $task = new Task();
        $task->name = request()->post('name');
        $task->save();

        return redirect('tasks');
    }

    public function delete($id) {
        Task::findOrFail($id)->delete();

        return redirect('tasks');
    }
}