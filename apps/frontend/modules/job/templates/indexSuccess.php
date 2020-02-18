<!-- apps/frontend/modules/job/templates/indexSuccess.php -->

<?php use_stylesheet('jobs.css') ?>

<!--<div id="jobs">-->
<!--    --><?php //foreach ($categories as $category): ?>
<!--        <div class="category_--><?php //echo Jobeet::slugify($category->getName()) ?><!--">-->
<!--            <div class="category">-->
<!--                <div class="feed">-->
<!--                    <a href="">Feed</a>-->
<!--                </div>-->
<!--                <h1>--><?php //echo $category ?><!--</h1>-->
<!--            </div>-->
<!---->
<!--            --><?php //include_partial('job/list', array('jobs' => $category->getActiveJobs(sfConfig::get('app_max_jobs_on_homepage')))) ?>
<!---->
<!---->
<!--            --><?php //if (($count = $category->countActiveJobs() - sfConfig::get('app_max_jobs_on_homepage')) > 0): ?>
<!--                <div class="more_jobs" style="margin-right: 1224px">-->
<!--                    and --><?php //echo link_to($count, 'category', $category) ?>
<!--                    more...-->
<!--                </div>-->
<!--            --><?php //endif; ?>
<!--        </div>-->
<!--    --><?php //endforeach; ?>
<!--</div>-->
<p style="margin-top: 60px;"></p>
<div id="container"> 
    <div id="left" style='background-image: url("/legacy/images/programming.jpeg");background-size: 900px 700px;'>     
<!--        <img src="/legacy/images/teamwill.jpg" alt="teamwill image" style="width: auto;height: auto;"> -->
    </div>
     
    <div id="right">   
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
                        <div class="more_jobs" ><!--style="margin-right: 1224px"-->
                            and <?php echo link_to($count, 'category', $category) ?>
                            more...
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
     
</div>

<style>
    #container {
        width: 1600px;
        height:700px;
        margin: 0em auto;
        padding: 2px;
    }

    #left {
        float:left;
        width: 790px;
        height: 590px;
        /*padding: 1em;*/
        /*margin:3px;*/

    }
    #right {
        float:right;
        width: 790px;
        height: 590px;
        /*padding: 1em;*/
        /*margin:3px;*/
    }
</style>