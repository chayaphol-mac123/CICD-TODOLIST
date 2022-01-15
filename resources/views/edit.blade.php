<style>
        div .update-task-btn {
            background-color: #9932CC;
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            transition: 0.3s;
            font-weight: bold;
        }
        .update-task-btn:hover {
            background-color: #fff;
            color: #9932CC;
            border: 2px solid #9932CC;
        }
        .container {
            
            background: -webkit-linear-gradient(#9932CC, #87CEFA); 
            background: -o-linear-gradient(#9932CC, #87CEFA);
            background: -moz-linear-gradient(#9932CC, #87CEFA); 
            background: linear-gradient(#9932CC, #87CEFA); 

            overflow: hidden;
            padding: 30px;
            
        }
        .blank-space{
            padding: 10px 10px 10px 10px;
        }
        #text-area-task:hover {
            background-color: #D3D3D3;
        }
        #text-area-task {
            transition: 0.3s;
        }
        #text-area-task:focus {
            outline: none !important;
            border: 3px solid #9932CCed;
            box-shadow: 0 0 7px #9932CC;
        }

        .task-list-header{
            font-weight: bold;
            font-size: 24px;
            transition: .1s;
            color: #9932CC;
            margin-bottom: 15px;
        }
        .task-list-header:hover {
            font-size: 32px;
        }
</style>
<x-app-layout>
<x-slot name="header">
    <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Task') }}
    </h2> -->
</x-slot>

<div class="py-12">
    <div class="container">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
            <form method="POST" action="/task/{{ $task->id }}">
            <div class="task-list-header">Edit Tasks</div>

                <div class="form-group">
                    <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" id="text-area-task">{{$task->description }}</textarea>	
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="blank-space"></div>
                <div class="form-group">
                    <button type="submit" name="update" class="update-task-btn">Update task</button>
                </div>
            {{ csrf_field() }}
            </form>
        </div>
    </div>
    </div>
</div>
</x-app-layout>