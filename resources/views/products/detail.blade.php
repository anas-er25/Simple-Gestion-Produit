<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Détails</title>
</head>

<body>
    <h1 class="text-3xl text-center mt-10">Information sur le produit: {{ $product->RefPdt }}</h1>

    <section id="author">
        <div class="container px-5 mx-auto text-center">
            <div class="mt-10 flex flex-col md:flex-row space-x-0 md:space-x-5 space-y-5 md:space-y-0 border rounded-lg bg-slate-200">
                <div class="md:w-1/2 flex flex-col  space-y-2 rounded-lg">
                    <img src="/img/{{ $product->image }}" alt="{{ $product->libPdt }}" class="w-96 h-96">
                    </div>
                <div class="md:w-1/2 flex flex-col p-6 space-y-2 items-center rounded-lg">
                    <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-900">
                        <tr>
                            <th scope="col" class="px-6 py-3">Reference Produit :</th>
                            <td>{{ $product->RefPdt }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">Libellé Produit :</th>
                            <td>{{ $product->libPdt }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">Prix Produit :</th>
                            <td>{{ $product->Prix }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">Quantité Produit :</th>
                            <td>{{ $product->Qte }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">Description Produit :</th>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <th scope="col" class="px-6 py-3">Type Produit :</th>
                            <td>{{ $type->where('id', $product->type_id)->first()->type }}</td>
                        </tr>
                    </table>
                </div>
                <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white w-full font-bold py-2 px-4 rounded">Retour</a>
                </div>
            </div>
            
        </div>
    </section>

</body>

</html>
