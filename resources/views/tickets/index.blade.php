<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>
    @php
        $filters = [
            '' => 'Nyitott',
            'closed' => 'Zárva',
            'pending' => 'Folyamatban',
            'all' => 'Összes',
        ];
    @endphp

    @foreach ($filters as $key => $label)
        <a href="{{ route('user.tickets.index', ['user' => 4] + request()->except('filter') + ['filter' => $key]) }}"
           class="{{ request('filter') === $key ? 'text-green-900 font-bold' : 'filter-item' }}">
           {{ $label }}
        </a>
    @endforeach
</div>

    <div class="flex flex-col gap-6">

    <pre>
        {{dd($tickets)}}
    </pre>
    </div>
</body>
</html>