<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><?php echo $formConf->getTitle(); ?></h1>
    </div>

    <table class="table">
        <thead>
            <?php foreach($list->getLabels() as $field): ?>
                <th><?php echo $field->label; ?></th>
            <?php endforeach; ?>
                <th></th>
        </thead>
        <tbody>
            <?php foreach($list->getLines() as $line): ?>
                <tr>  
                    <?php foreach($line->getFields() as $field): ?>
                        <td><?php echo $field->show(); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php echo $formConf->getAlerts(); ?>
    <form role="form" method="post">
        <input type="hidden" name="submitForm" value="1">
        <?php foreach($formConf->getFields() as $field): ?>
            <?php echo $field->html($formConf); ?>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-default"><?php echo $formConf->getSubmitText(); ?></button>
    </form>
</div>