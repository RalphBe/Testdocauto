<html>
 	<head>
 		<meta charset="utf-8" />
        <title>Contrat</title>
	</head>
	
	<body>
<?php

//Informations Propriétaire
$civ_owner = isset($_POST['civ_owner']) ? $_POST['civ_owner'] : NULL;
$name_owner = $_POST['name_owner'];
$firstname1_owner = $_POST['firstname1_owner'];
$firstname2_owner = $_POST['firstname2_owner'];
$firstname3_owner = $_POST['firstname3_owner'];
$birthdate_owner = $_POST['birthdate_owner'];
$birthplace_owner = $_POST['birthplace_owner'];
$address_owner = $_POST['address_owner'];
$phone_owner = $_POST['phone_owner'];
$cellphone_owner = $_POST['cellphone_owner'];

//Informations Locataire
$civ_rent = isset($_POST['civ_rent']) ? $_POST['civ_rent'] : NULL;
$name_rent = $_POST['name_rent'];
$firstname1_rent = $_POST['firstname1_rent'];
$firstname2_rent = $_POST['firstname2_rent'];
$firstname3_rent = $_POST['firstname3_rent'];
$birthdate_rent = $_POST['birthdate_rent'];
$birthplace_rent = $_POST['birthplace_rent'];
$address_rent = $_POST['address_rent'];
$phone_rent = $_POST['phone_rent'];
$cellphone_rent = $_POST['cellphone_rent'];


//Informations sur le bien
$type_prod = $_POST['type_prod']; //0 = non meublé, 1 = meublé
$address_prod = $_POST['address_prod'];
$type_build_prod = $_POST['type_build_prod'];
if ($type_build_prod == 0) { $type_build_prod = "Immeuble collectif"; } else { $type_build_prod = "Immeuble individuel"; }
$law_build_prod = $_POST['law_build_prod'];
if ($law_build_prod == 0) { $law_build_prod = "Monopropriété"; } else { $law_build_prod = "Copropriété"; }
$sm_ground_prod = $_POST['sm_ground_prod'];
$sm_carrez_prod = $_POST['sm_carrez_prod'];
$nb_room_prod = $_POST['nb_room_prod'];
$other_part_prod_1 = isset($_POST['other_part_prod_1']) ? "Grenier" : NULL;
$other_part_prod_2 = isset($_POST['other_part_prod_2']) ? "Terrasse" : NULL;
$other_part_prod_3 = isset($_POST['other_part_prod_3']) ? "Balcon" : NULL;
$other_part_prod_4 = isset($_POST['other_part_prod_4']) ? "Loggia" : NULL;
$other_part_prod_5 = isset($_POST['other_part_prod_5']) ? "Jardin" : NULL;
$combles_prod = isset($_POST['combles_prod']) ? $_POST['combles_prod'] : NULL; //oui ou non
$eq_kitchen_prod_1 = isset($_POST['eq_kitchen_prod_1']) ? "Four" : NULL;
$eq_kitchen_prod_2 = isset($_POST['eq_kitchen_prod_2']) ? "Plaque" : NULL;
$eq_kitchen_prod_3 = isset($_POST['eq_kitchen_prod_3']) ? "Lave-linge" : NULL;
$eq_kitchen_prod_4 = isset($_POST['eq_kitchen_prod_4']) ? "Lave-vaisselle" : NULL;
$eq_kitchen_prod_5 = isset($_POST['eq_kitchen_prod_5']) ? "Frigo" : NULL;
$heat_prod_prod = isset($_POST['heat_prod_prod']) ? $_POST['heat_prod_prod'] : NULL; //1 : collectif, 2 : indi gaz, 3 : indi elec
if ($heat_prod_prod == 1) { $heat_prod_prod = "Collectif"; } elseif ($heat_prod_prod == 2) { $heat_prod_prod = "Individuel Gaz"; } else { $heat_prod_prod = "Individuel Electrique"; }
$hotwater_prod_prod = isset($_POST['hotwater_prod_prod']) ? $_POST['hotwater_prod_prod'] : NULL; //1 : collectif, 2 : indi gaz, 3 : indi elec
if ($hotwater_prod_prod == 1) { $hotwater_prod_prod = "Collectif"; } elseif ($hotwater_prod_prod == 2) { $hotwater_prod_prod = "Individuel Gaz"; } else { $hotwater_prod_prod = "Individuel Electrique"; }
$dest_prod = isset($_POST['dest_prod']) ? $_POST['dest_prod'] : NULL; //1 : usage habitation, 2 : usage mixte pro+hab
if ($dest_prod == 1){ $dest_prod = "Usage d'habitation"; } else { $dest_prod = "Usage mixte professionnel et d'habitation";}
$private_rent_prod_1 = isset($_POST['private_rent_prod_1']) ? "Cave" : NULL;
$private_rent_prod_2 = isset($_POST['private_rent_prod_2']) ? "Parking" : NULL;
$private_rent_prod_3 = isset($_POST['private_rent_prod_3']) ? "Garage" : NULL;
$commun_rent_prod_1 = isset($_POST['commun_rent_prod_1']) ? "Garage à vélo" : NULL;
$commun_rent_prod_2 = isset($_POST['commun_rent_prod_2']) ? "Ascenseur" : NULL;
$commun_rent_prod_3 = isset($_POST['commun_rent_prod_3']) ? "Espaces Verts" : NULL;
$commun_rent_prod_4 = isset($_POST['commun_rent_prod_4']) ? "Aires et équipements de jeux" : NULL;
$commun_rent_prod_5 = isset($_POST['commun_rent_prod_5']) ? "Laverie" : NULL;
$commun_rent_prod_6 = isset($_POST['commun_rent_prod_6']) ? "Local Poubelle" : NULL;
$commun_rent_prod_7 = isset($_POST['commun_rent_prod_7']) ? "Gardiennage" : NULL;
$techcomm_rent_prod_1 = isset($_POST['techcomm_rent_prod_1']) ? "Réception de la télévision par une antenne rateau" : NULL;
$techcomm_rent_prod_2 = isset($_POST['techcomm_rent_prod_2']) ? "Réception de la télévision par le câble" : NULL;
$techcomm_rent_prod_3 = isset($_POST['techcomm_rent_prod_3']) ? "Réception de la télévision par fibre optique" : NULL;
$techcomm_rent_prod_4 = isset($_POST['techcomm_rent_prod_4']) ? "Accès internet par réseau ADSL" : NULL;
$techcomm_rent_prod_5 = isset($_POST['techcomm_rent_prod_5']) ? "Accès internet par réseau fibre optique" : NULL;

// Informations sur la location du bien
$student_rent = isset($_POST['student_rent']) ? $_POST['student_rent'] : NULL; //oui ou non
$startingdate_rent = $_POST['startingdate_rent'];
$init_rent_prod = $_POST['init_rent_prod'];
$submitbylaw_rent = isset($_POST['submitbylaw_rent']) ? $_POST['submitbylaw_rent'] : NULL; //oui ou non
$submitbylaw2_rent = isset($_POST['submitbylaw2_rent']) ? $_POST['submitbylaw2_rent'] : NULL; //oui ou non
$ref_rent_prod = $_POST['ref_rent_prod'];
$maj_ref_rent_prod = $_POST['maj_ref_rent_prod'];
$last_oldrent_prod = $_POST['last_oldrent_prod'];
$date_oldrent_prod = $_POST['date_oldrent_prod'];
$date_lastrev_prod = $_POST['date_lastrev_prod'];
$date_rev_prod = $_POST['date_rev_prod'];
$trim_IRLref_prod = isset($_POST['trim_IRLref_prod']) ? $_POST['trim_IRLref_prod'] : NULL; // 1, 2, 3 ou 4
$year_IRLref_prod = $_POST['year_IRLref_prod'];
$chargprov_rent_prod = $_POST['chargprov_rent_prod'];
$init_bepaid_prod = $init_rent_prod + $chargprov_rent_prod; // somme du loyer + charge


// Rédaction du contrat à partir des information précédentes
echo "
<p>
Contrat de location ou colocation de logement ";
if ($type_prod == 0) { echo "vide"; } else { echo "meublé" ; }
echo " à usage de résidence principale<br /> 
soumis au titre Ier";
if ($type_prod == 1) { echo "bis"; }
echo " de la loi du 6 juillet 1989 tendant à améliorer les rapports locatifs
</p>

<p>
Le présent contrat de location est applicables aux locations et aux colocations de logement ";
if ($type_prod == 0) { echo "nu"; } else { echo "meublé" ; }
echo " et qui constitue la résidence principale du preneur, à l’exception de :
<br /><br />- Des colocations formalisées par la conclusion de plusieurs contrats entre les locataires et le bailleur";
if ($type_prod == 0) { echo "<br />- Des locations de logements faisant l’objet d’une convention passée en application de l’article L351-2 ou de l’article L321-8 du code de la construction et de l’habitation."; }
echo "<br />- Des locations de logement appartenant à un organisme d’habitation à loyer modéré et faisant l’objet d’une convention passée en application de l’article L.351-2 du code de la construction et de l’habitation.
<br /><br />Le régime de droit commun en matière de baux d’habitation est défini principalement par la loi n°89-462 du 6 juillet 1989 tendant à améliorer les rapports locatifs. L’ensemble de ses dispositions étant d’ordre public, elles s’imposent aux parties qui, en principe, ne peuvent pas y renoncer.
</p>



<p>
DESIGNATION DES PARTIES
<br /><br />Le présent contrat est conclu entre les parties soussignées :
<br />Bailleur(s) :
<br />" . $civ_owner . " " . $name_owner . " " . $firstname1_owner . ", " . $firstname2_owner . ", " . $firstname3_owner . " né";
if ($civ_owner == "Madame") { echo "e"; }
echo " le " . $birthdate_owner . " à " . $birthplace_owner . ", demeurant " . $address_owner . "
<br />Ci-après dénommé le BAILLEUR
<br /><br />Représenté par son mandataire la Société par actions simplifiées LOKI enregistrée au RCS de Paris sous le numéro ***, dont le siège social est sis 27 Rue du Chemin Vert 75011 Paris, carte professionnelle n° ***, délivré à ***

<br /><br />Locataire(s) :
<br />" . $civ_rent . " " . $name_rent . " " . $firstname1_rent . ", " . $firstname2_rent . ", " . $firstname3_rent . " né";
if ($civ_rent == "Madame") { echo "e"; }
echo " le " . $birthdate_rent . " à " . $birthplace_rent . ", demeurant " . $address_rent . "
<br />Ci-après dénommé le LOCATAIRE
</p>



<p>
<br /><br />OBJET DU CONTRAT
<br />Le présent contrat a pour objet la location d’un logement ainsi déterminé :
<br />Consistance du logement 
Localisation du logement  : " . $address_prod . "
<br />Type d’habitat : " . $type_build_prod . "
<br />Régime juridique : " . $law_build_prod . "
<br />Surface habitable :
<br />Au sol : " . $sm_ground_prod . " m<sup>2</sup>
<br />Loi Carrez : " . $sm_carrez_prod . " m<sup>2</sup>
<br />Nombre de pièces principales : " . $nb_room_prod . "
<br />Autres parties du logement : ";
if ($other_part_prod_1 != NULL) { echo "<br />  " . $other_part_prod_1; }
if ($other_part_prod_2 != NULL) { echo "<br />  " . $other_part_prod_2; }
if ($other_part_prod_3 != NULL) { echo "<br />  " . $other_part_prod_3; }
if ($other_part_prod_4 != NULL) { echo "<br />  " . $other_part_prod_4; }
if ($other_part_prod_5 != NULL) { echo "<br />  " . $other_part_prod_5; }
echo "<br />Combles amenagés : " . $combles_prod . "
<br />Eléments d’équipement du logement : ";
if ($eq_kitchen_prod_1 != NULL) { echo "<br />  " . $eq_kitchen_prod_1; }
if ($eq_kitchen_prod_2 != NULL) { echo "<br />  " . $eq_kitchen_prod_2; }
if ($eq_kitchen_prod_3 != NULL) { echo "<br />  " . $eq_kitchen_prod_3; }
if ($eq_kitchen_prod_4 != NULL) { echo "<br />  " . $eq_kitchen_prod_4; }
if ($eq_kitchen_prod_5 != NULL) { echo "<br />  " . $eq_kitchen_prod_5; }
echo "<br />Chauffage : " . $heat_prod_prod . "
<br />Eau chaude : " . $hotwater_prod_prod . "
<br />Destination des locaux : " . $dest_prod . "
<br />Désignation des locaux et équipements accessoires de l’immeuble à usage privatif du locataire : ";
if ($private_rent_prod_1 != NULL) { echo "<br />  " . $private_rent_prod_1; }
if ($private_rent_prod_2 != NULL) { echo "<br />  " . $private_rent_prod_2; }
if ($private_rent_prod_3 != NULL) { echo "<br />  " . $private_rent_prod_3; }
echo "<br />Enumération des locaux, parties, équipements et accessoires de l’immeuble à usage commun : ";
if ($commun_rent_prod_1 != NULL) { echo "<br />  " . $commun_rent_prod_1; }
if ($commun_rent_prod_2 != NULL) { echo "<br />  " . $commun_rent_prod_2; }
if ($commun_rent_prod_3 != NULL) { echo "<br />  " . $commun_rent_prod_3; }
if ($commun_rent_prod_4 != NULL) { echo "<br />  " . $commun_rent_prod_4; }
if ($commun_rent_prod_5 != NULL) { echo "<br />  " . $commun_rent_prod_5; }
if ($commun_rent_prod_6 != NULL) { echo "<br />  " . $commun_rent_prod_6; }
if ($commun_rent_prod_7 != NULL) { echo "<br />  " . $commun_rent_prod_7; }
echo "<br />Equipement d’accès aux technologies de l’information et de la communication : ";
if ($techcomm_rent_prod_1 != NULL) { echo "<br />  " . $techcomm_rent_prod_1; }
if ($techcomm_rent_prod_2 != NULL) { echo "<br />  " . $techcomm_rent_prod_2; }
if ($techcomm_rent_prod_3 != NULL) { echo "<br />  " . $techcomm_rent_prod_3; }
if ($techcomm_rent_prod_4 != NULL) { echo "<br />  " . $techcomm_rent_prod_4; }
if ($techcomm_rent_prod_5 != NULL) { echo "<br />  " . $techcomm_rent_prod_5; }
echo "
</p>

<p>
DATE DE PRISE D’EFFET ET DUREE DU CONTRAT

<br /><br />Date de prise d’effet du contrat : " . $startingdate_rent . "
<br />Durée du contrat : ";

if ($type_prod == 0)
{
echo "3 ans";
}
elseif ($student_rent == "non")
{
echo "1 an";
}
else
{
echo "9 mois";
}

echo "<br /><br />";

if ($type_prod == 0)
{
echo "En l’absence de proposition de renouvellement du contrat, celui-ci est à son terme, 
reconduit tacitement pour 3 ans et dans les mêmes conditions. Le locataire peut mettre fin au bail à tout moment, 
après avoir donné congé. Le bailleur, quant à lui, peut mettre fin au bail à son échéance et après avoir donné 
congé, soit pour reprendre le logement en vue de l’occuper lui-même ou une personne de sa famille, soit pour 
le vendre soit pour un motif légitime et sérieux conformément à l’article 15 de la loi du 6 juillet 1989.";
}
else
{
echo "A l’exception des locations consenties à un étudiant pour une durée de 9 mois, les contrats de 
location de logements meublés sont reconduits tacitement à leur terme pour une durée d’un an et dans 
les mêmes conditions. Le locataire peut mettre fin au bail à tout moment, après avoir donné congé. 
Le bailleur peut, quant à lui, mettre fin au bail à son échéance et après avoir donné congé, soit pour reprendre le 
logement en vue de l’occuper lui-même, ou une personne de sa famille, soit pour le vendre, soit pour un motif sérieux 
et légitime.
<br /><br />Les contrats de locations meublés consenties à un étudiant pour une durée de neuf mois ne sont pas 
reconduits tacitement à leur terme et le locataire peut mettre fin au bail à tout moment, après avoir donné congé. 
Le bailleur peut, quant à lui, mettre fin au bail à son échéance et après avoir donné congé.";
}

echo "</p>

<p>
CONDITIONS FINANCIERES
<p>
Loyer
<br/>Le montant du loyer mensuel initial est de " . $init_rent_prod . " euros 
<br /><br />Modalités particulières de fixation initiale du loyer applicables dans certaines zones 
tendues (zone d’urbanisation continue de plus de 50 000 habitants où il existe un déséquilibre 
marqué entre l’offre et la demande de logements, entrainant des difficultés sérieuses d’accès au 
logement sur l’ensemble du parc résidentiel telles que définies par décret) :
<br />Le loyer du logement objet du présent contrat est soumis au décret fixant annuellement 
le montant maximum d’évolution des loyers à la relocation : " . $submitbylaw_rent . "
<br />Le loyer du logement objet du présent contrat est soumis au loyer de référence majoré 
fixé par arrêté préfectoral : " . $submitbylaw2_rent . "
<br />Montant du loyer de référence : " . $ref_rent_prod . " €/m<sup>2</sup> 
<br />Montant du loyer de référence majoré ". $maj_ref_rent_prod . " €/m<sup>2</sup> 
<br /><br />Informations relatives au loyer du dernier locataire :
<br />Montant du dernier loyer acquitté par le précédent locataire : " . $last_oldrent_prod . " €
<br />Date de versement : " . $date_oldrent_prod . "
<br />Date de la dernière révision du loyer : " . $date_lastrev_prod . "

<br /><br />Modalités de révision  

<br /><br />Date de révision : " . $date_rev_prod . "
<br />Trimestre de référence de l’IRL : " . $trim_IRLref_prod . " / " . $year_IRLref_prod . "
</p>


<p>
Charges récupérables
<br /><br />Modalité de règlement des charges récupérables : provisions sur charges avec régularisation annuelle.
<br />Montant de la provision sur charge : " . $chargprov_rent_prod . " €
<br />Modalités de paiement
<br />Le loyer et les charges sont à régler mensuellement, à terme à échoir, entre le 1er 
et le 5 de chaque mois entre les mains du mandataire la SAS LOKI. Soit un paiement initial 
de " . $init_bepaid_prod . " €
</p>

<p>
Dépôt de garantie
<br /><br />Le montant de garantie versé par le locataire s’élève à " . $init_rent_prod . " €, 
versé le jour de la signature du bail.
</p>

<p>
Clause de solidarité
<br /><br />Il est rappelé qu’à l’égard du bailleur les colocataires sont solidairement 
responsables des obligations stipulées au présent contrat et notamment pour le paiement 
du loyer et des charges. La solidarité prend fin si un congé est adressé par un colocataire 
lors de la tacite reconduction du bail. En cas de congé d’un des colocataires, le bailleur sera 
en droit de refuser la tacite reconduction du bail, en ce qu’il ne bénéficie plus de la solidarité 
de tous les locataires initiaux.   
</p>

<p>
Substitution de colocataires 
<br /><br />Le bailleur n’est pas obligé d’accepter la substitution de colocataires. 
Si le bailleur accepte de substituer le/les colocataires sortant par un/plusieurs nouveaux 
colocataires entrant, les parties signeront un avenant au présent bail à l’occasion duquel 
le bailleur pourra exiger de nouvelles conditions notamment au titre des garanties apportées 
par le/les colocataires entrant, la solidarité du/des colocataires sortant, le montant du loyer etc.  
</p>

<p>
Clause résolutoire
<br /><br />Le présent contrat sera résilié immédiatement et de plein droit si bon semble 
au bailleur, sans qu’il soit besoin de faire ordonner cette résolution en justice :   
<br />Deux mois après un commandement demeuré infructueux à défaut de paiement aux termes 
convenus de tout ou partie du loyer et des charges dûment justifiées ou en cas de non-versement 
du dépôt de garantie éventuellement prévu au contrat.  
<br /><br />Un mois après un commandement demeuré infructueux 
défaut d’assurance contre les risques locatifs ou à défaut de sa justification au bailleur à chaque 
période convenue ou en cas de non-respect de l’une des clauses principales du contrat.
<br /><br />Les frais et honoraires exposés par le bailleur pour la délivrance des commandements ou la mise 
en recouvrement des sommes qui lui sont dues, seront à la charge du locataire, sous réserve de 
l’appréciation des tribunaux, conformément à l’article 700 du code de procédure civile.
<br /><br />Une fois acquis au bailleur le bénéfice de la clause résolutoire, le locataire devra libérer 
immédiatement les lieux. S’il s’y refuse, le bailleur devra préalablement à toute expulsion 
faire constater la résiliation du bail par le juge des référés. Il est expressément convenu 
qu'en cas de paiement par chèque le loyer et les charges ne seront considérés comme réglés 
qu'après encaissement du chèque, la clause résolutoire pouvant être appliquée par le bailleur 
dans le cas où le chèque serait sans provision.  
<br /><br />Tout retard dans le paiement du loyer de ses 
accessoires entraînera une majoration de plein droit de 10% sur le montant des sommes dues, 
en dédommagement du préjudice subi par le bailleur, et ce, sans qu’une mise en demeure soit 
nécessaire, en dérogation à l’article 1230 du Code Civil.  
<br /><br />Si le locataire déchu de tout droit 
d’occupation ne libère pas les lieux, résiste à une ordonnance d’expulsion ou obtient des délais 
pour son départ, il devra verser par jour de retard, outre les charges, une indemnité conventionnelle 
d’occupation égale à deux fois le loyer quotidien, ceci jusqu’à complet déménagement et la restitution des clés. 
<br /><br />Cette indemnité est destinée à dédommager le bailleur du préjudice provoqué par l’occupation 
abusive des lieux loués qui fait obstacle à l’exercice des droits du bailleur.
</p>

<p>
Date de signature
<br /><br />Lieu de la signature
<br /><br />Signatures : Locataire(s)    <br /><br /><br /><br /><br /><br />Bailleur(s) ou mandataire
<br /><br /><br /><br /><br /><br /><br /><br /></p>

<p>
Documents annexes : 
<br /><br />- Un extrait du règlement concernant la destination de l’immeuble, la jouissance et l’usage des parties privatives et communes, et précisant la quote-part afférente au lot loué dans chacune des catégories de charges
<br /><br />- Un dossier de diagnostic technique comprenant 
<br /><br />- Un diagnostic de performance énergétique
<br /><br />- Un constat de risque d’exposition au plomb pour les immeubles construits avant le 1er janvier 1949
<br /><br />- Une copie d’un état mentionnant l’absence ou la présence de matériaux ou de produits de la construction contenant de l’amiante
<br /><br />- Un état de l’installation intérieure d’électricité et de gaz, dont l’objet est d’évaluer les risques pouvant porter atteinte à la sécurité des personnes
<br /><br />- Le cas échéant, un état des risques naturels et technologiques pour les zones couvertes par un plan de prévention des risques technologiques ou par un plan de prévention des risques naturels prévisibles, prescrit ou approuvé, ou dans des zones de sismicité (voir arrêté préfectoral)
<br /><br />- Une notice d’informations relative aux droits et obligations des locataires et des bailleurs";

if ($type_prod == 0)
{
echo "<br /><br />- Un état des lieux (établi lors de la remise des clés dont la date peut être ultérieure à la conclusion du contrat)";
}
else
{
echo "<br /><br />- Un état des lieux (établi lors de la remise des clés dont la date peut être ultérieure à la conclusion du contrat), un inventaire et un état détaillé du mobilier";
}

echo "</p>

";

?>

	</body>
</html>
