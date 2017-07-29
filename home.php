<?php get_header( 'child' ); ?>

<main class="main">

  <div class="content-box title-bar">
    <div class="background-image"></div>
    <div class="container">

      <div class="title-box">
        <h2 class="theme-slug">Coldbox</h2>
        <p class="theme-description"><?php esc_html_e( 'A Clean Blog-Focused WordPress Theme', 'official' ); ?></p>
      </div>

      <div class="columns is-mobile is-multiline button-list">
        <a class="download-link button column is-primary is-desktop-2 is-3-tablet is-10-mobile" href="https://coldbox.miruc.co/coldbox.zip">
          <span class="icon"><i class="fa fa-wordpress"></i></span><span><?php esc_html_e( 'Download', 'official' ); ?></span>
        </a>
        <a class="github-link button column is-info is-desktop-2 is-3-tablet is-10-mobile" href="https://github.com/mirucon/coldbox" target="_blank">
          <span class="icon"><i class="fa fa-github"></i></span><span>GitHub</span>
        </a>
        <a class="child-link column button is-white is-outlined is-desktop-2 is-3-tablet is-10-mobile" href="https://coldbox.miruc.co/coldbox-child.zip">
          <span class="icon"><i class="fa fa-download"></i></span><span><?php esc_html_e( 'Child Theme', 'official' ); ?></span>
        </a>
      </div>

    </div>
  </div>


  <div class="content-box image">
    <div class="container"><img src="<?php echo esc_attr( get_theme_file_uri( '/img/coldbox-image.png' ) ); ?>" width='2000' height='1500'/></div>
  </div>

  <div class="content-box features">
    <div class="container">

      <div class="title-box">
        <h2 class="title"><?php _e( 'Theme Features', 'official' ); ?></h2>
      </div>

      <div class="columns is-multiline">

        <div class="feature column is-4 columns is-mobile">
          <div class="icon column is-2"><i class="fa fa-wrench"></i></div>
          <div class="feature-content column is-10">
            <h2><?php esc_html_e( 'Customizable', 'official' ); ?></h2>
            <p><?php esc_html_e( 'You can change the appearance easily without coding.', 'official' ); ?></p>
          </div>
        </div>

        <div class="feature column is-4 columns is-mobile">
          <div class="icon column is-2"><i class="fa fa-paint-brush"></i></div>
          <div class="feature-content column fa-10">
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
            <p><?php esc_html_e( 'It is layouted with the Flexbox module, which is really flexible.', 'official' ); ?></p>
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
          <div class="icon column is-2"><i class="fa fa-bolt"></i></div>
          <div class="feature-content column is-10">
            <h2><?php esc_html_e( 'Quick Load', 'official' ); ?></h2>
            <p><?php esc_html_e( 'It brings your website to be quicker.', 'official' ); ?></p>
          </div>
        </div>

        <div class="feature column is-4 columns is-mobile">
          <div class="icon column is-2"><i class="fa fa-pencil-square-o"></i></div>
          <div class="feature-content column is-10">
            <h2><?php esc_html_e( 'Blog Focused', 'official' ); ?></h2>
            <p><?php esc_html_e( 'It is focused blogging usage.', 'official' ); ?></p>
          </div>
        </div>

        <div class="feature column is-4 columns is-mobile">
          <div class="icon column is-2"><i class="fa fa-github"></i></div>
          <div class="feature-content column is-10">
            <h2><?php esc_html_e( 'Free', 'official' ); ?></h2>
            <p><?php esc_html_e( 'You can use full features and functions without any restrictions.', 'official' ); ?></p>
          </div>
        </div>

        <div class="feature column is-4 columns is-mobile">
          <div class="icon column is-2"><i class="fa fa-square-o"></i></div>
          <div class="feature-content column is-10">
            <h2><?php esc_html_e( 'Moduler', 'official' ); ?></h2>
            <p><?php esc_html_e( 'Its templates are separated, which are easily editable.', 'official' ); ?></p>
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
          <li><?php _e( 'Where to get a child theme?', 'official' ); ?></li>
        </ul>
        <p class="answer"><?php esc_html_e( 'Its link is on top of this page.', 'official' ); ?></p>
      </div>

      <div class="question-box">
        <ul class="question">
          <li><?php _e( 'I have just installed the theme! What should I do first?', 'official' ); ?></li>
        </ul>
        <p class="answer"><?php $reg = '<a href="'.__( 'https://wordpress.org/plugins/regenerate-thumbnails/', 'official' ).'" target="_blank">Regenerate Thumbnails</a>'; echo sprintf( __( 'You should regenerate all your thumbnails using %s once after the theme installed. But that\'s it! Set up whatever you want on the theme customizer and enjoy the theme.', 'official' ), $reg ); ?></p>
      </div>

      <div class="question-box">
        <ul class="question">
          <li><?php _e( 'I found a bug. How can I report it?', 'official' ); ?></li>
        </ul>
        <p class="answer"><?php $tw = '<a href="https://twitter.com/@mirucons/" target="_blank">' . __( 'My Twitter', 'official' ) . '</a>'; echo sprintf( __( 'Just let me know about the bug on the forum or <a href="mailto:admin@mirucon.com">email me</a>. Thank you very much.', 'official' ), $tw ); ?></p>
      </div>

      <div class="question-box">
        <ul class="question">
          <li><?php _e( 'I have a new feature request.', 'official' ); ?></li>
        </ul>
        <p class="answer"><?php esc_html_e( 'Not satisfied with the features? You can just tell me what you want through the forum or my email.', 'official' ); ?></p>
      </div>

    </div>
  </div>

  <div class="content-box addons">
    <div class="container">

      <div class="title-box">
        <h2 class="title">Add-Ons</h2>
      </div>

      <div class="columns cards">

        <a class="column card is-6 addon sharebuttons" href="<?php _e( 'https://coldbox.miruc.co/addons/share-buttons/', 'official' ); ?>">
          <div class="addon-image"><img src="<?php echo esc_attr( get_theme_file_uri( 'img/sharebuttons.jpg' ) ); ?>" alt="sharebuttons"></div>
          <div class="addon-content">
            <h3 class="addon-title"><?php esc_html_e( 'Share Buttons Add-On', 'official' ); ?></h3>
            <p class="addon-description"><?php esc_html_e( 'The add-on adds social buttons easily.', 'official' ); ?></p>
          </div>
        </a>

      </div>

    </div>
  </div>

</main>

<?php get_footer(); ?>
