<?php

namespace App\Entity;

use App\Repository\RegistrosContablesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RegistrosContablesRepository::class)
 */
class RegistrosContables
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_registros_contables;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_tercero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre_tercero;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $identificacion;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_tipo_tercero;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_tipo_registro;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $informacion_principal;

    /**
     * @ORM\Column(type="decimal", precision=20, scale=2)
     */
    private $valor_final;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $estado;
    /**
     * @ORM\Column(type="datetime")
     */
    private $fecha_registro;

    /**
     * @return mixed
     */
    public function getIdRegistrosContables()
    {
        return $this->id_registros_contables;
    }

    /**
     * @param mixed $id_registros_contables
     */
    public function setIdRegistrosContables($id_registros_contables): void
    {
        $this->id_registros_contables = $id_registros_contables;
    }



    public function getIdTercero(): ?int
    {
        return $this->id_tercero;
    }

    public function setIdTercero(int $id_tercero): self
    {
        $this->id_tercero = $id_tercero;

        return $this;
    }

    public function getNombreTercero(): ?string
    {
        return $this->nombre_tercero;
    }

    public function setNombreTercero(string $nombre_tercero): self
    {
        $this->nombre_tercero = $nombre_tercero;

        return $this;
    }

    public function getIdentificacion(): ?float
    {
        return $this->identificacion;
    }

    public function setIdentificacion(?float $identificacion): self
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    public function getIdTipoTercero(): ?int
    {
        return $this->id_tipo_tercero;
    }

    public function setIdTipoTercero(int $id_tipo_tercero): self
    {
        $this->id_tipo_tercero = $id_tipo_tercero;

        return $this;
    }

    public function getIdTipoRegistro(): ?int
    {
        return $this->id_tipo_registro;
    }

    public function setIdTipoRegistro(int $id_tipo_registro): self
    {
        $this->id_tipo_registro = $id_tipo_registro;

        return $this;
    }

    public function getInformacionPrincipal(): ?string
    {
        return $this->informacion_principal;
    }

    public function setInformacionPrincipal(?string $informacion_principal): self
    {
        $this->informacion_principal = $informacion_principal;

        return $this;
    }

    public function getValorFinal(): ?string
    {
        return $this->valor_final;
    }

    public function setValorFinal(string $valor_final): self
    {
        $this->valor_final = $valor_final;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFechaRegistro()
    {
        return $this->fecha_registro;
    }

    public function setFechaRegistro($fecha_registro): void
    {
        $this->fecha_registro = $fecha_registro;
    }

}
