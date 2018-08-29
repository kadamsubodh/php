$(document).ready(function(){
	$('#submit').click(function(){
var name=$('#categoryName').val();
if(name===""){
alert("Please Enter Category Name");
$('#categoryName').focus(); 
return false;
}
else if(!/^[a-zA-Z]*$/g.test(name))
{
alert("Only Aphabets are allowed");
$('#categoryName').focus();
return false; 
}
});
});

$(document).ready(function(){
$('#del').click(function(){
if(!confirm("Are you sure want to delete this??"))
{
return false;
}
else{
return true;
}
});
});
