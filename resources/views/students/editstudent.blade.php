@include('students.header')


  @if($errors->any())
  @foreach($errors->all() as $error)
      <div class="alert alert-danger text-center" role="alert">
          {{$error}}
      </div>
  @endforeach
@endif


<h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About Student</h1>
<div class="col-md-6 offset-md-3">
    <form class="my-2 p-3 border" method="POST" action="{{Route('student.update',[$student->id])}}">
        
            @method("PUT")
            @csrf
        <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit</h1>
        <div class="form-group">
            <label for="exampleInputName1">Full Name</label>
            <input class="form-control" type="text" name="name" id=""value="{{$student->name}}" placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Email</label>

            <input class="form-control" type="email" name="email" id="" value="{{$student->email}}"placeholder="email">
        </div>
        <div class="form-group">
            <label for="exampleInputName1"> Age</label>

            <input class="form-control" type="age" name="age" id=""value="{{$student->age}}" placeholder="age">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>
</div>
