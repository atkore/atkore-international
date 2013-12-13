$(document).ready(function() {

  $('.nav-tabs a:first').tab('show');

  $('.collapse').collapse();

  $('.atkore-popover').popover({
    trigger:  'hover',
    html:     true,
  });

  $('#carousel-home').carousel({
    interval: 8000,
    wrap: true
  });

  $('#carousel-products').carousel({
    interval: 8000,
    wrap: true
  });
  
  $('#carousel-brands').carousel({
    interval: false,
    wrap: true
  });

  $('li.menu-newsletter').find('a').each(function () {
   $(this).attr('href', '#newsletter');
   $(this).attr('data-target', '#newsletter');
   $(this).attr('data-toggle', 'modal');
  });

  $('a.pdfbutton').each(function () {
   $(this).attr('class', 'list-group-item');
  });

  $('.tagged_as a').each(function () {
   $(this).attr('class', 'label label-primary');
  });
  
  
  $("table").tablecloth({
  theme: "default",
  bordered: true,
  condensed: true,
  striped: true,
  sortable: false,
  clean: true,
  cleanElements: "th td",
  customClass: "atkore-table table-hover"
});

  var activeTab = $('[href=' + location.hash + ']');
  activeTab && activeTab.tab('show');

	$('.swap').hover(function(){
	var e = $(this);
	e.data('originalSrc', e.attr('src'));
	e.attr('src', e.attr('data-rollover'));
	}, function(){
	var e = $(this);
	e.attr('src', e.data('originalSrc'));
	});

});


