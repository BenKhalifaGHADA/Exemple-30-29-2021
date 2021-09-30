@extends('layouts.master')
@section('content')


       <div class="container-fluid">
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
                       <div class="card-header card-header-primary">
                           <h4 class="card-title ">Modifier un produit</h4>
                       </div>
                       <div class="card-body">
                           <form action="{{ route('produits.update',$product->id) }}" method="POST">
                               @csrf
                               @method('PATCH')
                               <div class="form-group">
                                   <label for="nomproduit">Nom de produit</label>
                                   <input type="texte" class="form-control" id="nomproduit" value="{{$product->Name}}" name="Name">

                               </div>
                               <div class="form-group">
                                   <label for="description">Description</label>
                                   <textarea class="form-control" id="description" rows="3" name="description">{{$product->description}}</textarea>
                               </div>

                               <div class="form-group">
                                   <label for="price">Prix</label>
                                   <input type="number" class="form-control" id="price" name="price" value="{{$product->price }}">
                               </div>

                               <div class="form-group">
                                   <label for="stock">Stock</label>
                                   <input type="number" class="form-control" id="stock" name="stock" value="{{$product->stock }}">
                               </div>
                               <button type="submit" class="btn btn-primary">Modifier</button>
                           </form>
                       </div>
                   </div>
               </div>

           </div>
       </div>
@endsection
