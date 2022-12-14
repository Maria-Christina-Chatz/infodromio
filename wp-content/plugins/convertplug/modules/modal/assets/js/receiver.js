/* eslint-env jquery */
/* eslint-disable no-unused-vars */
function updateHTML(html, target) {
	html = htmlEntities(html);
	jQuery('#' + target).val(html);
}

function setYoutubeVideoHeight(value) {
	const smile_panel = jQuery('.customize').data('style');
	const input = jQuery('#accordion-' + smile_panel + ' .cp_modal_height');
	const $this = input;
	const input_id = $this.attr('id');
	const slider_id = $this.attr('id').replace('smile_', 'slider_');
	jQuery('#' + input_id).val(value);
	jQuery('#' + slider_id).slider('value', value);
	const leftMarginToSlider = jQuery('#' + slider_id)
		.find('.ui-slider-handle')
		.css('left');
	jQuery('#' + slider_id)
		.find('.range-quantity')
		.css('width', leftMarginToSlider);
}

function htmlEntities(str) {
	return String(str)
		.replace(/&/g, '&amp;')
		.replace(/</g, '&lt;')
		.replace(/>/g, '&gt;')
		.replace(/'/g, '&#39;')
		.replace(/&quot;/g, '"');
}

function setFocusElement(element) {
	jQuery(document).trigger('focusElementChanged');
	const section = jQuery('.' + element).parents('.cp-customizer-tab:first');
	const section_id = jQuery(section).attr('id');

	if (typeof section_id === 'undefined') return false;
	jQuery('.cp-vertical-nav')
		.find('a')
		.each(function (i, a) {
			const data_sec_id = jQuery(a).attr('data-section-id');
			if (section_id === data_sec_id) {
				if (!jQuery(a).hasClass('active')) {
					jQuery(a).trigger('click');
				}
			}
		});

	const accordion = jQuery('.' + element).parents('.accordion-frame:first');
	const accordion_anchor = jQuery('.' + element)
		.parents('.accordion-frame:first')
		.find('a.heading');
	const accordion_content = jQuery('.' + element)
		.parents('.accordion-frame:first')
		.find('.content');
	if (accordion_anchor.hasClass('collapsed')) {
		jQuery('.accordion-frame a.heading').addClass('collapsed');
		jQuery('.accordion-frame .content').slideUp();
		accordion_anchor.removeClass('collapsed');
		accordion_content.slideDown();
	}
	const ID = jQuery('.' + element).attr('id');

	if (
		!jQuery('.' + element)
			.parents('.smile-element-container')
			.hasClass('cp-set-focus')
	) {
		setTimeout(function () {
			jQuery('.smile-element-container').removeClass('cp-set-focus');

			jQuery('.' + element)
				.parents('.smile-element-container')
				.addClass('cp-hl-active cp-set-focus');

			jQuery('.design-form').animate(
				{
					scrollTop:
						jQuery('#' + ID)
							.parents('.smile-element-container')
							.offset().top - 100,
				},
				1000
			);
			setTimeout(function () {
				jQuery('.' + element)
					.parents('.smile-element-container')
					.removeClass('cp-hl-active');

				//	Check the field is not `input` type. It disappear the CKEditor.
				if (jQuery('.' + element).prop('type') !== 'text') {
					jQuery('.' + element).trigger('focus');
				}
			}, 2000);
		}, 300);
	} else {
		jQuery('.' + element)
			.parents('.smile-element-container')
			.addClass('cp-hl-active');
		setTimeout(function () {
			jQuery('.' + element)
				.parents('.smile-element-container')
				.removeClass('cp-hl-active');
		}, 2000);
	}
	jQuery('body').trigger('click');
}

function customizerLoaded() {
	jQuery(document).trigger('customize_loaded');
	setFocusElement('style_title');
}

jQuery(document).ready(function (e) {
	jQuery(document).on(
		'change',
		'#accordion-panel-jugaad .smile-radio-image.modal_layout',
		function () {
			const selVal = jQuery(
				"#accordion-panel-jugaad input[name='modal_layout']:checked"
			).val();
			const modal_width_container = jQuery(this)
				.closest('.content')
				.find('input[name="modal_col_width"]')
				.closest('.smile-element-container');

			if (
				selVal === 'form_left' ||
				selVal === 'form_right' ||
				selVal === 'form_left_img_top' ||
				selVal === 'form_right_img_top'
			) {
				modal_width_container.show();
			} else {
				modal_width_container.hide();
			}

			if (typeof selVal !== 'undefined') {
				hide_button_on_nextline(selVal);
				hide_modal_img_option(selVal);
			}
		}
	);

	// update display button on next line option if name field is enabled ( only for modal layout 7 and 8 )
	jQuery('#accordion-panel-jugaad')
		.find("[data-id='smile_namefield']")
		.on('click', function () {
			const layout = jQuery(
				"#accordion-panel-jugaad input[name='modal_layout']:checked"
			).val();
			const element = jQuery(this);
			setTimeout(function () {
				const namefield = element
					.closest('.smile-element-container')
					.find('#smile_namefield')
					.val();
				const btn_on_next_line = jQuery('#accordion-panel-jugaad')
					.find("[data-element='btn_disp_next_line']")
					.find('input[name="btn_disp_next_line"]');
				if (
					layout === 'form_bottom' ||
					layout === 'form_bottom_img_top'
				) {
					if (String(namefield) === '1') {
						btn_on_next_line.val('0');
					}
				}
			}, 200);
		});

	jQuery(document).on(
		'change',
		'#accordion-panel-jugaad .smile-select.modal_img_src',
		function () {
			cp_toggle_image_options();
		}
	);
});

jQuery(window).on('load', function () {
	const selVal = jQuery(
		"#accordion-panel-jugaad input[name='modal_layout']:checked"
	).val();

	if (typeof selVal !== 'undefined') {
		hide_button_on_nextline(selVal);
		//hide_modal_img_option(selVal);
	}
});

// hide/show button on next line option for jugaad style
function hide_button_on_nextline(selVal) {
	const btnContainer = jQuery('#accordion-panel-jugaad').find(
		"[data-element='btn_disp_next_line']"
	);
	const switchBtn = btnContainer.find('#smile_btn_disp_next_line');
	const checkboxLable = btnContainer.find('.smile-switch-btn.checkbox-label');
	const namefield = jQuery('#accordion-panel-jugaad')
		.find("[data-id='smile_namefield']")
		.closest('.smile-element-container')
		.find('#smile_namefield')
		.val();

	if (
		selVal === 'form_right' ||
		selVal === 'form_left' ||
		selVal === 'form_left_img_top' ||
		selVal === 'form_right_img_top'
	) {
		if (Number(switchBtn.val()) === 0) {
			checkboxLable.trigger('click');
		}
		btnContainer.addClass('cp-hidden');
	} else if (selVal === 'form_bottom' || selVal === 'form_bottom_img_top') {
		if (Number(switchBtn.val()) === 0 && String(namefield) === '0') {
			checkboxLable.trigger('click');
		} else if (Number(switchBtn.val()) === 1 && String(namefield) === '1') {
			checkboxLable.trigger('click');
		}
		btnContainer.removeClass('cp-hidden');
	} else {
		if (Number(switchBtn.val()) === 1) {
			checkboxLable.trigger('click');
			switchBtn.val('0');
		}
		btnContainer.removeClass('cp-hidden');
	}
}

// hide/show modal image options according to modal layout
function hide_modal_img_option(selVal) {
	cp_toggle_image_options();
}

function cp_toggle_image_options() {
	const modal_img_src = jQuery(
		'#accordion-panel-jugaad .smile-select.modal_img_src'
	).val();
	const modal_img_src_container = jQuery('#accordion-panel-jugaad')
		.find('.modal_img_src')
		.closest('.smile-element-container');
	const imgContainer = jQuery('#accordion-panel-jugaad')
		.find('.modal_image.media')
		.closest('.smile-element-container');
	const resize_img_container = jQuery('#accordion-panel-jugaad')
		.find('.image_size')
		.closest('.smile-element-container');
	const img_horizontal_position = jQuery('#accordion-panel-jugaad')
		.find('.image_horizontal_position')
		.closest('.smile-element-container');
	const img_vertical_position = jQuery('#accordion-panel-jugaad')
		.find('.image_vertical_position')
		.closest('.smile-element-container');
	const img_disp_on_mob = jQuery('#accordion-panel-jugaad')
		.find('#smile_image_displayon_mobile')
		.closest('.smile-element-container');
	const modal_img_custom_url = jQuery('#accordion-panel-jugaad')
		.find('#smile_modal_img_custom_url')
		.closest('.smile-element-container');
	const modal_layout = jQuery(
		"#accordion-panel-jugaad input[name='modal_layout']:checked"
	).val();

	if (
		modal_layout === 'form_left' ||
		modal_layout === 'form_right' ||
		modal_layout === 'form_bottom'
	) {
		modal_img_custom_url.hide();
		imgContainer.hide();
		resize_img_container.hide();
		img_horizontal_position.hide();
		img_vertical_position.hide();
		img_disp_on_mob.hide();
		modal_img_src_container.hide();
	} else {
		modal_img_src_container.show();

		switch (modal_img_src) {
			case 'custom_url':
				modal_img_custom_url.show();
				imgContainer.hide();
				resize_img_container.hide();
				img_horizontal_position.hide();
				img_vertical_position.hide();
				img_disp_on_mob.hide();
				break;

			case 'upload_img':
				modal_img_custom_url.hide();
				imgContainer.show();
				resize_img_container.show();
				img_horizontal_position.show();
				img_vertical_position.show();
				img_disp_on_mob.show();
				break;

			case 'none':
				modal_img_custom_url.hide();
				imgContainer.hide();
				resize_img_container.hide();
				img_horizontal_position.hide();
				img_vertical_position.hide();
				img_disp_on_mob.hide();
				break;
		}
	}
}
