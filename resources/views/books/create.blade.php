@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles.css') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Book</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('books.store') }}">
                            @csrf

                            <!-- Title -->
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <!-- Author -->
                            <div class="form-group">
                                <label for="author">Author:</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                            </div>

                            <!-- Publisher -->
                            <div class="form-group">
                                <label for="publisher">Publisher:</label>
                                <input type="text" class="form-control" id="publisher" name="publisher" required>
                            </div>

                            <!-- Published Year -->
                            <div class="form-group">
                                <label for="published_year">Published Year:</label>
                                <input type="number" class="form-control" id="published_year" name="published_year" required>
                            </div>

                            <!-- Category -->
                            <div class="form-group">
                                <label for="category">Category:</label>
                                <input type="text" class="form-control" id="category" name="category" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
