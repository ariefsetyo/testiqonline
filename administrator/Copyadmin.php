<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	include ('db.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Magic Admin. Advanced, Beautiful and Customizable Admin Template.</title>
       
        <!-- CSS Reset -->
		<link rel="stylesheet" type="text/css" href="reset.css" tppabs="http://www.xooom.pl/work/magicadmin/css/reset.css" media="screen" />
       
        <!-- Fluid 960 Grid System - CSS framework -->
		<link rel="stylesheet" type="text/css" href="grid.css" tppabs="http://www.xooom.pl/work/magicadmin/css/grid.css" media="screen" />
		
        <!-- IE Hacks for the Fluid 960 Grid System -->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="ie6.css" tppabs="http://www.xooom.pl/work/magicadmin/css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="ie.css" tppabs="http://www.xooom.pl/work/magicadmin/css/ie.css" media="screen" /><![endif]-->
        
        <!-- Main stylesheet -->
        <link rel="stylesheet" type="text/css" href="styles.css" tppabs="http://www.xooom.pl/work/magicadmin/css/styles.css" media="screen" />
        
        <!-- WYSIWYG editor stylesheet -->
        <link rel="stylesheet" type="text/css" href="jquery.wysiwyg.css" tppabs="http://www.xooom.pl/work/magicadmin/css/jquery.wysiwyg.css" media="screen" />
        
        <!-- Table sorter stylesheet -->
        <link rel="stylesheet" type="text/css" href="tablesorter.css" tppabs="http://www.xooom.pl/work/magicadmin/css/tablesorter.css" media="screen" />
        
        <!-- Thickbox stylesheet -->
        <link rel="stylesheet" type="text/css" href="thickbox.css" tppabs="http://www.xooom.pl/work/magicadmin/css/thickbox.css" media="screen" />
        
        <!-- Themes. Below are several color themes. Uncomment the line of your choice to switch to different color. All styles commented out means blue theme. -->
        <link rel="stylesheet" type="text/css" href="theme-blue.css" tppabs="http://www.xooom.pl/work/magicadmin/css/theme-blue.css" media="screen" />
        <!--<link rel="stylesheet" type="text/css" href="css/theme-red.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-yellow.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-green.css" media="screen" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/theme-graphite.css" media="screen" />-->
        
		<!-- JQuery engine script-->
		<script type="text/javascript" src="jquery-1.3.2.min.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery-1.3.2.min.js"></script>
        
		<!-- JQuery WYSIWYG plugin script -->
		<script type="text/javascript" src="jquery.wysiwyg.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.wysiwyg.js"></script>
        
        <!-- JQuery tablesorter plugin script-->
		<script type="text/javascript" src="jquery.tablesorter.min.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.min.js"></script>
        
		<!-- JQuery pager plugin script for tablesorter tables -->
		<script type="text/javascript" src="jquery.tablesorter.pager.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.pager.js"></script>
        
		<!-- JQuery password strength plugin script -->
		<script type="text/javascript" src="jquery.pstrength-min.1.2.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.pstrength-min.1.2.js"></script>
        
		<!-- JQuery thickbox plugin script -->
		<script type="text/javascript" src="thickbox.js" tppabs="http://www.xooom.pl/work/magicadmin/js/thickbox.js"></script>
        
        <!-- Initiate WYIWYG text area -->
		<script type="text/javascript">
			$(function()
			{
			$('#wysiwyg').wysiwyg(
			{
			controls : {
			separator01 : { visible : true },
			separator03 : { visible : true },
			separator04 : { visible : true },
			separator00 : { visible : true },
			separator07 : { visible : false },
			separator02 : { visible : false },
			separator08 : { visible : false },
			insertOrderedList : { visible : true },
			insertUnorderedList : { visible : true },
			undo: { visible : true },
			redo: { visible : true },
			justifyLeft: { visible : true },
			justifyCenter: { visible : true },
			justifyRight: { visible : true },
			justifyFull: { visible : true },
			subscript: { visible : true },
			superscript: { visible : true },
			underline: { visible : true },
            increaseFontSize : { visible : false },
            decreaseFontSize : { visible : false }
			}
			} );
			});
        </script>
        
        <!-- Initiate tablesorter script -->
        <script type="text/javascript">
			$(document).ready(function() { 
				$("#myTable") 
				.tablesorter({
					// zebra coloring
					widgets: ['zebra'],
					// pass the headers argument and assing a object 
					headers: { 
						// assign the sixth column (we start counting zero) 
						6: { 
							// disable it by setting the property sorter to false 
							sorter: false 
						} 
					}
				}) 
			.tablesorterPager({container: $("#pager")}); 
		}); 
		</script>
        
        <!-- Initiate password strength script -->
		<script type="text/javascript">
			$(function() {
			$('.password').pstrength();
			});
        </script>
	</head>
	<body>
    	<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_8">
					&nbsp;
                    </div>
                    <div class="grid_4">
                        <a href="logout.php" id="logout">
                        Logout
                        </a>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li id="current"><a href="">Dashboard</a></li>
                                <li><a href="">Articles</a></li>
                                <li><a href="">Files</a></li>
                                <li><a href="">Profile</a></li>
                                <li><a href="">Settings</a></li>
                            </ul>
                        </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <li><a href="#">link 1</a></li>
                            <li><a href="#">link 2</a></li>
                            <li><a href="#">link 3</a></li>
                            <li><a href="#">link 4</a></li>
                            <li><a href="#">link 5</a></li>
                        </ul>
                        
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">
        

            
            <!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="" class="dashboard-module">
                	<img src="Crystal_Clear_write.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_write.gif" width="64" height="64" alt="edit" />
                	<span>New article</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="Crystal_Clear_file.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_file.gif" width="64" height="64" alt="edit" />
                	<span>Upload file</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="Crystal_Clear_files.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_files.gif" width="64" height="64" alt="edit" />
                	<span>Articles</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="Crystal_Clear_calendar.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_calendar.gif" width="64" height="64" alt="edit" />
                	<span>Calendar</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="Crystal_Clear_user.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_user.gif" width="64" height="64" alt="edit" />
                	<span>My profile</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="Crystal_Clear_stats.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_stats.gif" width="64" height="64" alt="edit" />
                	<span>Stats</span>
                </a>
                
                <a href="" class="dashboard-module">
                	<img src="Crystal_Clear_settings.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/Crystal_Clear_settings.gif" width="64" height="64" alt="edit" />
                	<span>Settings</span>
                </a>
                <div style="clear: both"></div>
            </div> <!-- End .grid_7 -->
            
            <!-- Account overview -->
            <div class="grid_5">
                <div class="module">
                        <h2><span>Account overview</span></h2>
                        
                        <div class="module-body">
                        
                        	<p>
                                <strong>User: </strong>User X<br />
                                <strong>Your last visit was on: </strong>20 January 2010,<br />
                                <strong>From IP: </strong>000.000.00.00
                            </p>
                        
                             <div>
                                 <div class="indicator">
                                     <div style="width: 23%;"></div><!-- change the width value (23%) to dynamically control your indicator -->
                                 </div>
                                 <p>Your storage space: 23 MB out of 100MB</p>
                             </div>
                             
                             <div>
                                 <div class="indicator">
                                     <div style="width: 100%;"></div><!-- change the width value (100%) to dynamically control your indicator -->
                                 </div>
                                 <p>Your bandwidth (January): 1 GB out of 1 GB</p>
                             </div>
                             
                        	<p>
                                Need to switch to a bigger plan?<br />
                                <a href="">click here</a><br />
                            </p>

                        </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End .grid_5 -->
            
            <div style="clear:both;"></div>
            
            
            
            <div class="grid_12">
                
                <!-- Notification boxes -->
                <span class="notification n-success">Success notification.</span>
                
                <span class="notification n-information">Information notification.</span>
                
                <span class="notification n-attention">Attention notification.</span>
                
                <span class="notification n-error">Error notification.</span>
                
                
                <div class="bottom-spacing">
                
                    <!-- Button -->
                    <div class="float-right">
                        <a href="" class="button">
                        	<span>New Article <img src="plus-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/plus-small.gif" width="12" height="9" alt="New article" /></span>
                        </a>
                    </div>
                    
                    <!-- Table records filtering -->
                    Filter: 
                    <select class="input-short">
                    	<option value="1" selected="selected">Select filter</option>
                        <option value="2">Created last week</option>
                        <option value="3">Created last month</option>
                        <option value="4">Edited last week</option>
                        <option value="5">Edited last month</option>
                    </select>
                    
                </div>
                
                
                <!-- Example table -->
                <div class="module">
                	<h2><span>Sample table</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:20%">Title</th>
                                    <th style="width:21%">Author</th>
                                    <th style="width:13%">Category</th>
                                    <th style="width:13%">Pages</th>
                                    <th style="width:13%">Price</th>
                                    <th style="width:15%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td><a href="">Don Quixote</a></td>
                                    <td>Cervantes</td>
                                    <td>adventure</td>
                                    <td>992</td>
                                    <td>$11.55</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td><a href="">Lord Jim</a></td>
                                    <td>Joseph Conrad</td>
                                    <td>thriller</td>
                                    <td>400</td>
                                    <td>$6.95</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">3</td>
                                    <td><a href="">Inferno</a></td>
                                    <td>Dante</td>
                                    <td>drama</td>
                                    <td>528</td>
                                    <td>$8.76</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">4</td>
                                    <td><a href="">David Copperfield</a></td>
                                    <td>Charles Dickens</td>
                                    <td>literary</td>
                                    <td>1024</td>
                                    <td>$9.00</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">5</td>
                                    <td><a href="">Crime and Punishment</a></td>
                                    <td>Fyodor Dostoevsky</td>
                                    <td>world literature</td>
                                    <td>592</td>
                                    <td>$10.85</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">6</td>
                                    <td><a href="">Faust</a></td>
                                    <td>Johann Wolfgang von Goethe</td>
                                    <td>drama</td>
                                    <td>464</td>
                                    <td>$5.95</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">7</td>
                                    <td><a href="">Lord of the Flies</a></td>
                                    <td>William Golding</td>
                                    <td>drama</td>
                                    <td>190</td>
                                    <td>$15.88</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">8</td>
                                    <td><a href="">A Farewell To Arms</a></td>
                                    <td>Ernest Hemingway</td>
                                    <td>romance</td>
                                    <td>304</td>
                                    <td>$22.80</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">9</td>
                                    <td><a href="">The Old Man and the Sea</a></td>
                                    <td>Ernest Hemingway</td>
                                    <td>adventure</td>
                                    <td>112</td>
                                    <td>$4.63</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">10</td>
                                    <td><a href="">The Snows of Kilimanjaro</a></td>
                                    <td>Ernest Hemingway</td>
                                    <td>adventure</td>
                                    <td>144</td>
                                    <td>$19.00</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">11</td>
                                    <td><a href="">The Sun Also Rises</a></td>
                                    <td>Ernest Hemingway</td>
                                    <td>drama</td>
                                    <td>256</td>
                                    <td>$10.20</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">12</td>
                                    <td><a href="">The Metamorphosis</a></td>
                                    <td>Franz Kafka</td>
                                    <td>existentialism</td>
                                    <td>94</td>
                                    <td>$9.95</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">13</td>
                                    <td><a href="">One Flew Over the Cuckoo's Nest</a></td>
                                    <td>Ken Kesey</td>
                                    <td>thriller</td>
                                    <td>288</td>
                                    <td>$10.88</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">14</td>
                                    <td><a href="">Moby Dick</a></td>
                                    <td>Herman Melville</td>
                                    <td>world literature</td>
                                    <td>464</td>
                                    <td>$5.00</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="not published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">15</td>
                                    <td><a href="">The Crucible</a></td>
                                    <td>Arthur Miller</td>
                                    <td>drama</td>
                                    <td>176</td>
                                    <td>$10.01</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">16</td>
                                    <td><a href="">Death of a Salesman</a></td>
                                    <td>Arthur Miller</td>
                                    <td>drama</td>
                                    <td>448</td>
                                    <td>$12.24</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">17</td>
                                    <td><a href="">Paradise Lost</a></td>
                                    <td>John Milton</td>
                                    <td>christianity</td>
                                    <td>512</td>
                                    <td>$9.24</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">18</td>
                                    <td><a href="">Animal Farm</a></td>
                                    <td>George Orwell</td>
                                    <td>criticism &amp; theory</td>
                                    <td>113</td>
                                    <td>$9.85</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="minus-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/minus-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">19</td>
                                    <td><a href="">Hamlet</a></td>
                                    <td>William Shakespeare</td>
                                    <td>tragedy</td>
                                    <td>400</td>
                                    <td>$5.99</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">20</td>
                                    <td><a href="">Julius Caesar</a></td>
                                    <td>William Shakespeare</td>
                                    <td>politics</td>
                                    <td>288</td>
                                    <td>$5.99</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">21</td>
                                    <td><a href="">King Lear</a></td>
                                    <td>William Shakespeare</td>
                                    <td>tragedy</td>
                                    <td>384</td>
                                    <td>$5.99</td>
                                    <td>
                                    	<input type="checkbox" />
                                        <a href=""><img src="tick-circle.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/tick-circle.gif" width="16" height="16" alt="published" /></a>
                                        <a href=""><img src="pencil.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/pencil.gif" width="16" height="16" alt="edit" /></a>
                                        <a href=""><img src="balloon.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/balloon.gif" width="16" height="16" alt="comments" /></a>
                                        <a href=""><img src="bin.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                <img class="first" src="arrow-stop-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-180.gif" alt="first"/>
                                <img class="prev" src="arrow-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-180.gif" alt="prev"/> 
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img class="next" src="arrow.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow.gif" alt="next"/>
                                <img class="last" src="arrow-stop.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop.gif" alt="last"/> 
                                <select class="pagesize input-short align-center">
                                    <option value="10" selected="selected">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                </div>
                            </form>
                        </div>
                        <div class="table-apply">
                            <form action="">
                            <div>
                            <span>Apply action to selected:</span> 
                            <select class="input-medium">
                                <option value="1" selected="selected">Select action</option>
                                <option value="2">Publish</option>
                                <option value="3">Unpublish</option>
                                <option value="4">Delete</option>
                            </select>
                            </div>
                            </form>
                        </div>
                        <div style="clear: both"></div>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
                
                
                     <div class="pagination">           
                		<a href="" class="button"><span><img src="arrow-stop-180-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-180-small.gif" height="9" width="12" alt="First" /> First</span></a> 
                        <a href="" class="button"><span><img src="arrow-180-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-180-small.gif" height="9" width="12" alt="Previous" /> Prev</span></a>
                        <div class="numbers">
                            <span>Page:</span> 
                            <a href="">1</a> 
                            <span>|</span> 
                            <a href="">2</a> 
                            <span>|</span> 
                            <span class="current">3</span> 
                            <span>|</span> 
                            <a href="">4</a> 
                            <span>|</span> 
                            <a href="">5</a> 
                            <span>|</span> 
                            <a href="">6</a> 
                            <span>|</span> 
                            <a href="">7</a> 
                            <span>|</span> 
                            <span>...</span> 
                            <span>|</span> 
                            <a href="">99</a>
                        </div> 
                        <a href="" class="button"><span>Next <img src="arrow-000-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-000-small.gif" height="9" width="12" alt="Next" /></span></a> 
                        <a href="" class="button last"><span>Last <img src="arrow-stop-000-small.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-000-small.gif" height="9" width="12" alt="Last" /></span></a>
                        <div style="clear: both;"></div> 
                     </div>
                
                

                
			</div> <!-- End .grid_12 -->
                
            <!-- Categories list -->
            <div class="grid_6">
                
                <div class="module">
                     <h2><span>Categories</span></h2>
                        
                     <div class="module-body">
                         <a href="" class="removable">images</a><br />
                         <a href="" class="removable">video</a><br />
                         <a href="" class="removable">audio</a><br />
                         <a href="" class="removable">documents</a><br />
                         <a href="" class="removable">apps</a><br />
                         <a href="" class="removable">others</a>
                         
                         <form action="">
                            <fieldset>
                                <input type="text" class="input-medium" />&nbsp;&nbsp;<input class="submit-green" type="submit" value="Add category" />
                            </fieldset>
                         </form>
                     </div>
                </div> <!-- module -->
                <div style="clear:both;"></div>
			</div> <!-- End .grid_6 -->
            
            <!-- To-do list -->
            <div class="grid_6">
            
                <div class="module">
                     <h2><span>To-do list</span></h2>
                        
                     <div class="module-body">
                         <a href="" class="checkable">check articles for spelling</a><br />
                         <a href="" class="checkable">remove old articles</a><br />
                         <a href="" class="checkable">switch to a bigger plan</a><br />
                         <a href="" class="removable completed">write an article</a><br />
                         <a href="" class="removable completed">do maintanance stuff</a><br />

                         
                         <form action="">
                            <fieldset>
                                <input type="text" class="input-medium" />&nbsp;&nbsp;<input class="submit-green" type="submit" value="Add item" />
                            </fieldset>
                         </form>
                     </div>
                </div> <!-- module -->
                <div style="clear:both;"></div>
            
            </div> <!-- End .grid_6 -->
            <div style="clear:both;"></div>
            
            <!-- Form elements -->    
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>Form</span></h2>
                        
                     <div class="module-body">
                        <form action="">
                        
                            <div>
                                <span class="notification n-success">Success notification.</span>
                            </div>
                            
                            <p>
                                <label>Short textfield</label>
                                <input type="text" class="input-short" />
                                <span class="notification-input ni-correct">This is correct, thanks!</span>
                            </p>
                            
                            <p>
                                <label>Medium textfield</label>
                                <input type="text" class="input-medium" />
                                <span class="notification-input ni-error">Sorry, try again.</span>
                            </p>
                            
                            
                            <p>
                                <label>Long textfield</label>
                                <input type="text" class="input-long" /><span class="notification-input ni-error">Sorry, try again.</span>
                            </p>
                            
                            <p>
                                <label>Short select input</label>
                                <select class="input-short">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                </select>
                            </p>
                            
                            <p>
                                <label>Medium select input</label>
                                <select class="input-medium">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                </select>
                            </p>
                            
                            <p>
                                <label>Long select input</label>
                                <select class="input-long">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                </select>
                            </p>
                            
                            <p>
                                <label>Short text area</label>
                                <textarea rows="7" cols="90" class="input-short"></textarea>
                            </p>
                            
                            <p>
                                <label>Medium text area</label>
                                <textarea rows="7" cols="90" class="input-medium"></textarea>
                            </p>
                            
                            
                            <p>
                                <label>Long text area</label>
                                <textarea rows="7" cols="90" class="input-long"></textarea>
                            </p>
                                
                            <fieldset>
                                <legend>Checkboxes</legend>
                                <ul>
                                    <li><label><input type="checkbox" name="a" checked="checked" id="cb1" /> checkbox 1</label></li>
                                    <li><label><input type="checkbox" name="b" id="cb2" />  checkbox 2</label></li>
                                </ul>
                            </fieldset>
                            
                            <fieldset>
                                <legend>Radio buttons</legend>
                                <ul>
                                    <li><label><input type="radio" name="c" checked="checked" /> radio button 1</label></li>
                                    <li><label><input type="radio" name="c" /> radio button 2</label></li>
                                </ul>
                            </fieldset>
                            
                            <fieldset>
                                <label>Textarea with WYSIWYG</label>
                                <textarea id="wysiwyg" rows="11" cols="90" name="desc">    </textarea> 
                            </fieldset>
                            
                            <fieldset>
                                <input class="submit-green" type="submit" value="Submit" /> 
                                <input class="submit-gray" type="submit" value="Cancel" />
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
                
            <!-- Settings-->
            <div class="grid_6">
                <div class="module">
                     <h2><span>Settings</span></h2>
                        
                     <div class="module-body">
                        <p class="notification n-attention"><strong>Running out of space?</strong><br />Just contact us and switch to a bigger plan</p>
                        
                         <div>
                             <div class="indicator">
                                 <div style="width: 23%;"><!-- change the width value (23%) to dynamically control your indicator -->
                                  </div>
                             </div>
                             <p>Your storage space: 23 MB out of 100MB</p>
                         </div>
                         
                         <div>
                             <div class="indicator">
                                 <div style="width: 100%;"><!-- change the width value (100%) to dynamically control your indicator -->
                                  </div>
                             </div>
                             <p>Your bandwidth (January): 1 GB out of 1 GB</p>
                         </div>
                         
                     </div> <!-- End .module-body -->
                </div> <!-- End .module -->
            </div> <!-- End .grid_6 -->
                
            <!-- Password -->
            <div class="grid_6">
                <div class="module">
                     <h2><span>Password</span></h2>
                        
                     <div class="module-body">
                        <form action="">
                            <p>
                                <label>Type in new password</label>
                                <input class="input-medium password" type="password" />
                            </p>
                            <p>
                                <label>Repeat password</label>
                                <input type="password" class="input-medium" />
                            </p>
                            <fieldset>
                                <input class="submit-green" type="submit" value="Submit" /> 
                                <input class="submit-gray" type="submit" value="Cancel" />
                            </fieldset>
                        </form>
                        
                     </div> <!-- End .module-body -->
                </div> <!-- End .module -->
                <div style="clear:both;"></div>
            </div> <!-- End .grid_6 -->
            <div style="clear:both;"></div>
            
			<div class="grid_3">
				<h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
				<h4>Heading 4</h4>
                <h5>Heading 5</h5>
                <h6>Heading 6</h6>
            </div> <!-- End .grid_3 -->
            
            
            <div class="grid_3">
            	<p>Unordered list:</p>
                <ul class="bullets">
                	<li>UL Element 1</li>
                    <li>UL Element 2</li>
                    <li>UL Element 3</li>
                    <li>UL Element 4</li>
                    <li>UL Element 5</li>
                </ul>
            	<p>Ordered list:</p>
                <ol>
                	<li>OL Element 1</li>
                    <li>OL Element 2</li>
                    <li>OL Element 3</li>
                    <li>OL Element 4</li>
                    <li>OL Element 5</li>
                </ol>
            </div> <!-- End .grid_3 -->
            
            <div class="grid_6">
            	<p>Paragraph text:</p>
            
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel nibh sit amet metus lacinia hendrerit. Nullam tempus sem ut quam luctus rhoncus. Nullam vitae justo ligula, nec sollicitudin mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam ut mauris quis sapien adipiscing porttitor vitae at mauris. Fusce imperdiet placerat nunc tincidunt varius. Quisque tempus, nibh ac tempus faucibus, elit lorem aliquam mauris, facilisis ornare nisl sapien eu mi. Vivamus ac tempor nulla. Fusce ac lectus sapien. Aliquam commodo urna nec leo tincidunt non ultrices augue consequat. Curabitur justo risus, placerat eu auctor et, scelerisque vitae velit. Mauris venenatis nisl ut elit congue in euismod libero ultrices. Duis tincidunt sagittis velit, in auctor elit molestie sit amet.</p> 
                
                <p>Vivamus tellus magna, malesuada ac cursus sed, facilisis non ligula. Nam porta ullamcorper nibh id sagittis. Mauris risus nisi, dictum eget feugiat in, egestas in diam. Nulla dictum pharetra bibendum. Morbi turpis sapien, dignissim congue dignissim in, laoreet non felis. Sed elit turpis, interdum cursus vulputate ut, consectetur eget odio. Morbi dolor velit, volutpat auctor aliquet id, auctor sit amet neque. Curabitur id quam sit amet est sagittis posuere. Sed a nunc eros, hendrerit pulvinar felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget felis eget neque tristique scelerisque sed et magna.</p> 
                
            </div> <!-- End .grid_6 -->

            
            <div style="clear:both;"></div>
        </div> <!-- End .container_12 -->
		
           
        <!-- Footer -->
        <div id="footer">
        	<div class="container_12">
            	<div class="grid_12">
                	<!-- You can change the copyright line for your own -->
                	<p>&copy; 2010. <a href="http://www.templatescreme" title="Visit For More Free Website Templates">Free Website Templates</a></p>
        		</div>
            </div>
            <div style="clear:both;"></div>
        </div> <!-- End #footer -->
	</body>
</html>