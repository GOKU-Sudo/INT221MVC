<!-- View: Formview -->


<div style="display: flex; flex-direction: column;">

<form action="{{ route('SubmitForm2') }}" method="post" >

@csrf

<div style="display: flex; flex-direction: column; width:400px">

<input type="text" name="name" value="name" >
<input type="text" name="email" value="email" >
<input type="text" name="password" value="password" >
<button type="submit">Submit</button>

<div>

</form>

</div>