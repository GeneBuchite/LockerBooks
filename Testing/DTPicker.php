<!DOCTYPE html>
<html>
<body>

Birthday: <input type="date" id="myDate" value="2018-05-23">


<p>Click the button to set a date for the date field.</p>

<button onclick="myFunction()">Try it</button>

<p><strong>Note:</strong> input elements with type="date" do not show as any date field/calendar in IE 11 and earlier versions.</p>

<script>
function myFunction() {
    document.getElementById("myDate").value = "2014-02-09";
}
</script>

</body>
</html>