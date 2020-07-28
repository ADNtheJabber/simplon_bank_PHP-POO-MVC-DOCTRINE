<?php include '../header.html'; ?>

</header>

<form action="clientMoralController" class="myFormEntreprise" method="POST" id="clientEntreprise">

    <div class="flexform">

        <div id="form1">

            <label for="nom" id="labelNomEntreprise">Nom de l'entreprise: </label><br>
                <input type="text" id="nom_client_entreprise" name="nomEntreprise" placeholder="Nom"/><br>
                <span id="name_error"></span><br>

            <label for="adresse" id="labelAdresseEntreprise">Adresse: </label><br>
                <input type="text" id="adresse_client_entreprise" name="adresseEntreprise" placeholder="Adresse"/><br>
                <span id="adress_error"></span><br>

            <label for="telephone" id="labelTelephone">Telephone: </label><br>
                <input type="text" id="tel_client_entreprise" name="telEntreprise" placeholder="Telephone"/><br>
                <span id="tel_error"></span><br>

            <label for="email" id="labelEmail"></label>Email: </label><br>
                <input type="text" id="email_client_entreprise" name="emailEntreprise" placeholder="email"/><br>
                <span id="email.error"></span><br>

        </div>

        <div id="form2">

            <label for="ninea" id="labelNinea">Ninea: </label><br>
                <input type="text" id="ninea" name="ninea" placeholder="ninea"/><br>
                <span id="ninea_error"></span><br>

            <label for="regiscommerce" id="labelRegisCommerce">Registre de commerce: </label><br>
                <input type="text" id="regiscommerce" name="regiscommerce" placeholder="registre de commerce"/><br>
                <span id="regiscom_error"></span><br>
                
        </div>

    </div>

        <div class="btns" id="boutons_formClient">
            <input type="submit" id="submitClient" value="Enregistrer"/>
            <input type="reset" id="reset" value="Annuler"/>
        </div>

</form>

<?php include '../footer.html'?>