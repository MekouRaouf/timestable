<?php

$pageTitle = "Emplois"; ?>

<div class="container">
    <div class="header">
        <span>Emplois</span>
    </div>
        
    <main>  
        <?php foreach($donnees['edts'] as $edt): ?>
            <table> 
                <th>EDT N° <?= $edt->id ?></th>
                <th><?= $edt->Nom_etudiant ?></th>
                
                <tr>
                    <td></td>
                    <?php foreach($donnees['jours'] as $jours): ?>
                        <td><?= $jours->jour ?></td>
                    <?php endforeach; ?>
                </tr>

                <?php foreach($edt->creneaux()->orderBy('id','asc')->get() as $creneau): ?>
                    <tr>
                        <td><?= $creneau->debut.' - '.$creneau->fin ?></td>
                            <?php for($jour = 1; $jour <= 7; $jour++): ?>     
                                <td>
                                    <?php
                                    foreach($edt->plannings()->get() as $planning){
                                        $idJourPlanning = $planning->jour()->first()->id;
                                        if($creneau->id == $planning->creneau()->first()->id){
                                            if($idJourPlanning == $jour){
                                                echo $planning->matiere()->first()->intitule;  
                                                echo '<br>';
                                                echo '('.$planning->typeplanning()->first()->type.')';  
                                            }    
                                        } 
                                    }
                                    ?>    
                                </td>
                            <?php endfor; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endforeach; ?>
    </main>
</div>