function browserDetect()
{

	if (/Android|webOS|iPhone|iPad|iPod|IEMobile|BlackBerry/i.test(navigator.userAgent))
	{ console.log('Mobile Browser' }

	else
	{	console.log('Desktop/Laptop Browser' }
 
}