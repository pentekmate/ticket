<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col gap-6">
    @foreach ($userWithTickets->first()->tickets as $ticket )
        <div class="flex w-1/3 h-[150px] shadow-md">
            <p>{{$ticket->id}}</p>
            <p>{{$ticket->title}}</p>
            <div>{{$ticket->status}}</div>
        </div>
    @endforeach
    </div>
</body>
</html>