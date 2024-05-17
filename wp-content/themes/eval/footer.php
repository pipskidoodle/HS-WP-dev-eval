                </main>
                <?php get_sidebar(); ?>
            </div>
            <footer id="footer" role="contentinfo">
                <div id="copyright">
                    &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?>
                    <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                </div>
                <nav id="footerNav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                </nav>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>

</html>