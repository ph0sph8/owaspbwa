<?php
/***************************************************************************
Copyright (C) 2005-2008 GetBoo project
http://sourceforge.net/projects/getboo/
http://www.getboo.com/

This file is part of GetBoo.

GetBoo is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

GetBoo is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with GetBoo; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
***************************************************************************/

	header('Content-Type: application/xml');

	include('../conn.php');
	include('../includes/tags_functions.php');
	include('rss_functions.php');

	$bookmarks_recent = getRecentTags(0, TAGS_PER_PAGE, "../");

	$bookmarks = getFeedVars($bookmarks_recent);

	$feedTitle = WEBSITE_NAME;
	$feedLink = WEBSITE_ROOT;
	$feedDesc = ("Recent bookmarks posted to " . WEBSITE_NAME);
	$feedTTL = "60";

	include('../templates/rss.tpl.php');
?>