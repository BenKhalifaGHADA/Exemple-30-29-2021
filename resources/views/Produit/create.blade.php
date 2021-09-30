@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Ajouter un produit</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('produits.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nomproduit">Nom de produit</label>
                            <input type="texte" class="form-control" id="nomproduit" placeholder="Nom de produit" name="Name">

                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Prix</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>

                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock">
                        </div>
                        <div class="form-group">
                            <label >Catégorie</label>

                                <select class="custom-select" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->Name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
