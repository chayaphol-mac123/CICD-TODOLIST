<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .add-new-task-btn {
            background-color: #fff;
            color: #9932CC;
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
        .tr-todolist {
            transition: 0.3s;
            border-radius: 10px;
            
            font-weight: bold;
            color:#9932CC;
            background-color: #fff;
            overflow: hidden;
            border-radius: 10px !important;

        }
        .tr-todolist:hover{
            background-color: #DCDCDC;
            
        }
        .task-list-header{
            font-weight: bold;
            font-size: 24px;
            transition: .1s;
            color: #fff;
        }
        .task-list-header:hover {
            font-size: 32px;
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
        #task1 {
            color: #fff;
            

        }
        #action1 {
            color: #fff;
            
        }
        
        td:first-child {
            border-top-left-radius: 20px; 
            border-bottom-left-radius: 20px;
        }
        td:last-child {
            border-bottom-right-radius: 20px; 
            border-top-right-radius: 20px; 
        }

        #spaceing-table {
            border-collapse: separate;
            table-layout: fixed;
            border-spacing: 0 5px; /* this is the ultimate fix */
        }
        #spaceing-table th {
            text-align: left;
            
        }
        #spaceing-table td {
            border-width: 3px 0;
            
        }
        #spaceing-table thead {
            display: table;
            table-layout: fixed;
            width: 100%;
        }
        #spaceing-table tbody {
            display: table;
            table-layout: fixed;
            width: 100%;
            border-spacing: 0 10px;
        }
        .style_facebook{
            margin: 10px;
        }
        .style_twitter{
            margin: 10px;
        }
        .flex-container {
            display: flex;
        }
        /* #edit-task:hover {
            transform: scale(1.5) perspective(10px);
            transition: 0.1s;
        }
        #edit-task:hover {
            transition: 0.1s;
        } */

        
       

     
    </style>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v13.0" nonce="nLpSC3Pr"></script>


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
            <table class="w-full text-md rounded mb-4" id="spaceing-table">
                <thead>
                <tr class="tr-task-action">
                    <th class="text-left p-3 px-5" id="task1">Task</th>
                    <th class="text-left p-3 px-5" id="action1">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach(auth()->user()->tasks as $task)
                    <tr class="tr-todolist">
                        <td class="p-3 px-5" id="list-todo" >
                            {{$task->description}}
                        </td>
                        <td class="p-3 px-5">
                            
                            <a href="/task/{{$task->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" id="edit-task"><i class="fas fa-edit"></i></a>
                            <form action="/task/{{$task->id}}" class="inline-block">
                                <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"><i class="fas fa-trash"></i></button>
                                {{ csrf_field() }}
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
                </tbody>
            </table>
    <div class="flex-container">
<!-- Facebook link button -->
        <div class="style_facebook">
            <div class="fb-share-button" data-href="http://127.0.0.1:8000/dashboard" data-layout="button" data-size="large">
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Fdashboard&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Shares</a>
            </div>
        </div>
            
<!-- twitter link button edit -->
        <div class="style_twitter">
            <a href="https://twitter.com/share?&text=Todolist form&via=wishesso">
                <img src="https://i.pinimg.com/originals/9b/3d/28/9b3d28b49ff92ed9de0412d287753b0a.png" width="40" height="20" title="Twitter" />
            </a>
         </div>

    </div>

            
        </div>
    </div>
</div>
</x-app-layout>
        
    
</body>
</html>