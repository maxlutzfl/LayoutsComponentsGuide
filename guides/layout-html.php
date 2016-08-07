<?php
/**
 * @title HTML Document Layout
 * @slug html-doc-layout
 * @type layout
 */
?>

<h1>HTML Document Layout</h1>

<p>Use this as the base of your HTML document.</p>

<textarea rows="16" readonly wrap="off" class="code-block">
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Website Layout</title>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
	<header role="banner" itemscope itemtype="http://schema.org/WPHeader"></header>
	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement"></nav>
	<main role="main" itemscope itemprop="mainContentOfPage"></main>
	<footer role="contentinfo" itemscope itemtype="http://schema.org/WPFooter"></footer>
</body>
</html>
</textarea>