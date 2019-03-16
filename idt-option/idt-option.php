<?php 
/**
 * Plugin Name: Option test
 * Description: Description
 * Plugin URI: http://#
 * Author: Author
 * Author URI: http://#
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: text-domain
 * Domain Path: domain/path
 */

add_action("admin_menu","idt_admin");

function idt_admin(){
	add_options_page( 'Опции плагина', 'Опции плагина', 'manage_options', 'idt-option', 'idt_view_page' );

}

function idt_view_page(){
?>
<div class="wrap">
	<h2>Опции плагина</h2>
	<form action="" name="Fi" method="post">
		<p>
			<label for="">Количество постов</label>
			<input id="" type="text"name="" value=""></p>
		<p>
			<label>С каково начинать</label>
			<input type="text"name="" value=""></p>
		<p><?php submit_button( 'Начать' ) ?></p>
	</form>
</div>

<?php
}
// add_action('add_meta_boxes','idt_custom_box');

// function idt_custom_box(){
// 	add_meta_box('idt_auto_box',"Auto Post",'idt_box_cb','post','side');
// }
// function idt_box_cb ($post,$meta){
// 	
// 	<div id='post-formats-select'>
// 		<fieldset>
// 	<input type="radio" name="idt_auto" class="post-format" id="idt_auto-user" value="user" checked="checked">
// 	<label for="idt_auto-user" class="post-format-icon dashicons-admin-users">Пользователь</label><br>
// 	<input type="radio" name="idt_auto" class="post-format" id="idt_auto-auto" value="auto">
// 	<label for="idt_auto-auto" class="post-format-icon dashicons-dashboard">Автоматичести</label>
// 	</fieldset>
// 	</div>
// 	

// }
