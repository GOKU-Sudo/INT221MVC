@forelse ($users as $user)
      <p style="background-color:cyan;" >This is user{{$user}}
@empty 
      <p style=" background-color:cyan;">User not found</p>
@endforelse