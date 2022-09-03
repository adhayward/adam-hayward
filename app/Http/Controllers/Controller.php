<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function show()
    { 
        return view('home');
    }
    public function personal()
    { 
        return view('personal');
    }
    public function contact()
    { 
        return view('contact');
    }
    public function contactSubmit()
    { 
        $validator = Validator::make(request()->post(), [
            'name' => 'required|max:255',
        ]);
    
        if ($validator->fails()) {
            return redirect('contact')
                ->withInput()
                ->withErrors($validator);
        }
    
        $task = new Task();
        $task->name = request()->post('name');
        $task->save();

        return redirect('contact');
    }
}
