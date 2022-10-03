<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
/**
 * Contact
 *
 * @ORM\Table(name="contact", indexes={@ORM\Index(name="CC_AR_NOMCL", columns={"IARCHIVE", "NOMCLAS"}), @ORM\Index(name="CC_IDORIGCRE", columns={"IDORIG", "DHCRE"}), @ORM\Index(name="CC_NOMPRENOM", columns={"NOMFAMILLE", "PRENOM"}), @ORM\Index(name="CC_US_NOMCL", columns={"USCRE", "NOMCLAS"}), @ORM\Index(name="CC_US_RSN", columns={"USCRE", "RAISON_SOCIALE"}), @ORM\Index(name="WDIDX1616747577225", columns={"NOMFAMILLE"}), @ORM\Index(name="WDIDX1616747577226", columns={"NOMCLAS"}), @ORM\Index(name="WDIDX1616747577227", columns={"IDSOCIETE"}), @ORM\Index(name="WDIDX1616747577228", columns={"QT_PRO"}), @ORM\Index(name="WDIDX1616747577229", columns={"DHCRE"}), @ORM\Index(name="WDIDX1616747577230", columns={"DHMOD"}), @ORM\Index(name="WDIDX1616747577231", columns={"RAISON_SOCIALE"}), @ORM\Index(name="WDIDX1616747577232", columns={"CDPAYS"}), @ORM\Index(name="WDIDX1616747577233", columns={"CPOSTAL"}), @ORM\Index(name="WDIDX1616747577234", columns={"VILLE"}), @ORM\Index(name="WDIDX1616747577235", columns={"EMAIL"}), @ORM\Index(name="WDIDX1616747577236", columns={"CDPAYSP"}), @ORM\Index(name="WDIDX1616747577237", columns={"CPOSTALP"}), @ORM\Index(name="WDIDX1616747577238", columns={"VILLEP"}), @ORM\Index(name="WDIDX1616747577239", columns={"EMAILP"}), @ORM\Index(name="WDIDX1616747577240", columns={"SECTEUR_PRO"}), @ORM\Index(name="WDIDX1616747577241", columns={"ID2GENRE_CONTACT"}), @ORM\Index(name="WDIDX1616747577242", columns={"REFEXTERNE"}), @ORM\Index(name="WDIDX1616747577243", columns={"LOGIN"}), @ORM\Index(name="WDIDX1616747577244", columns={"TELRECH"}), @ORM\Index(name="WDIDX1616747577245", columns={"IDFIDEL"})})
 * @ORM\Entity
 */
#[ApiResource(operations: [
    new Get(
        uriTemplate: '/contacts'
    ),
    new Get(
        uriTemplate: '/contacts/{id}'
    )
])]
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

    public function getIdcontact(): ?string
    {
        return $this->idcontact;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getNomfamille(): ?string
    {
        return $this->nomfamille;
    }

    public function setNomfamille(?string $nomfamille): self
    {
        $this->nomfamille = $nomfamille;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNomfamilleyl(): ?string
    {
        return $this->nomfamilleyl;
    }

    public function setNomfamilleyl(?string $nomfamilleyl): self
    {
        $this->nomfamilleyl = $nomfamilleyl;

        return $this;
    }

    public function getPrenomyl(): ?string
    {
        return $this->prenomyl;
    }

    public function setPrenomyl(?string $prenomyl): self
    {
        $this->prenomyl = $prenomyl;

        return $this;
    }

    public function getNomclas(): ?string
    {
        return $this->nomclas;
    }

    public function setNomclas(?string $nomclas): self
    {
        $this->nomclas = $nomclas;

        return $this;
    }

    public function getIdsociete(): ?string
    {
        return $this->idsociete;
    }

    public function setIdsociete(?string $idsociete): self
    {
        $this->idsociete = $idsociete;

        return $this;
    }

    public function getQtPro(): ?int
    {
        return $this->qtPro;
    }

    public function setQtPro(?int $qtPro): self
    {
        $this->qtPro = $qtPro;

        return $this;
    }

    public function isCtgContact(): ?bool
    {
        return $this->ctgContact;
    }

    public function setCtgContact(?bool $ctgContact): self
    {
        $this->ctgContact = $ctgContact;

        return $this;
    }

    public function getDhcre(): ?\DateTimeInterface
    {
        return $this->dhcre;
    }

    public function setDhcre(?\DateTimeInterface $dhcre): self
    {
        $this->dhcre = $dhcre;

        return $this;
    }

    public function getDtnaiss(): ?\DateTimeInterface
    {
        return $this->dtnaiss;
    }

    public function setDtnaiss(?\DateTimeInterface $dtnaiss): self
    {
        $this->dtnaiss = $dtnaiss;

        return $this;
    }

    public function getDhmod(): ?\DateTimeInterface
    {
        return $this->dhmod;
    }

    public function setDhmod(?\DateTimeInterface $dhmod): self
    {
        $this->dhmod = $dhmod;

        return $this;
    }

    public function getDtnaissyl(): ?\DateTimeInterface
    {
        return $this->dtnaissyl;
    }

    public function setDtnaissyl(?\DateTimeInterface $dtnaissyl): self
    {
        $this->dtnaissyl = $dtnaissyl;

        return $this;
    }

    public function getIdcivilite(): ?string
    {
        return $this->idcivilite;
    }

    public function setIdcivilite(?string $idcivilite): self
    {
        $this->idcivilite = $idcivilite;

        return $this;
    }

    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }

    public function setAdresse1(?string $adresse1): self
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }

    public function setAdresse2(?string $adresse2): self
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(?string $raisonSociale): self
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getCdpays(): ?string
    {
        return $this->cdpays;
    }

    public function setCdpays(?string $cdpays): self
    {
        $this->cdpays = $cdpays;

        return $this;
    }

    public function getCpostal(): ?string
    {
        return $this->cpostal;
    }

    public function setCpostal(?string $cpostal): self
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->tel1;
    }

    public function setTel1(?string $tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(?string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getInfoporte(): ?string
    {
        return $this->infoporte;
    }

    public function setInfoporte(?string $infoporte): self
    {
        $this->infoporte = $infoporte;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getIdcivilitep(): ?int
    {
        return $this->idcivilitep;
    }

    public function setIdcivilitep(?int $idcivilitep): self
    {
        $this->idcivilitep = $idcivilitep;

        return $this;
    }

    public function getAdressep1(): ?string
    {
        return $this->adressep1;
    }

    public function setAdressep1(?string $adressep1): self
    {
        $this->adressep1 = $adressep1;

        return $this;
    }

    public function getAdressep2(): ?string
    {
        return $this->adressep2;
    }

    public function setAdressep2(?string $adressep2): self
    {
        $this->adressep2 = $adressep2;

        return $this;
    }

    public function getCdpaysp(): ?string
    {
        return $this->cdpaysp;
    }

    public function setCdpaysp(?string $cdpaysp): self
    {
        $this->cdpaysp = $cdpaysp;

        return $this;
    }

    public function getCpostalp(): ?string
    {
        return $this->cpostalp;
    }

    public function setCpostalp(?string $cpostalp): self
    {
        $this->cpostalp = $cpostalp;

        return $this;
    }

    public function getVillep(): ?string
    {
        return $this->villep;
    }

    public function setVillep(?string $villep): self
    {
        $this->villep = $villep;

        return $this;
    }

    public function getInfoportep(): ?string
    {
        return $this->infoportep;
    }

    public function setInfoportep(?string $infoportep): self
    {
        $this->infoportep = $infoportep;

        return $this;
    }

    public function getEmailp(): ?string
    {
        return $this->emailp;
    }

    public function setEmailp(?string $emailp): self
    {
        $this->emailp = $emailp;

        return $this;
    }

    public function getWebsitep(): ?string
    {
        return $this->websitep;
    }

    public function setWebsitep(?string $websitep): self
    {
        $this->websitep = $websitep;

        return $this;
    }

    public function getTelp1(): ?string
    {
        return $this->telp1;
    }

    public function setTelp1(?string $telp1): self
    {
        $this->telp1 = $telp1;

        return $this;
    }

    public function getTelp2(): ?string
    {
        return $this->telp2;
    }

    public function setTelp2(?string $telp2): self
    {
        $this->telp2 = $telp2;

        return $this;
    }

    public function getTelp3(): ?string
    {
        return $this->telp3;
    }

    public function setTelp3(?string $telp3): self
    {
        $this->telp3 = $telp3;

        return $this;
    }

    public function getTelautre(): ?string
    {
        return $this->telautre;
    }

    public function setTelautre(?string $telautre): self
    {
        $this->telautre = $telautre;

        return $this;
    }

    public function getSecteurPro(): ?string
    {
        return $this->secteurPro;
    }

    public function setSecteurPro(?string $secteurPro): self
    {
        $this->secteurPro = $secteurPro;

        return $this;
    }

    public function getUsdefLib(): ?string
    {
        return $this->usdefLib;
    }

    public function setUsdefLib(?string $usdefLib): self
    {
        $this->usdefLib = $usdefLib;

        return $this;
    }

    public function getUsdefNum(): ?float
    {
        return $this->usdefNum;
    }

    public function setUsdefNum(?float $usdefNum): self
    {
        $this->usdefNum = $usdefNum;

        return $this;
    }

    public function isUsdefBoo(): ?bool
    {
        return $this->usdefBoo;
    }

    public function setUsdefBoo(?bool $usdefBoo): self
    {
        $this->usdefBoo = $usdefBoo;

        return $this;
    }

    public function getNumTva(): ?string
    {
        return $this->numTva;
    }

    public function setNumTva(?string $numTva): self
    {
        $this->numTva = $numTva;

        return $this;
    }

    public function getXxraisonFact(): ?string
    {
        return $this->xxraisonFact;
    }

    public function setXxraisonFact(?string $xxraisonFact): self
    {
        $this->xxraisonFact = $xxraisonFact;

        return $this;
    }

    public function getXxnomcliFact(): ?string
    {
        return $this->xxnomcliFact;
    }

    public function setXxnomcliFact(?string $xxnomcliFact): self
    {
        $this->xxnomcliFact = $xxnomcliFact;

        return $this;
    }

    public function getXxadresse1Fact(): ?string
    {
        return $this->xxadresse1Fact;
    }

    public function setXxadresse1Fact(?string $xxadresse1Fact): self
    {
        $this->xxadresse1Fact = $xxadresse1Fact;

        return $this;
    }

    public function getXxadresse2Fact(): ?string
    {
        return $this->xxadresse2Fact;
    }

    public function setXxadresse2Fact(?string $xxadresse2Fact): self
    {
        $this->xxadresse2Fact = $xxadresse2Fact;

        return $this;
    }

    public function getXxcdpaysFact(): ?string
    {
        return $this->xxcdpaysFact;
    }

    public function setXxcdpaysFact(?string $xxcdpaysFact): self
    {
        $this->xxcdpaysFact = $xxcdpaysFact;

        return $this;
    }

    public function getXxcpostalFact(): ?string
    {
        return $this->xxcpostalFact;
    }

    public function setXxcpostalFact(?string $xxcpostalFact): self
    {
        $this->xxcpostalFact = $xxcpostalFact;

        return $this;
    }

    public function getXxvilleFact(): ?string
    {
        return $this->xxvilleFact;
    }

    public function setXxvilleFact(?string $xxvilleFact): self
    {
        $this->xxvilleFact = $xxvilleFact;

        return $this;
    }

    public function getXxraisonLivr(): ?string
    {
        return $this->xxraisonLivr;
    }

    public function setXxraisonLivr(?string $xxraisonLivr): self
    {
        $this->xxraisonLivr = $xxraisonLivr;

        return $this;
    }

    public function getXxnomcliLivr(): ?string
    {
        return $this->xxnomcliLivr;
    }

    public function setXxnomcliLivr(?string $xxnomcliLivr): self
    {
        $this->xxnomcliLivr = $xxnomcliLivr;

        return $this;
    }

    public function getXxadresse1Livr(): ?string
    {
        return $this->xxadresse1Livr;
    }

    public function setXxadresse1Livr(?string $xxadresse1Livr): self
    {
        $this->xxadresse1Livr = $xxadresse1Livr;

        return $this;
    }

    public function getXxadresse2Livr(): ?string
    {
        return $this->xxadresse2Livr;
    }

    public function setXxadresse2Livr(?string $xxadresse2Livr): self
    {
        $this->xxadresse2Livr = $xxadresse2Livr;

        return $this;
    }

    public function getXxcdpaysLivr(): ?string
    {
        return $this->xxcdpaysLivr;
    }

    public function setXxcdpaysLivr(?string $xxcdpaysLivr): self
    {
        $this->xxcdpaysLivr = $xxcdpaysLivr;

        return $this;
    }

    public function getXxcpostalLivr(): ?string
    {
        return $this->xxcpostalLivr;
    }

    public function setXxcpostalLivr(?string $xxcpostalLivr): self
    {
        $this->xxcpostalLivr = $xxcpostalLivr;

        return $this;
    }

    public function getXxvilleLivr(): ?string
    {
        return $this->xxvilleLivr;
    }

    public function setXxvilleLivr(?string $xxvilleLivr): self
    {
        $this->xxvilleLivr = $xxvilleLivr;

        return $this;
    }

    public function getInstrCommande(): ?string
    {
        return $this->instrCommande;
    }

    public function setInstrCommande(?string $instrCommande): self
    {
        $this->instrCommande = $instrCommande;

        return $this;
    }

    public function getInstrFacturation(): ?string
    {
        return $this->instrFacturation;
    }

    public function setInstrFacturation(?string $instrFacturation): self
    {
        $this->instrFacturation = $instrFacturation;

        return $this;
    }

    public function getInstrLivraison(): ?string
    {
        return $this->instrLivraison;
    }

    public function setInstrLivraison(?string $instrLivraison): self
    {
        $this->instrLivraison = $instrLivraison;

        return $this;
    }

    public function getRegimeTvacli(): ?int
    {
        return $this->regimeTvacli;
    }

    public function setRegimeTvacli(?int $regimeTvacli): self
    {
        $this->regimeTvacli = $regimeTvacli;

        return $this;
    }

    public function getTxTvacli(): ?float
    {
        return $this->txTvacli;
    }

    public function setTxTvacli(?float $txTvacli): self
    {
        $this->txTvacli = $txTvacli;

        return $this;
    }

    public function getTxRemise(): ?float
    {
        return $this->txRemise;
    }

    public function setTxRemise(?float $txRemise): self
    {
        $this->txRemise = $txRemise;

        return $this;
    }

    public function getNentrep(): ?string
    {
        return $this->nentrep;
    }

    public function setNentrep(?string $nentrep): self
    {
        $this->nentrep = $nentrep;

        return $this;
    }

    public function getCodeApe(): ?string
    {
        return $this->codeApe;
    }

    public function setCodeApe(?string $codeApe): self
    {
        $this->codeApe = $codeApe;

        return $this;
    }

    public function getId2modePaiement(): ?int
    {
        return $this->id2modePaiement;
    }

    public function setId2modePaiement(?int $id2modePaiement): self
    {
        $this->id2modePaiement = $id2modePaiement;

        return $this;
    }

    public function getIddelpmt(): ?string
    {
        return $this->iddelpmt;
    }

    public function setIddelpmt(?string $iddelpmt): self
    {
        $this->iddelpmt = $iddelpmt;

        return $this;
    }

    public function getLibBanque(): ?string
    {
        return $this->libBanque;
    }

    public function setLibBanque(?string $libBanque): self
    {
        $this->libBanque = $libBanque;

        return $this;
    }

    public function getMemoOptions(): ?string
    {
        return $this->memoOptions;
    }

    public function setMemoOptions(?string $memoOptions): self
    {
        $this->memoOptions = $memoOptions;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getUscre(): ?string
    {
        return $this->uscre;
    }

    public function setUscre(?string $uscre): self
    {
        $this->uscre = $uscre;

        return $this;
    }

    public function getUsmod(): ?string
    {
        return $this->usmod;
    }

    public function setUsmod(?string $usmod): self
    {
        $this->usmod = $usmod;

        return $this;
    }

    public function getSkype(): ?string
    {
        return $this->skype;
    }

    public function setSkype(?string $skype): self
    {
        $this->skype = $skype;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function isId2genreContact(): ?bool
    {
        return $this->id2genreContact;
    }

    public function setId2genreContact(?bool $id2genreContact): self
    {
        $this->id2genreContact = $id2genreContact;

        return $this;
    }

    public function getFonctionPro(): ?string
    {
        return $this->fonctionPro;
    }

    public function setFonctionPro(?string $fonctionPro): self
    {
        $this->fonctionPro = $fonctionPro;

        return $this;
    }

    public function getCdLang(): ?int
    {
        return $this->cdLang;
    }

    public function setCdLang(?int $cdLang): self
    {
        $this->cdLang = $cdLang;

        return $this;
    }

    public function getUsdefDate(): ?\DateTimeInterface
    {
        return $this->usdefDate;
    }

    public function setUsdefDate(?\DateTimeInterface $usdefDate): self
    {
        $this->usdefDate = $usdefDate;

        return $this;
    }

    public function getUsdefCbo(): ?int
    {
        return $this->usdefCbo;
    }

    public function setUsdefCbo(?int $usdefCbo): self
    {
        $this->usdefCbo = $usdefCbo;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitudep(): ?float
    {
        return $this->latitudep;
    }

    public function setLatitudep(?float $latitudep): self
    {
        $this->latitudep = $latitudep;

        return $this;
    }

    public function getLongitudep(): ?float
    {
        return $this->longitudep;
    }

    public function setLongitudep(?float $longitudep): self
    {
        $this->longitudep = $longitudep;

        return $this;
    }

    public function isId2cdtFactur(): ?bool
    {
        return $this->id2cdtFactur;
    }

    public function setId2cdtFactur(?bool $id2cdtFactur): self
    {
        $this->id2cdtFactur = $id2cdtFactur;

        return $this;
    }

    public function getRefexterne(): ?string
    {
        return $this->refexterne;
    }

    public function setRefexterne(?string $refexterne): self
    {
        $this->refexterne = $refexterne;

        return $this;
    }

    public function getCdDevise(): ?string
    {
        return $this->cdDevise;
    }

    public function setCdDevise(?string $cdDevise): self
    {
        $this->cdDevise = $cdDevise;

        return $this;
    }

    public function getUsResp(): ?string
    {
        return $this->usResp;
    }

    public function setUsResp(?string $usResp): self
    {
        $this->usResp = $usResp;

        return $this;
    }

    public function getId2typClient(): ?int
    {
        return $this->id2typClient;
    }

    public function setId2typClient(?int $id2typClient): self
    {
        $this->id2typClient = $id2typClient;

        return $this;
    }

    public function isImailBlacklist(): ?bool
    {
        return $this->imailBlacklist;
    }

    public function setImailBlacklist(?bool $imailBlacklist): self
    {
        $this->imailBlacklist = $imailBlacklist;

        return $this;
    }

    public function isIarchive(): ?bool
    {
        return $this->iarchive;
    }

    public function setIarchive(?bool $iarchive): self
    {
        $this->iarchive = $iarchive;

        return $this;
    }

    public function isImailErreur(): ?bool
    {
        return $this->imailErreur;
    }

    public function setImailErreur(?bool $imailErreur): self
    {
        $this->imailErreur = $imailErreur;

        return $this;
    }

    public function getDistanceSiege(): ?float
    {
        return $this->distanceSiege;
    }

    public function setDistanceSiege(?float $distanceSiege): self
    {
        $this->distanceSiege = $distanceSiege;

        return $this;
    }

    public function isId2zoneGeo(): ?bool
    {
        return $this->id2zoneGeo;
    }

    public function setId2zoneGeo(?bool $id2zoneGeo): self
    {
        $this->id2zoneGeo = $id2zoneGeo;

        return $this;
    }

    public function getIdadrPerso(): ?int
    {
        return $this->idadrPerso;
    }

    public function setIdadrPerso(?int $idadrPerso): self
    {
        $this->idadrPerso = $idadrPerso;

        return $this;
    }

    public function getIdadrPro(): ?int
    {
        return $this->idadrPro;
    }

    public function setIdadrPro(?int $idadrPro): self
    {
        $this->idadrPro = $idadrPro;

        return $this;
    }

    public function getIdadrLivr(): ?int
    {
        return $this->idadrLivr;
    }

    public function setIdadrLivr(?int $idadrLivr): self
    {
        $this->idadrLivr = $idadrLivr;

        return $this;
    }

    public function getIdardFact(): ?int
    {
        return $this->idardFact;
    }

    public function setIdardFact(?int $idardFact): self
    {
        $this->idardFact = $idardFact;

        return $this;
    }

    public function isIcltpro(): ?bool
    {
        return $this->icltpro;
    }

    public function setIcltpro(?bool $icltpro): self
    {
        $this->icltpro = $icltpro;

        return $this;
    }

    public function isId2cdtLivr(): ?bool
    {
        return $this->id2cdtLivr;
    }

    public function setId2cdtLivr(?bool $id2cdtLivr): self
    {
        $this->id2cdtLivr = $id2cdtLivr;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNumsecuyl(): ?string
    {
        return $this->numsecuyl;
    }

    public function setNumsecuyl(?string $numsecuyl): self
    {
        $this->numsecuyl = $numsecuyl;

        return $this;
    }

    public function isIanom(): ?bool
    {
        return $this->ianom;
    }

    public function setIanom(?bool $ianom): self
    {
        $this->ianom = $ianom;

        return $this;
    }

    public function isRestrictions(): ?bool
    {
        return $this->restrictions;
    }

    public function setRestrictions(?bool $restrictions): self
    {
        $this->restrictions = $restrictions;

        return $this;
    }

    public function isTypAlerte(): ?bool
    {
        return $this->typAlerte;
    }

    public function setTypAlerte(?bool $typAlerte): self
    {
        $this->typAlerte = $typAlerte;

        return $this;
    }

    public function getLieunaissyl(): ?string
    {
        return $this->lieunaissyl;
    }

    public function setLieunaissyl(?string $lieunaissyl): self
    {
        $this->lieunaissyl = $lieunaissyl;

        return $this;
    }

    public function getLieunaiss(): ?string
    {
        return $this->lieunaiss;
    }

    public function setLieunaiss(?string $lieunaiss): self
    {
        $this->lieunaiss = $lieunaiss;

        return $this;
    }

    public function isId2formeSociale(): ?bool
    {
        return $this->id2formeSociale;
    }

    public function setId2formeSociale(?bool $id2formeSociale): self
    {
        $this->id2formeSociale = $id2formeSociale;

        return $this;
    }

    public function getMttCapital(): ?string
    {
        return $this->mttCapital;
    }

    public function setMttCapital(?string $mttCapital): self
    {
        $this->mttCapital = $mttCapital;

        return $this;
    }

    public function getCdregion(): ?string
    {
        return $this->cdregion;
    }

    public function setCdregion(?string $cdregion): self
    {
        $this->cdregion = $cdregion;

        return $this;
    }

    public function getCdregionp(): ?string
    {
        return $this->cdregionp;
    }

    public function setCdregionp(?string $cdregionp): self
    {
        $this->cdregionp = $cdregionp;

        return $this;
    }

    public function getCdNatio(): ?string
    {
        return $this->cdNatio;
    }

    public function setCdNatio(?string $cdNatio): self
    {
        $this->cdNatio = $cdNatio;

        return $this;
    }

    public function getCdNatioyl(): ?string
    {
        return $this->cdNatioyl;
    }

    public function setCdNatioyl(?string $cdNatioyl): self
    {
        $this->cdNatioyl = $cdNatioyl;

        return $this;
    }

    public function isTyptel3(): ?bool
    {
        return $this->typtel3;
    }

    public function setTyptel3(?bool $typtel3): self
    {
        $this->typtel3 = $typtel3;

        return $this;
    }

    public function isTyptel2(): ?bool
    {
        return $this->typtel2;
    }

    public function setTyptel2(?bool $typtel2): self
    {
        $this->typtel2 = $typtel2;

        return $this;
    }

    public function isTyptel1(): ?bool
    {
        return $this->typtel1;
    }

    public function setTyptel1(?bool $typtel1): self
    {
        $this->typtel1 = $typtel1;

        return $this;
    }

    public function isTyptelp1(): ?bool
    {
        return $this->typtelp1;
    }

    public function setTyptelp1(?bool $typtelp1): self
    {
        $this->typtelp1 = $typtelp1;

        return $this;
    }

    public function isTyptelp2(): ?bool
    {
        return $this->typtelp2;
    }

    public function setTyptelp2(?bool $typtelp2): self
    {
        $this->typtelp2 = $typtelp2;

        return $this;
    }

    public function isTyptelp3(): ?bool
    {
        return $this->typtelp3;
    }

    public function setTyptelp3(?bool $typtelp3): self
    {
        $this->typtelp3 = $typtelp3;

        return $this;
    }

    public function getTxRemisemax(): ?float
    {
        return $this->txRemisemax;
    }

    public function setTxRemisemax(?float $txRemisemax): self
    {
        $this->txRemisemax = $txRemisemax;

        return $this;
    }

    public function getNumsecu(): ?string
    {
        return $this->numsecu;
    }

    public function setNumsecu(?string $numsecu): self
    {
        $this->numsecu = $numsecu;

        return $this;
    }

    public function getCdPaysnaiss(): ?string
    {
        return $this->cdPaysnaiss;
    }

    public function setCdPaysnaiss(?string $cdPaysnaiss): self
    {
        $this->cdPaysnaiss = $cdPaysnaiss;

        return $this;
    }

    public function getCdPaysnaissyl(): ?string
    {
        return $this->cdPaysnaissyl;
    }

    public function setCdPaysnaissyl(?string $cdPaysnaissyl): self
    {
        $this->cdPaysnaissyl = $cdPaysnaissyl;

        return $this;
    }

    public function getIdtarif(): ?string
    {
        return $this->idtarif;
    }

    public function setIdtarif(?string $idtarif): self
    {
        $this->idtarif = $idtarif;

        return $this;
    }

    public function getIdorig(): ?string
    {
        return $this->idorig;
    }

    public function setIdorig(?string $idorig): self
    {
        $this->idorig = $idorig;

        return $this;
    }

    public function getCdAction(): ?string
    {
        return $this->cdAction;
    }

    public function setCdAction(?string $cdAction): self
    {
        $this->cdAction = $cdAction;

        return $this;
    }

    public function getAuthkey(): ?string
    {
        return $this->authkey;
    }

    public function setAuthkey(?string $authkey): self
    {
        $this->authkey = $authkey;

        return $this;
    }

    public function getTel3(): ?string
    {
        return $this->tel3;
    }

    public function setTel3(?string $tel3): self
    {
        $this->tel3 = $tel3;

        return $this;
    }

    public function isIanomalie(): ?bool
    {
        return $this->ianomalie;
    }

    public function setIanomalie(?bool $ianomalie): self
    {
        $this->ianomalie = $ianomalie;

        return $this;
    }

    public function isIblkpiece(): ?bool
    {
        return $this->iblkpiece;
    }

    public function setIblkpiece(?bool $iblkpiece): self
    {
        $this->iblkpiece = $iblkpiece;

        return $this;
    }

    public function isTypConfid(): ?bool
    {
        return $this->typConfid;
    }

    public function setTypConfid(?bool $typConfid): self
    {
        $this->typConfid = $typConfid;

        return $this;
    }

    public function getDistanceSiegep(): ?float
    {
        return $this->distanceSiegep;
    }

    public function setDistanceSiegep(?float $distanceSiegep): self
    {
        $this->distanceSiegep = $distanceSiegep;

        return $this;
    }

    public function isId2zoneGeop(): ?bool
    {
        return $this->id2zoneGeop;
    }

    public function setId2zoneGeop(?bool $id2zoneGeop): self
    {
        $this->id2zoneGeop = $id2zoneGeop;

        return $this;
    }

    public function isIblktrav(): ?bool
    {
        return $this->iblktrav;
    }

    public function setIblktrav(?bool $iblktrav): self
    {
        $this->iblktrav = $iblktrav;

        return $this;
    }

    public function getTelrech(): ?string
    {
        return $this->telrech;
    }

    public function setTelrech(?string $telrech): self
    {
        $this->telrech = $telrech;

        return $this;
    }

    public function getIdfidel(): ?string
    {
        return $this->idfidel;
    }

    public function setIdfidel(?string $idfidel): self
    {
        $this->idfidel = $idfidel;

        return $this;
    }

    public function getUsdefLib1(): ?string
    {
        return $this->usdefLib1;
    }

    public function setUsdefLib1(?string $usdefLib1): self
    {
        $this->usdefLib1 = $usdefLib1;

        return $this;
    }

    public function getUsdefCbo1(): ?int
    {
        return $this->usdefCbo1;
    }

    public function setUsdefCbo1(?int $usdefCbo1): self
    {
        $this->usdefCbo1 = $usdefCbo1;

        return $this;
    }

    public function isUsdefBoo1(): ?bool
    {
        return $this->usdefBoo1;
    }

    public function setUsdefBoo1(?bool $usdefBoo1): self
    {
        $this->usdefBoo1 = $usdefBoo1;

        return $this;
    }

    public function getUsdefDate1(): ?\DateTimeInterface
    {
        return $this->usdefDate1;
    }

    public function setUsdefDate1(?\DateTimeInterface $usdefDate1): self
    {
        $this->usdefDate1 = $usdefDate1;

        return $this;
    }

    public function getUsdefNum2(): ?float
    {
        return $this->usdefNum2;
    }

    public function setUsdefNum2(?float $usdefNum2): self
    {
        $this->usdefNum2 = $usdefNum2;

        return $this;
    }

    public function getUsdefLib2(): ?string
    {
        return $this->usdefLib2;
    }

    public function setUsdefLib2(?string $usdefLib2): self
    {
        $this->usdefLib2 = $usdefLib2;

        return $this;
    }

    public function getUsdefCbo2(): ?int
    {
        return $this->usdefCbo2;
    }

    public function setUsdefCbo2(?int $usdefCbo2): self
    {
        $this->usdefCbo2 = $usdefCbo2;

        return $this;
    }

    public function isUsdefBoo2(): ?bool
    {
        return $this->usdefBoo2;
    }

    public function setUsdefBoo2(?bool $usdefBoo2): self
    {
        $this->usdefBoo2 = $usdefBoo2;

        return $this;
    }

    public function getUsdefDate2(): ?\DateTimeInterface
    {
        return $this->usdefDate2;
    }

    public function setUsdefDate2(?\DateTimeInterface $usdefDate2): self
    {
        $this->usdefDate2 = $usdefDate2;

        return $this;
    }

    public function getUsdefNum3(): ?float
    {
        return $this->usdefNum3;
    }

    public function setUsdefNum3(?float $usdefNum3): self
    {
        $this->usdefNum3 = $usdefNum3;

        return $this;
    }

    public function getUsdefLib3(): ?string
    {
        return $this->usdefLib3;
    }

    public function setUsdefLib3(?string $usdefLib3): self
    {
        $this->usdefLib3 = $usdefLib3;

        return $this;
    }

    public function getUsdefCbo3(): ?int
    {
        return $this->usdefCbo3;
    }

    public function setUsdefCbo3(?int $usdefCbo3): self
    {
        $this->usdefCbo3 = $usdefCbo3;

        return $this;
    }

    public function isUsdefBoo3(): ?bool
    {
        return $this->usdefBoo3;
    }

    public function setUsdefBoo3(?bool $usdefBoo3): self
    {
        $this->usdefBoo3 = $usdefBoo3;

        return $this;
    }

    public function getUsdefDate3(): ?\DateTimeInterface
    {
        return $this->usdefDate3;
    }

    public function setUsdefDate3(?\DateTimeInterface $usdefDate3): self
    {
        $this->usdefDate3 = $usdefDate3;

        return $this;
    }

    public function getUsdefNum4(): ?float
    {
        return $this->usdefNum4;
    }

    public function setUsdefNum4(?float $usdefNum4): self
    {
        $this->usdefNum4 = $usdefNum4;

        return $this;
    }

    public function getUsdefLib4(): ?string
    {
        return $this->usdefLib4;
    }

    public function setUsdefLib4(?string $usdefLib4): self
    {
        $this->usdefLib4 = $usdefLib4;

        return $this;
    }

    public function getUsdefCbo4(): ?int
    {
        return $this->usdefCbo4;
    }

    public function setUsdefCbo4(?int $usdefCbo4): self
    {
        $this->usdefCbo4 = $usdefCbo4;

        return $this;
    }

    public function isUsdefBoo4(): ?bool
    {
        return $this->usdefBoo4;
    }

    public function setUsdefBoo4(?bool $usdefBoo4): self
    {
        $this->usdefBoo4 = $usdefBoo4;

        return $this;
    }

    public function getUsdefDate4(): ?\DateTimeInterface
    {
        return $this->usdefDate4;
    }

    public function setUsdefDate4(?\DateTimeInterface $usdefDate4): self
    {
        $this->usdefDate4 = $usdefDate4;

        return $this;
    }

    public function getUsdefNum5(): ?float
    {
        return $this->usdefNum5;
    }

    public function setUsdefNum5(?float $usdefNum5): self
    {
        $this->usdefNum5 = $usdefNum5;

        return $this;
    }

    public function getUsdefLib5(): ?string
    {
        return $this->usdefLib5;
    }

    public function setUsdefLib5(?string $usdefLib5): self
    {
        $this->usdefLib5 = $usdefLib5;

        return $this;
    }

    public function getUsdefCbo5(): ?int
    {
        return $this->usdefCbo5;
    }

    public function setUsdefCbo5(?int $usdefCbo5): self
    {
        $this->usdefCbo5 = $usdefCbo5;

        return $this;
    }

    public function isUsdefBoo5(): ?bool
    {
        return $this->usdefBoo5;
    }

    public function setUsdefBoo5(?bool $usdefBoo5): self
    {
        $this->usdefBoo5 = $usdefBoo5;

        return $this;
    }

    public function getUsdefDate5(): ?\DateTimeInterface
    {
        return $this->usdefDate5;
    }

    public function setUsdefDate5(?\DateTimeInterface $usdefDate5): self
    {
        $this->usdefDate5 = $usdefDate5;

        return $this;
    }


}
