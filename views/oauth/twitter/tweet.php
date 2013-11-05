<?php echo FORM::open() ?>

<dl>
	<dt><?php echo FORM::label('tweet', 'Update Twitter Status?') ?></dt>
	<dd><?php echo FORM::textarea('tweet', $tweet) ?></dd>
</dl>

<?php echo FORM::submit(NULL, 'Send') ?>

<?php echo FORM::close() ?>

<?php if ($response): ?>
<p>Response from Twitter:</p>
<?php echo $response ?>
<?php endif ?>
