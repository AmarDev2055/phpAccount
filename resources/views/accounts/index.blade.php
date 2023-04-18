@extends('accounts.layouts')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h3>Bank Account</h3>
                <a href="{{url('/accounts/create')}}"  class="btn btn-primary">Create Account</a>
            @if($message=Session::get('sucess'))
            <p class="alert alert-sucess">{{$message}}</p>
            @endif    
  <table class="table table-bordered">
    <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Age</th>
    <th>Address</th>
    <th>Amount</th>
    <th>Action</th>
  </tr>
  <tbody>
    @if(count($accounts)>0)
    @foreach($accounts as $item)
       <tr>
         <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
              <td>{{ $item->age }}</td>
              <td>{{ $item->address }}</td>
              <td>{{ $item->amount }}</td>
              <td>
                  <a href="{{url('/accounts/'.$item->id)}}"
                  title="View Account">
                  <button class="btn btn-info btn-sm">
                    View
                  </button></a>
                  <a href="{{ url('/accounts/' . $item->id . '/edit') }}"
                   title="Edit Student">
                   <button class="btn btn-primary btn-sm">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                    Edit
                  </button></a>
                  <form method="POST" action="{{ url('/accounts' . '/' . $item->id) }}"
                  style="display:inline">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" 
                  onclick="return confirm(&quot;Confirm delete?&quot;)">
                   Delete</button>
                  </form>
            </td> 
        </tr>
        @endforeach
        @else
        <p>Data is not valid</p>
        @endif
    <tbody>
</table>
</div>
</div>
</div>
@endsection






