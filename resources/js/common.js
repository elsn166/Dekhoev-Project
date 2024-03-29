jQuery(document).ready(function () {
		$('.brands-slider').slick({
		slidesToShow: 7,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		infinite: true,
		pauseOnHover:true,
	  responsive: [	{
		  breakpoint: 1281,
		  settings: {
			slidesToShow: 5,
			slidesToScroll: 1,
		  }
		},
			{
		  breakpoint: 768,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
		  }
		},
			{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
		  }
		}		
		]
	});
		$('.gyaan-slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		infinite: true,
		pauseOnHover:true,
	  responsive: [	{
		  breakpoint: 1281,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
		  }
		},
			{
		  breakpoint: 768,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
		  }
		},
			{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
		  }
		}		
		]
	});

		$('.popular-bikes-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: true,
		infinite: true,
		pauseOnHover:true,
	  responsive: [	{
		  breakpoint: 1281,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
		  }
		},
			{
		  breakpoint: 768,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
		  }
		},
			{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
		  }
		}		
		]
	});

		$('.popular-bikes-slider2, .review.latest, .review.post, .review.neg').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: false,
		arrows: true,
		infinite: true,
		pauseOnHover:false,
	  responsive: [	{
		  breakpoint: 1281,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
		  }
		},
			{
		  breakpoint: 768,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
		  }
		},
			{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
		  }
		}		
		]
	});

   jQuery(".main-table").clone(true).appendTo('#table-scroll').addClass('clone');

$('.btn[data-toggle=modal]').on('click', function(){
  var $btn = $(this);
  var currentDialog = $btn.closest('.modal-dialog'),
  targetDialog = $($btn.attr('data-target'));
  if (!currentDialog.length)
    return;
  targetDialog.data('previous-dialog', currentDialog);
  currentDialog.addClass('aside');
  var stackedDialogCount = $('.modal.in .modal-dialog.aside').length;
  if (stackedDialogCount <= 5){
    currentDialog.addClass('aside-' + stackedDialogCount);
  }
});

$('.modal').on('hide.bs.modal', function(){
  var $dialog = $(this);  
  var previousDialog = $dialog.data('previous-dialog');
  if (previousDialog){
    previousDialog.removeClass('aside');
    $dialog.data('previous-dialog', undefined);
  }
});


    var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
    $active.find('a').prepend('<i class="glyphicon glyphicon-minus"></i>');
    $('#accordion .panel-heading').not($active).find('a').prepend('<i class="glyphicon glyphicon-plus"></i>');
    $('#accordion').on('show.bs.collapse', function (e) {
        $('#accordion .panel-heading.active').removeClass('active').find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
        $(e.target).prev().addClass('active').find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
    })


});