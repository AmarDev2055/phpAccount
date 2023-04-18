@extends('accounts.layouts')
<div  lass="card">       
  <div class="card-header">Contact us Page</div>
  <d i class="cardbody">
      
      <form action="{{ url('accounts/' .$accounts->id) }}" method="post">
         {!! csrf_field() !!}
           @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$accounts->id}}" id="id" />
         <label>Name</label></br>
               <input type="text" name="name" id="name" value="{{$accounts->name}}" class="form-control"></br>
             <label>Age</label></br>
             <input type="text" name="age" id="age" value="{{$accounts->age}}" class="form-control"></br>
              <label>Address</label></br>
         <input type="text" name="address" id="address" value="{{$accounts->address}}" class="form-control"></br>
          <label>Amount</label></br>
              <input type="text" name="amount" id="amount" value="{{$accounts->amount}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
           </div>
    </div>
 