{{-- @php
    $details = json_decode($menus->details, true);
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Menu</title>
    <script defer src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fbd3e9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .text-center {
            text-align: center;
        }
        .border-red-500 {
            border-bottom: .5px solid red;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .mt-8 {
            margin-top: 1rem;
        }
        .mt-2 {
            margin-top: 0.5rem;
        }
        .space-y-1 > * + * {
            margin-top: 0.25rem;
        }
        .flex {
            display: flex;
            justify-content: space-between;
        }
        .bg-pink-100 {
            background-color: #fbd3e9;
        }
        .font-bold {
            font-weight: bold;
        }
        .text-lg {
            font-size: 1.1rem;
        }
        .text-2xl {
            font-size: 1.2rem;
        }
        .text-3xl {
            font-size: 1.35rem;
        }
        .shadow-lg {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .py-4 {
            padding: 1rem 0;
        }
        .max-w-lg {
            max-width: 32rem;
        }
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        .px-4 {
            padding: 0 1rem;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid rgb(80, 56, 56);
            padding: 0.5rem 0; /* 0.5rem is equivalent to py-2 in Tailwind */
        }

        @media print {
            .border-red-500 {
                border-color: red !important;
            }
            .flex {
                display: flex;
                justify-content: space-between;
            }
            .bg-white {
                background: white;
            }
        }

        th{ background-color : #557CBA; }
		/* Alternance de couleur sur les lignes */
		tr:nth-child(even) { background-color : #CED4E5; }
		tr:nth-child(odd)  { background-color : #E8EBF5; }
    </style>
</head>
<body class="bg-pink-100 font-sans">
    <!-- Header with login -->
    <!-- Main content -->
    <div class="max-w-lg mx-auto py-8 px-4 bg-white shadow-lg">
        <header class="bg-white py-4 border-b-2 border-red-500">
            <div class="max-w-lg mx-auto flex justify-between items-center px-4">
                <div class="text-lg font-bold"> @if ($my_banniere) {{$my_banniere->raison_sociale}}  @endif </div>
                <div>
                    @if ($my_banniere) {{$my_banniere->sigle}}  @endif

                </div>
            </div>
        </header>

        <div class="text-center">
            <h1 class="text-2xl font-bold">  @if ($my_banniere) {{$my_banniere->raison_sociale}}  {{$my_banniere->raison_sociale}} @endif  </h1>
            <h2 class="text-3xl font-bold mt-2">  {{$menus->repas->name}}</h2>
            <p class="mt-2">{{$menus->date}}</p>
        </div>

        <div class="mt-2">
            <h3 class="text-lg font-bold border-b-2 border-red-500 pb-1">Récettes</h3>
            <ul class="space-y-1">
                <table>
                    <tr><th>REPAS</th><th>PRIX<sup style="color: blue;">(XOF)</sup></th></tr>
                    @foreach ($details as $value)
                        <tr class="menu-item">
                            <td>{{$value['plat_name']}}</td>
                            <td>{{$value['prix_unitaire']}}</td>
                        </tr>
                    @endforeach
                </table>
            </ul>
        </div>

        <!-- Footer -->
        <footer class="bg-white py-4 mt-8">
            <div class="max-w-lg mx-auto text-center px-4">
                <p class="text-gray-500">@if ($my_banniere) {{$my_banniere->slogan}} @endif</p>
            </div>
        </footer>
    </div>

</body>
</html> --}}


@php
    $details = json_decode($menus->details, true);
@endphp
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Déjeuner</title>
    <script defer src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fbd3e9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .text-center {
            text-align: center;
        }
        .border-red-500 {
            border-bottom: 0.5px solid red;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .mt-8 {
            margin-top: 2rem;
        }
        .mt-2 {
            margin-top: 0.5rem;
        }
        .bg-pink-100 {
            background-color: #fbd3e9;
        }
        .font-bold {
            font-weight: bold;
        }
        .text-lg {
            font-size: 1.125rem;
        }
        .text-2xl {
            font-size: 1.5rem;
        }
        .text-3xl {
            font-size: 1.875rem;
        }
        .shadow-lg {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .py-4 {
            padding: 1rem 0;
        }
        .max-w-lg {
            max-width: 32rem;
        }
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        .px-4 {
            padding: 0 1rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .text-sm {
            font-size: 0.875rem; /* Taille de police réduite */
        }
    </style>
</head>
<body class="bg-pink-100 font-sans">
    <div class="max-w-lg mx-auto py-8 px-4 bg-white shadow-lg">
        <header class="bg-white py-4 border-b-2 border-red-500">
            <div class="max-w-lg mx-auto flex justify-between items-center px-4">
                <div class="text-lg font-bold">@if ($my_banniere) {{ $my_banniere->raison_sociale }} @endif</div>
                <div>@if ($my_banniere) {{ $my_banniere->sigle }} @endif</div>
            </div>
        </header>

        <div class="text-center">
            <h1 class="text-2xl font-bold">@if ($my_banniere) {{ $my_banniere->raison_sociale }} @endif</h1>
            <h2 class="text-3xl font-bold mt-2">{{ $menus->repas->name }}</h2>
            <p class="mt-2">{{ $menus->date }}</p>
        </div>

        <div class="mt-2">
            <h3 class="text-lg font-bold border-b-2 border-red-500 pb-1">Recettes</h3>
            <table>
                <thead>
                    <tr>
                        <th>Plat</th>
                        <th>Prix Unitaire (XOF)</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @foreach ($details as $value)
                        <tr>
                            <td>{{ $value['plat_name'] }}</td>
                            <td class="text-xs text-red" style="color: red; align-text: end">{{$value['prix_unitaire']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <footer class="bg-white py-4 mt-8">
            <div class="max-w-lg mx-auto text-center px-4">
                <p class="text-gray-500">@if ($my_banniere) {{ $my_banniere->slogan }} @endif</p>
            </div>
        </footer>
    </div>
</body>
</html>
