(function($) {
    $(document).ready(function(){	
	$('.cemaster').waypoint(function() {
	    var numAnim = new CountUp(
		this.element, 
		$(this.element).data('from'),
		$(this.element).data('to')
	    );
	    numAnim.start();
	}, { offset: '90%' });
    })
})(jQuery);
