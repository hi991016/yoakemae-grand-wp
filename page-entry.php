<?php 
    get_header();
    $locale = get_locale();
?>
    <main class="entrypage" id="entrypage">
        <!-- entry// -->
        <section class="entry">
            <div class="entry_container l-container">
                <div class="entry_left">
                    <div class="entry_sticky">
						<?php include 'components/entry-nav.php'; ?>
                    </div>
                </div>
                <div class="entry_right">
                    <div class="entry_tabs">
                        <div class="entry_content js-entry-content show-content" data-content="1">
                            <?php include 'components/recruitment.php'; ?>
                        </div>
                        <div class="entry_content js-entry-content" data-content="2">
                            <?php include 'components/recruitment2.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //entry -->

        <?php include 'components/jbtracker.php'; ?>
    </main>
<?php get_footer(); ?>