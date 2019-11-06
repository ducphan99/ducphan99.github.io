$('p').bind({
	click : function(){
		$('p').css('background', 'blue');
		$('p').css('color', 'white');

	}
	,dblclick: function(){
		$('p').css('background', 'yellow');
		$('p').css('color', 'black');
	}
});