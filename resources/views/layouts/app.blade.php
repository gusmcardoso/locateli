<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? config('app.name', 'Instituto Locatelli') }}</title>
        <meta
            name="description"
            content="Instituto Locatelli oferece odontologia especializada e humanizada com tecnologia, conforto e atendimento acolhedor."
        >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        >
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                        },
                        colors: {
                            clinic: {
                                primary: '  #9e8e7a',
                                secondary: '#f9fafb',
                                accent: '   #9e8e7a',
                                canvas: '#f5f5f4',
                                ink: '#1f2933',
                            },
                        },
                    },
                },
            };
        </script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @stack('head')
    </head>
    <body class="bg-clinic-canvas font-sans text-clinic-ink antialiased">
        <div class="min-h-screen flex flex-col">
            <x-header />
            <main class="flex-1">
                {{ $slot ?? '' }}
                @yield('content')
            </main>
            @isset($footer)
                {{ $footer }}
            @endisset
        </div>
        @stack('scripts')
    </body>
</html>
