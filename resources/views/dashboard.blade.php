<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/dashboard.css">

    <style>
        .add-new-task-btn {
            background-color: dodgerblue;
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            transition: 0.3s;
            font-weight: bold;
        }
        .add-new-task-btn:hover {
            background-color: blue;
        }
        .tr-todolist {
            transition: 0.3s;
            border-radius: 10px;
            border-top: 0.5px solid #C0C0C0;
            border-bottom: 0.5px solid #C0C0C0;
            background-size: cover;
        }
        .tr-todolist:hover{
            background-color: #DCDCDC;
        }
        .task-list-header{
            font-weight: bold;
            font-size: 24px;
            transition: .1s;
        }
        .task-list-header:hover {
            font-size: 32px;
        }
        .container {
            background-color: #fff;
            overflow: hidden;
            border-radius: 10px;
            padding: 30px;
            border: 3px solid purple;
        }

        
     
    </style>

</head>
<body>
<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container">
            <!-- class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5" -->
            <div class="flex">
                <div class="task-list-header">Tasks List</div>
                
                <div class="flex-auto text-right mt-2">
                    <a href="/task" class="add-new-task-btn">+  Add new Task</a>
                </div>
            </div>
            <table class="w-full text-md rounded mb-4">
                <thead>
                <tr class="tr-task-action">
                    <th class="text-left p-3 px-5">Task</th>
                    <th class="text-left p-3 px-5">Actions</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach(auth()->user()->tasks as $task)
                    <tr class="tr-todolist">
                        <td class="p-3 px-5">
                            {{$task->description}}
                        </td>
                        <td class="p-3 px-5">
                            
                            <a href="/task/{{$task->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                            <form action="/task/{{$task->id}}" class="inline-block">
                                <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
</x-app-layout>
        
    
</body>
</html>