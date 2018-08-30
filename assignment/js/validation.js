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
$("#selectall").click(function(){
        //alert("just for check");
        if(this.checked){
            $('.checkboxall').each(function(){
                this.checked = true;
            })
        }else{
            $('.checkboxall').each(function(){
                this.checked = false;
            })
        }
    });
});

$(document).ready(function(){
	$('.delBtn').click(function(){
	var v=$(".checkboxall:checked").length;
	if(v==0)
	{
		alert("please select atleast one category");
		return false;
	}
	else{
		confirm("Caution! this action cannot be undone!! Are you sure wantt to delete this??");
		return true;
	}
			
});
});

$(document).ready(function(){
$(".checkboxall").click(function(){
	var v1=$('.checkboxall').length;
	var check=$('.checkboxall').filter(':checked').length;
	if(check==v1)
	{

		$('#selectall').prop("checked", true);
	}
	else{
		$('#selectall').prop("checked", false);
	}

});
});