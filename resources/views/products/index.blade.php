@extends('master')
@section('title')
    Product Page
@endsection
@section('content')
    <x-button>Product
        <x-slot name='btn_color'>danger</x-slot>
    </x-button>
    <h1 class="text-center">Products</h1>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    This is the first item's accordion body.
                </div>
            </div>
        </div>

    </div>
    <x-modal>
        <div class="container">
            <form>
                <div class="mb-3 row">
                    <label for="inputName" class="col-4 col-form-label">Name</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
                    </div>
                </div>
                <fieldset class="mb-3 row">
                    <legend class="col-form-legend col-4">Group name</legend>
                    <div class="col-8">
                        you can use radio and checkboxes here
                    </div>
                </fieldset>
                <div class="mb-3 row">
                    <div class="offset-sm-4 col-sm-8">
                        <button type="submit" class="btn btn-primary">Action</button>
                    </div>
                </div>
            </form>
        </div>
        <x-slot name='title'>Add New Product</x-slot>
        <x-slot name='id_t'>1</x-slot>
    </x-modal>
    <x-modal>
        <x-card>
            <x-card-item>
                <x-slot name='title'>Product</x-slot>
                <h1>This is Product</h1>
            </x-card-item>
        </x-card>
        <x-slot name='title'>show product</x-slot>
        <x-slot name='id_t'>2</x-slot>
        <x-slot name='btn_color'>danger</x-slot>
    </x-modal>
    <x-card>
        <x-card-item>
            <x-slot name='title'>Cars</x-slot>
            <h1>This is Car</h1>
        </x-card-item>
        <x-card-item>
            <x-slot name='title'>Toys</x-slot>
            <h1>This is Toys</h1>
        </x-card-item>
        <x-card-item>
            <x-slot name='title'>Toys</x-slot>
            <h1>This is Toys</h1>
        </x-card-item>
        <x-card-item>
            <x-slot name='title'>Toys</x-slot>
            <h1>This is Toys</h1>
        </x-card-item>
        <x-card-item>
            <x-slot name='title'>Toys</x-slot>
            <h1>This is Toys</h1>
        </x-card-item>
        <x-card-item>
            <x-slot name='title'>Toys</x-slot>
            <h1>This is Toys</h1>
        </x-card-item>
        <x-card-item>
            <x-slot name='title'>Toys</x-slot>
            <h1>This is Toys</h1>
        </x-card-item>
        <x-card-item>
            <x-slot name='title'>Toys</x-slot>
            <h1>This is Toys</h1>
        </x-card-item>

    </x-card>
@endsection
