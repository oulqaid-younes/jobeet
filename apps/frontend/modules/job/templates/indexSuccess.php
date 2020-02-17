<!-- apps/frontend/modules/job/templates/indexSuccess.php -->

<?php use_stylesheet('jobs.css') ?>

<div id="jobs">
    <?php foreach ($categories as $category): ?>
        <div class="category_<?php echo Jobeet::slugify($category->getName()) ?>">
            <div class="category">
                <div class="feed">
                    <a href="">Feed</a>
                </div>
                <h1><?php echo $category ?></h1>
            </div>

            <?php include_partial('job/list', array('jobs' => $category->getActiveJobs(sfConfig::get('app_max_jobs_on_homepage')))) ?>


            <?php if (($count = $category->countActiveJobs() - sfConfig::get('app_max_jobs_on_homepage')) > 0): ?>
                <div class="more_jobs">
                    and <?php echo link_to($count, 'category', $category) ?>
                    more...
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>




<!---------------------------------------------------------------------->
<!----------------------- Previous Script ------------------------------>
<!---------------------------------------------------------------------->
<?php //use_stylesheet('jobs.css') ?>
<!---->
<!--<div id="jobs">-->
<!--    <table class="jobs">-->
<!--        --><?php //foreach ($JobeetJobs as $i => $job): ?>
<!--            <tr class="--><?php //echo fmod($i, 2) ? 'even' : 'odd' ?><!--">-->
<!--                <td class="location">--><?php //echo $job->getLocation() ?><!--</td>-->
<!--                <td class="position">-->
<!--                    <a href="--><?php //echo url_for('job_show_user', $job) ?><!--">-->
<!--                        --><?php //echo $job->getPosition() ?>
<!--                    </a>-->
<!--                </td>-->
<!--                <td class="company">--><?php //echo $job->getCompany() ?><!--</td>-->
<!--            </tr>-->
<!--        --><?php //endforeach ?>
<!--    </table>-->
<!--</div>-->