<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><?php echo $listParams["title"]; ?></h1>
    </div>
    <table class="table">
        <thead>

        </thead>
        <tbody>
            <?php foreach($listArray as $line): ?>
                <tr>
                <?php foreach($listParams["keys"] as $key): ?>
                    <td><?php echo $line->$key; ?></td>
                <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <pre>
     <?php print_r($listArray); ?>
    </pre>
</div>