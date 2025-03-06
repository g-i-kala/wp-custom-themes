<div class="w-full p-4 flex flex-row justify-between items-center bg-black">
    <!-- Branging -->
    <?php get_template_part('/template-parts/components/site-logo-title', null, array(
        'branding_justify' => 'justify-items-start',
        'logo_size' => '**:w-auto **:h-12',
        'title_size' => 'text-2xl'
        )); ?>
    
    <button class="hamburger block lg:hidden cursor-pointer bg-transparent border-0 p-2.5 " aria-expanded="false" aria-label="<?php _e('Toggle navigation','fitness_pleasure') ?>" aria-controls="navbar">
        <span class="bar block w-8 h-1 my-1.5 bg-white rounded-lg mx-auto transition-all duration-300"></span>
        <span class="bar block w-8 h-1 my-1.5 bg-white rounded-lg mx-auto transition-all duration-300"></span>
        <span class="bar block w-8 h-1 my-1.5 bg-white rounded-lg mx-auto transition-all duration-300"></span>
    </button>
    
    <!-- Menu -->
    <?php get_template_part('template-parts/components/site-menu', null, array('menu_class' => 'flex-col md:flex-row')); ?>           

</div>