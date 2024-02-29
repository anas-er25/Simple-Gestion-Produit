<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.0.1/remixicon.min.css"
        integrity="sha512-dTsohxprpcruDm4sjU92K0/Gf1nTKVVskNHLOGMqxmokBSkfOAyCzYSB6+5Z9UlDafFRpy5xLhvpkOImeFbX6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Produits</title>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>


    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">WS Concours</span>
            </a>
            <div class="block w-auto md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('logout') }}"
                            class="text-red-500 px-4 py-2 text-lg rounded-md bg-red-100 hover:bg-red-200 hover:text-red-600 mt-5">
                            <i class="ri-logout-box-line"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-3xl text-center mb-6 mt-10">Liste des produits</h1>
    <a href="{{ route('create') }}" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-3 text-center me-2 mb-2">Ajouter</a>
    @if ($products->count() > 0)
<div class="relative overflow-x-auto px-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 mt-5">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Réference</th>
                    <th scope="col" class="px-6 py-3">Libellé</th>
                    <th scope="col" class="px-6 py-3">Prix</th>
                    <th scope="col" class="px-6 py-3">Quantité</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Type</th>
                    <th scope="col" class="px-6 py-3">Photo Produit</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">{{ $product->RefPdt }}</td>
                        <td class="px-6 py-4">{{ $product->libPdt }}</td>
                        <td class="px-6 py-4">{{ $product->Prix }}</td>
                        <td class="px-6 py-4">{{ $product->Qte }}</td>
                        <td class="px-6 py-4">{{ $product->description }}</td>
                        <td class="px-6 py-4">{{ $type->where('id', $product->type_id)->first()->type }}</td>
                        <td class="px-6 py-4"><img src="/img/{{ $product->image }}" alt="{{ $product->libPdt }}"></td>
                        <td class="px-6 py-4">
                            <a href="{{ route('detail', $product->RefPdt) }}"><i class="ri-eye-line"></i></a>
                            <a href="{{ route('delete', $product->RefPdt) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')"><i class="ri-close-circle-fill"></i></a>
                            <a href="javascript:;"><i class="ri-restart-line"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <span>{{ $products->links() }}</span>
    </div>
    @else
        <h1 class="text-3xl font-bold text-center">Aucun produit</h1>
        @endif
</body>

</html>
