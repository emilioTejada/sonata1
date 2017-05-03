<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints\Date;
//use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity()
 */
class Document
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Date
     *
     * @ORM\Column(type="date")
     */
    private $documentDate;

    /**
     * @var Date
     *
     * @ORM\Column(type="date")
     */
    private $carEvoReceptionDate;

    /**
     * @var Date
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $iniProcessDate;

    /**
     * @var Date
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $finalProcessDate;

    /**
     * @var Date
     *
     * @ORM\Column(type="date", nullable=true)
     */
    private $incorporationDate;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=10)
     */
    private $lang;

    /**
     * @var Operator
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Operator", inversedBy="document" )
     */
    private $operator;

    /**
     * @var SourceInformation
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SourceInformation", inversedBy="document" )
     */
    private $sourceInformation;

    /**
     * @var DocumentType
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DocumentType", inversedBy="document" )
     */
    private $documentType;

    /**
     * @var Format
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Format", inversedBy="document" )
     */
    private $format;

    /**
     * @var Brand
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Brand", inversedBy="document" )
     */
    private $brand;

    /**
     * @var Model
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Model", inversedBy="document" )
     */
    private $model;

//    /**
//     * @var string
//     *
//     * @ORM\Column(type="string", length=5000, nullable=true)
//     */
//    private $fullDocument;
//
//    /**
//     * @var string
//     *
//     * @ORM\Column(type="string", length=5000, nullable=true)
//     */
//    private $fullDocument2;
//    /**
//     * @var string
//     *
//     * @ORM\Column(type="string", length=5000, nullable=true)
//     */
//    private $fullDocument3;
//    /**
//     * @var string
//     *
//     * @ORM\Column(type="string", length=5000, nullable=true)
//     */
//    private $fullDocument4;
//
//
//    /**
//     * @Vich\UploadableField(mapping="documents", fileNameProperty="fullDocument")
//     * @var File
//     */
//    private $fullDocumentFile;
//
//    /**
//     * @Vich\UploadableField(mapping="documents", fileNameProperty="fullDocument2")
//     * @var File
//     */
//    private $fullDocumentFile2;
//    /**
//     * @Vich\UploadableField(mapping="documents", fileNameProperty="fullDocument3")
//     * @var File
//     */
//    private $fullDocumentFile3;
//    /**
//     * @Vich\UploadableField(mapping="documents", fileNameProperty="fullDocument4")
//     * @var File
//     */
//    private $fullDocumentFile4;

    public function __construct()
    {
        $this->setDocumentDate(new \DateTime());
        $this->setCarEvoReceptionDate(new \DateTime());
        $this->setIniProcessDate(new \DateTime());
        $this->setFinalProcessDate(new \DateTime());
        $this->setIncorporationDate(new \DateTime());
        $this->setCountry('ES');
        $this->setLang('Español');
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @return Operator
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param Operator $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return SourceInformation
     */
    public function getSourceInformation()
    {
        return $this->sourceInformation;
    }

    /**
     * @param SourceInformation $sourceInformation
     */
    public function setSourceInformation($sourceInformation)
    {
        $this->sourceInformation = $sourceInformation;
    }

    /**
     * @return DocumentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @param DocumentType $documentType
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
    }

    /**
     * @return Format
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param Format $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return Format
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param Format $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return Format
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param Format $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }



    /**
     * @return Date
     */
    public function getDocumentDate()
    {
        return $this->documentDate;
    }

    /**
     * @param Date $documentDate
     */
    public function setDocumentDate($documentDate)
    {
        $this->documentDate = $documentDate;
    }

    /**
     * @return Date
     */
    public function getCarEvoReceptionDate()
    {
        return $this->carEvoReceptionDate;
    }

    /**
     * @param Date $carEvoReceptionDate
     */
    public function setCarEvoReceptionDate($carEvoReceptionDate)
    {
        $this->carEvoReceptionDate = $carEvoReceptionDate;
    }

    /**
     * @return Date
     */
    public function getIniProcessDate()
    {
        $this->iniProcessDate;
    }

    /**
     * @param Date $iniProcessDate
     */
    public function setIniProcessDate($iniProcessDate)
    {
        $this->iniProcessDate = $iniProcessDate;
    }

    /**
     * @return Date
     */
    public function getFinalProcessDate()
    {
        return $this->finalProcessDate;
    }

    /**
     * @param Date $finalProcessDate
     */
    public function setFinalProcessDate($finalProcessDate)
    {
        $this->finalProcessDate = $finalProcessDate;
    }

    /**
     * @return Date
     */
    public function getIncorporationDate()
    {
        return $this->incorporationDate;
    }

    /**
     * @param Date $incorporationDate
     */
    public function setIncorporationDate($incorporationDate)
    {
        $this->incorporationDate = $incorporationDate;
    }


//    /**
//     * @return string
//     */
//    public function getFullDocument()
//    {
//        return $this->fullDocument;
//    }
//
//    /**
//     * @param string $fullDocument
//     */
//    public function setFullDocument($fullDocument)
//    {
//        $this->fullDocument = $fullDocument;
//    }
//
//
//    public function setFullDocumentFile(File $fullDocumentFile = null)
//    {
//        $this->fullDocumentFile = $fullDocumentFile;
//    }
//
//    public function getFullDocumentFile()
//    {
//        return $this->fullDocumentFile;
//    }
//
//    /**
//     * @return string
//     */
//    public function getFullDocument2()
//    {
//        return $this->fullDocument2;
//    }
//
//    /**
//     * @param string $fullDocument2
//     */
//    public function setFullDocument2($fullDocument2)
//    {
//        $this->fullDocument2 = $fullDocument2;
//    }
//
//    /**
//     * @return File
//     */
//    public function getFullDocumentFile2()
//    {
//        return $this->fullDocumentFile2;
//    }
//
//    /**
//     * @param File $fullDocumentFile2
//     */
//    public function setFullDocumentFile2(File $fullDocumentFile2=null)
//    {
//        $this->fullDocumentFile2 = $fullDocumentFile2;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getFullDocument3()
//    {
//        return $this->fullDocument3;
//    }
//
//    /**
//     * @param mixed $fullDocument3
//     */
//    public function setFullDocument3($fullDocument3)
//    {
//        $this->fullDocument3 = $fullDocument3;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getFullDocument4()
//    {
//        return $this->fullDocument4;
//    }
//
//    /**
//     * @param mixed $fullDocument4
//     */
//    public function setFullDocument4($fullDocument4)
//    {
//        $this->fullDocument4 = $fullDocument4;
//    }
//
//    /**
//     * @return File
//     */
//    public function getFullDocumentFile3()
//    {
//        return $this->fullDocumentFile3;
//    }
//
//    /**
//     * @param File $fullDocumentFile3
//     */
//    public function setFullDocumentFile3(File $fullDocumentFile3 = null)
//    {
//        $this->fullDocumentFile3 = $fullDocumentFile3;
//    }
//
//    /**
//     * @return File
//     */
//    public function getFullDocumentFile4()
//    {
//        return $this->fullDocumentFile4;
//    }
//
//    /**
//     * @param File $fullDocumentFile4
//     */
//    public function setFullDocumentFile4(File $fullDocumentFile4=null)
//    {
//        $this->fullDocumentFile4 = $fullDocumentFile4;
//    }
//
//    /**
//     * @return array
//     */
//    public function getFullDocumentFiles()
//    {
//        return [
//            $this->fullDocument,
//            $this->fullDocument2,
//            $this->fullDocument3,
//            $this->fullDocument4
//        ];
//    }





}
