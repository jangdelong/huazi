/*
 * @name 网站js
 * @author Jelon
 * @date 2014/10/21
 *
 */

$(function() {
	//设置花子社区列表奇偶行颜色
	var $community_lis = $('#community').find('li');
	$community_lis.each(function(i) {
		if (i & 1 == 1) { //奇数行
			$community_lis.eq(i).removeClass('even').addClass('odd');
		} else {          //偶数行
			$community_lis.eq(i).removeClass('odd').addClass('even');
		}
	});

});

//评论框前端验证

var $btnSubmit = $('#submit'),
	$commentform = $('#commentform');

$btnSubmit.click(function() {
	var val_author = $.trim($('#author').val());
		val_email = $.trim($('#email').val()),
		val_url = $.trim($('#url').val()),
		val_comment = $.trim($('#comment').val());

	if ($('#author').length > 0) {
		if (val_author === '') {
			$commentform.submit(function() {
				return false;
			});
			$('#author').focus();
			return;
		} 			
	}

	if ($('#email').length > 0) {
		var reg = new RegExp('^\\w+((-\\w+)|(\\.\\w+))*\\@[A-Za-z0-9]+((\\.|-)[A-Za-z0-9]+)*\\.[A-Za-z0-9]+$');
		if (val_email === '') {
			$commentform.submit(function() {
				return false;
			});
			$('#email').focus();
			return;
		} else if (!reg.test(val_email)) {
			$commentform.submit(function() {
				return false;
			});
			$('#email').focus().val('');
			return;				
		}			
	}
	if ($('#url').length > 0) {
		var reg = new RegExp('^http[s]?:\\/\\/([\\w-]+\\.)+[\\w-]+([\\w-./?%&=]*)?$');
		if (val_url !== '' && !reg.test(val_url)) {
			$commentform.submit(function() {
				return false;
			});
			$('#url').focus().val('');
			return;		
		}
	}

	if (val_comment === '') {
		$commentform.submit(function() {
			return false;
		});
		$('#comment').focus();
		return;
	} else {
		$commentform.submit();			
	}

});


//回复 
$(function() {
	$('.comment-reply-link').click(function() {
		$('#comment').focus();
	});
});
