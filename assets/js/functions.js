function callback_follow()
{
    if (this.readyState == 4)
    {
        if (this.status == 200)
        {				
        	follow = eval(this.responseText);
        	
        	if (follow != -1)
        	{
        		$('#' + follow).html('<i class="icon-minus icon-white"></i> Dejar de seguir</a>');
        	}
        	else
        	{
        		alert("Error inesperado");
        	}
        }
    }    
}

function callback_unfollow()
{
    if (this.readyState == 4)
    {
        if (this.status == 200)
        {				
        	unfollow = eval(this.responseText);
        	
        	if (unfollow != -1)
        	{
        		$('#' + unfollow).html('<i class="icon-plus icon-white"></i> Seguir</a>');
        	}
        	else
        	{
        		alert("Error inesperado");
        	}
        }
    }    
}

function follow(follower, followed, button_id)
{
	var req = new XMLHttpRequest();
	req.open('GET', "http://localhost/fokar/follow/follow?" + 'follower=' + follower + '&followed=' + followed + '&button_id=' + button_id, false);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.onreadystatechange = callback_follow;
    req.send(); 
}

function unfollow(follower, unfollowed, button_id)
{
	var req = new XMLHttpRequest();
	req.open('GET', "http://localhost/fokar/follow/follow?" + 'follower=' + follower + '&unfollowed=' + unfollowed + '&button_id=' + button_id, false);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.onreadystatechange = callback_unfollow;
    req.send(); 
}