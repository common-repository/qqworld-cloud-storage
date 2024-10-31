jQuery(document).on('click', '#qqworld-cloud-storage-tabs li', function() {
	if (!$(this).hasClass('current')) {
		var index = $('#qqworld-cloud-storage-tabs li').index(this);
		$('#qqworld-cloud-storage-tabs li').removeClass('current');
		$(this).addClass('current');
		$('.tab-content').hide().eq(index).fadeIn('normal');
	}
	return false;
});