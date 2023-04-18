@extends('accounts.layouts')
@section('content')
<div class="card">
  <div class="card-header">Create Account</div>

  <div class="card-body">
      
      <form action="{{ route('accounts.store') }}" method="post">
        @csrf
        <label>S.N</label></br>
        <input type="text" name="sn" id="name" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <label>Action</label></br>
        <input type="text" name="action" id="action" class="form-control"></br>
        <input type="submit" value="submit" class="btn btn-success"></br>
    </form>
  
  </div>

</div>