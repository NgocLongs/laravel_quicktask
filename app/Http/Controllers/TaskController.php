<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Validator;
use App\Task;

class TaskController extends Controller
{
	private $langActive = [
		'vi',
		'en',
	];

	public function index() {
		$tasks = Task::orderBy('created_at', 'desc')->get();
	    return view('task', [
	    	'tasks' => $tasks
	    ]);
	}

    public function create(TaskRequest $request) {
	    $task = new Task;
	    $task->name = $request->name;
	    $task->save();
	    return redirect('/task');
    }

    public function delete($id) {
    	$task = Task::find($id);
    	if (isset($task)) {
    		$task->delete();
    	}
    	return back();
    }

    public function changeLang(Request $request, $lang) {
    	if (in_array($lang, $this->langActive)) {
    		$request->session()->put(['lang' => $lang]);
    		return redirect()->back();
    	}
    }
}
