<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    
    <h2 class="text-center mt-4">Add Employee</h2>
    <div class="container">
         <div>
            @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                              <div> {{ $error }} </div>
                            @endforeach
                        </div>
            @endif
         </div>
         <form action="{{ route('employee.store')}}" method="post">
            @csrf

            <label>Employee Name</label>
            <input type="text" name="empname" class="form-control" placeholder="Enter Employee Name"/>
            <br/>
            <label>Employee Age</label>
            <input type="text" name="empage" class="form-control" placeholder="Enter Employee Age"/>
            <br/>
            <label>Employee Address</label>
            <input type="text" name="empaddress" class="form-control" placeholder="Enter Employee Address"/>
            <br/>
            <label>Employee Department</label>
            <select name="empdep" class="form-control">
                <option>---Choose Department---</option>
                <option value="finance">Finance</option>
                <option value="technical">Technical</option>
                <option value="hr">HR</option>
                <option value="marketing">Marketing</option>
            </select>
            <br/>
            <input type="submit" value="Save" class="btn btn-success"/>

         </form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>