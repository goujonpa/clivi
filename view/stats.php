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
                    <td>Nombre moyen d'animal par client : </td>
                    <td><?php $tmp = $stats->nbAnimalMoyClient(); $nb_formated = number_format($tmp["value"], 2, ',', ' '); echo $nb_formated; ?></td>
                </tr>
        </tbody>
      </table>
	</div>