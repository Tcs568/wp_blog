                 <!-- sidebar php -->
                 <!-- sidebar -->
                 <?php if (is_active_sidebar('sidebar-1')) { ?>
                     <div class="col-sm-12 col-lg-4">
                         <aside id="sidebar">
                             <div class="sidebar__inner">
                                 <?php dynamic_sidebar('sidebar-1'); ?>
                                 <?php get_search_form(); ?>
                             </div><!-- end sidebar inner -->
                         </aside><!-- end sidebar -->
                     </div><!-- end sidebar col -->
                     <!-- end sidebar php -->
                 <?php }
