<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category) {
    //echo $category;die();
    $template->jobs = $job->getByCategory($category);
    $template->title = 'Jobs In '. $job->getCategory($category)->name;
} else {
    $template->title = 'Latest Jobs';
    $template->jobs = $job->getAllJobs();
}


$template->categories = $job->getCategories();
/**
 fixed error with db select from jobs
 Video stopped at https://youtu.be/LEkjrQMmIK0?t=2806
 */
echo $template;