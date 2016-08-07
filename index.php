<?php  
/**
 * 
 */
	include 'config/document-functions.php';
	include 'config/document-header.php'; 
	include 'config/page-header.php'; 
?>
<aside>
	<nav>
		<?php include 'config/page-navigation.php'; ?>
	</nav>
</aside>
<main class="markdown-body">
	<?php 
		display_file_contents_by_query_string(); 
	?>
</main>
<?php
	include 'config/page-footer.php'; 
	include 'config/document-footer.php'; 
?>