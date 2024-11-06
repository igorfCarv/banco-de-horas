  <div class="container">
    <div class="flex">
        <h2>Cadastrar usuários:</h2>
        <a type="button" href="{{ route('users.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Adicionar Usuário</a>
    </div>
   
    <h2>Lista de usuários:</h2>
  @foreach($users as $user)
    <div class=" bg-blue-50 rounded-2xl p-4  dark:bg-gray-600 border-gray-200 mb-4" wire:key="{{$user->id}}">

        <h2 class=" font-semibold text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            <div class="flex">
                <button
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                    <img class="h-8 w-8 rounded-full object-cover"
                         src="{{ $user->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                </button>
                <div class="ml-4">
                    <span class="text-2xl"> {{$user->name}} </span>
                    <p class="text-gray-500 dark:text-gray-300 mt-2">
                        {{$user->email}}
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 mt-2">
                        {{$user->setor_id}}
                    </p>
                </div>
            </div>

            <div class="flex">
                <div class="mx-2">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-6 h-6">
                            <path
                                d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z"/>
                            <path
                                d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z"/>
                        </svg>
                    </a>
                </div>
                
            </div>
        </h2>

    </div>
    @endforeach
</div>
