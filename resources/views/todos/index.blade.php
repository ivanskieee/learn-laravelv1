<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-semibold text-gray-900 text-center my-5">TODOS PAGE</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="bg-black px-6 py-4 rounded-t-lg">
                    <div class="flex items-center justify-between">
                        <h2 class="text-white font-medium">Todos</h2>
                        <span class="bg-white/20 text-white text-xs px-2 py-1 rounded">{{ count($todos ?? []) }}</span>
                    </div>
                </div>

                <div class="p-4">
                    <ul class="space-y-2">
                        @foreach ($todos as $todo)
                            <li class="bg-gray-50 hover:bg-gray-100 p-4 rounded-md border border-gray-100 flex items-center justify-between transition-colors group">
                                <span class="text-gray-900 font-medium">{{ $todo->name }}</span>
                                <button class="bg-black hover:bg-gray-800 text-white text-sm px-4 py-2 rounded transition-colors">
                                    View
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>