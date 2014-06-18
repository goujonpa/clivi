    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Statistiques</h1>
      </div>
      <table class="table">
        <thead>
            
                <th>Facture moyenne par client : /th>
                <th><?php $tmp = $stats->factureMoyClient(); $nb_formated = number_format($tmp["value"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
        <tbody>
                <tr>
                    <td>Nombre moyen d'animal par client : </td>
                    <td><?php $tmp = $stats->nbAnimalMoyClient(); $nb_formated = number_format($tmp["value"], 2, ',', ' '); echo $nb_formated; ?></td>
                </tr>
        </tbody>
      </table>
	</div>