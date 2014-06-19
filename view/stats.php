    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Statistiques</h1>
      </div>

        <h4>Statistiques générales : </h4>
      <table class="table">
        <thead>
                <th>Nombre de client : </th>
                <th><?php $tmp = $stats->nbClient(); $nb_formated = number_format($tmp["nb"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
        <thead>
                <th>Nombre d'employé' : </th>
                <th><?php $tmp = $stats->nbEmploye(); $nb_formated = number_format($tmp["nb"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
        <thead>
                <th>Nombre de vétérinaire' : </th>
                <th><?php $tmp = $stats->nbVeterinaire(); $nb_formated = number_format($tmp["nb"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
        <thead>
                <th>Nombre d'animaux : </th>
                <th><?php $tmp = $stats->nbAnimaux(); $nb_formated = number_format($tmp["nb"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
        <thead>
                <th>Nombre moyen d'animal par client : </th>
                <th><?php $tmp = $stats->nbAnimalMoyClient(); $nb_formated = number_format($tmp["value"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
        <thead>
                <th>Facture moyenne : </th>
                <th><?php $tmp = $stats->factureMoy(); $nb_formated = number_format($tmp["value"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
        <thead>
                <th>Total du chiffre d'affaire : </th>
                <th><?php $tmp = $stats->totalCA(); $nb_formated = number_format($tmp["ca"], 2, ',', ' '); echo $nb_formated; ?></th>
        </thead>
      </table>

      <br/>
      <hr/>
      <h4>Top 3 des meilleurs clients</h4>
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

      <br/>
      <hr/>
      <h4>Top 3 des plus grosses factures</h4>
      <table class="table">
        <thead>
                <th>Nom </th>
                <th>Prenom </th> 
                <th>Montant de la facture </th> 
        </thead>
          <tbody>
          <?php foreach ($stats->top3Facture() as $ligne): ?>
            <tr>
                <td><?php echo $ligne["nom"]; ?> </td>
                <td><?php echo $ligne["prenom"]; ?> </td>
                <td><?php echo $ligne["prix_total"]; ?> </td> 
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <br/>
      <hr/>
      <h4>Nombre d'animaux par client</h4>
      <table class="table">
        <thead>
                <th>Nom </th>
                <th>Prenom </th> 
                <th>Nombre d'animaux </th> 
        </thead>
          <tbody>
          <?php foreach ($stats->nbAnimalClient() as $ligne): ?>
            <tr>
                <td><?php echo $ligne["nom"]; ?> </td>
                <td><?php echo $ligne["prenom"]; ?> </td>
                <td><?php echo $ligne["count"]; ?> </td> 
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

	</div>