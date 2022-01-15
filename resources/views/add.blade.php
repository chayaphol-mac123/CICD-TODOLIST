<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
        .add-new-task-btn {
            background-color: #9932CC;
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            transition: 0.3s;
            font-weight: bold;
        }
        .add-new-task-btn:hover {
            background-color: #9932CC;
            color: #fff;
            border: 2px solid #fff;
        }
        .container {
            
            background: -webkit-linear-gradient(#9932CC, #87CEFA); 
            background: -o-linear-gradient(#9932CC, #87CEFA);
            background: -moz-linear-gradient(#9932CC, #87CEFA); 
            background: linear-gradient(#9932CC, #87CEFA); 

            overflow: hidden;
            border-radius: 10px;
            padding: 30px;
            
        }
        .error-input{
            background-color: #DC143C;
            color: #fff;
            width:25%;
            padding: 10px 20px;
            border-radius: 10px;
            transition: 0.3s;
            font-weight: bold;
        }
        .blank-space{
            padding: 10px 10px 10px 10px;
        }
</style>



<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Add Task') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class ="container">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
            <form method="POST" action="/task">

                <div class="form-group">
                    <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter your task'></textarea>  
                    @if ($errors->has('description'))
                        <div class="blank-space"></div>
                        
                        <div class="error-input">
                            <span> <i class="fas fa-times"></i> Error <br></span>
                            <span>{{ $errors->first('description') }}</span>
                        </div>
                    @endif
                    <div class="blank-space"></div>
                </div>

                <div class="form-group">
                    <button type="submit" class="add-new-task-btn">Add Task</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    </div>
</div>
</x-app-layout>