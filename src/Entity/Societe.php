<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
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

    public function getIddelpmt(): ?string
    {
        return $this->iddelpmt;
    }

    public function setIddelpmt(?string $iddelpmt): self
    {
        $this->iddelpmt = $iddelpmt;

        return $this;
    }

    public function getIdsociete(): ?string
    {
        return $this->idsociete;
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

    public function getCdpaysp(): ?string
    {
        return $this->cdpaysp;
    }

    public function setCdpaysp(?string $cdpaysp): self
    {
        $this->cdpaysp = $cdpaysp;

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

    public function getNentrep(): ?string
    {
        return $this->nentrep;
    }

    public function setNentrep(?string $nentrep): self
    {
        $this->nentrep = $nentrep;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

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

    public function getNumTva(): ?string
    {
        return $this->numTva;
    }

    public function setNumTva(?string $numTva): self
    {
        $this->numTva = $numTva;

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

    public function isIfournisseur(): ?bool
    {
        return $this->ifournisseur;
    }

    public function setIfournisseur(?bool $ifournisseur): self
    {
        $this->ifournisseur = $ifournisseur;

        return $this;
    }

    public function getIdcontactCde(): ?string
    {
        return $this->idcontactCde;
    }

    public function setIdcontactCde(?string $idcontactCde): self
    {
        $this->idcontactCde = $idcontactCde;

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

    public function getDhcre(): ?\DateTimeInterface
    {
        return $this->dhcre;
    }

    public function setDhcre(?\DateTimeInterface $dhcre): self
    {
        $this->dhcre = $dhcre;

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

    public function getDhmod(): ?\DateTimeInterface
    {
        return $this->dhmod;
    }

    public function setDhmod(?\DateTimeInterface $dhmod): self
    {
        $this->dhmod = $dhmod;

        return $this;
    }

    public function getEffectifs(): ?int
    {
        return $this->effectifs;
    }

    public function setEffectifs(?int $effectifs): self
    {
        $this->effectifs = $effectifs;

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

    public function getUsdefCbo(): ?int
    {
        return $this->usdefCbo;
    }

    public function setUsdefCbo(?int $usdefCbo): self
    {
        $this->usdefCbo = $usdefCbo;

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

    public function getTxRemise(): ?float
    {
        return $this->txRemise;
    }

    public function setTxRemise(?float $txRemise): self
    {
        $this->txRemise = $txRemise;

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

    public function isRegimeTvacli(): ?bool
    {
        return $this->regimeTvacli;
    }

    public function setRegimeTvacli(?bool $regimeTvacli): self
    {
        $this->regimeTvacli = $regimeTvacli;

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

    public function isId2modePaiement(): ?bool
    {
        return $this->id2modePaiement;
    }

    public function setId2modePaiement(?bool $id2modePaiement): self
    {
        $this->id2modePaiement = $id2modePaiement;

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

    public function isId2formeSociale(): ?bool
    {
        return $this->id2formeSociale;
    }

    public function setId2formeSociale(?bool $id2formeSociale): self
    {
        $this->id2formeSociale = $id2formeSociale;

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

    public function getMttCapital(): ?string
    {
        return $this->mttCapital;
    }

    public function setMttCapital(?string $mttCapital): self
    {
        $this->mttCapital = $mttCapital;

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

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(?string $iban): self
    {
        $this->iban = $iban;

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

    public function getCdregionp(): ?string
    {
        return $this->cdregionp;
    }

    public function setCdregionp(?string $cdregionp): self
    {
        $this->cdregionp = $cdregionp;

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

    public function getTxRetro(): ?float
    {
        return $this->txRetro;
    }

    public function setTxRetro(?float $txRetro): self
    {
        $this->txRetro = $txRetro;

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

    public function isId2cdtcdfou(): ?bool
    {
        return $this->id2cdtcdfou;
    }

    public function setId2cdtcdfou(?bool $id2cdtcdfou): self
    {
        $this->id2cdtcdfou = $id2cdtcdfou;

        return $this;
    }

    public function getMttFranco(): ?int
    {
        return $this->mttFranco;
    }

    public function setMttFranco(?int $mttFranco): self
    {
        $this->mttFranco = $mttFranco;

        return $this;
    }

    public function getUsdefNum1(): ?float
    {
        return $this->usdefNum1;
    }

    public function setUsdefNum1(?float $usdefNum1): self
    {
        $this->usdefNum1 = $usdefNum1;

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
