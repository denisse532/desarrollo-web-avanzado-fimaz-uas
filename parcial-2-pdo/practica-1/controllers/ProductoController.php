<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Producto.php';

class ProductoController{
    private $connection;

    public function __construct(){
        $database = new Database();
        $this->connection = $database->getConnection();
    }


    public function crear(Productos $producto){
            $sql = "INSERT INTO productos (nombre, descripcion, existencia, precio)
            VALUES (:nombre, :descripcion, :existencia, :precio)";
            $stmt= $this->connection->prepare($sql);

            $stmt->bindValue(':nombre',$producto->getnombre());
            $stmt->bindValue(':descripcion',$producto->getdescripcion());
            $stmt->bindValue(':existencia',$producto->getexistencia());
            $stmt->bindValue(':precio',$producto->getprecio());

            return $stmt->execute();
        }
        
        public function listar(){
            $sql = "SELECT * FROM productos ORDER BY idProducto DESC";
            $stmt= $this->connection->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function obtenerPorID($idProducto){
            $sql = "SELECT * FROM productos WHERE idProducto = :idProducto";
            $stmt= $this->connection->prepare($sql);
            $stmt->bindValue(':idProducto',$idProducto, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch();
        }
        public function actualizar(Productos $producto) {
            $sql = "UPDATE productos
                SET nombre = :nombre, descripcion = :descripcion, existencia = :existencia, precio = :precio
                WHERE idProducto = :idProducto";
            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(':idProducto', $producto->getidProducto(), PDO::PARAM_INT);
            $stmt->bindValue(':nombre', $producto->getnombre());
            $stmt->bindValue(':descripcion', $producto->getdescripcion());
            $stmt->bindValue(':existencia', $producto->getexistencia(), PDO::PARAM_INT);
            $stmt->bindValue(':precio', $producto->getprecio());
            
            return $stmt->execute();
        }

        public function eliminar($idProducto) {
            $sql = "DELETE FROM productos WHERE idProducto = :idProducto";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue(':idProducto', $idProducto, PDO::PARAM_INT);
            return $stmt->execute();
        }

         public function buscar($termino) { 
            $sql ="SELECT * FROM productos
            WHERE nombre LIKE :termino
            OR descripcion LIKE :termino
            ORDER BY idProducto DESC";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindValue(':termino','%' . $termino . '%');
            $stmt->execute();
            
            return $stmt->fetchAll();
        }
}

?>