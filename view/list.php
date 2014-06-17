<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><?php echo $listParams["title"]; ?></h1>
    </div>
    <table class="table">
        <thead>
            <?php foreach($listParams["keys"] as $key): ?>
                <th><?php echo ucfirst($key); ?></th>
            <?php endforeach; ?>
        </thead>
        <tbody>
            <?php foreach($listArray as $line): ?>
                <tr>
                <?php foreach($listParams["keys"] as $key): ?>
                    <td><?php echo $line->{$key}(); ?></td>
                <?php endforeach; ?>
                    <td> <a type="button" class="btn btn-primary" href="<?php echo $base_url.'/'.$editLink.'?'.$listParams['keys'][0].'=' ?>">Editer</a>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>