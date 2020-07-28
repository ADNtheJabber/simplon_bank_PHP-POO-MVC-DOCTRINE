<?php include '../header.html';?>
        
</header>
 
              
    <form action="compteController" method="POST" class="myFormCompte" id="formCompte">
                        
        <fieldset>
    
            <legend>Informations du Compte </legend>
    
                    <label for="typeCompte" id="TypeCompte" name="typeCompte" >Type de compte: </label><br>
                        <select name="Compte" id="type">
                            <option  value="courant">Compte Courant</option>
                            <option  value="epargne">Compte Epargne</option>
                            <option value="bloque">Compte Bloque</option>
                       </select>    

                    <label for="numeroCompte" id="numeroCompte">Numero de compte: </label>
                        <input type="text" id="numeroCompte" name="noCompte" placeholder="numero de compte"/><br>
                        <span id="numCompte_error"></span><br>
    
                    <label for="fraisOuv" id="labelFraisOuv">Frais d'Ouverture:</label>
                        <input type="text" id="fraisOuv" name="fraisOuv" placeholder="frais d'ouverture"/><br>
                        <span id="fraisOuv_error"></span><br>
                                                         
                    <label for="remunAnnuelle" id="labelRemunAnnuelle">Montant Remuneration Annuelle:</label>
                        <input type="text" id="remunAnnuelle" name="remu" placeholder="remuneration annuelle"/><br>
                        <span id="remun_error"></span><br>
    
                    <!-- <label for="agios" id="labelAgiosCC">Agios Trimestrielle:</label>
                        <input type="text" id="agiosCC" name="agiosCC" placeholder="agios tous les 03 mois"/><br>
                        <span id="agios_error"></span><br>
     -->
                    <label for="depotInitial" id="labelDepotInitialCC">Montant du dépot initial:</label>
                        <input type="text" id="depotInitialCC" name="depotCC" placeholder="depot initial à la creation"/><br>
                        <span id="depotInit_error"></span><br>
    
                    <label for="dateDeblocage" id="labelDateDeblocage">Date de RéOuverture:</label>
                        <input type="date" id="dateDeblocage" name="dateDeblocage" placeholder="date de reouverture"/><br>
                        <span id="date_error"></span><br>

                <!-- <div class="form">
                    
                    <h2>Associer le client</h2>
                        <div class="group flex-row-between">
                            <label for="">CNI &MediumSpace;&MediumSpace; </label>
                            <input list="trouve" type="text" name="search" id="search"  onkeyup="searchValid()" class="input"/>
                            <datalist id="trouve">

                            </datalist>
                        </div>
                        <div class="field" id="info">
                            <img src="ok.png" alt="ok">

                </div>
                     -->
          </div>

                            
        </fieldset>
    
            <div class="btns" id="boutons_formCompte">
                <input type="submit" id="submitCompte" value="Enregistrer"/>
                <input type="reset" id="reset" value="Annuler"/>
            </div>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<?php include '../footer.html';?>
     