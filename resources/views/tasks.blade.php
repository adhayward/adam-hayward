@extends('layouts.app')
 
@section('content')
    <!-- Create Task Form... -->
  
     <!-- Bootstrap Boilerplate... -->
  
     <div class="row mb-3 "><div class="col-auto mx-auto"><livewire:counter /></div></div> 
     <div class="card">
        <div class="card-body">
            <!-- Display Validation Errors -->
            @include('common.errors')
    
            <!-- New Task Form -->
            <form action="{{ URL::to('tasks/create')  }}" method="POST">
                {{ csrf_field() }}
    
                <!-- Task Name -->
                <div class="row mb-3">
                    <label for="task" class="col-sm-auto col-form-label text-sm-end">Add a New Task</label>
    
                    <div class="col-sm">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary rounded-circle" title="Add Task">
                            @include('common.icon', ['icon'=>'plus'])
                        </button>
                    </div>
                </div>
    
            </form>
        </div>
     </div>
  
    <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="card mt-3">
            <div class="card-header">
                <h4>Current Tasks</h4>
            </div>
 
            <table class="table table-striped task-table ">

                <!-- Table Body -->
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            <!-- Delete Button -->
                            <td style="width: 0">
                                <form action="{{ URL::to('tasks/delete/'.$task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                        
                                    <button class="btn btn-danger text-nowrap rounded-circle" title="Delete Task">
                                        @include('common.icon', ['icon'=>'trash'])
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection