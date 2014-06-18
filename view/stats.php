    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Statistiques</h1>
      </div>
      <table class="table">
        <thead>
            
                <th>Facture moyenne : </th>
                <th><?php $tmp = $stats->factureMoy(); $nb_formated = number_format($tmp["value"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
        <thead>
                <th>Nombre moyen d'animal par client : </th>
                <th><?php $tmp = $stats->nbAnimalMoyClient(); $nb_formated = number_format($tmp["value"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
      </table>

      <table class="table">
        <thead>
                <th>Nom </th>
                <th>Prenom </th> 
                <th>Total dépensé </th> 
        </thead>
          <tbody>
          <?php foreach ($stats->top3Client() as $ligne): ?>
            <tr>
                <td><?php echo $ligne["nom"]; ?> </td>
                <td><?php echo $ligne["prenom"]; ?> </td>
                <td><?php echo $ligne["prix"]; ?> </td> 
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
	</div>