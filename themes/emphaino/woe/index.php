<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('WoeHeading')) ?></h2>
<?php if ($woeTimes): ?>
<p><?php echo htmlspecialchars(sprintf(Flux::message('WoeInfo'), $session->loginAthenaGroup->serverName)) ?></p>
<p><?php echo htmlspecialchars(Flux::message('WoeServerTimeInfo')) ?> <strong class="important"><?php echo $server->getServerTime('Y-m-d H:i:s (l)') ?></strong>.</p>
<table class="woe-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('WoeServerLabel')) ?></th>
		<th colspan="3"><?php echo htmlspecialchars(Flux::message('WoeTimesLabel')) ?></th>
	</tr>
	<?php foreach ($woeTimes as $serverName => $times): ?>
		<?php $header = false; ?>
		<?php foreach ($times as $time): ?>
		<tr>
			<?php if (!$header) :?>
			<th class="server" rowspan="<?php echo count($times) ?>">
				<?php echo htmlspecialchars($serverName)  ?>
			</th>
			<?php $header = true; ?>
			<?php endif ?>
			<td class="time">
				<?php echo htmlspecialchars($time['startingDay']) ?>
				@ <?php echo htmlspecialchars($time['startingHour']) ?>
			~
				<?php echo htmlspecialchars($time['endingDay']) ?>
				@ <?php echo htmlspecialchars($time['endingHour']) ?>
			</td>
		</tr>
		<?php endforeach ?>
	<?php endforeach ?>
</table>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('WoeNotScheduledInfo')) ?></p>
<?php endif ?>