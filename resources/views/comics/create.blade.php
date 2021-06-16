<!-- Create -->

@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="mb-5">Add a New Comic Book</h1>
        <div class="row">
            <div class="col-md-8 offset md-2">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="control-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="control-label">Series</label>
                        <input type="text" class="form-control" name="series" id="series">
                    </div>

                    <div class="mb-3">
                        <label for="title" class="control-label">Sale Date</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="control-label">Image</label>
                        <input type="text" class="form-control" name="image" id="image">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="control-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>

                    <button type="submit" class="btn btn-primary">Add This Item</button>
                </form>
            </div>
        </div>
    </div>    
@endsection