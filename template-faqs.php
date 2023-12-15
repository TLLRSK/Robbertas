<?php /* Template name: Faqs */ ?>

<?php get_header(); the_post(); ?>

<?php
    global $wp_query;
    $postid = $wp_query->post->ID;
    $color = get_post_meta($postid, 'color', true);
?>

    <header class="header page__header color--<?php echo $color; ?> color-border--<?php echo $color; ?>">
        <h1 class="h--xxl">FAQS</h1>
    </header>

   <main class="main faqs column color--<?php echo $color; ?>">

        <div class="faqs__basic-questions">
        
            <?php while ( have_rows ( 'main_questions' ) ) : the_row(); ?>
                <?php $question = get_sub_field ( 'question' ); ?>
                <?php $answer = get_sub_field ( 'answer' ); ?>

                <div class="faqs__basic-question">
                    <div class="h--s weight--600"><?php echo $question; ?></div>
                    <div class="faqs__answer"><?php echo $answer; ?></div>
                </div>
            <?php endwhile; ?>
            
        </div>

        <div class="faqs__more-questions">

            <h2 class="faqs__more-questions-title h--m weight--300">MORE QUESTIONS</h2>

            <ol class="faqs__more-questions-list column">
                <?php while ( have_rows ( 'more_questions' ) ) : the_row(); ?>
                    <?php $question = get_sub_field ( 'question' ); ?>
                    <?php $answer = get_sub_field ( 'answer' ); ?>
                        
                    <li id="question-1" class="faqs__more-questions-list-item">
                        <p class="p--m weight--600"><?php echo $question; ?></p>
                        <p class="faqs__answer"><?php echo $answer; ?></p>
                    </li>

                <?php endwhile; ?>
            </ol>
        </div>

    </main>

<?php get_footer(); ?>