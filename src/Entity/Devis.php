<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
/**
 * Devis
 *
 * @ORM\Table(name="devis", indexes={@ORM\Index(name="CC_CT_ID", columns={"IDCONTACT", "IDFACTURE"}), @ORM\Index(name="CC_CT_STAT", columns={"IDCONTACT", "STATUT_FAD"}), @ORM\Index(name="CC_DT_NUM", columns={"DT_FACTURE", "IDFACTURE"}), @ORM\Index(name="CC_IDORIGCRE", columns={"IDORIG", "DHCRE"}), @ORM\Index(name="CC_NUM_DT", columns={"IDFACTURE", "DT_FACTURE"}), @ORM\Index(name="WDIDX16607209810", columns={"IDDELPMT"}), @ORM\Index(name="WDIDX16607209811", columns={"DT_FACTURE"}), @ORM\Index(name="WDIDX166072098110", columns={"VILLE"}), @ORM\Index(name="WDIDX166072098111", columns={"STATUT_FAD"}), @ORM\Index(name="WDIDX166072098112", columns={"REFORIG"}), @ORM\Index(name="WDIDX166072098113", columns={"IDIMPUTATION"}), @ORM\Index(name="WDIDX166072098114", columns={"IDPROJET"}), @ORM\Index(name="WDIDX166072098115", columns={"IDTACHE"}), @ORM\Index(name="WDIDX166072098116", columns={"CLE_MACHINE_CIBLE"}), @ORM\Index(name="WDIDX166072098117", columns={"CLE_PIECE_ORIG"}), @ORM\Index(name="WDIDX16607209812", columns={"MTT_TOTAL_TTC"}), @ORM\Index(name="WDIDX16607209813", columns={"IDCONTACT"}), @ORM\Index(name="WDIDX16607209814", columns={"DT_MULTI"}), @ORM\Index(name="WDIDX16607209815", columns={"DHCRE"}), @ORM\Index(name="WDIDX16607209816", columns={"NATURE"}), @ORM\Index(name="WDIDX16607209817", columns={"DT_ECHEANCE"}), @ORM\Index(name="WDIDX16607209818", columns={"NOM_CLIENT"}), @ORM\Index(name="WDIDX16607209819", columns={"RAISON_SOCIALE"})})
 * @ORM\Entity
 */
#[ApiResource()]
class Devis
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDELPMT", type="bigint", nullable=true)
     */
    private $iddelpmt = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="IDFACTURE", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfacture;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DT_FACTURE", type="date", nullable=true)
     */
    private $dtFacture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_TOTAL_HT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttTotalHt = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_TOTAL_TTC", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttTotalTtc = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDCONTACT", type="bigint", nullable=true)
     */
    private $idcontact = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_TOTAL_TVA", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttTotalTva = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_REMISE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttRemise = '0.000000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DT_MULTI", type="date", nullable=true)
     */
    private $dtMulti;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE1", type="string", length=50, nullable=true)
     */
    private $adresse1 = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DHCRE", type="datetime", nullable=true)
     */
    private $dhcre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID2MODE_PAIEMENT", type="smallint", nullable=true)
     */
    private $id2modePaiement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NATURE", type="string", length=100, nullable=true)
     */
    private $nature = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIB_REMISE", type="string", length=50, nullable=true)
     */
    private $libRemise = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DHMOD", type="datetime", nullable=true)
     */
    private $dhmod;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DT_ECHEANCE", type="date", nullable=true)
     */
    private $dtEcheance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOTE_COMPLEMENT", type="text", length=0, nullable=true)
     */
    private $noteComplement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM_CLIENT", type="string", length=80, nullable=true)
     */
    private $nomClient = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="RAISON_SOCIALE", type="string", length=160, nullable=true)
     */
    private $raisonSociale = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IGENFACT", type="boolean", nullable=true)
     */
    private $igenfact = '0';

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
     * @ORM\Column(name="CPOSTAL", type="string", length=9, nullable=true)
     */
    private $cpostal = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLE", type="string", length=30, nullable=true)
     */
    private $ville = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CDPAYS", type="string", length=3, nullable=true)
     */
    private $cdpays = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_REGLE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttRegle = '0.000000';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ITRANSMIS", type="boolean", nullable=true)
     */
    private $itransmis = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TX_REMISE_GLOB", type="float", precision=10, scale=0, nullable=true)
     */
    private $txRemiseGlob = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_DEVISE", type="string", length=3, nullable=true)
     */
    private $cdDevise = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TX_CHANGE", type="float", precision=10, scale=0, nullable=true)
     */
    private $txChange = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IDESTOCKE", type="boolean", nullable=true)
     */
    private $idestocke = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="NBDEC_FACTURE", type="boolean", nullable=true)
     */
    private $nbdecFacture = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="CD_LANG", type="smallint", nullable=true)
     */
    private $cdLang = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_RESP", type="string", length=3, nullable=true)
     */
    private $usResp = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="VREF", type="string", length=50, nullable=true)
     */
    private $vref = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REFEXTERNE", type="string", length=50, nullable=true)
     */
    private $refexterne = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IGENAVOIR", type="boolean", nullable=true)
     */
    private $igenavoir = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="STATUT_FAD", type="boolean", nullable=true)
     */
    private $statutFad = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IENCOURS", type="boolean", nullable=true)
     */
    private $iencours = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FAD_ENTETE", type="smallint", nullable=true)
     */
    private $fadEntete = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_IMPSUIVIPAR", type="boolean", nullable=true)
     */
    private $fadImpsuivipar = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FAD_TRIERLIGNE", type="smallint", nullable=true)
     */
    private $fadTrierligne = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_SERRERLIGNE", type="boolean", nullable=true)
     */
    private $fadSerrerligne = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FAD_IMPCDPROD", type="smallint", nullable=true)
     */
    private $fadImpcdprod = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_IMPCOMMENTAIRES", type="boolean", nullable=true)
     */
    private $fadImpcommentaires = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_IMPREMISE", type="boolean", nullable=true)
     */
    private $fadImpremise = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_IMPUNITE", type="boolean", nullable=true)
     */
    private $fadImpunite = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="FAD_COLSFACTURE", type="smallint", nullable=true)
     */
    private $fadColsfacture = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_IMPNATURE", type="boolean", nullable=true)
     */
    private $fadImpnature = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE2", type="string", length=50, nullable=true)
     */
    private $adresse2 = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IGENCOMM", type="boolean", nullable=true)
     */
    private $igencomm = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IGENBL", type="boolean", nullable=true)
     */
    private $igenbl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOTE_HISTORIQUE", type="text", length=0, nullable=true)
     */
    private $noteHistorique;

    /**
     * @var int|null
     *
     * @ORM\Column(name="STATUT_CDE", type="smallint", nullable=true)
     */
    private $statutCde = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="POIDS_TOTAL", type="float", precision=10, scale=0, nullable=true)
     */
    private $poidsTotal = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NB_COLIS", type="smallint", nullable=true)
     */
    private $nbColis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TRANSPORTEUR", type="string", length=100, nullable=true)
     */
    private $transporteur = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NB_PALETTES", type="smallint", nullable=true)
     */
    private $nbPalettes = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="VOLUME_EXPED", type="float", precision=10, scale=0, nullable=true)
     */
    private $volumeExped = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REFORIG", type="string", length=10, nullable=true)
     */
    private $reforig = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_TIMBRE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttTimbre = '0.000000';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_IMPFAX", type="boolean", nullable=true)
     */
    private $fadImpfax = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_REMISELIGNE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttRemiseligne = '0.000000';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IGENCOMMFOU", type="boolean", nullable=true)
     */
    private $igencommfou = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDIMPUTATION", type="bigint", nullable=true)
     */
    private $idimputation = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DT_EXPORT", type="date", nullable=true)
     */
    private $dtExport;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_IMPDETAIL", type="boolean", nullable=true)
     */
    private $fadImpdetail = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DT_DERNIER_RAPPEL", type="date", nullable=true)
     */
    private $dtDernierRappel;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TXTAX_CANADA", type="float", precision=10, scale=0, nullable=true)
     */
    private $txtaxCanada = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_SOLDE_TTC", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttSoldeTtc = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDCONTACT_LIVR", type="bigint", nullable=true)
     */
    private $idcontactLivr = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_MARGE_HT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttMargeHt = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDPROJET", type="bigint", nullable=true)
     */
    private $idprojet = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDTACHE", type="bigint", nullable=true)
     */
    private $idtache = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLE_MACHINE_CIBLE", type="string", length=12, nullable=true)
     */
    private $cleMachineCible = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="NB_RAPPELS", type="boolean", nullable=true)
     */
    private $nbRappels = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_FRAIS_COMPL", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttFraisCompl = '0.000000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDDOCUMENT", type="integer", nullable=true)
     */
    private $iddocument;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DT_COMPTA", type="date", nullable=true)
     */
    private $dtCompta;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2ORIGINE_PIECE", type="boolean", nullable=true)
     */
    private $id2originePiece = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2MODE_LIVR", type="boolean", nullable=true)
     */
    private $id2modeLivr = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_DEEE", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttDeee = '0.000000';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_SANSTOTAL", type="boolean", nullable=true)
     */
    private $fadSanstotal = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CLE_PIECE_ORIG", type="string", length=10, nullable=true)
     */
    private $clePieceOrig = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOTE_AVANT", type="text", length=0, nullable=true)
     */
    private $noteAvant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOTE_APRES", type="text", length=0, nullable=true)
     */
    private $noteApres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOTE_PIECE", type="text", length=0, nullable=true)
     */
    private $notePiece;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FAD_SSTOTAL", type="smallint", nullable=true)
     */
    private $fadSstotal = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_TAX1", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttTax1 = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_TAX2", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttTax2 = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_ACTION", type="string", length=1, nullable=true)
     */
    private $cdAction = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDORIG", type="bigint", nullable=true)
     */
    private $idorig = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_TRSPT", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttTrspt = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="INCOTERM", type="string", length=3, nullable=true)
     */
    private $incoterm = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIB_TRSPT", type="string", length=30, nullable=true)
     */
    private $libTrspt = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID2MOTIF_REJET", type="integer", nullable=true)
     */
    private $id2motifRejet = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDADRESSEPOST1", type="bigint", nullable=true)
     */
    private $idadressepost1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDADRESSEPOST2", type="bigint", nullable=true)
     */
    private $idadressepost2 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="MTT_RETGAR", type="decimal", precision=24, scale=6, nullable=true, options={"default"="0.000000"})
     */
    private $mttRetgar = '0.000000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DT_AVANCEMENT", type="date", nullable=true)
     */
    private $dtAvancement;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PCT_AVANCEMENT", type="float", precision=10, scale=0, nullable=true)
     */
    private $pctAvancement = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="TYP_FACTURE", type="boolean", nullable=true)
     */
    private $typFacture = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDTARIF", type="bigint", nullable=true)
     */
    private $idtarif = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IVENTECAISSE", type="boolean", nullable=true)
     */
    private $iventecaisse = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CDREGION", type="string", length=3, nullable=true)
     */
    private $cdregion = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_TECH", type="string", length=3, nullable=true)
     */
    private $usTech = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDADRCHANTIER", type="bigint", nullable=true)
     */
    private $idadrchantier = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="POIDS_SUP", type="float", precision=10, scale=0, nullable=true)
     */
    private $poidsSup = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ST_STOCK", type="boolean", nullable=true)
     */
    private $stStock = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2REG_AUTOLIQUID", type="boolean", nullable=true)
     */
    private $id2regAutoliquid = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="FAD_TYPTOTALGEN", type="boolean", nullable=true)
     */
    private $fadTyptotalgen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDIDENTCOM", type="bigint", nullable=true)
     */
    private $ididentcom = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SIGNATURE_CLT", type="blob", length=0, nullable=true)
     */
    private $signatureClt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SIGNATURE_TECH", type="blob", length=0, nullable=true)
     */
    private $signatureTech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AUTHKEY", type="string", length=80, nullable=true)
     */
    private $authkey = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMTRACKING", type="string", length=24, nullable=true)
     */
    private $numtracking = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DT_EXPED", type="date", nullable=true)
     */
    private $dtExped;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDCTCAPP", type="bigint", nullable=true)
     */
    private $idctcapp = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ST_ENCAISSEMENT", type="boolean", nullable=true)
     */
    private $stEncaissement = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="INFOTECH", type="string", length=80, nullable=true)
     */
    private $infotech;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USDEF_LIB", type="string", length=40, nullable=true)
     */
    private $usdefLib;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IGMOB1", type="boolean", nullable=true)
     */
    private $igmob1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NBPOINTS", type="integer", nullable=true)
     */
    private $nbpoints = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2STAT_IMPAYE", type="boolean", nullable=true)
     */
    private $id2statImpaye = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IPROFORMA", type="boolean", nullable=true)
     */
    private $iproforma = '0';


}
