<?php
/*
 * This file is a part of Simpliest Pastebin.
 *
 * Copyright 2009-2018 the original author or authors.
 *
 * Licensed under the terms of the MIT License.
 * See the MIT for details (https://opensource.org/licenses/MIT).
 *
 */

if (ISINCLUDED != '1') {
    header('HTTP/1.0 403 Forbidden');
    die('Forbidden!');
}

?><!doctype html>
<html lang="<?php echo $page['locale']; ?>">
<head>
<meta charset="utf-8" />
<title><?php echo $page['title']; ?></title>
<meta name="robots" content="noindex,nofollow" />
<link rel="stylesheet" type="text/css" href="<?php echo $page['stylesheet']; ?>" media="screen, print" />
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div id="siteWrapper"><?php
include('messages.php');
include($page['contentTemplate']);
?></div>
</body>
</html>
