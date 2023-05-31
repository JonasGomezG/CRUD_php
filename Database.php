<?php

    class Database{

        public static function conectar(){
            $driver = 'mysql';
            $host='127.0.0.1';
            $port = '3306';
            $user='root';
            $password = '';
            $db = 'practicaordenadores';
            
            $dsn = "$driver:dbname=$db;host=$host;port=$port";
            
            try {
                $gbd = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }

            return $gbd;
        }

        public static function getAll(){

            $sql = "SELECT * FROM ordenadores";
            $resultado = self::conectar()->query($sql);
            return $resultado;
        }

        public static function delete($id){
            $sql = "DELETE FROM ordenadores WHERE id = $id";
            self::conectar()->exec($sql);
        }

        public static function save($datos){
            $sql = "INSERT INTO ordenadores (marca, modelo, precio, descripcion) VALUES ('$datos[0]', '$datos[1]', $datos[2], '$datos[3]')";
            self::conectar()->exec($sql);
        }

        public static function findbyId($id){
            $sql = "SELECT * FROM ordenadores WHERE id = $id";
            $ordenador = self::conectar()->query($sql);
            return $ordenador->fetch(PDO::FETCH_ASSOC);
        }

        public static function update($datos){
            $sql = "UPDATE ordenadores SET marca = '$datos[1]', modelo = '$datos[2]', precio = $datos[3], descripcion = '$datos[4]' WHERE id = $datos[0]";
            self::conectar()->exec($sql);
        }
    }

?>