<?php
/**
 * The template for displaying the footer
 */
?>
     </div>
  <!--  </div>Wrapper ends ?? -->
        <footer id="colophon" class="site-footer content__container p-4 flex flex-col bg-black text-white">
            <div class="footer__wrapper flex flex-col md:flex-row gap-2">
                <div class="footer__newsletter w-full md:w-1/2 flex flex-col justify-center content-center  ">
                    <!-- Brangind -->
                    <?php get_template_part('/template-parts/components/site-logo-title', null, array(
                        'branding_justify' => 'justify-center md:justify-items-start',
                        'logo_size' => '**:w-auto **:h-14',
                        'title_size' => 'text-4xl mr-0 md:mr-16'
                        )); ?>
                    
                    <div class="footer__signup mx-auto lg:ml-18">
                     newsletter form
                    </div>
                   
                </div>
                <div class="footer__menu w-1/4  hidden lg:block mx-auto">
                     <!-- Menu -->
                    <?php get_template_part('template-parts/components/site-menu', null, array('menu_class' => 'flex-col *:py-4')); ?>        
                </div>
                <div class="footer__contact w-full md:w-1/2 lg:1/4 flex justify-center content-center ">
                    contact form
                </div>
            </div>

            <?php get_template_part('template-parts/footer/footer','copyrights'); ?>
            
        </footer>
    </div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
