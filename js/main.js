$( document ).ready(function(){
	$("#mainsubmit").click(function(){
		$.ajax({
		    url: 'index.php',
		    dataType: 'json',
		    type: 'post',
		    data: { url: $('#urltext').val(), items: $('#items').val() },
		    success: function( data, textStatus, jQxhr )
		    {
		    	$('#response').html('');
		    	var length = data.length;
		    
		    	if(length == 0)
		    	{
		    		$('#response').append(document.createTextNode("No results"));
		    	}
		    	else
		    	{
		    		$('#response').append(document.createTextNode(length+" results found"));
		    	}
		    	var ul = document.createElement('ul');
		    	$('#response').append(ul);
		    	$.each(data, function(i, obj) 
		        {
		    		var li=document.createElement('li');
		    	    ul.appendChild(li);
		    		var t = document.createTextNode(obj);
		    		li.appendChild(t);
		        });
		    },
		    error: function( jqXhr, textStatus, errorThrown ){
		    	$('#response').html(errorThrown);
		        console.log( errorThrown );
		    }
		});
	    return false;
	});
});