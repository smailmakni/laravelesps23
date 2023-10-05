@extends("layouts.template")
@section("content")

@if($errors->any())
<ul class="alert alert-danger ps-5">
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif

<form action="{{route("products.update",$product->id)}}" method="post" enctype="multipart/form-data">
    @method("PUT")
@csrf
<div class="row">
<div class="col-md-6">
    <label class="form-label" for="name">Nom produit</label>
<input class="form-control" value="{{$product->name}}" type="text" name="name" id="name" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="price">Prix produit</label>
<input class="form-control" value="{{$product->price}}" step="0.001" type="number" name="price" id="price" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="photo">Photo produit</label>
<input class="form-control" type="file" name="photo" id="photo" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="description">Description produit</label>
<textarea class="form-control" name="description" id="description" required>{{old('description')}}</textarea>
</div>
<div class="col-md-6">
    <label class="form-label" for="category_id">Categorie</label>
    <select class="form-control" name="category_id" id="category_id" required>
        <option value="">---- Choisir une categorie ----</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}" @if ($category->id==old("category_id")) selected @endif>{{$category->name}}</option>
        @endforeach
    </select>
</div>
<div class="col-md-12">
<button type="submit" class="btn btn-success mt-3">Modifier</button>
<button type="reset" class="btn btn-secondary mt-3">Annuler</button>
</div>
</div>
</form>
@endsection
