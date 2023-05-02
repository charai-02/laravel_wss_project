<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Insert') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                        @csrf
                        <table>
                            <tr><td>name</td><td><input type="text" name="p_name"></td></tr>
                            <tr><td>categorie</td><td><input type="text" name="p_categorie"></td></tr>
                            <tr><td>price</td><td><input type="text" name="p_price"><br></td></tr>
                            <tr><td>composants</td><td><textarea name="p_components" cols="30" rows="10"></textarea></td></tr>
                            <tr><td>description</td><td><textarea name="p_description" cols="30" rows="10"></textarea></td></tr>
                            <tr><td>avantage</td><td><textarea name="p_avantage" cols="30" rows="10"></textarea></td></tr>
                            <tr><td>usage</td><td><textarea name="p_usage" cols="30" rows="10"></textarea></td></tr>
                            <tr><td>image</td><td><input type="file" name="p_img"></td></tr>
                            <tr><td>image secendaire</td><td><input type="file" name="p_img_sec"></td></tr>
                            <tr><td>image icon</td><td><input type="file" name="p_icon"></td></tr>
                            <tr><td><button type="submit">submit</button></td><td></td></tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
