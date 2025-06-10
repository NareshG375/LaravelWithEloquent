<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Student</title>
</head>
<body>
     <div class="container-fluid vh-100">
  <div class="row justify-content-center align-items-center h-100">
              <div class="col-md-6">
                
                    <h1 class="text-center">Create Student</h1>
                 <form action="{{ route('students.update', $student->id) }}" method="POST">
                        @csrf
                        @method('put')
                    <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$student->name}}" class="form-control" name="name" id="name" placeholder="Enter the name">

                             @error('name')
                                  <div class="alert alert-danger mt-2">{{ $message }}</div>
                             @enderror 
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control"  readonly    value="{{$student->email}}" name="email" id="email" placeholder="Enter the email">
                        
                             @error('email')
                                  <div class="alert alert-danger mt-2">{{ $message }}</div>
                             @enderror 
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control"  value="{{$student->city}}" name="city" id="city" placeholder="Enter the city">
                         
                             @error('city')
                                  <div class="alert alert-danger mt-2">{{ $message }}</div>
                             @enderror 
                    </div>
                    
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control"  value="{{$student->age}}" name="age" id="age" placeholder="Enter the Age">
                        
                             @error('age')
                                  <div class="alert alert-danger mt-2">{{ $message }}</div>
                             @enderror 
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" value="{{$student->phone}}" name="phone" id="phone" placeholder="Enter the phone">
                        
                             @error('phone')
                                  <div class="alert alert-danger mt-2">{{ $message }}</div>
                             @enderror 
                    </div>
                    
                    <div class="mb-3">
                         <button type="submit" class="btn btn-success">Add</button>
                    </div>
                   </form>
              </div>
          </div>
      </div>
</body>
</html>