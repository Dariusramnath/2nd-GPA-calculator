<!DOCTYPE html>
<html>
<body>

<form method='POST' action = {{ route('calgpa')}}>
{{ csrf_field() }}

Grade: <input type="text" name="Grade" value="" ><br>
Credits: <input type="number" name="Credits" value="" min=1 max=7><br>
<input type="submit" value="Calculate">
</form>

<p>Click the "Calculate" button to get your GPA for the semester.</p>

</body>
</html>