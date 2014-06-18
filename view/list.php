<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><?php echo $list->getTitle(); ?></h1>
    </div>
    <?php try { ?>
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
                    <td><a href="<?php echo $base_url.$page.'/edit'.$list->class.'?'.$line->_primaryAttr.'='.$line->{$line->_primaryAttr}() ?>" type="button" class="btn btn-warning">Editer</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php } catch (Exception $e) { 
        //echo $e->getMessage();
    } ?>
</div>