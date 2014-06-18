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
        <tbody>
                <tr>
                    <td>Nombre moyen d'animal par client : </td>
                    <td><?php $tmp = $stats->nbAnimalMoyClient(); $nb_formated = number_format($tmp["value"], 2, ',', ' '); echo $nb_formated; ?></td>
                </tr>
        </tbody>
      </table>

      <table>
            <caption>Top 3 des plus gros client : </caption>

               <tr>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Total des dépenses</th>
               </tr>
               <tr>
                   <td>Carmen</td>
                   <td>33 ans</td>
                   <td>Espagne</td>
               </tr>
               <tr>
                   <td>Michelle</td>
                   <td>26 ans</td>
                   <td>États-Unis</td>
               </tr>
</table>
	</div>