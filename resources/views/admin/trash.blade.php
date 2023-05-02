<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Insert') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class=" mx-auto mt-20 mb-20">
                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
                            @foreach ($products as $product)
                                <div class="col d-flex align-items-center flex-column">
                                    <div class=" s card flex-row flex-wrap " style="width: 15rem;">
                                        <img src="images/{{ $product->p_img_sec }}" class="img-des-product img-fluid">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $product->p_name }}</h5>
                                            <button class="fcta-btn rounded-5 btn btn-success col-11"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                onclick="window.location.href='{{ route('restore_product', $product->id) }}';">
                                                <span class="text">restore</span>
                                            </button>
                                            <button class="fcta-btn rounded-5 btn btn-danger col-11"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                onclick="window.location.href='{{ route('ForceDelet_product', $product->id) }}';">
                                                <span class="text">delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
