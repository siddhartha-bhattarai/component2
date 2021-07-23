@extends('layouts.app2')

<div class= "container1">
    <h2>CDs:</h2>
    @foreach($cds as $product)
    <div class="cards">
<strong>ID: {{ $product->getID() }}</strong><br/>
Title: {{ $product->getTitle() }}<br/>
First Name: {{ $product->getFirstName()}}<br/>
PlayLength: {{ $product->getPlayLength()}}<br/>
Price: {{ $product->getPrice()}}<br/>

<a href="{{ url('products/'. $product->getId()) }}" class="btn btn-dark" >Select</a><br/><br/>
</div>


<br/>
@endforeach
</div>




<div class="container2">
    <h2>Books:</h2>
@foreach($books as $product)
<div class="cards">
<strong>ID: {{ $product->getID() }}</strong><br/>
Title: {{ $product->getTitle() }}<br/>
First Name: {{ $product->getFirstName() }}<br/>
PlayLength: {{ $product->getNumberOfPages() }}<br/>
Price: {{ $product->getPrice()}}<br/>

<a href="{{ url('products/'. $product->getId()) }}" class="btn btn-dark">Select</a><br/><br/>
</div>
<br/>

@endforeach
</div>




<div class="wrapper">
<div class="contact-form">
    <div class="input-fields">
        <div style="padding:30px;">
            <form method="POST" action="/products/store">
            @csrf
            <select name="type">
                <option value="cd">CD</option>
                <option value="book">Book</option>
            </select><br/>
            <input type="text" name="title" class="input" placeholder="Title" required><br/> 
            <input type="text" name="firstname" class="input" placeholder="First Name"><br/>
            <input type="text" name="surname" class="input" placeholder="surname"><br/>
            <input type="text" name="price" class="input" placeholder="Price"><br/>
            <input type="text" name="papl" class="input" placeholder="Pages/Play Length"></br>
            <button type= "submit" name="save" class="btn-success">SAVE</button>
            </form>
</div>
</div>
</div>
        
