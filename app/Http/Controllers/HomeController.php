<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->date){
            $filteredDate = $request->date;
        }else{
            $filteredDate = date('Y-m-d');
        }
        $carbonDate = Carbon::createFromDate($filteredDate);

        $data['date_as_string'] = $carbonDate->translatedFormat('d \d\e M');
        $data['date_prev_button'] = $carbonDate->addDay(-1)->format('Y-m-d');
        $data['date_next_button'] = $carbonDate->addDay(2)->format('Y-m-d');
        
        $tasks = Task::whereDate('due_date', $filteredDate)->take(6)->get();
        $authUser = Auth::user();
        
        $data['tasks'] = $tasks;
        $data['tasks_count'] = $tasks->count();
        $data['undone_tasks_count'] = $tasks->where('is_done', false)->count();
        
        $data['authUser'] = $authUser;
        
        return view('home', $data);
    }
}
