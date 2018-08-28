window.onscroll = function() 
{
	var scrolled = window.pageYOffset || document.documentElement.scrollTop;
	
	if(scrolled > 60)
	{
		document.getElementById("header-wrapper").style.position='fixed';
		
		document.getElementById("aside").style.height='auto';
		document.getElementById("aside").style.position='fixed';
		document.getElementById("aside").style.top='75px';
		
		document.getElementById("main").style.margin='60px 0 0 220px';
	}
	else
	{
		document.getElementById("header-wrapper").removeAttribute("style");
		document.getElementById("aside").removeAttribute("style");
		document.getElementById("main").removeAttribute("style");
	}
}