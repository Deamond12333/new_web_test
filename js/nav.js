$.each($('.nav_button'), function(index, element)
{
	$(element).click(function()
	{
		if (!($(element).hasClass('nb_active')))
		{
			$.ajax
			({
				url: '/get?attr='+$(element).attr('id'), 
				type: "get",
				dataType: "html",
				success: function(data)
				{
					$('.content').empty();
					$('.content').append(data);
					for (var i = 0; i < $('.nav_button').length; ++i)
					{
						if ($('.nav_button').eq(i).hasClass('nb_active'))
						{
							$('.nav_button').eq(i).removeClass('nb_active');
							break;
						}
						continue;
					}
					$(element).addClass('nb_active');
				}
			});
		}
	});
});