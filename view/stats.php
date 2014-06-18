    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Statistiques</h1>
      </div>
      <table class="table">
        <thead>
            
                <th>t1</th>
                <th><?php print_r($stats->nbAnimalMoyClient()); ?></th>
        </thead>
        <tbody>
                <tr>
                    <td><?php echo $stats->nbAnimalMoyClient()->value; ?></td>
                    <td>l2</td>
                </tr>
        </tbody>
      </table>
	</div>