<?php

    /**
     * LA CLASE TRATA DE LOS CONTRATOS
     */
    class contratos
    {
        //CREACION ATRIBUTOS
        private $id_cotratos; #int
        private $referencia; #int
        private $titulo_trabajo; #string
        private $nombre_servicio; #string
        private $salario; #double
        private $complementos; #string
        private $duracion_prueba; #datetime
        private $duracion; #datetime
        private $duracion_planificada; #datetime
        private $afilicion; #string
        private $seguto_salud; #string
        private $situacion; #string
        private $regimen_laborar; #string
        
        function __construct()
        {
            
        }

        //DATABASE METHOD
        public function crear()
        {

        }

        public function eliminar()
        {

        }

        public function consultar()
        {

        }

        //SETTER AND GETTER METHOD
        public function setIdcontratos($id_cotratos)
        {
            $this-> id_contratos=$id_cotratos;
        }

        public function getIdcontratos()
        {
            return $this->id_cotratos;
        }

        public function setReferencia($referencia)
        {
            $this-> referencia=$referencia;
        }

        public function getReferencia()
        {
            return $this->referencia;
        }

    }

    