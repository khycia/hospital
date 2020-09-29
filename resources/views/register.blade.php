<html>
  <form action="/register" method='POST'>
 @include('layout.error')   
@csrf
<input type="text" name='name' required placeholder ="Name">
<input type="text" name='diagnosis' required placeholder = "Diagnosis">
<input type="number" name='lab_number' required placeholder="Lab Number">
<button type="submit">Submit</button>

  </form>

</html>