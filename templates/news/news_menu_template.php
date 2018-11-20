<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * News menus templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

// $sc_style['NEWS_CATEGORY_NEWS_COUNT']['pre']  = '(';
// $sc_style['NEWS_CATEGORY_NEWS_COUNT']['post'] = ')';


// category menu
$NEWS_MENU_TEMPLATE['category']['start']       = '
<div class="widget categories">
	<h3 class="border-bottom-grad"><i class="fa fa-folder-open-o"></i> Categories</h3>
	<div class="row">
		<div class="col-sm-6">
			<ul class="blog_category">

';
$NEWS_MENU_TEMPLATE['category']['end']         = '
			</ul>
		</div>
	</div>
</div><!--/.categories-->
';
$NEWS_MENU_TEMPLATE['category']['item']        = '
	<li><a class="e-menu-link newscats{active}" href="{NEWS_CATEGORY_URL}">{NEWS_CATEGORY_TITLE} {NEWS_CATEGORY_NEWS_COUNT}</a></li>
';


// archive menu
$NEWS_MENU_TEMPLATE['archive']['start']       = '
<div class="widget archieve">
	<h3 class="border-bottom-grad"><i class="fa fa-archive"></i> Archieve</h3>
	<div class="row">
		<div class="col-sm-12">
			<ul class="blog_archieve">
';
$NEWS_MENU_TEMPLATE['archive']['end']         = '
			</ul>
		</div>
	</div>
</div><!--/.archieve-->
';
$NEWS_MENU_TEMPLATE['archive']['item']        = '
	<li><a class="e-menu-link newsarch{active}" href="{NEWS_ARCHIVE_URL}">{NEWS_ARCHIVE_TITLE} {NEWS_ARCHIVE_NEWS_COUNT}</a></li>
';

// months menu
$NEWS_MENU_TEMPLATE['months']['start']       = '<ul class="news-menu-months">';
$NEWS_MENU_TEMPLATE['months']['end']         = '</ul>';
$NEWS_MENU_TEMPLATE['months']['item']        = '
	<li><a class="e-menu-link newsmonths{active}" href="{url}">{month} <span class="badge">{count}</span></a></li>
';
//$NEWS_MENU_TEMPLATE['months']['separator']   = '<br />';


// latest menu
$NEWS_MENU_TEMPLATE['latest']['start']       = '<ul class="news-menu-latest">';
$NEWS_MENU_TEMPLATE['latest']['end']         = '</ul>'; // Example: $NEWS_MENU_TEMPLATE['latest']['end']  '<br />{currentTotal} from {total}';
$NEWS_MENU_TEMPLATE['latest']['item']        = '<li><a class="e-menu-link newsmonths" href="{NEWSURL}">{NEWSTITLE} <span class="badge">{NEWSCOMMENTCOUNT}</span></a></li>';


// Other News Menu.
$NEWS_MENU_TEMPLATE['other']['caption'] 	= TD_MENU_L1;
$NEWS_MENU_TEMPLATE['other']['start']		= "other news <div id='otherNews' data-interval='false' class='carousel slide othernews-block'>
												<div class='carousel-inner'>
												{SETIMAGE: w=400&h=200&crop=1}"; // set the {NEWSIMAGE} dimensions.
$NEWS_MENU_TEMPLATE['other']['item']		= '<div class="item {ACTIVE}">
												{NEWSTHUMBNAIL=placeholder}
              									<h3>{NEWSTITLE}</h3>
              									<p>{NEWSSUMMARY}</p>
              									<p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">'.LAN_READ_MORE.' &raquo;</a></p>
            									</div>';
$NEWS_MENU_TEMPLATE['other']['end']			= "</div></div>";


// Other News Menu. 2
$NEWS_MENU_TEMPLATE['other2']['caption'] 	= TD_MENU_L2;
$NEWS_MENU_TEMPLATE['other2']['start'] 	= "other news 2 <ul class='media-list unstyled list-unstyled othernews2-block'>{SETIMAGE: w=100&h=100&crop=1}"; // set the {NEWSIMAGE} dimensions.
$NEWS_MENU_TEMPLATE['other2']['item'] 	= "<li class='media'>
										<span class='media-object pull-left'>{NEWSTHUMBNAIL=placeholder}</span>
										<div class='media-body'><h4>{NEWSTITLELINK}</h4>
										<p class='text-right'><a class='btn btn-primary btn-othernews2' href='{NEWSURL}'>".LAN_READ_MORE." &raquo;</a></p>
										</div>
										</li>\n";

$NEWS_MENU_TEMPLATE['other2']['end'] 	= "</ul>";


/* Carousel Menu */
$NEWS_MENU_TEMPLATE['carousel']['start'] = '
										    <div id="news-carousel" class="carousel slide" data-ride="carousel">
										        <div class="row">
										      <!-- Wrapper for slides -->
										      <div id="news-carousel-images" class="col-md-8">
										      <div class="carousel-inner">';


$NEWS_MENU_TEMPLATE['carousel']['end'] = '

										      </div><!-- End Carousel Inner -->
											</div>
												<div id="news-carousel-titles" class="col-md-4 ">
													<ul id="news-carousel-nav" class="nav nav-inverse nav-stacked pull-right ">{NAV}</ul>
												</div>
											</div><!-- End Carousel -->
											</div>
										 ';


$NEWS_MENU_TEMPLATE['carousel']['item'] = '<!-- Start Item -->
											<div class="item {ACTIVE}">{SETIMAGE: w=800&h=370&crop=1}
									          {NEWS_IMAGE: class=img-responsive img-fluid}
									           <div class="carousel-caption">
									            <small>{NEWS_DATE=dd MM, yyyy}</small>
									            <h1>{NEWS_TITLE}</h1>

									          </div>
									        </div><!-- End Item -->';

$NEWS_MENU_TEMPLATE['carousel']['nav'] = '<li data-target="#news-carousel" data-slide-to="{COUNT}" class="{ACTIVE}"><a href="#">{NEWS_SUMMARY}</a></li>';