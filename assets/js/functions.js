function callback_follow()
{
    if (this.readyState == 4)
    {
        if (this.status == 200)
        {				
        	follow = eval(this.responseText);
        	
        	if (follow != -1)
        	{
        		$('#' + follow).html('<td id="' + follow[0].id + '"><a class="btn btn-small btn-info" href="#" onclick="follow(\'' 
        								+ follow[0].follower + '\', \'' + follow[0].followed + '\', \'' + follow[0].button_id + '\')"><i class="icon-plus icon-white"></i> Seguir</a></td>');
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
        		$('#' + unfollow).html('<td id="' + unfollow[0].id + '"><a class="btn btn-small btn-info" href="#" onclick="follow(\'' 
        								+ unfollow[0].follower + '\', \'' + unfollow[0].unfollowed + '\', \'' + unfollow[0].button_id + '\')"><i class="icon-plus icon-white"></i> Seguir</a></td>');
        	
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
	req.open('GET', "http://localhost/fokar/follow/do_follow?" + 'follower=' + follower + '&followed=' + followed + '&button_id=' + button_id, false);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.onreadystatechange = callback_follow;
    req.send(); 
}

function unfollow(follower, unfollowed, button_id)
{
	var req = new XMLHttpRequest();
	req.open('GET', "http://localhost/fokar/follow/do_unfollow?" + 'follower=' + follower + '&unfollowed=' + unfollowed + '&button_id=' + button_id, false);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.onreadystatechange = callback_unfollow;
    req.send(); 
}