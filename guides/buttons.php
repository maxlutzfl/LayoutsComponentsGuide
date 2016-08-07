<?php 
/**
 * @title Buttons
 * @slug buttons
 * @type component
 */
?>

<div class="page-container spacing-between-elements">
	
	<h1>Buttons</h1>

	<h2>Using <code>a</code> tag with <code>class="button-style"</code></h2>
	
	<a href="#0" class="button-style">Button Title</a>

	<textarea readonly class="code-block">
<a href="#0" class="button-style">Button Title</a>
	</textarea>

	<hr>
	<h2>Side by side buttons</h2>
	<ul class="inline-list spacing-between-elements-horizontal-small">
		<li><a href="#0" class="button-style">Primary Action</a></li>
		<li><a href="#0" class="button-style button-style-hollow">Secondary Action</a></li>
	</ul>
	<textarea readonly wrap="off" class="code-block">
<ul class="inline-list spacing-between-elements-horizontal-small">
	<li><a href="#0" class="button-style">Primary Action</a></li>
	<li><a href="#0" class="button-style button-style-hollow">Secondary Action</a></li>
</ul>
	</textarea>

	<hr>
	<h2>Using <code>input[type="submit"]</code></h2>
	<input type="submit" value="Submit">
	<textarea readonly class="code-block">
<input type="submit" value="Submit">
	</textarea>

	<hr>
	<h2>Using <code>button</code></h2>
	<button>Click for more info</button>
	<textarea readonly class="code-block">
<button>Click for more info</button>
	</textarea>

</div>