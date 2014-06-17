<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><?php echo $formConf->getTitle(); ?></h1>
    </div>
    <form role="form" method="post">
        <?php foreach($formConf->getFields() as $field): ?>
            <?php echo $field->html(); ?>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-default"><?php echo $formConf->getSubmitText(); ?></button>
    </form>
</div>