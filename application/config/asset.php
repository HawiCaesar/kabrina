<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sekati CodeIgniter Asset Helper
 *
 * @package		Assets
 * @author		Brian Hawi
 * @copyright	Copyright (c) 2013, Sekati LLC.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://sekati.com
 * @version		v1.2.7
 * @filesource
 *
 * @usage 		$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 * @example		<img src="<?=asset_url();?>imgs/photo.jpg" />
 * @example		<?=img('photo.jpg')?>
 *
 * @install		Copy config/asset.php to your CI application/config directory
 *				& helpers/asset_helper.php to your application/helpers/ directory.
 * 				Then add both files as autoloads in application/autoload.php:
 *
 *				$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 *
 *				Autoload CodeIgniter's url_helper in `application/config/autoload.php`:
 *				$autoload['helper'] = array('url');
 *
 * @notes		Organized assets in the top level of your CodeIgniter 2.x app:
 *					- assets/
 *						-- css/
 *						-- download/
 *						-- img/
 *						-- js/
 *						-- less/
 *						-- swf/
 *						-- upload/
 *						-- xml/
 *					- application/
 * 						-- config/asset.php
 * 						-- helpers/asset_helper.php
 */

/*
|--------------------------------------------------------------------------
| Custom Asset Paths for asset_helper.php
|--------------------------------------------------------------------------
|
| URL Paths to static assets library
|
*/

$config['asset_path'] 		= 	'assets/';
$config['css_path'] 		= 	'assets/css/';
$config['download_path'] 	= 	'assets/download/';
$config['less_path'] 		= 	'assets/less/';
$config['js_path'] 			= 	'assets/js/';
$config['img_path'] 		= 	'img/';
$config['swf_path'] 		= 	'assets/swf/';
$config['upload_path'] 		= 	'assets/upload/';
$config['xml_path'] 		= 	'assets/xml/';
$config['plugin_path']		=	'assets/bower_components/';
$config['files_path']		=	'assets/files/';

$config['css_files']		=	array(
									array('title'	 => 'custom'		,	'file'	=>	'bootstrap.css'),
									array('title'	 => 'custom'		,	'file'	=>	'bootstrap.css.map'),
									array('title'	 => 'custom'		,	'file'	=>	'custom.css'),
									array('title'	=>	'admin'			,	'file'	=>	'admin/dataTables.bootstrap.css')
								);
$config['js_files']			=	array(
									//array('title'	=>	'googlemaps_js'	,	'file'	=>	'register.js')

								);
$config['plugin_js_files']	=	array(
									array('title'	=> 'jquery'				,	'file'	=>	'jquery/dist/jquery.js'),

									//array('title'	=> 'bootstrap'			,	'file'	=>	'Bootstrap/js/bootstrap-multiselect.js'),
									array('title'	=> 'selectize'			,	'file'	=>	'selectize/dist/js/standalone/selectize.js'),
									array('title'	=> 'dataTables'			,	'file'	=>	'DataTables/media/js/jquery.dataTables.js'),
									array('title'	=> 'jqueryui'			,	'file'	=>	'jquery_ui/js/jquery-ui-1.10.3.custom.js'),
									array('title'	=> 'bootstrap-datepicker',	'file'	=>	'bootstrapDatepicker/js/bootstrap-datepicker.js'),
									array('title'	=> 'datepicker'			,	'file'	=>	'datepicker/js/bootstrap-datepicker.js'),
									array('title'	=> 'highcharts'			,	'file'	=>	'Highcharts/js/highcharts.js'),
									array('title'	=> 'highcharts-adapers'	,	'file'	=>	'Highcharts/js/adapters/prototype-adapter.js'),
									array('title'	=> 'highcharts-adapers'	,	'file'	=>	'Highcharts/js/adapters/mootools-adapter.js'),
									array('title'	=> 'highcharts-adapers'	,	'file'	=>	'Highcharts/js/adapters/standalone-framework-adapers.js'),
									array('title'	=> 'highcharts'			,	'file'	=>	'Highcharts/js/modules/exporting.js'),
									array('title'	=> 'highcharts'			,	'file'	=>	'Highcharts/js/modules/no-data-to-display.js'),
									array('title'	=> 'highchart-canvas'	,	'file'	=>	'Highcharts/js/modules/canvas-tools.js'),
									array('title'	=> 'highcharts_drilldown',	'file'	=>	'Highcharts/js/modules/drilldown.js'),
									array('title'	=> 'semantic-ui'		 ,	'file'	=>	'semantic/dist/semantic.js'),									
									array('title'   => 'angular-js'          ,  'file'  =>  'angular/angular.js'),
									array('title'   => 'restangular-js'      ,  'file'  =>  'restangular/dist/restangular.min.js'),
									array('title'   => 'restangular-js'      ,  'file'  =>  'lodash/lodash.min.js'),
									array('title'   => 'lightgallery'      	 ,  'file'  =>  'lightgallery/dist/js/lightgallery.min.js'),
									array('title'   => 'lightgallery'      	 ,  'file'  =>  'lightgallery/dist/js/lg-thumbnail.min.js'),
									array('title'   => 'lightgallery'      	 ,  'file'  =>  'lightgallery/dist/js/lg-fullscreen.min.js')

								);
$config['plugin_css_files']	=	array(
									array('title'	=>	'selectize'			,	'file'	=>	'selectize/dist/css/selectize.bootstrap3.css'),
									array('title' 	=> 	'bootstrap'			,	'file'	=>	'Bootstrap/css/bootstrap.min.css'),
									array('title' 	=> 	'bootstrap'			,	'file'	=>	'Bootstrap/css/bootstrap-theme.min.css'),
									array('title' 	=> 	'dataTables'		,	'file'	=>	'DataTables/media/css/jquery.dataTables.css'),
									array('title' 	=> 	'dataTables'		,	'file'	=>	'DataTables/media/css/demo_table.css'),
									array('title' 	=> 	'dataTables'		,	'file'	=>	'DataTables/media/css/demo_page.css'),
									array('title' 	=> 	'dataTables'		,	'file'	=>	'DataTables/media/css/demo_table_jui.css'),
									array('title' 	=> 	'dataTables'		,	'file'	=>	'DataTables/media/css/jquery.dataTables.css'),
									array('title' 	=> 	'dataTables'		,	'file'	=>	'DataTables/media/css/jquery.dataTables_themeroller.css'),
									array('title'	=> 	'jqueryui'			,	'file'	=>	'jquery_ui/css/smoothness/jquery-ui-1.10.3.custom.css'),
									array('title'	=> 	'bootstrap-datepicker',	'file'	=>	'bootstrapDatepicker/css/datepicker.css'),
									array('title'	=> 	'datepicker'		,	'file'	=>	'datepicker/css/datepicker.css'),
									array('title'	=> 	'fortawesome'		,	'file'	=>	'font-awesome-4.1.0/css/font-awesome.css'),
									array('title'	=> 	'semantic-ui'		,	'file'	=>	'semantic/dist/semantic.css'),
									array('title'	=>  'lightgallery'		,	'file'	=>	'lightgallery/src/css/lightgallery.css')
								);
$config['plugin_php_files']	=	array(
									//array('title'	=> 	'googlemaps_js'		,			'file'	=>	'PHPExcel/PHPExcel.php'),
									// array('title'	=> 	'mpdf'			,			'file'	=>	'pdf/mpdf.php'),
									// array('title'	=>	'FusionCharts'	,			'file'	=>	'Fusion/FusionCharts/FusionCharts.php')
								);
/* End of file asset.php */
