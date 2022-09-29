<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
/**
 * Societe
 *
 * @ORM\Table(name="societe", indexes={@ORM\Index(name="CC_FOUR_RAIS", columns={"IFOURNISSEUR", "RAISON_SOCIALE"}), @ORM\Index(name="WDIDX1616756054561", columns={"RAISON_SOCIALE"}), @ORM\Index(name="WDIDX1616756054562", columns={"CPOSTALP"}), @ORM\Index(name="WDIDX1616756054563", columns={"VILLEP"}), @ORM\Index(name="WDIDX1616756054564", columns={"CDPAYSP"}), @ORM\Index(name="WDIDX1616756054565", columns={"IDCONTACT_CDE"})})
 * @ORM\Entity
 */
#[ApiResource()]
class Societe
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
     * @ORM\Column(name="IDSOCIETE", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsociete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RAISON_SOCIALE", type="string", length=160, nullable=true)
     */
    private $raisonSociale = '';

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
     * @ORM\Column(name="CDPAYSP", type="string", length=3, nullable=true)
     */
    private $cdpaysp = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELAUTRE", type="string", length=150, nullable=true)
     */
    private $telautre = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NENTREP", type="string", length=30, nullable=true)
     */
    private $nentrep = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="SIRET", type="string", length=21, nullable=true)
     */
    private $siret = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODE_APE", type="string", length=5, nullable=true)
     */
    private $codeApe = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUM_TVA", type="string", length=15, nullable=true)
     */
    private $numTva = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAILP", type="string", length=50, nullable=true)
     */
    private $emailp = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="WEBSITEP", type="string", length=60, nullable=true)
     */
    private $websitep = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IFOURNISSEUR", type="boolean", nullable=true)
     */
    private $ifournisseur = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDCONTACT_CDE", type="bigint", nullable=true)
     */
    private $idcontactCde = '0';

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="DHCRE", type="datetime", nullable=true)
     */
    private $dhcre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USMOD", type="string", length=3, nullable=true)
     */
    private $usmod = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DHMOD", type="datetime", nullable=true)
     */
    private $dhmod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="EFFECTIFS", type="integer", nullable=true)
     */
    private $effectifs = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="USDEF_BOO", type="boolean", nullable=true)
     */
    private $usdefBoo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="USDEF_CBO", type="smallint", nullable=true)
     */
    private $usdefCbo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="USDEF_DATE", type="date", nullable=true)
     */
    private $usdefDate;

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
     * @var float|null
     *
     * @ORM\Column(name="TX_REMISE", type="float", precision=10, scale=0, nullable=true)
     */
    private $txRemise = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TX_TVACLI", type="float", precision=10, scale=0, nullable=true)
     */
    private $txTvacli = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="REGIME_TVACLI", type="boolean", nullable=true)
     */
    private $regimeTvacli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CD_DEVISE", type="string", length=3, nullable=true)
     */
    private $cdDevise = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2MODE_PAIEMENT", type="boolean", nullable=true)
     */
    private $id2modePaiement = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2CDT_FACTUR", type="boolean", nullable=true)
     */
    private $id2cdtFactur = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2FORME_SOCIALE", type="boolean", nullable=true)
     */
    private $id2formeSociale = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELP1", type="string", length=18, nullable=true)
     */
    private $telp1 = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="MTT_CAPITAL", type="bigint", nullable=true, options={"unsigned"=true})
     */
    private $mttCapital = '0';

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
     * @ORM\Column(name="IBAN", type="string", length=42, nullable=true)
     */
    private $iban = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="BIC", type="string", length=14, nullable=true)
     */
    private $bic = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CDREGIONP", type="string", length=3, nullable=true)
     */
    private $cdregionp = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="REFEXTERNE", type="string", length=12, nullable=true)
     */
    private $refexterne = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TX_RETRO", type="float", precision=10, scale=0, nullable=true)
     */
    private $txRetro = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_RESP", type="string", length=3, nullable=true)
     */
    private $usResp = '';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ID2CDTCDFOU", type="boolean", nullable=true)
     */
    private $id2cdtcdfou = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="MTT_FRANCO", type="integer", nullable=true)
     */
    private $mttFranco = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="USDEF_NUM1", type="float", precision=10, scale=0, nullable=true)
     */
    private $usdefNum1;

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
