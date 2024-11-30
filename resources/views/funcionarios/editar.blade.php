<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
        <div class="w-full flex-col sm:max-w-md mt-6 px-6 py-4 bg-sky-950 shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex justify-center">
                    <x-application-logo class="rounded-full w-20 h-20 fill-current text-gray-500" />
            </div>
            <div class="max-w-md mx-auto p-4">
                <form class="space-y-4" action="{{ route('funcionario.update', ['funcionario' => $funcionario->id]) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                <<div>
                    <x-input-label for="name" class="text-white" :value="__('Nome do funcionario')" />
                    <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome"  required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="localizacao" class="text-white" :value="__('Localização')"/>
                    <x-text-input id="localizacao" class="block mt-1 w-full" type="text" name="localizacao" required/>
                    <x-input-error :messages="$errors->get('localizacao')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="telefone" class="text-white" :value="__('Telefone')" />
                    <x-text-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" required/>
                    <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('funcionario.index') }}">
                        {{ __('Gostaria de voltar?') }}
                    </a>
                    <x-primary-button class="ms-4">
                        {{ __('Editar') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
        </div>
    </div>
</x-app-layout>
