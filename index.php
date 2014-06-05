<?php 
$eventController->getView($catList, 'MAIN_TOP')->get();
?>
<div class="containerfluid container <?php 
if($this->catList['grey']){echo "grey";}
?>">	
<div class="row " style="padding-top: 0px; margin-top: 0; padding-left: 0; padding-right: 0; padding-bottom: 0;">		
	<div class="column12" style="text-align: center;">
		<span class="h">События по дате:&nbsp;</span>
		<span class="h" id="date" >
			<?php 
			if(!$connection['GET']['time']){
				echo "ближайшие";
			}?>
		</span>
		<div class="date-bar">
			<ul id="days"></ul>			
		</div>			
		<div class="clear-fix"></div>
	</div>
</div>
<div class="row " style="padding-top: 0;">		
	<div class="column12 time-events" id="time-events" style="text-align: center;"><?php 

	for ($i=0; $i<count($eventList['index']['toptime']); $i++) {
		$item=$eventList['index']['toptime'][$i];
		$eventController->getEventView($item['id'], "BRICK_HOR")->get();					
	}
	?></div>
</div>
</div>

<div class="containerfluid container index">
	<div class="row " >
		<div class="column4">			
			<?php 
			$fc = count($eventList['index']['first'])/3;
			$sc = count($eventList['index']['second'])/3;
			$tc = count($eventList['index']['third'])/3;

			$ffc = count($eventList['index']['first']);
			$sfc = count($eventList['index']['second']);
			$tfc = count($eventList['index']['third']);

			for ($i=0; $i<$fc+1; $i++) {
				$item=$eventList['index']['first'][$i];
				$eventController->getEventView($item['id'], $item['type'])->get();					
			}
			?>
		</div>
		<div class="column4">			
			<?php 
			for ($i=0; $i<$sc-1; $i++) {
				$item=$eventList['index']['second'][$i];
				$eventController->getEventView($item['id'], $item['type'])->get();					
			}
			?>
		</div>
		<div class="column4">			
			<?php 
			for ($i=0; $i<$tc; $i++) {
				$item=$eventList['index']['third'][$i];
				$eventController->getEventView($item['id'], $item['type'])->get();					
			}
			?>
		</div>
	</div>
</div>
<div class="container containerfluid index grey">
	<div class="row">
		<div class="column2">
			<p class="header">Новости</p>
			<a href="//you-samara.ru" class="site-news">You-Samara</a>
		</div>
		<div class="column5">
			<ul>
				<?php 
				for($i=0; $i<count($eventList['index']['news'])/2; $i++){
					$news=$eventList['index']['news'][$i];
					$date = DateTime::createFromFormat('Y-m-d H:i:s', $news['published_dt']);
					?>
					<li style="margin-bottom: 1em">
						<div class="time" style="display: inline-block; margin-right: 0.4em;">
							<p style=" margin: 0; font-size: 13px; text-align: right "><?php echo date_format($date,'M d'); ?></p>
							<p style="color: #aaa;  margin: 0; font-size: 13px; text-align: right"><?php echo date_format($date,'H:i'); ?></p>
						</div>

						<a href="//you-samara.ru/item/<?php echo $news['alias']; ?>"  class="message"><?php echo $news['title']; ?></a>
					</li>
					<?php 
				} ?>
			</ul>
		</div>
		<div class="column5">
			<ul>
				<?php 
				for($i=count($eventList['index']['news'])/2; $i<count($eventList['index']['news']); $i++){
					$news=$eventList['index']['news'][$i];
					$date = DateTime::createFromFormat('Y-m-d H:i:s', $news['published_dt']);
					?>
					<li style="margin-bottom: 1em">
						<div class="time" style="display: inline-block; margin-right: 0.4em;">
							<p style=" margin: 0; font-size: 13px; text-align: right "><?php echo date_format($date,'M d'); ?></p>
							<p style="color: #aaa;  margin: 0; font-size: 13px; text-align: right"><?php echo date_format($date,'H:i'); ?></p>
						</div>
						<a href="//you-samara.ru/item/<?php echo $news['alias']; ?>"  class="message"><?php echo $news['title']; ?></a>
					</li>
					<?php 
				} ?>
			</ul>
		</div>
	</div>
</div>
<div class="containerfluid container index">
	<div class="row " style="margin-top: 0;">
		<div class="column4">			
			<?php 
			for ($i=$fc+2; $i<$ffc; $i++) {
				$item=$eventList['index']['first'][$i];
				$eventController->getEventView($item['id'], $item['type'])->get();					
			}
			?>
		</div>
		<div class="column4">			
			<?php 
			for ($i=$sc; $i<$sfc; $i++) {
				$item=$eventList['index']['second'][$i];
				$eventController->getEventView($item['id'], $item['type'])->get();					
			}
			?>
		</div>
		<div class="column4">			
			<?php 
			for ($i=$tc+1; $i<$tfc; $i++) {
				$item=$eventList['index']['third'][$i];
				$eventController->getEventView($item['id'], $item['type'])->get();					
			}
			?>
		</div>
	</div>
	<div class="row">
		<div class="title" id="bottom">
			<a href="?offset=<?php echo ($connection['GET']['offset']+1); ?>">
				<button class="fa fa-refresh fa-spin fa-stack-1x ref-spined"></button>
				<button style="font-family: 'Ubuntu Condensed';"><i class="fa fa-refresh fa-1x"></i>&nbsp;&nbsp;Загрузить больше</button>
				<div class="clear-fix"></div>
			</a>
		</div>
	</div>
</div>