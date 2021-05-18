<?php
/*
*	Clase para manejar la tabla tipo_articulo de la base de datos. Es clase hija de Validator.
*/
class TipoArticulo extends Validator
{
    // Declaración de atributos (propiedades).
    private $id = null;
    private $tipo = null;
    private $descripcion = null;
    private $foto = null;
    private $ruta = '../../../resources/img/tipo_articulo/';

    /*
    *   Métodos para asignar valores a los atributos.
    */
    public function setId($value)
    {
        if ($this->validateNaturalNumber($value)) {
            $this->id = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setTipo($value)
    {
        if ($this->validateAlphabetic($value, 1, 150)) {
            $this->tipo = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setDescripcion($value)
    {
        if ($value) {
            if ($this->validateString($value, 1, 250)) {
                $this->descripcion = $value;
                return true;
            } else {
                return false;
            }
        } else {
            $this->descripcion = null;
            return true;
        }
    }
    public function setFoto($file)
    {
        if ($this->validateImageFile($file, 500, 500)) {
            $this->foto = $this->getImageName();
            return true;
        } else {
            return false;
        }
    }

    /*
    *   Métodos para obtener valores de los atributos.
    */
    public function getId()
    {
        return $this->id;
    }

    public function getTipo()
    {
        return $this->tipo;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getRuta()
    {
        return $this->ruta;
    }

    /*
    *   Métodos para realizar las operaciones SCRUD (search, create, read, update, delete).
    */
    public function searchRows($value)
    {
        $sql = 'SELECT id_tipo_articulo, tipo_articulo, descripcion_tipo_articulo, foto_tipo_articulo
                FROM tipo_articulo
                WHERE tipo_articulo ILIKE ? OR descripcion_tipo_articulo ILIKE ?
                ORDER BY tipo_articulo';
        $params = array("%$value%", "%$value%");
        return Database::getRows($sql, $params);
    }

    public function createRow()
    {
        $sql = 'INSERT INTO tipo_articulo (id_tipo_articulo, tipo_articulo, descripcion_tipo_articulo, foto_tipo_articulo)
                VALUES (default, ?, ?, ?)';
        $params = array($this->tipo, $this->descripcion, $this->foto);
        return Database::executeRow($sql, $params);
    }

    public function readAll()
    {
        $sql = 'SELECT id_tipo_articulo, tipo_articulo, descripcion_tipo_articulo, foto_tipo_articulo
                FROM tipo_articulo
                ORDER BY tipo_articulo';
        $params = null;
        return Database::getRows($sql, $params);
    }

    public function readOne()
    {
        $sql = 'SELECT id_tipo_articulo, tipo_articulo, descripcion_tipo_articulo, foto_tipo_articulo
                FROM tipo_articulo
                WHERE id_tipo_articulo = ?';
        $params = array($this->id);
        return Database::getRow($sql, $params);
    }

    public function updateRow($current_image)
    {
        // Se verifica si existe una nueva imagen para borrar la actual, de lo contrario se mantiene la actual.
        ($this->foto) ? $this->deleteFile($this->getRuta(), $current_image) : $this->foto = $current_image;

        $sql = 'UPDATE tipo_articulo 
                SET tipo_articulo = ?, descripcion_tipo_articulo = ?, foto_tipo_articulo = ?
                WHERE id_tipo_articulo = ?';
        $params = array($this->tipo, $this->descripcion, $this->foto, $this->id);
        return Database::executeRow($sql, $params);
    }

    public function deleteRow()
    {
        $sql = 'DELETE FROM tipo_articulo
                WHERE id_tipo_articulo = ?';
        $params = array($this->id);
        return Database::executeRow($sql, $params);
    }

    public function readProductosCategoria()
    {
        $sql = 'SELECT nombre_categoria, id_producto, imagen_producto, nombre_producto, descripcion_producto, precio_producto
                FROM productos INNER JOIN categorias USING(id_categoria)
                WHERE id_categoria = ? AND estado_producto = true
                ORDER BY nombre_producto';
        $params = array($this->id);
        return Database::getRows($sql, $params);
    }
}
