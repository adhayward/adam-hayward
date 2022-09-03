<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Validator;
 
class ProjectController extends Controller
{
    public function uniform() {
        return view('project.uniform');
    }
    public function booking() {
        return view('project.booking');
    }
    public function b2b() {
        return view('project.b2b');
    }
    public function order() {
        return view('project.order');
    }
    public function warehouse() {
        return view('project.warehouse');
    }
    public function survey() {
        return view('project.survey');
    }
}