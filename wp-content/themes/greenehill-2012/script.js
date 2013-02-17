$(function() {
	$("#featured > ul").tabs({
		fx: {
			opacity: "toggle"
		}
	}).tabs("rotate", 5000, true);
	
	
	$("#panel, #primary").fitVids();
	
	//Stops Rotater on Mouseover
	$('#featured').mouseover(function() {	$("#featured > ul").tabs('rotate', 0, false);});

	//Navigation Menu
	$('#nav ul#menu-2012-nav-1 li').not("ul li ul li").bind('mouseover', openSubMenu);
	$('#nav ul#menu-2012-nav-1 li').not("ul li ul li").bind('mouseout', closeSubMenu);

	function openSubMenu() {$(this).find('ul').css('visibility', 'visible');};
	function closeSubMenu() {$(this).find('ul').css('visibility', 'hidden');};

	//Get Shift
	function getWeekLetter(opt_date) {
		var start = moment([2012, 0, 2]); // month is 0-based
		var date = moment(opt_date);
		var weeks = date.diff(moment(start), 'weeks', true);
		var weekNum = Math.floor(weeks) % 4;
		return String.fromCharCode('A'.charCodeAt(0) + weekNum);
	}
	// Call this after DOMLoaded, e.g. in a $() block w/JQuery
	$('#weekLetter').text(getWeekLetter());
	

});
		
