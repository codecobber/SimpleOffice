
/*
=============================================
  Developed by Code Cobber for your enjoyment
  http://www.codecobber.co.uk
  Licened under the Code Cobber paid-licence:  
  (see www.codecobber.co.uk/paid-terms.php)
=============================================
*/


var menuFlag = 0;


function openNav() {

	if(menuFlag === 0){
		menuFlag = 1;
		document.getElementById("mySidenav").style.width = "250px";
    	document.getElementById("main").style.marginLeft = "250px";
	}
	else{
		menuFlag = 0;
		document.getElementById("mySidenav").style.width = "0";
    	document.getElementById("main").style.marginLeft= "0";
	}


    
}