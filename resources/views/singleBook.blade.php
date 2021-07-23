@extends('layouts.app2')
<div class="container1">
    @foreach($id as $product)
    <div class="cards">
        ID: {{ $product->getId() }}<br/>
        Title: {{ $product->getTitle() }}<br/>
        First Name: {{ $product->getFirstName()}}<br/>
        Last Name: {{ $product->getMainName()}}<br/>
        Price: {{ $product->getPrice()}}<br/>
        No. of pages: {{ $product->getNumberofpages()}}<br/><br/>
        @endforeach
</div>
</div>

<div class="wrapper">
<div class="contact-form">
    <div class="input-fields">
    <form method="POST" action="/products/update/{{ $product->getId() }}">
    @csrf
    @method('put')
    <input type="text" name="title" value="{{ $product->getTitle() }}" class="input" placeholder="Title" required><br/> 
    <input type="text" name="firstname" value="{{ $product->getFirstName()}}" class="input" placeholder="First Name"><br/>
    <input type="text" name="surname" value="{{ $product->getMainName()}}" class="input" placeholder="surname"><br/>
    <input type="text" name="price" value="{{ $product->getPrice()}}" class="input" placeholder="Price"><br/>
    <input type="text" name="papl" value="{{ $product->getNumberofpages()}}" class="input" placeholder="Pages/Play Length"></br>
    <button type= "submit" name="update" class="btn-success">UPDATE</button>
     </form>

     <form method="POST" action="/products/delete/{{ $product->getId() }}">
     @csrf
     @method('delete')
     <button type= "submit" name="delete" value="" class="btn-success">DELETE</button>
     </form>
</div>
</div>
</div>

