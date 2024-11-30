<x-app-layout>
    <h2>Categorias</h2>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="relative overflow-x-auto">
        <table class="w-full min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID:
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nome:
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Localização:
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Telefone:
                    </th>
<th></th><th></th>
                    <a href="{{ route('funcionario.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                     Clique Aqui
                 </a>
                </tr>
            </thead>
            <tbody>
    @foreach ($funcionarios as $funcionario)
                <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $funcionario->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $funcionario->nome }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $funcionario->localizacao }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $funcionario->telefone }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('funcionario.edit', ['funcionario' => $funcionario->id]) }}"
                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        Editar
                     </a>
                    </td>
                    <td class="px-6 py-4">
    <form action="{{ route('funcionario.destroy', ['funcionario' => $funcionario->id]) }}" method="post">
    @csrf
        <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Deletar
                    </button>
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
