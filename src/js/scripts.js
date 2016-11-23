
// remap jQuery to $
(function($){

	var init = function() {

		menuToggle();
		imgfill();

		$('.js-matchheight').matchHeight();
	}

	var menuToggle = function() {
		var triggers = $('.list--vert-nav li');
		var targets = $('.view--menus .meal-wrapper');
		var target = {};

		triggers.on('click', function(e) {
			var targetID = $(this).data('target');
			var target = targets.filter('[data-id="'+targetID+'"]');

			clearActiveTriggers();
			activateTrigger($(this));

			clearActiveTargets();
			activateTarget(target);
		});

		var clearActiveTriggers = function() {
			triggers.filter('.is-active').removeClass('is-active');
		}

		var activateTrigger = function(trigger) {
			trigger.addClass('is-active');
		}

		var clearActiveTargets = function() {
			targets.filter('.is-active').removeClass('is-active');
		}

		var activateTarget = function(target) {
			target.addClass('is-active');
		}
	}



	/* 
	 * Fills an image src based on Modernizr tests for SVG support
	 */
	var imgfill = function() {

		var $imgs = $('*[data-src]');

		$.each($imgs, function() {
			fillsrc($(this));
		});

		function fillsrc($img) {

			// Test for SVG
			if ( shoulduseSVG($img) ) {

				$img.attr({
					src: $img.data('src-svg')
				});

				return;
			}

			// Default - fill with data-src
			else {

				$img.attr({
					src: $img.data('src')
				});
			}
		}

		function shoulduseSVG($img) {

			if ( $img.attr('data-src-svg') && Modernizr.svg == true ) {
				return true;
			} else {
				return false;
			}
		}

	};

	init();

})(this.jQuery);