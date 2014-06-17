    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $base_url; ?>">Clinique Vétérinaire</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown<?php if($page == "personne") { echo " active"; }?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personnes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Personnel</li>
                            <li><a href="<?php echo $base_url; ?>personne/listePersonnel">Liste</a></li>
                            <li><a href="<?php echo $base_url; ?>personne/addPersonnel">Ajouter</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Client</li>
                            <li><a href="<?php echo $base_url; ?>personne/listeClient">Liste</a></li>
                            <li><a href="<?php echo $base_url; ?>personne/addClient">Ajouter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown<?php if($page == "animal") { echo " active"; }?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Animaux<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $base_url; ?>animal/liste">Liste</a></li>
                            <li><a href="<?php echo $base_url; ?>animal/add">Ajouter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown<?php if($page == "rdv") { echo " active"; }?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rendez-vous<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $base_url; ?>rdv/liste">Liste</a></li>
                            <li><a href="<?php echo $base_url; ?>rdv/add">Ajouter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown<?php if($page == "ord") { echo " active"; }?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ordonnances<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $base_url; ?>ord/liste">Liste</a></li>
                            <li><a href="<?php echo $base_url; ?>ord/add">Ajouter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown<?php if($page == "fact") { echo " active"; }?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Factures<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $base_url; ?>fact/liste">Liste</a></li>
                            <li><a href="<?php echo $base_url; ?>fact/add">Ajouter</a></li>
                        </ul>
                    </li>
                    <li <?php if($page == "stats") { echo 'class="active"'; }?>><a href="<?php echo $base_url; ?>stats/">Statistiques</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>