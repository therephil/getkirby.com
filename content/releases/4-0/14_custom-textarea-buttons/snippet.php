<div class="columns" style="--columns: 3">
	<div class="release-text-box flex-grow">
		<?php snippet('templates/release-40/teaser', ['section' => $section]) ?>
	</div>
	<div class="release-code-box text-lg" style="--span: 2">
		<?= $section->example()->kt() ?>
	</div>
</div>
