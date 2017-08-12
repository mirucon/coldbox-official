<?php
/**
 * The template for displaying header.
 *
 * @package Coldbox_Official
 */

get_header( 'child' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>

<body>

  <header class="header">
	<div class="container">

	  <nav class="nav">
		<div class="nav-left"><a class="site-title" href="<?php esc_url( home_url() ); ?>">Coldbox</a></div>
		<div class="nav-center is-hidden-desktop">
		  <div class="nav-item"><a href="https://github.com/mirucon/coldbox" target="_blank"><span class="icon"><i class="fa fa-github"></i></span></a></div>
		</div>

		<ul class="nav-right nav-menu">
		  <li><a class="nav-item" href="https://coldbox.miruc.co/demo/"><?php esc_html_e( 'Demo', 'official' ); ?></a></li>
		  <li><a class="nav-item" href="https://coldbox.miruc.co/docs/"><?php esc_html_e( 'Documentaion', 'official' ); ?></a></li>
		  <li class="has-child">
			<a class="nav-item"><?php esc_html_e( 'languages', 'official' ); ?></a>
			<div class="sub-menu"><a class="is-child is-tab nav-item" href="<?php esc_attr( _e( 'https://coldbox.miruc.co/ja/', 'official' ) ); ?>"><?php esc_html_e( '日本語', 'official' ); ?></a></div>
		  </li>
		  <li class="is-hidden-mobile">
			<div class="nav-item download-button field is-grouped">
			  <button class="control" type="button"><a class="button" href="https://coldbox.miruc.co/coldbox.zip"><span class="icon"><i class="fa fa-download"></i></span><span><?php esc_html_e( 'Download', 'official' ); ?></span></a></button>
			</div>
		  </li>
		</ul>

		<span class="nav-toggle">
		  <span></span><span></span><span></span>
		</span>

	  </nav>

	</div>
  </header>
