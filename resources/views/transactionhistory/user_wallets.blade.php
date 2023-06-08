<x-app-layout>
    <main class="relative h-screen overflow-hidden bg-gray-100 white:bg-gray-800">
    <x-sidebar />

    <x-header />
 <link rel="stylesheet" href="{{ URL::asset('css/jquery.dataTables.min.css') }}">
<div class="h-screen px-4 pb-24 overflow-auto md:px-6">
    <div class="h-screen px-4 pb-24 overflow-auto md:px-6">
                <h1 class="text-4xl font-semibold text-gray-800 dark:text-white">
                 User Wallets
                </h1>
           
                   
    <div class="py-8">
        <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                <table class="min-w-full leading-normal" id="table_overall">
                    <thead>
                        <tr>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 bg-white border-b border-gray-200">
                                Name
                            </th>
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 bg-white border-b border-gray-200">
                                Usertype
                            </th>
                         
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 bg-white border-b border-gray-200">
                                Current Wallet
                            </th>
                          
                            <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 bg-white border-b border-gray-200">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getwallet AS $wallet)
                        <tr>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <div class="flex items-center">
                                   
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $wallet->name }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                     {{ $wallet->usertype }}
                                </p>
                            </td>
                        
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ number_format($wallet->curr_wallet,2) }}
                                </p>
                            </td>
                           
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <a href="{{ route('viewtransaction',$wallet->id) }}">
                                  <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                    <span aria-hidden="true" class="absolute inset-0 bg-green-200 rounded-full opacity-50">
                                    </span>
                                    <span class="relative text-xs">
                                        View Transaction History
                                    </span>
                                </span> 
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              
            </div>
        </div>
    
</div>
         
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table_overall').DataTable();
    } );
</script>
    </main>
</x-app-layout>
