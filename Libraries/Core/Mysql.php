<?php
    class Mysql extends Conexion
    {
        private $conexion;
        private $strquery;
        private $arrValues;

        
        function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        //Insertar un registro
        public function insert(string $query, array $arrValues)
        {
            $this->strquery = $query;
            $this->arrVAlues = $arrValues;
            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrVAlues);
            if($resInsert)
            {
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }
            return $lastInsert;
        }


    }

?>