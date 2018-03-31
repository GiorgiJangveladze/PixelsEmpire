var btn_left = document.getElementById('jsf'); 
var btn_close = document.getElementById('close'); 
var sidebar = document.querySelector('.left-side');

btn_left.addEventListener('click', open_sidebar);
btn_close.addEventListener('click', close_sidebar);

function open_sidebar() {
  sidebar.style.transform = "translateX(0)";
  this.style.display ="none";
}
function close_sidebar() {
  sidebar.style.transform = "translateX(-100%)";
  btn_left.style.display = "block";
}


	var button = $('#send');
	button.click(function()
	{
		var mess = $("#message").val();
		$.ajax({
			type:'POST',
            url:'/game/message',
            dataType:'json',
            data:{mess:mess},
            complete:function()
            {
            	$("#message").val(""); 
            }
		});
	});
	window.setInterval(function()
	{
		var id = $("li:last").attr("id");
		$.ajax({
			url:"/get_message",
			type:"POST",
			data:{id:id},
			complete:function(data){
				$("#enterMes").remove();
				$('#all_message').empty();
				data.responseJSON.map(function(item){
					$('#all_message').append("<li class='person' id='"+ item.id+"'><div class='about row'>  <p class='p-name col'>"+item.message+"</p><p class='status col-2'>"+item.name+"</p></div></li>");	
				});
			}
			
		});
	},3000);
