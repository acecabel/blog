<!DOCTYPE html>
<html>
	<form action='/movies/store' method='post'>
			<label for="">Title: </label>
			<input type="string" name="title">
			<br>
			<label for="">Category: </label>
			<input type="string" name="category">
			<br>
			<label for="">Rating: </label>
			<input type="string" name="rating">
			<br>
			<button>submit</button>
	</form>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</html>