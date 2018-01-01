var clrzr = clrzr || {};

clrzr.main = (function () {

	var getPalett,
	currentPalett,
	sort_by,
	loadFirstColors,
	loadAllColors,
	mainPanel,
	pickColor,
	pickRecent,
	showCurrentColor,
	lockColor,
	addToRecent,
	getUrl,
	sendTo,
	ajaxSend,
	closeDialog,
	dispatcher,
	validateForm,
	sendForm,
	tryAgain,
	fileName,
	$target = $('#truckimg'),
	$colorcode = $('#colorcode'),
	$colorname = $('#colorname'),
	$textureinfo = $('#textureinfo'),
	$colorinfo = $('#colorinfo'),
	$colorinfo2 = $('#colorinfo2'),
	$clearcoat = $('#clearcoat'),
	$colordialog = $('#colordialog'),
	$urldialog = $('#urldialog'),
	$maildialog = $('#maildialog'),
	$recent = $('#recent'),
	$urlField = $('#urlField'),
	$btnSend = $('#btnSend'),
	$before = $('.beforeSend'),
	$after = $('.afterSend'),
	$error = $('.errorSend'),
	maxInRecent = 9,
	lockedData = {},
	palett = {},
	ie8 = false;

	function getParameterByName(name, url) {
		if (!url) url = window.location.href;
		name = name.replace(/[\[\]]/g, "\\$&");
		var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
		results = regex.exec(url);
		if (!results) return null;
		if (!results[2]) return '';
		return decodeURIComponent(results[2].replace(/\+/g, " "));
	}

	function getFromJson(fileName) {
		$.getJSON(fileName, function(ret) {
			palett = ret.palett;

			if (!clrzr.main.fromUrl.color) {
				if ($(window).width() > 768) {
					loadFirstColors(fileName);
				}
				else {
					loadAllColors(fileName);
				}
			}
			else {
				$('#maincolors a[data-maincolor="' + clrzr.main.colorGroup.name + '"]').click();
			}
		});
	}

	function getUrlVars() {
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for (var i = 0; i < hashes.length; i++) {
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}

	function getUrlVar(name) {
		return $.getUrlVars()[name];
	}

	function trimCommas(str) {
		var first = str.substring(0, 1);
		var last = str.substring(str.length, str.length-1);
		if(first == ',') { str = str.slice(1);}
		if(last == ',') { str = str.slice(0, -1);}

		return str;
	}

	function searchColour(fileName, responsive, colors) {
		$('#'+responsive+'search-form').keyup(function(){
		  var searchField = $('#'+responsive+'search-form').val();
		  var regex = new RegExp(searchField, "i");
		  var output = '';
		  var count = 1;
		  if(searchField.length > 2) {
		  	setTimeout(function() {
	  		  $.getJSON(fileName, function(data) {
	  		    $.each(data.palett, function(key, val){
	  		    	$.each(val.colors, function(index, object){
	  		    		if((object.name.search(regex) != -1 || object.cID.search(regex) != -1 || object.hex.search(regex) != -1)) {
	  		    			output += '<div class="search-colorblock">';
	  		    			output +=	'<a href="#"><div class="colorpick search-color '+object.group.toLowerCase()+'" title="' + object.name + '" style="background-color:'+object.hex+';" data-color="' + object.hex + '" data-texture="' + object.group.toLowerCase() + '" data-type="' + object.type + '" data-cid="' + object.cID + '" data-clearcoat="' + object.clearCoat + '"></div></a>';
	  		    			output +=	'<h4>'+trimCommas(object.cID)+'</h4>';
	  		    			output +=	'<p>'+object.name+'</p>';
	  		    			output += '</div>';
	  			    	}
	  		    	});
	  		    });
	  		    if(output.length > 1) {
	  		    	$(colors +', .search-noResult').hide();
	  		    	$('.'+responsive+'search .search-title').show();
	  		    	$('#'+responsive+'search-results').html(output);
	  		    } else {
	  		    	$('#'+responsive+'search-results').empty();
	  		    	$('.'+responsive+'search .search-noResult').show();
	  		    }

						if(responsive == 'mobile-') {
							// console.log('mobile');
							$('.'+responsive+'search .search-icon').removeClass('fa-search').addClass('fa-times');
							$('.fa-times').on('click', function(e){
								e.preventDefault();
								$('.'+responsive+'search .search-title, .'+responsive+'search .search-noResult').hide();
								$('#'+responsive+'search-results').empty();
								$('#'+responsive+'search-form').val('');
								$(colors).show();
								$('.'+responsive+'search .search-icon').removeClass('fa-times').addClass('fa-search');
							});
						}

	  		  });
	  		}, 100);
		  } else {
		  	$('.'+responsive+'search .search-title, .'+responsive+'search .search-noResult').hide();
		  	$('#'+responsive+'search-results').empty();
		  	$(colors).show();
		  }

		  $('.search-title .closeBtn').on('click', function(e) {
				e.preventDefault();
				$('.'+responsive+'search .search-title, .'+responsive+'search .search-noResult').hide();
				$('#'+responsive+'search-results').empty();
				$('#'+responsive+'search-form').val('');
				$(colors).show();
				resizeParentFrame();
			});

		  setTimeout(function(argument) {
		  	resizeParentFrame();
		  }, 200);
		});
	}

	/**
	* Retrieves all colors and place in the palett object
	*/
	function getPalett() {
		if (clrzr.main.fromUrl.color) {
			var fromUrl = clrzr.main.fromUrl;
			//(color, name, texture, type, cid, add)
			clrzr.main.lockColor(fromUrl.color, fromUrl.name, fromUrl.texture, fromUrl.type, fromUrl.cid, fromUrl.clearcoat, 1);
		}

		$.ajaxSetup({ scriptCharset: "utf-8", contentType: "application/json; charset=utf-8" });

		if(getParameterByName('feflPreview', window.location.href.valueOf()) === 'true'|| getUrlVar('truck') === 'newFE' || getUrlVar('truck') === 'newFL') {
			if(getParameterByName('feflPreview', window.location.href.valueOf()) === 'true') {
				fileName = "preview_data_fe_fl.json";
				getFromJson(fileName);
			} else {
				fileName = "data_fe_fl.json";
				getFromJson(fileName);
			}
		} else {
				// truck = newFH / newFM
				if(getParameterByName('fhfmfmxPreview', window.location.href.valueOf()) === 'true') {
					fileName = "preview_data_fh_fm_fmx.json";
					getFromJson(fileName);
				}
				fileName = "data_fh_fm_fmx.json";
				getFromJson(fileName);
			}
		};


		/* Load responsive palett */
		$(window).resize(function () {
			if ($(window).width() < 768 && currentPalett == 'single') {
				loadAllColors(fileName);
			}

			if ($(window).width() > 768 && currentPalett == 'all') {
				loadFirstColors(fileName);
			}
		});


		/* Colour-sorter */
		sort_by = function (field, reverse) {

			var key = function (x) { return x[field] };
			reverse = !reverse ? 1 : -1;

			return function (a, b) {
				return a = key(a), b = key(b), reverse * ((a > b) - (b > a));
			}
		}


		loadFirstColors = function (fileName) {
			currentPalett = 'single';

			var $colorblock = $('.colorblock').empty(),
			firstColor = $('#maincolors').find('li:first').addClass('active').find('a').data('maincolor'),
			texture = palett[firstColor].texture,
			thisPalett = palett[firstColor].colors.sort(sort_by('hex', true)),
			activeClass = '',
			i = 0;

			for (var data in thisPalett) {
				if (i === 0) {
					activeClass = ' active';
					lockedData.color = thisPalett[data].hex;
					lockedData.name = thisPalett[data].name;
					lockedData.texture = texture;
					lockedData.type = thisPalett[data].type;
					lockedData.cid = thisPalett[data].cID;

					clrzr.main.lockColor(thisPalett[data].hex, thisPalett[data].name, texture, thisPalett[data].type, thisPalett[data].cID, 1);
				} else {
					activeClass = '';
				}

				$('<li><a href="#" class="colorpick' + activeClass + ' ' + texture + '" title="' + thisPalett[data].name + '" style="background-color:' + thisPalett[data].hex + '" data-color="' + thisPalett[data].hex + '" data-texture="' + texture + '" data-type="' + thisPalett[data].type + '" data-cid="' + thisPalett[data].cID + '" data-clearcoat="' + thisPalett[data].clearCoat + '"></a></li>').appendTo($colorblock);
				i++;
			}

			searchColour(fileName, '', '#colorplate, #maincolors');
		};


		/* Mobile */
		loadAllColors = function (fileName) {
			currentPalett = 'all';
			$colorblock = $('.colorblock').empty();

			for (var key in palett) {
				if (palett.hasOwnProperty(key)) {
					if (key === 'Metallic') {
						var block = '.metallicblock',
						texture = 'metallic';
					}
					else if (key === 'Pearl') {
						var block = '.pearlblock',
						texture = 'pearl';
					}
					else {
						var block = '.solidblock',
						texture = 'none';
					}

					var p = palett[key].colors.sort(sort_by('hex', true)),
					i = 0;

					for (var data in p) {
						if (i === 0) {
							lockedData.color = p[data].hex;
							lockedData.name = p[data].name;
							lockedData.texture = texture;
							lockedData.type = p[data].type;
							lockedData.cid = p[data].cID;

							clrzr.main.lockColor(p[data].hex, p[data].name, texture, p[data].type, p[data].cID, 1);
						} else {
							activeClass = '';
						}

						$('<li><a href="#" class="colorpick' + ' ' + texture + '" title="' + p[data].name + '" style="background-color:' + p[data].hex + '" data-color="' + p[data].hex + '" data-texture="' + texture + '" data-type="' + p[data].type + '" data-cid="' + p[data].cID + '" data-clearcoat="' + p[data].clearCoat + '"></a></li>').appendTo(block);

						i++;
					}
				}
			}

			searchColour(fileName, 'mobile-', '#mobile-colorplate');
		};

		/**
		* Handeling click event on main color panel
		*/
		function mainPanel() {
			var $maincolor = $('#maincolors').find('a');

			$maincolor.click(function (e) {
				e.preventDefault();

				var me = $(this),
				$colorblock = $('.colorblock'),
				activeClass = '',
				mainID = me.data('maincolor'),
				texture = palett[mainID].texture,
				thisPalett = palett[mainID].colors.sort(sort_by('hex', true));

				if (me.parent('li').hasClass('active')) {
					return false;
				}

				$maincolor.parent('li').removeClass('active');
				me.parent('li').addClass('active');
				$colorblock.empty();

				for (var data in thisPalett) {
					//console.log(lockedData);
					activeClass = (lockedData.name === thisPalett[data].name) ? ' active' : '';
					$('<li><a href="#" class="colorpick' + activeClass + ' ' + texture + '" title="' + thisPalett[data].name + '" style="background-color:' + thisPalett[data].hex + '" data-color="' + thisPalett[data].hex + '" data-texture="' + texture + '" data-type="' + thisPalett[data].type + '" data-cid="' + thisPalett[data].cID + '" data-clearcoat="' + thisPalett[data].clearCoat + '"></a></li>').appendTo($colorblock);
				}

				resizeParentFrame();
				clrzr.main.closeDialog();
			});
		};

		/**
		* Handeling events on colors
		*/
		function pickColor() {
			lockedData.color = $colorcode.data('color');
			lockedData.type = $colorcode.data('type');
			lockedData.cid = $colorcode.data('cid');
			lockedData.clearcoat = $colorcode.data('clearcoat');
			lockedData.name = $colorname.text();

			// Mouse over
			$('#colorblock, #search-results, #mobile-search-results').on('mouseover', '.colorpick', function () {
				var me = $(this),
				color = me.data('color'),
				name = me.attr('title'),
				texture = me.data('texture'),
				type = me.data('type'),
				cid = me.data('cid'),
				clearcoat = me.data('clearcoat');

				clrzr.main.showCurrentColor(color, name, texture, type, cid, clearcoat);

			// Mouse out
			}).on('mouseout', '.colorpick', function () {
				clrzr.main.showCurrentColor(lockedData.color, lockedData.name, lockedData.texture, lockedData.type, lockedData.cid, lockedData.clearcoat);

			// Click
			}).on('click', '.colorpick', function (e) {
				e.preventDefault();
				var me = $(this),
				color = me.data('color'),
				texture = me.data('texture'),
				type = me.data('type'),
				cid = me.data('cid'),
				clearcoat = me.data('clearcoat'),
				name = me.attr('title');

				if (me.hasClass('active')) {
					clrzr.main.closeDialog();
					return false;
				}

				$('.colorpick').removeClass('active');
				me.addClass('active');

				clrzr.main.lockColor(color, name, texture, type, cid, clearcoat, 1);
				window.scrollTo(0, 0);
			});
		};


		/**
		* Set color on truck from recent list
		*/
		function pickRecent() {
			var $recentPick = $recent.find('.colorpick');

			$recentPick.live('click', function (e) {
				e.preventDefault();

				var me = $(this),
				color = me.data('color'),
				texture = me.data('texture'),
				type = me.data('type'),
				cid = me.data('cid'),
				clearcoat = me.data('clearcoat'),
				name = me.attr('title');

				$('a.colorpick.active', $('#colorblock')).removeClass('active');
				$('#colorblock').find('a[title="' + name + '"]').addClass('active');

				clrzr.main.lockColor(color, name, texture, type, cid, clearcoat, 0);
				clrzr.main.closeDialog();
				window.scrollTo(0, 0);
			});
		};

		/**
		* Opens the select colour dialog
		*/
		function selectColour() {
			$('#selectColourBtn').click(function (e) {
				e.preventDefault();

				if ($colordialog.is(':visible')) return false;

				clrzr.main.closeDialog();

				var height = $('body').height()-10;
				$colordialog.fadeIn(180).css({'top': '-' + height + 'px', 'margin-bottom': '-' + height + 'px'});
				resizeParentFrame();

				$colordialog.find('a.closeBtn').click(function (e) {
					e.preventDefault();
					clrzr.main.closeDialog();
					resizeParentFrame();
				});
			});
		};

		/**
		* Gets the url to the current color, and opens the url share dialog
		*/
		getUrl = function () {
			$('#geturl').click(function (e) {
				e.preventDefault();

				if ($urldialog.is(':visible')) return false;

				clrzr.main.closeDialog();
				$urldialog.fadeIn(180).find($urlField).focus().select();

				$urldialog.find('a.closeBtn').click(function (e) {
					e.preventDefault();
					clrzr.main.closeDialog();
				});
			});
		};

		/**
		* Opens the Send to dialog
		*/
		sendTo = function () {
			$('#mailsharebtn').click(function (e) {
				e.preventDefault();

				if ($maildialog.is(':visible')) return false;

				clrzr.main.closeDialog();
				$before.show();
				$after.hide();
				$maildialog.fadeIn(180).find($urlField).focus().select();

				$maildialog.find('a.closeBtn, a.closer').click(function (e) {
					e.preventDefault();
					clrzr.main.closeDialog();
				});
				return false;
			});
		};

		/**
		* Handeling mailto events
		*/
		ajaxSend = function () {
			var jsonString;

			$btnSend.click(function (e) {
				e.preventDefault();
				$('.requiredMessage').remove();

				//alert('asdasd');
				if (validateForm()) {
					$('#sendColorId').val(lockedData.cid);
					jsonString = JSON.stringify($('form').serializeObject());
						//                alert(jsonString);
					sendForm(jsonString);
				}
			});
		};

		/**
		* Handles ajax call when send form submits
		*/
		sendForm = function (jsonString) {
			$.ajax({
				url: 'Service.asmx/Mail',
				type: 'post',
				dataType: 'json',
				contentType: "application/json; charset=utf-8",
				cache: false,
				data: jsonString,
				success: function (ret) {
					ret = $.parseJSON(ret.d);
					if (ret.success === 'error') {
						$before.slideUp(100, function () {
							$error.slideDown(250, function () {
								$('.tryAgain').click(function (e) {
									e.preventDefault();
									tryAgain();
								});
							});
						});
					} else {
						$before.slideUp(100, function () {
							$after.slideDown(250);
						});
					}
				},
				error: function () {
					tryAgain();
				}
			});
		};

		/**
		* Shows error message if ajax call fails
		*/
		tryAgain = function () {
			$error.slideUp(100, function () {
				$before.slideDown(250);
			});
		};

		/**
		* Returns true or false if form validates
		*/
		validateForm = function () {
			var $mandatory = $('.mandatory'),
			$validateEmail = $('.validateEmail'),
			inputVal, hasError = false;

			$mandatory.map(function (i) {
				var $me = $(this);

				if ($me.is($validateEmail)) {
					inputVal = ($me.val() !== '' && validateEmail($me)) ? true : false;
					if (!inputVal) {
						hasError = true;
						validateAlert($me);
					}
				} else {
					inputVal = ($me.val() !== '') ? true : false;
					if (!inputVal) {
						hasError = true;
						validateAlert($me);
					}
				}
			});

			if (hasError) return false
				return true;
		};

		/**
		* Show alert message for specified form elementcolo
		*/
		validateAlert = function (el) {
			var $bubble = $('<div class="requiredMessage" />'),
			elPos = el.position(),
			alertMessage = el.data('errormessage');

			if (ie8) $bubble.fadeTo(200, .7);
			$bubble.appendTo('#msg').text(alertMessage).css({
				top: (elPos.top - $bubble.height() - 16),
				left: (elPos.left)
						//top: (0),
						//left: (0)
					}).css('visibility', 'visible')
			.hide()
			.fadeIn(200)
			.delay(10000)
			.fadeOut(200, function () {
				$(this).remove();
			});

			el.live('focus click', function () {
				fadeItOut($bubble);
			});
		};

		/**
		* Regex for email validation
		*/
		validateEmail = function (el) {
			var strEmail = el.val(),
			emailRegExp = /^[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+[\.]{1}[a-zA-Z]{2,4}$/;
			return emailRegExp.test(strEmail);
		};

		/**
		* Remove validate message element
		*/
		fadeItOut = function (el) {
			el.stop(1, 0).fadeOut(200, function () {
				$(this).remove();
			});
		};

		/**
		* Close the share dialogs
		closeDialog = function () {
		$urldialog.hide();
		$maildialog.hide();
		$('.requiredMessage').remove();
		};
		*/

		/**
		* Handeling the share functionality
		*/
		dispatcher = function () {
			var shareCopy = $urlField.data('basecopy'),
			$shareBtn = $('.btnshare'),
			shareURL, url, windowName, windowOptions;

			$shareBtn.click(function (e) {
				e.preventDefault();

				shareURL = encodeURIComponent($urlField.val());

				var me = $(this);

				if (me.hasClass('facebook')) {
					url = 'http://www.facebook.com/sharer.php?u=' + shareURL + '&redirect_uri=' + encodeURIComponent('http://stage2.cordovan.se/magnus_lekstuga/colorizer/close.htm');
					windowName = 'fbshare';
					windowOptions = 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=660,height=400,left=' + (window.width / 2 - 330) + ',top=' + (window.height / 2 - 200);
				} else if (me.hasClass('twitter')) {
					url = 'http://twitter.com/share?text=' + shareCopy + '&url=' + shareURL + '&via=VolvoTrucksFun';
					windowName = 'twshare';
					windowOptions = 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=600,height=445,left=' + (window.width / 2 - 300) + ',top=' + (window.height / 2 - 115);
				}
				clrzr.main.closeDialog();
				window.open(url, windowName, windowOptions);

				shareURL = '';
			});
		};




		/* Resize Iframe */
		var parentDocHeight = 0;
		// Iframe
		function listener(event) {
				// Only listen to events from the top-level page.
				//   if (event.origin !== "http://author-volvo-uat.adobecqms.net/") {
				//   return;
				// }
				jQuery('head').append(event.data);
			}
		// We attach this differently for older versions of IE.
		if (window.addEventListener) {
			addEventListener("message", listener, false);
		}
		else {
			attachEvent("onmessage", listener);
		}

		var resizeParentFrame = function () {

			var docHeight = jQuery('body').height();

			if (docHeight != parentDocHeight) {
				parentDocHeight = docHeight;
				// There is no need to filter this to specific domains, since the data is
				// not sensitive, so just send it everywhere.
				window.parent.postMessage({ frameID: "Colorizer", height: parentDocHeight }, "*");
				console.log('docHeight=' + docHeight + ' parentHeight=' + parentDocHeight);
			}
		};

		jQuery(window).resize(resizeParentFrame);

		$(document).ready(function () {
			setTimeout(function () {
				resizeParentFrame();
			}, 0);

		});






	return {
		/**
		* Initiate page functionality
		*/
		fromUrl: {},
		colorGroup: {},
		init: function () {
			getPalett();
			mainPanel();
			pickColor();
			pickRecent();
			selectColour();
			getUrl();
			sendTo();
			ajaxSend();
			dispatcher();

			if ($.browser.msie && (parseInt($.browser.version, 10) < 9)) {
				ie8 = true;
			}
		},
		setGroup: function (group) {
			clrzr.main.colorGroup.name = group;
		},
		saveFromUrl: function (color, name, texture, type, cid, clearcoat, add) {
			clrzr.main.fromUrl.color = color;
			clrzr.main.fromUrl.name = name;
			clrzr.main.fromUrl.texture = texture;
			clrzr.main.fromUrl.type = type;
			clrzr.main.fromUrl.cid = cid;
			clrzr.main.fromUrl.clearcoat = clearcoat;
			clrzr.main.fromUrl.add = add;
		},
		/**
		* Save color
		*/
		lockColor: function (color, name, texture, type, cid, clearcoat, add) {
				//console.log(color, name, texture, type, cid, add);

				clrzr.main.showCurrentColor(color, name, texture, type, cid, clearcoat);
				var baseurl = $urlField.data('baseurl');

				lockedData.color = color;
				lockedData.name = name;
				lockedData.texture = texture;
				lockedData.type = type;
				lockedData.cid = cid;
				lockedData.clearcoat = clearcoat;

				if (add) {
					clrzr.main.addToRecent(color, name, texture, type, cid, clearcoat);
				}

				var byTruck = $.getUrlVar('truck');
				var byLang = $.getUrlVar('lang');

				var queryAdd = "";

				if (byTruck !== undefined) {
					queryAdd += "&truck=" + encodeURIComponent(byTruck);
				}

				if (byLang !== undefined) {
					queryAdd += "&lang=" + encodeURIComponent(byLang);
				}

				$urlField.val(baseurl + '?colorid=' + encodeURIComponent(cid) + queryAdd);

			},

		/**
		* Set color on truck on mouseover / mouseout
		*/
		showCurrentColor: function (color, name, texture, type, cid, clearcoat) {
			$target.css('background-color', color).removeClass().addClass(type).addClass(texture);
			$colorname.html(name);

			var solidText = '';
			var clearcoatText = '';
			var colorinfoText = '';
			var colorinfoText2 = '';

			if(texture == 'metallic' || texture == 'pearl') {
				colorinfoText = cid; // metallic/pearl
				$('.solid-wrapper, .clear-wrapper').css('visibility', 'hidden');
				$textureinfo.css('visibility', 'visible');
				$textureinfo.html(trimCommas(colorinfoText));
			} else {
				var itemNumbers = cid.split(',');
				if (itemNumbers[0].length > 0) {
					$textureinfo.css('visibility', 'hidden');
					colorinfoText = itemNumbers[0];
					$colorinfo.html(trimCommas(colorinfoText));
					$('.solid-wrapper').css('visibility', 'visible');
				} else {$('.solid-wrapper').css('visibility', 'hidden');}
				if (itemNumbers[1]) {
					if (itemNumbers[1].length > 0) {
			 			colorinfoText2 = itemNumbers[1];
						$colorinfo2.html(trimCommas(colorinfoText2));
						$('.clear-wrapper').css('visibility', 'visible');
					}
				} else {$('.clear-wrapper').css('visibility', 'hidden');}
			}

			$colorcode
			.data('color', color)
			.data('cid', cid)
			.css('background-color', color)
			.removeClass().addClass(texture);
		},

		/**
		* Adds color to recent list
		*/
		addToRecent: function (color, name, texture, type, cid, clearcoat) {

			var $newRecent = $('<a />').addClass('colorpick ' + texture).attr({
				'title': name,
				'href': '#'
			})
			.data('color', color)
			.data('texture', texture)
			.data('type', type)
			.data('cid', cid)
			.data('clearcoat', clearcoat == undefined ? false : clearcoat)
			.css('background-color', color),
			colorpickWithThisName = $('.colorpick[title="' + name + '"]', $recent);

			clrzr.main.closeDialog();

			if (colorpickWithThisName.length > 0) {
				colorpickWithThisName.remove();
			}
			if ($('#recent a').length >= maxInRecent) {
				$('#recent a:last').remove();
			}
			if ($('#recent a').length < maxInRecent-1) {
				resizeParentFrame();
			} else {
				if (currentPalett == 'all') {
					resizeParentFrame();
				}
			}

			$recent.prepend($newRecent);
		},

		/**
		* Close the share dialogs
		*/
		closeDialog: function () {
			$colordialog.hide();
			$urldialog.hide();
			$maildialog.hide();
			$('.requiredMessage').remove();
		}
	};
} ());

$(function () {
	clrzr.main.init();
});

$.fn.serializeObject = function () {
	var o = {},
	a = this.serializeArray();
	$.each(a, function () {
		if (o[this.name] !== undefined) {
			if (!o[this.name].push) {
				o[this.name] = [o[this.name]];
			}
			o[this.name].push(this.value || '');
		} else {
			o[this.name] = this.value || '';
		}
	});
	return o;
};

$.extend({
	getUrlVars: function () {
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for (var i = 0; i < hashes.length; i++) {
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	},
	getUrlVar: function (name) {
		return $.getUrlVars()[name];
	}
});
