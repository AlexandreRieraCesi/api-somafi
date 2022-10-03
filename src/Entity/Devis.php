<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
/**
 * Devis
 *
 * @ORM\Table(name="devis", indexes={@ORM\Index(name="CC_CT_ID", columns={"IDCONTACT", "IDFACTURE"}), @ORM\Index(name="CC_CT_STAT", columns={"IDCONTACT", "STATUT_FAD"}), @ORM\Index(name="CC_DT_NUM", columns={"DT_FACTURE", "IDFACTURE"}), @ORM\Index(name="CC_IDORIGCRE", columns={"IDORIG", "DHCRE"}), @ORM\Index(name="CC_NUM_DT", columns={"IDFACTURE", "DT_FACTURE"}), @ORM\Index(name="WDIDX16607209810", columns={"IDDELPMT"}), @ORM\Index(name="WDIDX16607209811", columns={"DT_FACTURE"}), @ORM\Index(name="WDIDX166072098110", columns={"VILLE"}), @ORM\Index(name="WDIDX166072098111", columns={"STATUT_FAD"}), @ORM\Index(name="WDIDX166072098112", columns={"REFORIG"}), @ORM\Index(name="WDIDX166072098113", columns={"IDIMPUTATION"}), @ORM\Index(name="WDIDX166072098114", columns={"IDPROJET"}), @ORM\Index(name="WDIDX166072098115", columns={"IDTACHE"}), @ORM\Index(name="WDIDX166072098116", columns={"CLE_MACHINE_CIBLE"}), @ORM\Index(name="WDIDX166072098117", columns={"CLE_PIECE_ORIG"}), @ORM\Index(name="WDIDX16607209812", columns={"MTT_TOTAL_TTC"}), @ORM\Index(name="WDIDX16607209813", columns={"IDCONTACT"}), @ORM\Index(name="WDIDX16607209814", columns={"DT_MULTI"}), @ORM\Index(name="WDIDX16607209815", columns={"DHCRE"}), @ORM\Index(name="WDIDX16607209816", columns={"NATURE"}), @ORM\Index(name="WDIDX16607209817", columns={"DT_ECHEANCE"}), @ORM\Index(name="WDIDX16607209818", columns={"NOM_CLIENT"}), @ORM\Index(name="WDIDX16607209819", columns={"RAISON_SOCIALE"})})
 * @ORM\Entity
 */
#[ApiResource(operations: [
    new Get(
        uriTemplate: '/devis'
    )
])]
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

    public function getIddelpmt(): ?string
    {
        return $this->iddelpmt;
    }

    public function setIddelpmt(?string $iddelpmt): self
    {
        $this->iddelpmt = $iddelpmt;

        return $this;
    }

    public function getIdfacture(): ?string
    {
        return $this->idfacture;
    }

    public function getDtFacture(): ?\DateTimeInterface
    {
        return $this->dtFacture;
    }

    public function setDtFacture(?\DateTimeInterface $dtFacture): self
    {
        $this->dtFacture = $dtFacture;

        return $this;
    }

    public function getMttTotalHt(): ?string
    {
        return $this->mttTotalHt;
    }

    public function setMttTotalHt(?string $mttTotalHt): self
    {
        $this->mttTotalHt = $mttTotalHt;

        return $this;
    }

    public function getMttTotalTtc(): ?string
    {
        return $this->mttTotalTtc;
    }

    public function setMttTotalTtc(?string $mttTotalTtc): self
    {
        $this->mttTotalTtc = $mttTotalTtc;

        return $this;
    }

    public function getIdcontact(): ?string
    {
        return $this->idcontact;
    }

    public function setIdcontact(?string $idcontact): self
    {
        $this->idcontact = $idcontact;

        return $this;
    }

    public function getMttTotalTva(): ?string
    {
        return $this->mttTotalTva;
    }

    public function setMttTotalTva(?string $mttTotalTva): self
    {
        $this->mttTotalTva = $mttTotalTva;

        return $this;
    }

    public function getMttRemise(): ?string
    {
        return $this->mttRemise;
    }

    public function setMttRemise(?string $mttRemise): self
    {
        $this->mttRemise = $mttRemise;

        return $this;
    }

    public function getDtMulti(): ?\DateTimeInterface
    {
        return $this->dtMulti;
    }

    public function setDtMulti(?\DateTimeInterface $dtMulti): self
    {
        $this->dtMulti = $dtMulti;

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

    public function getDhcre(): ?\DateTimeInterface
    {
        return $this->dhcre;
    }

    public function setDhcre(?\DateTimeInterface $dhcre): self
    {
        $this->dhcre = $dhcre;

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

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(?string $nature): self
    {
        $this->nature = $nature;

        return $this;
    }

    public function getLibRemise(): ?string
    {
        return $this->libRemise;
    }

    public function setLibRemise(?string $libRemise): self
    {
        $this->libRemise = $libRemise;

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

    public function getDtEcheance(): ?\DateTimeInterface
    {
        return $this->dtEcheance;
    }

    public function setDtEcheance(?\DateTimeInterface $dtEcheance): self
    {
        $this->dtEcheance = $dtEcheance;

        return $this;
    }

    public function getNoteComplement(): ?string
    {
        return $this->noteComplement;
    }

    public function setNoteComplement(?string $noteComplement): self
    {
        $this->noteComplement = $noteComplement;

        return $this;
    }

    public function getNomClient(): ?string
    {
        return $this->nomClient;
    }

    public function setNomClient(?string $nomClient): self
    {
        $this->nomClient = $nomClient;

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

    public function isIgenfact(): ?bool
    {
        return $this->igenfact;
    }

    public function setIgenfact(?bool $igenfact): self
    {
        $this->igenfact = $igenfact;

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

    public function getCpostal(): ?string
    {
        return $this->cpostal;
    }

    public function setCpostal(?string $cpostal): self
    {
        $this->cpostal = $cpostal;

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

    public function getCdpays(): ?string
    {
        return $this->cdpays;
    }

    public function setCdpays(?string $cdpays): self
    {
        $this->cdpays = $cdpays;

        return $this;
    }

    public function getMttRegle(): ?string
    {
        return $this->mttRegle;
    }

    public function setMttRegle(?string $mttRegle): self
    {
        $this->mttRegle = $mttRegle;

        return $this;
    }

    public function isItransmis(): ?bool
    {
        return $this->itransmis;
    }

    public function setItransmis(?bool $itransmis): self
    {
        $this->itransmis = $itransmis;

        return $this;
    }

    public function getTxRemiseGlob(): ?float
    {
        return $this->txRemiseGlob;
    }

    public function setTxRemiseGlob(?float $txRemiseGlob): self
    {
        $this->txRemiseGlob = $txRemiseGlob;

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

    public function getTxChange(): ?float
    {
        return $this->txChange;
    }

    public function setTxChange(?float $txChange): self
    {
        $this->txChange = $txChange;

        return $this;
    }

    public function isIdestocke(): ?bool
    {
        return $this->idestocke;
    }

    public function setIdestocke(?bool $idestocke): self
    {
        $this->idestocke = $idestocke;

        return $this;
    }

    public function isNbdecFacture(): ?bool
    {
        return $this->nbdecFacture;
    }

    public function setNbdecFacture(?bool $nbdecFacture): self
    {
        $this->nbdecFacture = $nbdecFacture;

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

    public function getUsResp(): ?string
    {
        return $this->usResp;
    }

    public function setUsResp(?string $usResp): self
    {
        $this->usResp = $usResp;

        return $this;
    }

    public function getVref(): ?string
    {
        return $this->vref;
    }

    public function setVref(?string $vref): self
    {
        $this->vref = $vref;

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

    public function isIgenavoir(): ?bool
    {
        return $this->igenavoir;
    }

    public function setIgenavoir(?bool $igenavoir): self
    {
        $this->igenavoir = $igenavoir;

        return $this;
    }

    public function isStatutFad(): ?bool
    {
        return $this->statutFad;
    }

    public function setStatutFad(?bool $statutFad): self
    {
        $this->statutFad = $statutFad;

        return $this;
    }

    public function isIencours(): ?bool
    {
        return $this->iencours;
    }

    public function setIencours(?bool $iencours): self
    {
        $this->iencours = $iencours;

        return $this;
    }

    public function getFadEntete(): ?int
    {
        return $this->fadEntete;
    }

    public function setFadEntete(?int $fadEntete): self
    {
        $this->fadEntete = $fadEntete;

        return $this;
    }

    public function isFadImpsuivipar(): ?bool
    {
        return $this->fadImpsuivipar;
    }

    public function setFadImpsuivipar(?bool $fadImpsuivipar): self
    {
        $this->fadImpsuivipar = $fadImpsuivipar;

        return $this;
    }

    public function getFadTrierligne(): ?int
    {
        return $this->fadTrierligne;
    }

    public function setFadTrierligne(?int $fadTrierligne): self
    {
        $this->fadTrierligne = $fadTrierligne;

        return $this;
    }

    public function isFadSerrerligne(): ?bool
    {
        return $this->fadSerrerligne;
    }

    public function setFadSerrerligne(?bool $fadSerrerligne): self
    {
        $this->fadSerrerligne = $fadSerrerligne;

        return $this;
    }

    public function getFadImpcdprod(): ?int
    {
        return $this->fadImpcdprod;
    }

    public function setFadImpcdprod(?int $fadImpcdprod): self
    {
        $this->fadImpcdprod = $fadImpcdprod;

        return $this;
    }

    public function isFadImpcommentaires(): ?bool
    {
        return $this->fadImpcommentaires;
    }

    public function setFadImpcommentaires(?bool $fadImpcommentaires): self
    {
        $this->fadImpcommentaires = $fadImpcommentaires;

        return $this;
    }

    public function isFadImpremise(): ?bool
    {
        return $this->fadImpremise;
    }

    public function setFadImpremise(?bool $fadImpremise): self
    {
        $this->fadImpremise = $fadImpremise;

        return $this;
    }

    public function isFadImpunite(): ?bool
    {
        return $this->fadImpunite;
    }

    public function setFadImpunite(?bool $fadImpunite): self
    {
        $this->fadImpunite = $fadImpunite;

        return $this;
    }

    public function getFadColsfacture(): ?int
    {
        return $this->fadColsfacture;
    }

    public function setFadColsfacture(?int $fadColsfacture): self
    {
        $this->fadColsfacture = $fadColsfacture;

        return $this;
    }

    public function isFadImpnature(): ?bool
    {
        return $this->fadImpnature;
    }

    public function setFadImpnature(?bool $fadImpnature): self
    {
        $this->fadImpnature = $fadImpnature;

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

    public function isIgencomm(): ?bool
    {
        return $this->igencomm;
    }

    public function setIgencomm(?bool $igencomm): self
    {
        $this->igencomm = $igencomm;

        return $this;
    }

    public function isIgenbl(): ?bool
    {
        return $this->igenbl;
    }

    public function setIgenbl(?bool $igenbl): self
    {
        $this->igenbl = $igenbl;

        return $this;
    }

    public function getNoteHistorique(): ?string
    {
        return $this->noteHistorique;
    }

    public function setNoteHistorique(?string $noteHistorique): self
    {
        $this->noteHistorique = $noteHistorique;

        return $this;
    }

    public function getStatutCde(): ?int
    {
        return $this->statutCde;
    }

    public function setStatutCde(?int $statutCde): self
    {
        $this->statutCde = $statutCde;

        return $this;
    }

    public function getPoidsTotal(): ?float
    {
        return $this->poidsTotal;
    }

    public function setPoidsTotal(?float $poidsTotal): self
    {
        $this->poidsTotal = $poidsTotal;

        return $this;
    }

    public function getNbColis(): ?int
    {
        return $this->nbColis;
    }

    public function setNbColis(?int $nbColis): self
    {
        $this->nbColis = $nbColis;

        return $this;
    }

    public function getTransporteur(): ?string
    {
        return $this->transporteur;
    }

    public function setTransporteur(?string $transporteur): self
    {
        $this->transporteur = $transporteur;

        return $this;
    }

    public function getNbPalettes(): ?int
    {
        return $this->nbPalettes;
    }

    public function setNbPalettes(?int $nbPalettes): self
    {
        $this->nbPalettes = $nbPalettes;

        return $this;
    }

    public function getVolumeExped(): ?float
    {
        return $this->volumeExped;
    }

    public function setVolumeExped(?float $volumeExped): self
    {
        $this->volumeExped = $volumeExped;

        return $this;
    }

    public function getReforig(): ?string
    {
        return $this->reforig;
    }

    public function setReforig(?string $reforig): self
    {
        $this->reforig = $reforig;

        return $this;
    }

    public function getMttTimbre(): ?string
    {
        return $this->mttTimbre;
    }

    public function setMttTimbre(?string $mttTimbre): self
    {
        $this->mttTimbre = $mttTimbre;

        return $this;
    }

    public function isFadImpfax(): ?bool
    {
        return $this->fadImpfax;
    }

    public function setFadImpfax(?bool $fadImpfax): self
    {
        $this->fadImpfax = $fadImpfax;

        return $this;
    }

    public function getMttRemiseligne(): ?string
    {
        return $this->mttRemiseligne;
    }

    public function setMttRemiseligne(?string $mttRemiseligne): self
    {
        $this->mttRemiseligne = $mttRemiseligne;

        return $this;
    }

    public function isIgencommfou(): ?bool
    {
        return $this->igencommfou;
    }

    public function setIgencommfou(?bool $igencommfou): self
    {
        $this->igencommfou = $igencommfou;

        return $this;
    }

    public function getIdimputation(): ?string
    {
        return $this->idimputation;
    }

    public function setIdimputation(?string $idimputation): self
    {
        $this->idimputation = $idimputation;

        return $this;
    }

    public function getDtExport(): ?\DateTimeInterface
    {
        return $this->dtExport;
    }

    public function setDtExport(?\DateTimeInterface $dtExport): self
    {
        $this->dtExport = $dtExport;

        return $this;
    }

    public function isFadImpdetail(): ?bool
    {
        return $this->fadImpdetail;
    }

    public function setFadImpdetail(?bool $fadImpdetail): self
    {
        $this->fadImpdetail = $fadImpdetail;

        return $this;
    }

    public function getDtDernierRappel(): ?\DateTimeInterface
    {
        return $this->dtDernierRappel;
    }

    public function setDtDernierRappel(?\DateTimeInterface $dtDernierRappel): self
    {
        $this->dtDernierRappel = $dtDernierRappel;

        return $this;
    }

    public function getTxtaxCanada(): ?float
    {
        return $this->txtaxCanada;
    }

    public function setTxtaxCanada(?float $txtaxCanada): self
    {
        $this->txtaxCanada = $txtaxCanada;

        return $this;
    }

    public function getMttSoldeTtc(): ?string
    {
        return $this->mttSoldeTtc;
    }

    public function setMttSoldeTtc(?string $mttSoldeTtc): self
    {
        $this->mttSoldeTtc = $mttSoldeTtc;

        return $this;
    }

    public function getIdcontactLivr(): ?string
    {
        return $this->idcontactLivr;
    }

    public function setIdcontactLivr(?string $idcontactLivr): self
    {
        $this->idcontactLivr = $idcontactLivr;

        return $this;
    }

    public function getMttMargeHt(): ?string
    {
        return $this->mttMargeHt;
    }

    public function setMttMargeHt(?string $mttMargeHt): self
    {
        $this->mttMargeHt = $mttMargeHt;

        return $this;
    }

    public function getIdprojet(): ?string
    {
        return $this->idprojet;
    }

    public function setIdprojet(?string $idprojet): self
    {
        $this->idprojet = $idprojet;

        return $this;
    }

    public function getIdtache(): ?string
    {
        return $this->idtache;
    }

    public function setIdtache(?string $idtache): self
    {
        $this->idtache = $idtache;

        return $this;
    }

    public function getCleMachineCible(): ?string
    {
        return $this->cleMachineCible;
    }

    public function setCleMachineCible(?string $cleMachineCible): self
    {
        $this->cleMachineCible = $cleMachineCible;

        return $this;
    }

    public function isNbRappels(): ?bool
    {
        return $this->nbRappels;
    }

    public function setNbRappels(?bool $nbRappels): self
    {
        $this->nbRappels = $nbRappels;

        return $this;
    }

    public function getMttFraisCompl(): ?string
    {
        return $this->mttFraisCompl;
    }

    public function setMttFraisCompl(?string $mttFraisCompl): self
    {
        $this->mttFraisCompl = $mttFraisCompl;

        return $this;
    }

    public function getIddocument(): ?int
    {
        return $this->iddocument;
    }

    public function setIddocument(?int $iddocument): self
    {
        $this->iddocument = $iddocument;

        return $this;
    }

    public function getDtCompta(): ?\DateTimeInterface
    {
        return $this->dtCompta;
    }

    public function setDtCompta(?\DateTimeInterface $dtCompta): self
    {
        $this->dtCompta = $dtCompta;

        return $this;
    }

    public function isId2originePiece(): ?bool
    {
        return $this->id2originePiece;
    }

    public function setId2originePiece(?bool $id2originePiece): self
    {
        $this->id2originePiece = $id2originePiece;

        return $this;
    }

    public function isId2modeLivr(): ?bool
    {
        return $this->id2modeLivr;
    }

    public function setId2modeLivr(?bool $id2modeLivr): self
    {
        $this->id2modeLivr = $id2modeLivr;

        return $this;
    }

    public function getMttDeee(): ?string
    {
        return $this->mttDeee;
    }

    public function setMttDeee(?string $mttDeee): self
    {
        $this->mttDeee = $mttDeee;

        return $this;
    }

    public function isFadSanstotal(): ?bool
    {
        return $this->fadSanstotal;
    }

    public function setFadSanstotal(?bool $fadSanstotal): self
    {
        $this->fadSanstotal = $fadSanstotal;

        return $this;
    }

    public function getClePieceOrig(): ?string
    {
        return $this->clePieceOrig;
    }

    public function setClePieceOrig(?string $clePieceOrig): self
    {
        $this->clePieceOrig = $clePieceOrig;

        return $this;
    }

    public function getNoteAvant(): ?string
    {
        return $this->noteAvant;
    }

    public function setNoteAvant(?string $noteAvant): self
    {
        $this->noteAvant = $noteAvant;

        return $this;
    }

    public function getNoteApres(): ?string
    {
        return $this->noteApres;
    }

    public function setNoteApres(?string $noteApres): self
    {
        $this->noteApres = $noteApres;

        return $this;
    }

    public function getNotePiece(): ?string
    {
        return $this->notePiece;
    }

    public function setNotePiece(?string $notePiece): self
    {
        $this->notePiece = $notePiece;

        return $this;
    }

    public function getFadSstotal(): ?int
    {
        return $this->fadSstotal;
    }

    public function setFadSstotal(?int $fadSstotal): self
    {
        $this->fadSstotal = $fadSstotal;

        return $this;
    }

    public function getMttTax1(): ?string
    {
        return $this->mttTax1;
    }

    public function setMttTax1(?string $mttTax1): self
    {
        $this->mttTax1 = $mttTax1;

        return $this;
    }

    public function getMttTax2(): ?string
    {
        return $this->mttTax2;
    }

    public function setMttTax2(?string $mttTax2): self
    {
        $this->mttTax2 = $mttTax2;

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

    public function getIdorig(): ?string
    {
        return $this->idorig;
    }

    public function setIdorig(?string $idorig): self
    {
        $this->idorig = $idorig;

        return $this;
    }

    public function getMttTrspt(): ?string
    {
        return $this->mttTrspt;
    }

    public function setMttTrspt(?string $mttTrspt): self
    {
        $this->mttTrspt = $mttTrspt;

        return $this;
    }

    public function getIncoterm(): ?string
    {
        return $this->incoterm;
    }

    public function setIncoterm(?string $incoterm): self
    {
        $this->incoterm = $incoterm;

        return $this;
    }

    public function getLibTrspt(): ?string
    {
        return $this->libTrspt;
    }

    public function setLibTrspt(?string $libTrspt): self
    {
        $this->libTrspt = $libTrspt;

        return $this;
    }

    public function getId2motifRejet(): ?int
    {
        return $this->id2motifRejet;
    }

    public function setId2motifRejet(?int $id2motifRejet): self
    {
        $this->id2motifRejet = $id2motifRejet;

        return $this;
    }

    public function getIdadressepost1(): ?string
    {
        return $this->idadressepost1;
    }

    public function setIdadressepost1(?string $idadressepost1): self
    {
        $this->idadressepost1 = $idadressepost1;

        return $this;
    }

    public function getIdadressepost2(): ?string
    {
        return $this->idadressepost2;
    }

    public function setIdadressepost2(?string $idadressepost2): self
    {
        $this->idadressepost2 = $idadressepost2;

        return $this;
    }

    public function getMttRetgar(): ?string
    {
        return $this->mttRetgar;
    }

    public function setMttRetgar(?string $mttRetgar): self
    {
        $this->mttRetgar = $mttRetgar;

        return $this;
    }

    public function getDtAvancement(): ?\DateTimeInterface
    {
        return $this->dtAvancement;
    }

    public function setDtAvancement(?\DateTimeInterface $dtAvancement): self
    {
        $this->dtAvancement = $dtAvancement;

        return $this;
    }

    public function getPctAvancement(): ?float
    {
        return $this->pctAvancement;
    }

    public function setPctAvancement(?float $pctAvancement): self
    {
        $this->pctAvancement = $pctAvancement;

        return $this;
    }

    public function isTypFacture(): ?bool
    {
        return $this->typFacture;
    }

    public function setTypFacture(?bool $typFacture): self
    {
        $this->typFacture = $typFacture;

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

    public function isIventecaisse(): ?bool
    {
        return $this->iventecaisse;
    }

    public function setIventecaisse(?bool $iventecaisse): self
    {
        $this->iventecaisse = $iventecaisse;

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

    public function getUsTech(): ?string
    {
        return $this->usTech;
    }

    public function setUsTech(?string $usTech): self
    {
        $this->usTech = $usTech;

        return $this;
    }

    public function getIdadrchantier(): ?string
    {
        return $this->idadrchantier;
    }

    public function setIdadrchantier(?string $idadrchantier): self
    {
        $this->idadrchantier = $idadrchantier;

        return $this;
    }

    public function getPoidsSup(): ?float
    {
        return $this->poidsSup;
    }

    public function setPoidsSup(?float $poidsSup): self
    {
        $this->poidsSup = $poidsSup;

        return $this;
    }

    public function isStStock(): ?bool
    {
        return $this->stStock;
    }

    public function setStStock(?bool $stStock): self
    {
        $this->stStock = $stStock;

        return $this;
    }

    public function isId2regAutoliquid(): ?bool
    {
        return $this->id2regAutoliquid;
    }

    public function setId2regAutoliquid(?bool $id2regAutoliquid): self
    {
        $this->id2regAutoliquid = $id2regAutoliquid;

        return $this;
    }

    public function isFadTyptotalgen(): ?bool
    {
        return $this->fadTyptotalgen;
    }

    public function setFadTyptotalgen(?bool $fadTyptotalgen): self
    {
        $this->fadTyptotalgen = $fadTyptotalgen;

        return $this;
    }

    public function getIdidentcom(): ?string
    {
        return $this->ididentcom;
    }

    public function setIdidentcom(?string $ididentcom): self
    {
        $this->ididentcom = $ididentcom;

        return $this;
    }

    public function getSignatureClt()
    {
        return $this->signatureClt;
    }

    public function setSignatureClt($signatureClt): self
    {
        $this->signatureClt = $signatureClt;

        return $this;
    }

    public function getSignatureTech()
    {
        return $this->signatureTech;
    }

    public function setSignatureTech($signatureTech): self
    {
        $this->signatureTech = $signatureTech;

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

    public function getNumtracking(): ?string
    {
        return $this->numtracking;
    }

    public function setNumtracking(?string $numtracking): self
    {
        $this->numtracking = $numtracking;

        return $this;
    }

    public function getDtExped(): ?\DateTimeInterface
    {
        return $this->dtExped;
    }

    public function setDtExped(?\DateTimeInterface $dtExped): self
    {
        $this->dtExped = $dtExped;

        return $this;
    }

    public function getIdctcapp(): ?string
    {
        return $this->idctcapp;
    }

    public function setIdctcapp(?string $idctcapp): self
    {
        $this->idctcapp = $idctcapp;

        return $this;
    }

    public function isStEncaissement(): ?bool
    {
        return $this->stEncaissement;
    }

    public function setStEncaissement(?bool $stEncaissement): self
    {
        $this->stEncaissement = $stEncaissement;

        return $this;
    }

    public function getInfotech(): ?string
    {
        return $this->infotech;
    }

    public function setInfotech(?string $infotech): self
    {
        $this->infotech = $infotech;

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

    public function isIgmob1(): ?bool
    {
        return $this->igmob1;
    }

    public function setIgmob1(?bool $igmob1): self
    {
        $this->igmob1 = $igmob1;

        return $this;
    }

    public function getNbpoints(): ?int
    {
        return $this->nbpoints;
    }

    public function setNbpoints(?int $nbpoints): self
    {
        $this->nbpoints = $nbpoints;

        return $this;
    }

    public function isId2statImpaye(): ?bool
    {
        return $this->id2statImpaye;
    }

    public function setId2statImpaye(?bool $id2statImpaye): self
    {
        $this->id2statImpaye = $id2statImpaye;

        return $this;
    }

    public function isIproforma(): ?bool
    {
        return $this->iproforma;
    }

    public function setIproforma(?bool $iproforma): self
    {
        $this->iproforma = $iproforma;

        return $this;
    }


}
