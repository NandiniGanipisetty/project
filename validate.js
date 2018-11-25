function validate()
{
	var l=/^[A-za-z]/;
	if(document.logform.nm.value==""||document.logform.nm.value.match(l)==null )
	{
		alert("enter a valid name");
		document.logform.nm.value.focus();
		return false;
	}
	if(document.logform.pw.value=="" || document.logform.pw.value.length!=10 )
	{
		alert("password can't be blank");
		document.logform.pwd.value.focus();
		return false;
	}
