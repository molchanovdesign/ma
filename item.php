	<?php 
	$eventController->getView($catList, 'MAIN_TOP')->get();
	$eventAlias=$connection['path'][2];
	$eventId=(new Event(0))->getIdFromAlias($eventAlias);
	?>
	<div class="container containerfluid item">
		<div class="row">
			<div class="column9">
				<div class="white item">							
					<?php
					$eventController->getEventView($eventId,'FULL')->get();
					?>
					<div class="go-wrap">
						<button class="go" id="go-but" onclick="IG('<?php echo $eventId; ?>','going');">Я пойду!</button>
					</div>
					<div class="soc">
						<div class="rat" id="rate-box">
							<span>Оцените материал: </span>
							<div class="icons">
								<i class="fa fa-heart fa" id="rat1" onclick="rate('<?php echo $eventId; ?>', 1);"></i>
								<i class="fa fa-heart fa" id="rat2" onclick="rate('<?php echo $eventId; ?>', 2);"></i>
								<i class="fa fa-heart fa" id="rat3" onclick="rate('<?php echo $eventId; ?>', 3);"></i>
								<i class="fa fa-heart fa" id="rat4" onclick="rate('<?php echo $eventId; ?>', 4);"></i>
								<i class="fa fa-heart fa" id="rat5" onclick="rate('<?php echo $eventId; ?>', 5);"></i>
							</div>
						</div>
						<script>
						var ratev=<?php echo (new Event($eventId))->getLiteInfo()['counters']->getRating(); ?>;
						for(var i=1; i<=ratev; i++){
							$('#rat'+i).css({'color': '#000000', 'opacity': 1});
							console.log('#rat'+i);
						}
						</script>
						<span >Поделиться: </span>
						<script type="text/javascript">(function() {
							if (window.pluso)if (typeof window.pluso.start == "function") return;
							if (window.ifpluso==undefined) { window.ifpluso = 1;
								var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
								s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
								s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
								var h=d[g]('body')[0];
								h.appendChild(s);
							}})();</script>
							<div class="pluso" data-background="transparent" data-options="medium,round,line,horizontal,nocounter,theme=02" data-services="vkontakte,facebook,twitter,google">
							</div>
						</div>
						<div class="vk-link">
							<p class="header">Не пропустите новые материалы</p>
							<p><a href="http://vk.com/blogmeetyou">Meet You ВКонтакте</a></p>
						</div>
					</div>

				</div>
				<div class="column3">
					<p class="other">Читайте также: </p>
					<?php 	
					$eventController->getEventView($eventList['also'][0], 'BRICK')->get();
					$eventController->getEventView($eventList['also'][1], 'BRICK')->get();
					?>
				</div>
			</div>

			<div class="row time-events" style="margin-top: 0;">
				<div class="column9">
					<div class="col-i-3">
						<?php 
						$eventController->getEventView($eventList['other'][0], 'BRICK_HOR')->get();
						?>
					</div>
					<div class="col-i-3">
						<?php 
						$eventController->getEventView($eventList['other'][1], 'BRICK_HOR')->get();
						?>
					</div>
					<div class="col-i-3">
						<?php 
						$eventController->getEventView($eventList['other'][2], 'BRICK_HOR')->get();
						?>
					</div>
					<div class="clear-fix"></div>
					<div style="margin-top: 2em;">
						<?php 
						$eventController->getView(null, "COMMENTS")->get();
						?>
					</div>
				</div>
				<div class="column3">
					<script type="text/javascript" src="//vk.com/js/api/openapi.js?112"></script>
					<div class="brick">
						<div id="vk_groups" class="white vk-group"></div>
						<script type="text/javascript">
						VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 70307758);
						</script>
					</div>
				</div>
			</div>
		</div>
		<script>
		imageViewer();
		</script>