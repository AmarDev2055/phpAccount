
@extends('accounts.layouts')
@section('content')
<div class="card">
<div  lass="card-header">Accounts Page</div>
  <div class="card-body">
        <div class="ar-body">
        <h5 class="card-title">Name : {{ $accounts->name }}</h5>
        <p class="card-text">Age : {{ $accounts->age }}</p>
        <p class="card-text">Address : {{ $accounts->address }}</p>
        <p class="card-ext">Amount : {{ $accounts->amount }}</p>
  </div>
    </hr>
  </div>

</div>