<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="CC_AR_NOMCL", columns={"IARCHIVE", "NOMCLAS"}), @ORM\Index(name="CC_IDORIGCRE", columns={"IDORIG", "DHCRE"}), @ORM\Index(name="CC_NOMPRENOM", columns={"NOMFAMILLE", "PRENOM"}), @ORM\Index(name="CC_US_NOMCL", columns={"USCRE", "NOMCLAS"}), @ORM\Index(name="CC_US_RSN", columns={"USCRE", "RAISON_SOCIALE"}), @ORM\Index(name="WDIDX1616747577225", columns={"NOMFAMILLE"}), @ORM\Index(name="WDIDX1616747577226", columns={"NOMCLAS"}), @ORM\Index(name="WDIDX1616747577227", columns={"IDSOCIETE"}), @ORM\Index(name="WDIDX1616747577228", columns={"QT_PRO"}), @ORM\Index(name="WDIDX1616747577229", columns={"DHCRE"}), @ORM\Index(name="WDIDX1616747577230", columns={"DHMOD"}), @ORM\Index(name="WDIDX1616747577231", columns={"RAISON_SOCIALE"}), @ORM\Index(name="WDIDX1616747577232", columns={"CDPAYS"}), @ORM\Index(name="WDIDX1616747577233", columns={"CPOSTAL"}), @ORM\Index(name="WDIDX1616747577234", columns={"VILLE"}), @ORM\Index(name="WDIDX1616747577235", columns={"EMAIL"}), @ORM\Index(name="WDIDX1616747577236", columns={"CDPAYSP"}), @ORM\Index(name="WDIDX1616747577237", columns={"CPOSTALP"}), @ORM\Index(name="WDIDX1616747577238", columns={"VILLEP"}), @ORM\Index(name="WDIDX1616747577239", columns={"EMAILP"}), @ORM\Index(name="WDIDX1616747577240", columns={"SECTEUR_PRO"}), @ORM\Index(name="WDIDX1616747577241", columns={"ID2GENRE_CONTACT"}), @ORM\Index(name="WDIDX1616747577242", columns={"REFEXTERNE"}), @ORM\Index(name="WDIDX1616747577243", columns={"LOGIN"}), @ORM\Index(name="WDIDX1616747577244", columns={"TELRECH"}), @ORM\Index(name="WDIDX1616747577245", columns={"IDFIDEL"})})
 * @ORM\Entity
 */
#[ApiResource()]
class Contact
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDCONTACT", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IBAN", type="string", length=42, nullable=true)
     */
    private $iban = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMFAMILLE", type="string", length=30, nullable=true)
     */
    private $nomfamille = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=20, nullable=true)
     */
    private $prenom = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMFAMILLEYL", type="string", length=30, nullable=true)
     */
    private $nomfamilleyl = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOMYL", type="string", length=20, nullable=true)
     */
    private $prenomyl = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMCLAS", type="string", length=30, nullable=true)
     */
    private $nomclas = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDSOCIETE", type="bigint", nullable=true)
     */
    private $idsociete = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="QT_PRO", type="smallint", nullable=true)
     */
    private $qtPro = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="CTG_CONTACT", type="boolean", nullable=true)
     */
    private $ctgContact;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DHCRE", type="datetime", nullable=true)
     */
    private $dhcre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DTNAISS", type="date", nullable=true)
     */
    private $dtnaiss;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DHMOD", type="datetime", nullable=true)
     */
    private $dhmod;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DTNAISSYL", type="date", nullable=true)
     */
    private $dtnaissyl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDCIVILITE", type="bigint", nullable=true, options={"default"="1"})
     */
    private $idcivilite = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE1", type="string", length=50, nullable=true)
     */
    private $adresse1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE2", type="string", length=50, nullable=true)
     */
    private $adresse2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RAISON_SOCIALE", type="string", length=160, nullable=true)
     */
    private $raisonSociale = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CDPAYS", type="string", length=3, nullable=true, options={"default"="FRA"})
     */
    private $cdpays = 'FRA';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CPOSTAL", type="string", length=9, nullable=true)
     */
    private $cpostal = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="BIC", type="string", length=14, nullable=true)
     */
    private $bic = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TEL1", type="string", length=18, nullable=true)
     */
    private $tel1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLE", type="string", length=30, nullable=true)
     */
    private $ville = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TEL2", type="string", length=18, nullable=true)
     */
    private $tel2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="INFOPORTE", type="string", length=30, nullable=true)
     */
    private $infoporte = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=64, nullable=true)
     */
    private $email = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="WEBSITE", type="string", length=60, nullable=true)
     */
    private $website = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDCIVILITEP", type="smallint", nullable=true)
     */
    private $idcivilitep = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSEP1", type="string", length=50, nullable=true)
     */
    private $adressep1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSEP2", type="string", length=50, nullable=true)
     */
    private $adressep2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CDPAYSP", type="string", length=3, nullable=true)
     */
    private $cdpaysp = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CPOSTALP", type="string", length=9, nullable=true)
     */
    private $cpostalp = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLEP", type="string", length=30, nullable=true)
     */
    private $villep = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="INFOPORTEP", type="string", length=30, nullable=true)
     */
    private $infoportep = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAILP", type="string", length=64, nullable=true)
     */
    private $emailp = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="WEBSITEP", type="string", length=60, nullable=true)
     */
    private $websitep = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELP1", type="string", length=18, nullable=true)
     */
    private $telp1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELP2", type="string", length=18, nullable=true)
     */
    private $telp2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELP3", type="string", length=18, nullable=true)
     */
    private $telp3 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELAUTRE", type="string", length=100, nullable=true)
     */
    private $telautre = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SECTEUR_PRO", type="string", length=50, nullable=true)
     */
    private $secteurPro = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="USDEF_LIB", type="string", length=40, nullable=true)
     */
    private $usdefLib;

    /**
     * @var float|null
     *
     * @ORM\Column(name="USDEF_NUM", type="float", precision=10, scale=0, nullable=true)
     */
    private $usdefNum;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="USDEF_BOO", type="boolean", nullable=true)
     */
    private $usdefBoo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUM_TVA", type="string", length=15, nullable=true)
     */
    private $numTva = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXRAISON_FACT", type="string", length=80, nullable=true)
     */
    private $xxraisonFact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXNOMCLI_FACT", type="string", length=80, nullable=true)
     */
    private $xxnomcliFact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXADRESSE1_FACT", type="string", length=40, nullable=true)
     */
    private $xxadresse1Fact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXADRESSE2_FACT", type="string", length=40, nullable=true)
     */
    private $xxadresse2Fact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXCDPAYS_FACT", type="string", length=3, nullable=true)
     */
    private $xxcdpaysFact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXCPOSTAL_FACT", type="string", length=8, nullable=true)
     */
    private $xxcpostalFact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXVILLE_FACT", type="string", length=30, nullable=true)
     */
    private $xxvilleFact = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXRAISON_LIVR", type="string", length=80, nullable=true)
     */
    private $xxraisonLivr = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXNOMCLI_LIVR", type="string", length=80, nullable=true)
     */
    private $xxnomcliLivr = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXADRESSE1_LIVR", type="string", length=40, nullable=true)
     */
    private $xxadresse1Livr = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXADRESSE2_LIVR", type="string", length=40, nullable=true)
     */
    private $xxadresse2Livr = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXCDPAYS_LIVR", type="string", length=3, nullable=true)
     */
    private $xxcdpaysLivr = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXCPOSTAL_LIVR", type="string", length=8, nullable=true)
     */
    private $xxcpostalLivr = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="XXVILLE_LIVR", type="string", length=30, nullable=true)
     */
    private $xxvilleLivr = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="INSTR_COMMANDE", type="string", length=350, nullable=true)
     */
    private $instrCommande = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="INSTR_FACTURATION", type="string", length=350, nullable=true)
     */
    private $instrFacturation = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="INSTR_LIVRAISON", type="string", length=350, nullable=true)
     */
    private $instrLivraison = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="REGIME_TVACLI", type="smallint", nullable=true)
     */
    private $regimeTvacli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TX_TVACLI", type="float", precision=10, scale=0, nullable=true)
     */
    private $txTvacli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TX_REMISE", type="float", precision=10, scale=0, nullable=true)
     */
    private $txRemise = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NENTREP", type="string", length=30, nullable=true)
     */
    private $nentrep = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODE_APE", type="string", length=5, nullable=true)
     */
    private $codeApe = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID2MODE_PAIEMENT", type="smallint", nullable=true)
     */
    private $id2modePaiement = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDELPMT", type="bigint", nullable=true)
     */
    private $iddelpmt = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIB_BANQUE", type="string", length=20, nullable=true)
     */
    private $libBanque = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MEMO_OPTIONS", type="text", length=0, nullable=true)
     */
    private $memoOptions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COMMENTAIRE", type="text", length=0, nullable=true)
     */
    private $commentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USCRE", type="string", length=3, nullable=true)
     */
    private $uscre = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="USMOD", type="string", length=3, nullable=true)
     */
    private $usmod = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SKYPE", type="string", length=50, nullable=true)
     */
    private $skype = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHOTO", type="blob", length=0, nullable=true)
     */
    private $photo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2GENRE_CONTACT", type="boolean", nullable=true)
     */
    private $id2genreContact = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="FONCTION_PRO", type="string", length=50, nullable=true)
     */
    private $fonctionPro = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_LANG", type="smallint", nullable=true)
     */
    private $cdLang = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="USDEF_DATE", type="date", nullable=true)
     */
    private $usdefDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="USDEF_CBO", type="smallint", nullable=true)
     */
    private $usdefCbo;

    /**
     * @var float|null
     *
     * @ORM\Column(name="LATITUDE", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="LONGITUDE", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="LATITUDEP", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitudep = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="LONGITUDEP", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitudep = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2CDT_FACTUR", type="boolean", nullable=true)
     */
    private $id2cdtFactur = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REFEXTERNE", type="string", length=12, nullable=true)
     */
    private $refexterne = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_DEVISE", type="string", length=3, nullable=true)
     */
    private $cdDevise = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_RESP", type="string", length=3, nullable=true)
     */
    private $usResp = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID2TYP_CLIENT", type="integer", nullable=true)
     */
    private $id2typClient = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IMAIL_BLACKLIST", type="boolean", nullable=true)
     */
    private $imailBlacklist;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IARCHIVE", type="boolean", nullable=true)
     */
    private $iarchive = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IMAIL_ERREUR", type="boolean", nullable=true)
     */
    private $imailErreur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="DISTANCE_SIEGE", type="float", precision=10, scale=0, nullable=true)
     */
    private $distanceSiege = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2ZONE_GEO", type="boolean", nullable=true)
     */
    private $id2zoneGeo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDADR_PERSO", type="integer", nullable=true)
     */
    private $idadrPerso = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDADR_PRO", type="integer", nullable=true)
     */
    private $idadrPro = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDADR_LIVR", type="integer", nullable=true)
     */
    private $idadrLivr = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDARD_FACT", type="integer", nullable=true)
     */
    private $idardFact = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ICLTPRO", type="boolean", nullable=true)
     */
    private $icltpro = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2CDT_LIVR", type="boolean", nullable=true)
     */
    private $id2cdtLivr = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGIN", type="string", length=64, nullable=true)
     */
    private $login = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PASSWORD", type="string", length=12, nullable=true)
     */
    private $password = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMSECUYL", type="string", length=13, nullable=true)
     */
    private $numsecuyl = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IANOM", type="boolean", nullable=true)
     */
    private $ianom = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="RESTRICTIONS", type="boolean", nullable=true)
     */
    private $restrictions = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="TYP_ALERTE", type="boolean", nullable=true)
     */
    private $typAlerte = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEUNAISSYL", type="string", length=36, nullable=true)
     */
    private $lieunaissyl = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEUNAISS", type="string", length=36, nullable=true)
     */
    private $lieunaiss = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2FORME_SOCIALE", type="boolean", nullable=true)
     */
    private $id2formeSociale = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="MTT_CAPITAL", type="bigint", nullable=true, options={"unsigned"=true})
     */
    private $mttCapital = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CDREGION", type="string", length=3, nullable=true)
     */
    private $cdregion = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CDREGIONP", type="string", length=3, nullable=true)
     */
    private $cdregionp = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_NATIO", type="string", length=3, nullable=true)
     */
    private $cdNatio = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_NATIOYL", type="string", length=3, nullable=true)
     */
    private $cdNatioyl = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="TYPTEL3", type="boolean", nullable=true)
     */
    private $typtel3 = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="TYPTEL2", type="boolean", nullable=true)
     */
    private $typtel2 = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="TYPTEL1", type="boolean", nullable=true)
     */
    private $typtel1 = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="TYPTELP1", type="boolean", nullable=true)
     */
    private $typtelp1 = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="TYPTELP2", type="boolean", nullable=true)
     */
    private $typtelp2 = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="TYPTELP3", type="boolean", nullable=true)
     */
    private $typtelp3 = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TX_REMISEMAX", type="float", precision=10, scale=0, nullable=true)
     */
    private $txRemisemax = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMSECU", type="string", length=13, nullable=true)
     */
    private $numsecu = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_PAYSNAISS", type="string", length=3, nullable=true)
     */
    private $cdPaysnaiss = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_PAYSNAISSYL", type="string", length=3, nullable=true)
     */
    private $cdPaysnaissyl = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDTARIF", type="bigint", nullable=true)
     */
    private $idtarif = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDORIG", type="bigint", nullable=true)
     */
    private $idorig = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_ACTION", type="string", length=1, nullable=true)
     */
    private $cdAction = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="AUTHKEY", type="string", length=80, nullable=true)
     */
    private $authkey = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TEL3", type="string", length=18, nullable=true)
     */
    private $tel3 = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IANOMALIE", type="boolean", nullable=true)
     */
    private $ianomalie = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IBLKPIECE", type="boolean", nullable=true)
     */
    private $iblkpiece = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="TYP_CONFID", type="boolean", nullable=true)
     */
    private $typConfid = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="DISTANCE_SIEGEP", type="float", precision=10, scale=0, nullable=true)
     */
    private $distanceSiegep = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2ZONE_GEOP", type="boolean", nullable=true)
     */
    private $id2zoneGeop = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IBLKTRAV", type="boolean", nullable=true)
     */
    private $iblktrav = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELRECH", type="string", length=18, nullable=true)
     */
    private $telrech = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="IDFIDEL", type="string", length=13, nullable=true)
     */
    private $idfidel = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="USDEF_LIB1", type="string", length=40, nullable=true)
     */
    private $usdefLib1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="USDEF_CBO1", type="smallint", nullable=true)
     */
    private $usdefCbo1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="USDEF_BOO1", type="boolean", nullable=true)
     */
    private $usdefBoo1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="USDEF_DATE1", type="date", nullable=true)
     */
    private $usdefDate1;

    /**
     * @var float|null
     *
     * @ORM\Column(name="USDEF_NUM2", type="float", precision=10, scale=0, nullable=true)
     */
    private $usdefNum2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USDEF_LIB2", type="string", length=40, nullable=true)
     */
    private $usdefLib2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="USDEF_CBO2", type="smallint", nullable=true)
     */
    private $usdefCbo2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="USDEF_BOO2", type="boolean", nullable=true)
     */
    private $usdefBoo2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="USDEF_DATE2", type="date", nullable=true)
     */
    private $usdefDate2;

    /**
     * @var float|null
     *
     * @ORM\Column(name="USDEF_NUM3", type="float", precision=10, scale=0, nullable=true)
     */
    private $usdefNum3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USDEF_LIB3", type="string", length=40, nullable=true)
     */
    private $usdefLib3;

    /**
     * @var int|null
     *
     * @ORM\Column(name="USDEF_CBO3", type="smallint", nullable=true)
     */
    private $usdefCbo3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="USDEF_BOO3", type="boolean", nullable=true)
     */
    private $usdefBoo3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="USDEF_DATE3", type="date", nullable=true)
     */
    private $usdefDate3;

    /**
     * @var float|null
     *
     * @ORM\Column(name="USDEF_NUM4", type="float", precision=10, scale=0, nullable=true)
     */
    private $usdefNum4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USDEF_LIB4", type="string", length=40, nullable=true)
     */
    private $usdefLib4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="USDEF_CBO4", type="smallint", nullable=true)
     */
    private $usdefCbo4;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="USDEF_BOO4", type="boolean", nullable=true)
     */
    private $usdefBoo4;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="USDEF_DATE4", type="date", nullable=true)
     */
    private $usdefDate4;

    /**
     * @var float|null
     *
     * @ORM\Column(name="USDEF_NUM5", type="float", precision=10, scale=0, nullable=true)
     */
    private $usdefNum5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USDEF_LIB5", type="string", length=40, nullable=true)
     */
    private $usdefLib5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="USDEF_CBO5", type="smallint", nullable=true)
     */
    private $usdefCbo5;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="USDEF_BOO5", type="boolean", nullable=true)
     */
    private $usdefBoo5;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="USDEF_DATE5", type="date", nullable=true)
     */
    private $usdefDate5;


}
