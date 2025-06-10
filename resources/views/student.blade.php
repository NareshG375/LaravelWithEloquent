<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Student Data</title>
</head>
<body>

   <div class="container">
      <div class="row justify-content-center align-items-center g-2" >
        <div class="col">
            <h1> Student Data</h1>
             @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
               </div>
             @endif 
            <a href="{{ route('students.create')}}" type="button"  class="btn btn-success" >Add Student</a>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>



    </tr>
  </thead>
  <tbody>

    @foreach ( $students as  $key=>$value)
        
      <tr>
       <th scope="row">{{ $students->firstItem() + $key }}</th>
      <td>{{$value['name']}}</td>
      <td>{{$value['email']}}</td>
      <td>{{$value['age']}}</td>
      <td>{{$value['phone']}}</td>
      <td>{{$value['city']}}</td>

      <td><a href="{{route('students.show',$value->id)}}"  type="button" class="btn btn-info" >View</a></td>
      <td><a href="{{route('students.edit',$value->id)}}"  type="button" class="btn btn-primary" >Edit</a></td>
      <td>
        <form action="{{ route('students.destroy', $value->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
        @csrf
        @method('DELETE') {{-- This is crucial for Laravel to treat it as DELETE --}}
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

      </td>
    </tr>
    @endforeach 
  
   
  </tbody>
</table>
    

        </div>
       
      </div>
  {{$students->links()}}

      
   </div>
   

  
</body>
</html>