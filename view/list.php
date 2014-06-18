<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><?php echo $list->getTitle(); ?></h1>
    </div>
    <table class="table">
        <thead>
            <?php foreach($list->getLabels() as $field): ?>
                <th><?php echo $field->getLabels(); ?></th>
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
</div>