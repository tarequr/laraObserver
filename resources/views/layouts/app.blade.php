<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            {{-- <div>
                <h2>hello</h2>
            </div> --}}

            <div class="container p-4">
                <div>
                    <button class="btn btn-sm btn-success float-right">Add Blog</button>
                </div>

                <div class="pt-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>SL</th>
                                <th>SL</th>
                                <th>SL</th>
                                <th>SL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SL</td>
                                <td>SL</td>
                                <td>SL</td>
                                <td>SL</td>
                                <td>SL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <main>
                {{ $slot }}
            </main> --}}
        </div>

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    </body>
</html>
