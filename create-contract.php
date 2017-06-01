<html>
	<head>
 		<meta charset="utf-8" />
        <title>Remplir champs</title>
	</head>

<!-- On part du principe qu'on a déjà l'adresse email du propriétaire et du locataire -->


<form action="bail.php" method="post">
<p>
	<b>Propriétaire</b /><br />
	Civilité<sup>*</sup /> : 
	<input type="radio" name="civ_owner" value="Monsieur" id="civ_owner_mister" /> <label for="civ_owner_mister">Monsieur </label>
	<input type="radio" name="civ_owner" value="Madame" id="civ_owner_miss" /> <label for="civ_owner_miss">Madame</label><br />
    Nom<sup>*</sup /> : <input type="text" name="name_owner" /><br />
    Prénom<sup>*</sup /> : <input type="text" name="firstname1_owner" /><br />
    <!-- A voir comment on gère la multiplicité des prénoms -->
    Prénom 2 : <input type="text" name="firstname2_owner" /><br />
    Prénom 3 : <input type="text" name="firstname3_owner" /><br />
    Date de naissance<sup>*</sup /> : <input type="text" name="birthdate_owner" /><br />
    Lieu de naissance<sup>*</sup /> : <input type="text" name="birthplace_owner" /><br />
    <!--
	A décomposer en :
    - voie et numéro de voie
    - code postal
    - ville
    -->
    Adresse<sup>*</sup /> : <input type="text" name="address_owner" /><br />
    <!--
    Pour le téléphone :
    S'il n'a pas de fixe, il ne met que le portable,
    s'il n'a pas de portable, il met son numéro de fixe dans la ligne téléphone portable
    -->
	Téléphone fixe : <input type="text" name="phone_owner" /><br />    
	Téléphone portable<sup>*</sup /> : <input type="text" name="cellphone_owner" /><br />
	<!-- Nationalité et Profession non demandé dans le bail, mais dans le mandat oui -->
	Nationalité<sup>*</sup /> : <input type="text" name="nation_owner" /><br />    
	Profession<sup>*</sup /> : <input type="text" name="work_owner" /><br />    

    <br /><b>Locataire</b /><br />
	Civilité<sup>*</sup /> : 
	<input type="radio" name="civ_rent" value="Monsieur" id="civ_rent_mister" /> <label for="civ_rent_mister">Monsieur </label>
	<input type="radio" name="civ_rent" value="Madame" id="civ_rent_miss" /> <label for="civ_rent_miss">Madame</label><br />
    Nom<sup>*</sup /> : <input type="text" name="name_rent" /><br />
    Prénom<sup>*</sup /> : <input type="text" name="firstname1_rent" /><br />
    Prénom 2 : <input type="text" name="firstname2_rent" /><br />
    Prénom 3 : <input type="text" name="firstname3_rent" /><br />
    Date de naissance<sup>*</sup /> : <input type="text" name="birthdate_rent" /><br />
    Lieu de naissance<sup>*</sup /> : <input type="text" name="birthplace_rent" /><br />
    Adresse<sup>*</sup /> : <input type="text" name="address_rent" /><br />
	Téléphone fixe : <input type="text" name="phone_rent" /><br />    
	Téléphone portable<sup>*</sup /> : <input type="text" name="cellphone_rent" /><br />

	
    <br /><b>Informations sur le bien</b /><br />
    Est-il : 
    <select name="type_prod">
   	 <option value="0">NON Meublé</option>
   	 <option value="1">Meublé</option>
	</select><br />
	<!-- Pour l'adresse, il faut ajouter, en plus de faire les distinctions décrites plus haut :
	l'étage, la porte, le bâtiment qui ne sont pas obligatoire -->
	Adresse<sup>*</sup /> : <input type="text" name="address_prod" /><br />
    <!-- Les listes déroulantes, ou les cases à choix multiples, suivantes seront à compléter
    au fur et à mesure de l'expérience gagnée sur le terrain -->
    Type d'habitat<sup>*</sup /> : 
    <select name="type_build_prod">
   	 <option value="0">Immeuble collectif</option>
   	 <option value="1">Immeuble individuel</option>
	</select><br />
	Régime juridique<sup>*</sup /> : 
    <select name="law_build_prod">
   	 <option value="0">Mono propriété</option>
   	 <option value="1">Copropriété</option>
	</select><br />
	Surface habitable au sol<sup>*</sup /> : <input type="text" name="sm_ground_prod" /> m<sup>2</sup><br />
	Surface habitable loi Carrez<sup>*</sup /> : <input type="text" name="sm_carrez_prod" /> m<sup>2</sup><br />
	Nombre de pièces principales<sup>*</sup /> : <input type="text" name="nb_room_prod" /><br />
	Autres parties du logement :<br />
	<input type="checkbox" name="other_part_prod_1" id="case_op_1" /> <label for="case_op_1">Grenier</label><br />
	<input type="checkbox" name="other_part_prod_2" id="case_op_2" /> <label for="case_op_2">Terrasse</label><br />
	<input type="checkbox" name="other_part_prod_3" id="case_op_3" /> <label for="case_op_3">Balcon</label><br />
	<input type="checkbox" name="other_part_prod_4" id="case_op_4" /> <label for="case_op_4">Loggia</label><br />
	<input type="checkbox" name="other_part_prod_5" id="case_op_5" /> <label for="case_op_5">Jardin</label><br />
	Les combles sont-ils aménagés<sup>*</sup /> ? 
	<input type="radio" name="combles_prod" value="oui" id="cp_oui" /> <label for="cp_oui">Oui </label>
	<input type="radio" name="combles_prod" value="non" id="cp_non" /> <label for="cp_non">Non</label><br />
	Equipements de cuisine :<br />
	<input type="checkbox" name="eq_kitchen_prod_1" id="case_ek_1" /> <label for="case_ek_1">Four</label><br />
	<input type="checkbox" name="eq_kitchen_prod_2" id="case_ek_2" /> <label for="case_ek_2">Plaques</label><br />
	<input type="checkbox" name="eq_kitchen_prod_3" id="case_ek_3" /> <label for="case_ek_3">Lave-linge</label><br />
	<input type="checkbox" name="eq_kitchen_prod_4" id="case_ek_4" /> <label for="case_ek_4">Lave-vaisselle</label><br />
	<input type="checkbox" name="eq_kitchen_prod_5" id="case_ek_5" /> <label for="case_ek_5">Frigo</label><br />
	Production de chauffage<sup>*</sup /> :<br />
	<input type="radio" name="heat_prod_prod" value="1" id="hpp1" /> <label for="hpp1">Collectif</label>
	<input type="radio" name="heat_prod_prod" value="2" id="hpp2" /> <label for="hpp2">Individuel gaz</label><br />
	<input type="radio" name="heat_prod_prod" value="3" id="hpp3" /> <label for="hpp3">Individuel électrique</label><br />
	Production d'eau chaude<sup>*</sup /> :<br />
	<input type="radio" name="hotwater_prod_prod" value="1" id="hwpp1" /> <label for="hwpp1">Collectif</label>
	<input type="radio" name="hotwater_prod_prod" value="2" id="hwpp2" /> <label for="hwpp2">Individuel gaz</label><br />
	<input type="radio" name="hotwater_prod_prod" value="3" id="hwpp3" /> <label for="hwpp3">Individuel électrique</label><br />	
	Destination des locaux<sup>*</sup /> :<br />
	<input type="radio" name="dest_prod" value="1" id="dp1" /> <label for="dp1">Usage d'habitation</label>
	<input type="radio" name="dest_prod" value="2" id="dp2" /> <label for="dp2">Usage mixte professionel et d'habitation</label><br />    
	Locaux et équipements accessoires de l'immeuble à usage <u>privatif</u /> du locataire :<br />
	<input type="checkbox" name="private_rent_prod_1" id="case_pr_1" /> <label for="case_pr_1">Cave</label><br />
	<input type="checkbox" name="private_rent_prod_2" id="case_pr_2" /> <label for="case_pr_2">Parking</label><br />
	<input type="checkbox" name="private_rent_prod_3" id="case_pr_3" /> <label for="case_pr_3">Garage</label><br />
    Locaux, parties, équipements et accessoires de l'immeuble à usage <u>commun</u /> :<br />
	<input type="checkbox" name="commun_rent_prod_1" id="case_cr_1" /> <label for="case_cr_1">Garage à vélo</label><br />
	<input type="checkbox" name="commun_rent_prod_2" id="case_cr_2" /> <label for="case_cr_2">Ascenseur</label><br />
	<input type="checkbox" name="commun_rent_prod_3" id="case_cr_3" /> <label for="case_cr_3">Espaces verts</label><br />
	<input type="checkbox" name="commun_rent_prod_4" id="case_cr_4" /> <label for="case_cr_4">Aires et équipements de jeux</label><br />
	<input type="checkbox" name="commun_rent_prod_5" id="case_cr_5" /> <label for="case_cr_5">Laverie</label><br />
	<input type="checkbox" name="commun_rent_prod_6" id="case_cr_6" /> <label for="case_cr_6">Local poubelle</label><br />
	<input type="checkbox" name="commun_rent_prod_7" id="case_cr_7" /> <label for="case_cr_7">Gardiennage</label><br />
	Equipement d’accès aux technologies de l’information et de la communication :<br />
	<input type="checkbox" name="techcomm_rent_prod_1" id="case_tc_1" /> <label for="case_tc_1">Réception de la télévision par une antenne rateau</label><br />
	<input type="checkbox" name="techcomm_rent_prod_2" id="case_tc_2" /> <label for="case_tc_2">Réception de la télévision par le câble </label><br />
	<input type="checkbox" name="techcomm_rent_prod_3" id="case_tc_3" /> <label for="case_tc_3">Réception de la télévision par fibre optique</label><br />
	<input type="checkbox" name="techcomm_rent_prod_4" id="case_tc_4" /> <label for="case_tc_4">Accès internet par réseau ADSL</label><br />
	<input type="checkbox" name="techcomm_rent_prod_5" id="case_tc_5" /> <label for="case_tc_5">Accès internet par réseau fibre optique</label><br />
		
	<br /><b>Informations sur la location du bien</b /><br />
	Le locataire est-il étudiant<sup>*</sup /> ? <!-- On le saura avec la profession indiquée par le locataire, mais le fait d'être ou pas étudiant modifie les modalités du contrat -->
	<input type="radio" name="student_rent" value="oui" id="str_oui" /> <label for="str_oui">Oui </label>
	<input type="radio" name="student_rent" value="non" id="str_non" /> <label for="str_non">Non</label><br />
    Date d'entrée du locataire<sup>*</sup /> : <input type="text" name="startingdate_rent" /><br />
	Loyer initial<sup>*</sup> : <input type="float" name="init_rent_prod" /> €<br />
	Le loyer est-il soumis au décret fixant annuellement le montant maximum d’évolution des loyers à la relocation<sup>*</sup> : 
	<input type="radio" name="submitbylaw_rent" value="oui" id="sbl_oui" /> <label for="sbl_oui">Oui </label>
	<input type="radio" name="submitbylaw_rent" value="non" id="sbl_non" /> <label for="sbl_non">Non</label><br />
	Le loyer est-il soumis au loyer de référence majoré fixé par arrêté préfectoral<sup>*</sup> :
	<input type="radio" name="submitbylaw2_rent" value="oui" id="sbl2_oui" /> <label for="sbl2_oui">Oui </label>
	<input type="radio" name="submitbylaw2_rent" value="non" id="sbl2_non" /> <label for="sbl2_non">Non</label><br />
	Montant du loyer de référence<sup>*</sup> : <input type="text" name="ref_rent_prod" /> € / m<sup>2</sup><br />
	Montant du loyer de référence <u>majoré</u><sup>*</sup> : <input type="text" name="maj_ref_rent_prod" /> € / m<sup>2</sup><br />
	Montant du dernier loyer acquitté par le précédent locataire<sup>**</sup /> : <input type="text" name="last_oldrent_prod" /> €<br />
	Date de versement du dernier loyer acquitté par le précédent locataire<sup>**</sup /> : <input type="text" name="date_oldrent_prod" /><br />
	Date de la dernière révision du loyer<sup>**</sup /> : <input type="text" name="date_lastrev_prod" /><br />
	Date de révision<sup>*</sup> : <input type="text" name="date_rev_prod" /><br /> <!-- C'est peut-être la date de la signature du bail donc ce n'est peut-être pas forcément utile de la demander -->
	Trimestre de référence de l'IRL<sup>*</sup> : <!-- C'est peut-être celui de la signature du bail donc ce n'est peut-être pas forcément utile de la demander -->
	<select name="trim_IRLref_prod">
   	 <option value="1">Premier</option>
   	 <option value="2">Deuxième</option>
   	 <option value="3">Troisième</option>
   	 <option value="4">Quatrième</option>
   	 </select>
	 Année de référence de l'IRL<sup>*</sup> : <input type="text" name="year_IRLref_prod" /><br /> <!-- C'est peut-être celle de la signature du bail donc ce n'est peut-être pas forcément utile de la demander -->
	Montant de la provision sur charge<sup>*</sup> : <input type="float" name="chargprov_rent_prod" /> €<br />
		
    <input type="submit" value="Valider" /> 
    <br /<br /><sup>*</sup> Champs obligatoires
    <br /><sup>**</sup> Champs obligatoire si logement vacant depuis moins de 18 mois.
</p>
</form>

</html>


