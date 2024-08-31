<?php
/**
 * The template for displaying download links in the download page
 *
 */
?>

<?php

	$locale = get_locale();
	$lang_version = "";//corresponding to the lang code written in the version casette

	switch ($locale) {
		case "en_US":
			$lang_version = "en";
			break;
		case "it_IT":
		$lang_version = "it";
			break;
		case "de_DE":
			$lang_version = "de";
			break;
		case "el_GR":
			$lang_version = "gr";
			break;
		case "ro_RO":
			$lang_version = "ro";
			break;
		default:
			$lang_version = "en";
	}

	$versions = $dlm_download->get_versions();
	if ( $versions ) {
		
		$count = 0;
        foreach ( $versions as $key => $version ) {
            $dlm_download->set_version( $version );
          
        }
				
			?>
            <?php 
            $download = $dlm_download->get_the_download_link();
            $title_download = apply_filters( 'the_title', $dlm_download->get_the_title() );
            ?>
        
            <div class="c-downloads__col [ col-12 col-sm-12 col-md-6 col-lg-6 ]">
                <div class="c-downloads__box">
                    <p class="title"><?php echo apply_filters( 'the_title', $dlm_download->get_the_title() );//echo $version->get_filename(); ?></p>
                    <p class="subtitle"><?php echo apply_filters( 'the_title', $dlm_download->get_description() ); ?></p>
     
                    <div class="buttons">
                        <a class="download-link" id="<?php echo $key; ?>"
                            href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow"
                        >
                        
                            <button class="download-btn en">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                </svg>
                            </button>
                            <div class="download-title"><?php _e('Download','odf') ?></div>
                        </a>
 
                    </div>
                </div>
            </div>
        <?php
    }
?>