<?php
/**
 * The template for displaying front page.
 *
 * @package Coldbox_Official
 */

get_header( 'child' );
?><main class="main">

	<div class="content-box title-bar">
		<div class="background-image"></div>
		<div class="container">

			<div class="title-box">
				<h2 class="theme-slug">Coldbox</h2>
				<p class="theme-description"><?php esc_html_e( 'A Clean Blog-Focused WordPress Theme', 'official' ); ?></p>
			</div>

			<div class="columns is-mobile is-multiline button-list">
				<a class="download-link button column is-primary is-desktop-2 is-3-tablet is-10-mobile" href="https://wordpress.org/themes/coldbox/">
					<span class="icon"><i class="fa fa-wordpress"></i></span><span><?php esc_html_e( 'Download', 'official' ); ?></span>
				</a>
				<a class="demo-link button column is-info is-desktop-2 is-3-tablet is-10-mobile" href="https://coldbox.miruc.co/demo/" target="_blank">
					<span class="icon"><i class="fa fa-home"></i></span><span><?php esc_html_e( 'See Demo', 'official' ); ?></span>
				</a>
				<a class="child-link column button is-white is-outlined is-desktop-2 is-3-tablet is-10-mobile" href="https://coldbox.miruc.co/coldbox-child.zip">
					<span class="icon"><i class="fa fa-download"></i></span><span><?php esc_html_e( 'Child Theme', 'official' ); ?></span>
				</a>
			</div>

		</div>
	</div>


	<div class="content-box image">
		<div class="container"><img src="<?php echo esc_attr( get_theme_file_uri( '/img/coldbox-image.png' ) ); ?>" width='960' height='720'/></div>
	</div>

	<div class="content-box features">
		<div class="container">

			<div class="title-box">
				<h2 class="title"><?php esc_html_e( 'Theme Features', 'official' ); ?></h2>
			</div>

			<div class="features-list columns is-multiline">

				<div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-wrench"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Customizable', 'official' ); ?></h2>
						<p><?php esc_html_e( 'You can change the appearance easily without any coding.', 'official' ); ?></p>
					</div>
				</div>

				<div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-paint-brush"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Beautiful and Simple', 'official' ); ?></h2>
						<p><?php esc_html_e( 'It has been designed meticulously.', 'official' ); ?></p>
					</div>
				</div>

				<div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-mobile"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Resposive Layout', 'official' ); ?></h2>
						<p><?php esc_html_e( 'It is compatible with any devices.', 'official' ); ?></p>
					</div>
				</div>

				<div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-th-list"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Modern Layout', 'official' ); ?></h2>
						<p><?php esc_html_e( 'It is laid out with the Flexbox module, which is really flexible.', 'official' ); ?></p>
					</div>
				</div>

				<div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-shield"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Validated Code', 'official' ); ?></h2>
						<p><?php esc_html_e( 'Its strings are all sanitized and escaped, that means safety.', 'official' ); ?></p>
					</div>
				</div>
				<div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-rocket"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Quick Load', 'official' ); ?></h2>
						<p><?php esc_html_e( 'It will definitely make your website quicker.', 'official' ); ?></p>
					</div>
				</div>

				<!-- <div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-pencil-square-o"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Blog Focused', 'official' ); ?></h2>
						<p><?php esc_html_e( 'It has been focused blogging usage.', 'official' ); ?></p>
					</div>
				</div> -->

				<div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-github"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Free', 'official' ); ?></h2>
						<p><?php esc_html_e( 'You can use full features and functions without any restrictions and money.', 'official' ); ?></p>
					</div>
				</div>

				<div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-square-o"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Moduler', 'official' ); ?></h2>
						<p><?php esc_html_e( 'Its templates are separated, which are easily editable.', 'official' ); ?></p>
					</div>
				</div>

				<div class="feature column is-4 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-twitter"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Social Links', 'official' ); ?></h2>
						<p><?php esc_html_e( 'Show your social profiles so visitors can find your social profiles directly.', 'official' ); ?></p>
					</div>
				</div>

				<div class="addon-features-heading-wrap column is-12">
					<h5 class="addon-features-heading"><?php esc_html_e( 'With the Addon Plugin... (Free)', 'official' ); ?></h5>
				</div>

				<div class="feature column is-5 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-share2"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Share Buttons', 'official' ); ?></h2>
						<p><?php esc_html_e( 'The share buttons increases your social engagement efficiently.', 'official' ); ?></p>
					</div>
				</div>

				<div class="feature column is-5 columns is-mobile">
					<div class="icon column is-2"><i class="fa fa-bolt"></i></div>
					<div class="feature-content column is-10">
						<h2><?php esc_html_e( 'Support AMP', 'official' ); ?></h2>
						<p>
						<?php
						$amp_demo_link = '<a href="' . esc_url( 'https://coldbox.miruc.co' ) . __( '/demo/html-tags-and-formatting/?amp=1', 'official' ) . '">' . __( 'See AMP Demo', 'official' ) . '</a>';
						printf( /* translators: %s: URL */ esc_html__( 'Supports the AMP, which is the fastest HTML format recommened by Google. You\'ll never lost visitors due to loading speed. %s', 'official' ), wp_kses_post( $amp_demo_link ) );
						?>
						</p>
					</div>
				</div>

			</div>

		</div>
	</div>


	<div class="content-box faq">
		<div class="container">

			<div class="title-box">
				<h2 class="title"><?php esc_html_e( 'Frequently Asked Questions', 'official' ); ?></h2>
			</div>

			<div class="question-box">
				<ul class="question">
					<li><?php esc_html_e( 'Where to get a child theme?', 'official' ); ?></li>
				</ul>
				<p class="answer"><?php esc_html_e( 'Its link is on top of this page.', 'official' ); ?></p>
			</div>

			<div class="question-box">
				<ul class="question">
					<li><?php esc_html_e( 'I have just installed the theme! What should I do first?', 'official' ); ?></li>
				</ul>
				<p class="answer">
				<?php
					$reg = '<a href="' . __( 'https://wordpress.org/plugins/regenerate-thumbnails/', 'official' ) . '" target="_blank">Regenerate Thumbnails</a>';
					echo sprintf( /* translators: %s: URL */  __( 'You should regenerate all your thumbnails using %s once after the theme installed. But that\'s it! Set up whatever you want on the theme customizer and enjoy the theme.', 'official' ), $reg );
				?>
				</p>
			</div>

			<div class="question-box">
				<ul class="question">
					<li><?php esc_html_e( 'I found a bug. How can I report it?', 'official' ); ?></li>
				</ul>
				<p class="answer">
				<?php
				$tw = '<a href="https://twitter.com/@mirucons/" target="_blank">' . __( 'My Twitter', 'official' ) . '</a>';
				echo sprintf( __( 'Just let me know about the bug on the forum or by <a href="mailto:i@miruc.co">sending me an email</a>. Thanks!', 'official' ), $tw );
				?>
				</p>
			</div>

			<div class="question-box">
				<ul class="question">
					<li><?php esc_html_e( 'I have a new feature that I think the theme should have got?', 'official' ); ?></li>
				</ul>
				<p class="answer"><?php _e( 'If you are not satisfied with the theme features, then you can just ask me to add what you want on the forum or by <a href="mailto:i@miruc.co">sending me an email</a>.', 'official' ); ?></p>
			</div>

		</div>
	</div>

	<div class="content-box addons">
		<div class="container">

			<div class="title-box">
				<h2 class="title"><?php esc_html_e( 'The Add-On Plugin', 'official' ); ?></h2>
			</div>

			<div class="addons-list columns cards">

				<a class="column card is-6 addon sharebuttons" href="<?php _e( 'https://wordpress.org/plugins/coldbox-addon/', 'official' ); ?>">
					<div class="addon-image"><img src="<?php echo esc_url( get_theme_file_uri( 'img/icon-256x256.jpg' ) ); ?>" alt="coldbox-addons"></div>
					<div class="addon-content">
						<h3 class="addon-title"><?php esc_html_e( 'Coldbox Addons', 'official' ); ?></h3>
						<p class="addon-description"><?php esc_html_e( 'The powered addons for the Coldbox theme. AMP pages, Google Analytics integrations, social buttons and more!', 'official' ); ?></p>
					</div>
				</a>

        <a class="column card is-6 addon ads" href="<?php _e( 'https://coldbox.miruc.co/addons/google-adsense-extension/', 'official' ); ?>">
					<div class="addon-image">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20.391cm" height="13.617cm"> <image x="0px" y="0px" width="578px" height="386px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAA4QAAAHCCAMAAACADvdRAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACeVBMVEX////+/v7m5ubHx8enp6eYmJiPj4+BgYF/f3+EhISQkJCtra3T09P5+fn8/PzJycmUlJRhYWEtLS0GBgYAAAAHBwdBQUGFhYXd3d3p6emfn59WVlYQEBA7Ozv9/f34+PisrKxNTU0EBAQpKSm0tLTq6up7e3sSEhJRUVHn5+fh4eFpaWkICAgXFxe8vLzx8fF4eHgCAgKdnZ2cnJwWFhaLi4tFRUWgoKANDQ1nZ2cYGBjj4+M1NTXU1NQbGxu1tbXFxcURERG9vb0JCQmurq7CwsI8PDzR0dEODg4eHh49PT1DQ0OwsLDo6OgUFBRMTEz39/chISGDg4Pv7+8PDw+MjIwmJiaamppAQEDs7OxXV1fAwMAFBQXIyMg/Pz/y8vJlZWUBAQHPz88kJCTw8PAgICBeXl4yMjK3t7dERETk5OQTExNPT08dHR1fX19HR0f7+/sLCwvY2NiRkZEjIyO4IyP6+vrV1dW/v7/GxsalpaUnJyciIiIDAwNtbW1zc3PZ2dmGhoZLS0vW1tbc3Nxra2uIiIirq6vBwcHu7u6kpKQzMzPz8/MVFRX09PSioqKzs7N3d3d9fX3Ly8v19fVjY2MfHx8ZGRmHh4f29vY0NDQcHByoqKjb29sKCgpISEjt7e2qqqp+fn6VlZUlJSXl5eUsLCy7u7saGhrg4OCNjY1QUFAqKiovLy9ZWVnX19eSkpJ8fHxgYGDe3t6ysrLr6+uCgoJcXFwuLi46OjrKyspbW1tGRkZ2dnZaWlqjo6NxcXG2trbNzc11dXWmpqYrKys5OTk2NjZkZGSTk5POzs4wMDBycnKOjo5vb29iYmLf399wcHBCQkI+hFTGAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+IGGBIICFQV790AABAiSURBVHja7d37m11VecDxmQAx5EaBSWMihKYoxkCUpIJCA1EDiEGgkCHcL5EgtQImgSJgoiLIRSIxCFoVAbUXW6Ritba11lp6v9r2L2oGqU9WSuecfdY+77v35PP5fT9r7bXe7zNJZjJnYgIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgzpicd9TRx8x/wwJ66tiFixYvyZ4iRrX0uF86/oQTp+i9Zb+8/I3Z00RzK1a+6aTs2aFFJy9alT1TNHHKr6z+1eyhoW2nvjl7rhjaW057a/a8MBZr3pY9Wwxl7elnZM8K47Lu7dnjxWDvOFOCc9n6DdkTxgCTv/bO7ClhzM7KHjJmtfbs7Alh/Hwt7LJ3vTt7Pgiw3t8LO+uUc7KngxjnrsieNV7fr2/Mng2irMkeNl7XeednTwZxNmWPG6/jPe/NngsCneon2LrnfZuzx4JQF2RPHIe7UINHmIuyR47DvP/i7Jkgmv/Z1C0rPpA9EYRbnj11HGrJluyBIN4l2WPHoU7PngcSLPMbLzrkg9njQIrF2YPHL1x6WfY0kMI3Kbrj8uxhIMfC7Mnjf/nD6JHq2OzR4zW/cUX2LJBkQfbs8Zors0eBLCLsiK3T2aNAFhF2xILsSSCNCLvBF8IjmAi74arsQSCPCDthclv2IJBHhJ1wYfYckEiE47HiwqOvnj+8a7LngEQibN+1V1/3zux7pUdE2Lbr19yQfan0iwjbdeNN2TdK74iwTTffsj37QukfEbboQ7dmXyd9JML2XODjBBmFCFvzrvXZl0k/ibAtizTIaETYkuOWZV8lfSXCduy4Lfsm6S0RtuPD2RdJf4mwFX4Am9GJsBW3Z98jPSbCNvxm9jXSZyJsw0eyr5E+E2ELfiv2J0Y/egeddqcI4wX/gpibst+X2d0lwngfEyGHEGG8nbtEyCFEGG93bIMi7DoRxov+OCURdpwI490tQg4lwnjLRcihRBgv+rNcRNhxIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKM1zTCdTeV7hHh3CLCeE0jvOuw5+eLcG4RYTwRUhBhPBFSEGE8EVIQYTwRUhBhPBFSEGE8EVIQYTwRUhBhPBFSEGE8EVIQYTwRUhBhPBFSEGE8EVIQYTwRUhBhPBFSEGG8/kT4253SfP/3fvy+MPdfO/IxizBeTyLMbq62w50PfGxzw5Oq84kz14520iKM14sIs3OrznDTntACX7X3kzePctYijNeHCLNbq61w1afiE5xx66dHOGwRxutBhNml1VY42XSuW3PZ7uanLcJ43Y8wu7PqCB/ManBqas+OxsctwngiHHeFi/fmRTh1S+PjFmG8zkeYXVl1hZ9JbHBq+0NNz1uE8UQ45ggfzitwxmebnrcI44lwzBE+kljgQec2PW8Rxut6hNmNVUe4OrHAGQ83PHARxhPhmCvclhjgjE0ND1yE8UQ45gjXJQY444GGBy7CeCIcc4TTef29amXDAxdhPBGKsCDCeCIUYUGE8UQowoII44lQhAURxhOhCAsijCdCERZEGE+EIiyIMJ4IRVgQYTwRirAgwngiFGFBhPFEKMKCCOOJUIQFEcYToQgLIownQhEWRBhPhCIsiDCeCEVYEGE8EYqwIMJ4IhRhQYTxRCjCggjjiVCEBRHGE6EICyKMJ0IRFkQYT4QiLIgwngjHHOGdiQHOeLThgYswngjHHOHtiQHOeKzhgYswngjHHOHxiQEetP3xhgcuwngiHHOEn0ss8KAnmg6ECOPNmQhbPpfWItw3nVfgQXc3fXERxhNh5boDFz4tMcGpz+9r+uIijCfCynUHLvzkbYkR7m/84iKMJ8LKdQcvfNTmtAaPb/7iIownwsp1h1j4C1kVrlnS/MVFGE+ElesOs/BxV2QkuP3A0hFeXITxRFi57lALP/nUdHiDZ39xpBcXYTwRVq475MJPH/3Mxi+9dzrGl7dd/ju7R3xxEcYTYeW6bS+cTYTxRFi5rgipJcLKdUVILRFWritCaomwcl0RUkuEleuKkFoirFxXhNQSYeW6IqSWCCvXFSG1RFi5rgipJcLKdUVILRFWritCaomwcl0RUkuEleuKkFoirFxXhNQSYeW6IqSWCCvXFSG1RFi5rgipJcLKdUVILRFWritCaomwcl0RUkuEleuKkFoirFxXhNQSYeW6wy+8amuYr4z+4iKMJ8LKdYdc+LwDX13W8KhqfO26Z0f4HIoZIownwsp1h1r466sDA3zN+RsmR3lxEcYTYeW6wyy8/7n4Bg96fscILy7CeCKsXHeIha9KSfCgE15o/uIijCfCynUHL/yNrAanprbsbPziIownwsp1By487+K8CKeubPziIownwsp1By78TGKDU2fMa/riIow3ZyJMM+AF3nJDYoNTU99sOhAijCfCMUf4rcQCD/rdpgMhwngiHHOEb0oscMbvNTxwEcYT4Zgj/P3EAGf8QcMDF2E8EY45wm8nBjjj2YYHLsJ4IhxzhNN5/b1qZcMDF2E8EYqwIMJ4IhRhQYTxRCjCggjjiVCEBRHGE6EICyKMJ0IRFkQYT4QiLIgwnghFWBBhPBGKsCDCeCIUYUGE8UQowoII44lQhAURxhOhCAsijCdCERZEGE+EIiyIMJ4IRVgQYTwRirAgwngiFGFBhPFEKMKCCOOJUIQFEcYToQgLIownQhEWRBhPhCIsiDCeCMccoV/+yyAiHHOEfg0+g4hwvA36QBgG6nqEna9w0P59NBqDiHDMEfqQUAYR4Xgb9HHZDNT5CDte4eD9z7s4McIrGx+3CON1P8JOVzjM/r+R1+CWnY1PW4TxRDj2CCeuymrwhBean7YI4/Ugwg5XOOQL7H8upcHnd4xw2CKM14cIu5rh8Pv/+ur4BM/fMDnKUYswXj8i7GKFzV7gvANfXRZY4Neue3bJaCctwng9iXBGdnWjF/hzq7aG+cropyzCeD2KkAgijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKMJ0IKIownQgoijCdCCiKM15cI//CPXvzO+dMd8YGX/vjqa5vt/+mjn9n4pZOC9vflbZc/uHvEgxZhvH5E+N012xuuM3Y3nHPp8Pt/8qnp8A2e/cWRjlqE8XoR4fwTw0d4CCddMOz+j7siY3/bDywd4axFGK8HEU6enjHCw3h5uBf4wuak/a0Z4fMoRBivBxF+L2mEh/DAMPs/KqvBqak/aX7aIozX/QjflzbCg+36/uD9P3lb4gb3Nz5uEcbrfISrvpM4wwO9OPgFTsvc3+f3NT1vEcbrfISLEkd4CA8N2v++6dT93d30vEUYr/MRvpg4wUM4bdD+P5e7vyeanrcI43U9wlUXJ07wEDYOeoHjc/e3/fGGBy7CeF2P8PuJAzyMzYNe4PbkDT7W8MBFGK/rEd6fOL9D2TrgBe5M3t+jDQ9chPG6HuF9ifM7lEERTifvb2XDAxdhPBFWEiG1RFhJhNQSYSURUkuElURILRFWEiG1RFhJhNQSYSURUkuElURILRFWEiG1RFhJhNQSYSURUkuElURILRFWEiG1RFhJhNQSYSURUkuElURILRFWEiG1RFhJhNQSYSURUkuElURILRFWEiG1RFhJhNQSYSURUqvrEV6fOL9DGRThuuT9DfURiocQYbyuR3he4vwOY/ugD8PdlrzBTQ0PXITxuh7h0+sTB3gIVwx6gdXJG3y44YGLMF7XI5x4InGARziP/+OR3P2d2/S8RRiv8xEmD/EgPxi0/4dz9/fZpuctwnidj/BPdyWO8ED37Bz4Ap/J3N/2gZ8kfDgRxut8hBM/TJzhgRYN3v/ivYn7u6XxcYswXvcjXLIxcYgH+LNhXuDBvP3t2dH4uEUYr/sRTsy7J2+KZ7fl6WH2P9l0rltz2e7mpy3CeD2IcGJeR78WvjhUgxMTqz6Vs79bPz3CYYswXh8inFiy4IycMZ7NR6+eHPoFNu2J39/eT948ylmLMF4vIpyYuPTKP48f41ns/YuX9zXZ/84Hnt8cusFPnLl2tJMWYbyeRHjQjh/d1xkfGvIPooe69+Nx+7v/2pGPWYTx+hMhIUQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGE+EFEQYT4QURBhPhBREGK9phH952PNXNXz+x9kvzOxEGK9phB857Pm/avj8HdkvzOxEGO+HDc/8pHvL57c0fP4n2S/M7EQYb2HDM5/6QfH42vUNH79rxH0SRITx/rpphC8tPfTxDzd9/KfZL8zsRBjvb5pWNHXgkKefbfz0I9kvzOxEGO+VxhlN/e0vvhZuuKHxw3+X/cLMToTxHm8e4dTfP3rKwSdXPXbJCM9en/3CzE6ECaZHKGlq1z/ccdNlozw4dc0ddNqdIoz3jyO1BD8nwhb8U/Yt0msibME/Z98ivSbCFvwo+xbpNRG2YOdz2ddIn4mwDaN8owFeI8I2nJV9jfSZCNuwOPsa6TMRtmJP9j3SYyJsxYHse6THRNiKf8m+R3pMhO341+yLpL9E2I5vZV8k/SXCdrzj3dk3SW+JsCX/ln2T9JYIW7J2b/ZV0lcibMs52VdJX4mwLWub/7IYmCHC1vw0+y7pKRG2ZutovzGGI54I23NM9mXSTyJsz+RF2bdJL4mwRd9dln2d9JEI29T4o2FAhO2a/HH2fdJDx2bP7dyy4vzsC6V/FmaP7Rxzo2/Z09QF2VM716zMvlF6Z3H20M45T2VfKT2zbEn2zM45k7dkXyr9ckn2yM5BS3+Sfav0yvLsiZ2LVEgTb8we2DlpqT+RMrSLssd1jpr8XvbN0hu+QTEuK32/kKGcuip7VueuG7+dfbv0wqbsSZ3LLvVzpAy2JntO57bJfz8x+4bpunNXZI/pXPfQydl3TLetf3v2jM59q455a/Y102Ubsif0iPD4f/hnUv4/Z2WP55Fi7c/8bm5ez3pfB+P853/tyr5vumedvw+G2vHyS9lXTseseVv2VB55XjlwW/a10x2nvjl7II9Q73/kms3Zl08XnLzIz6rluffGu3+20eeJHsmW/fdy/3epA154ZdP++W9YwJHm2IWLFvtdFgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAECK/wHRL6O9qPHJrwAAAABJRU5ErkJggg==" /> </svg>
          </div>
					<div class="addon-content">
						<h3 class="addon-title"><?php esc_html_e( 'Coldbox Ads Extension', 'official' ); ?></h3>
						<p class="addon-description"><?php esc_html_e( 'The unified and powered ads extension plugin which gives you the great experiences and engagements on Google AdSense without writing code at all! The best way to monetize your blog with the Coldbox theme.', 'official' ); ?></p>
					</div>
				</a>

			</div>

		</div>
	</div>

</main>

<?php get_footer(); ?>
