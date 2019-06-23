<html>
<body>
<form method="post" action="{{route('examinfo.store')}}">
	{{ csrf_field() }}

	
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Course Name</label>
	    <input type="text" name="Course" class="form-control" id="formGroupExampleInput2" placeholder="example:SWE111" required>
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Number Of Question</label>
	    <input type="text" name="question_lenth" class="form-control" id="formGroupExampleInput2" placeholder="E.g 10" required>
	  </div>
	  <div class="form-group">
	    <label class="col-form-label" for="formGroupExampleInput2">Set time</label>
	    <input type="text" name="time" class="form-control" id="formGroupExampleInput2" placeholder="Enter In Minite" required>
	  </div>
	  <div class="form-group">
	    <input type="hidden" value="{{substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 5)}}" name="uniqueid" class="form-control" id="formGroupExampleInput2">
	  </div>
	  <button type="Submit" class="btn btn-success btn-block">Submit</button>
	</div>

</form>
</body>
</html>