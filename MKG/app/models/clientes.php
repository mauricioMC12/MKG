<?php
/*
*	Clase para manejar la tabla clientes de la base de datos. Es clase hija de Validator.
*/
class Clientes extends Validator
{
    // Declaración de atributos (propiedades).
    private $id = null;
    private $nombres = null;
    private $apellidos = null;
    private $telefono = null;
    private $alias=null;
    private $correo = null;
    private $clave = null; // Valor por defecto en la base de datos: true
    private $estado = null;
    
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

    public function setNombres($value)
    {
        if ($this->validateAlphabetic($value, 1, 50)) {
            $this->nombres = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setApellidos($value)
    {
        if ($this->validateAlphabetic($value, 1, 50)) {
            $this->apellidos = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setTelefono($value)
    {
        if ($this->validatePhone($value)) {
            $this->telefono = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setAlias($value)
    {
        if ($this->validateEmail($value)) {
            $this->alias = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setCorreo($value)
    {
        if ($this->validateEmail($value)) {
            $this->correo = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setClave($value)
    {
        if ($this->validatePassword($value)) {
            $this->clave = $value;
            return true;
        } else {
            return false;
        }
    }

    public function setEstado($value)
    {
        if ($this->validateBoolean($value)) {
            $this->estado = $value;
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

    public function getNombres()
    {
        return $this->nombres;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    /*
    *   Métodos para gestionar la cuenta del cliente.
    */
    public function checkUser($correo)
    {
        $sql = 'SELECT idCliente, estadoCliente FROM Clientes WHERE correoCliente = ?';
        $params = array($correo);
        if ($data = Database::getRow($sql, $params)) {
            $this->id = $data['idCliente'];
            $this->estado = $data['estadoCliente'];
            $this->correo = $correo;
            return true;
        } else {
            return false;
        }
    }

    public function checkPassword($password)
    {
        $sql = 'SELECT claveCliente FROM Clientes WHERE idCliente = ?';
        $params = array($this->id);
        $data = Database::getRow($sql, $params);
        if (password_verify($password, $data['claveCliente'])) {
            return true;
        } else {
            return false;
        }
    }

    public function changePassword()
    {
        $hash = password_hash($this->clave, PASSWORD_DEFAULT);
        $sql = 'UPDATE Clientes SET claveCliente = ? WHERE idCliente= ?';
        $params = array($hash, $this->id);
        return Database::executeRow($sql, $params);
    }
/*
    *   Nombre Apellido Telefono Nickname Correo Estado 
    */
    public function editProfile()
    {
        $sql = 'UPDATE Clientes
                SET nombreCliente = ?, apellidoCliente = ?, telefonoCliente = ?, correoCliente = ?, estadoCliente = ? WHERE idCliente = ?';
        $params = array($this->nombres, $this->apellidos, $this->telefono, $this->correo, $this->estado, $this->id);
        return Database::executeRow($sql, $params);
    }

    /*
    *   Métodos para realizar las operaciones SCRUD (search, create, read, update, delete).
    */
    public function searchRows($value)
    {
        $sql = 'SELECT idCliente, nombreCliente, apellidoCliente, telefonoCliente, correoCliente, estadoCliente, nickname
                FROM Clientes
                WHERE apellidoCliente ILIKE ? OR nombreCliente ILIKE ?
                ORDER BY apellidoCliente';
        $params = array("%$value%", "%$value%");
        return Database::getRows($sql, $params);
    }

    public function createRow()
    {
        // Se encripta la clave por medio del algoritmo bcrypt que genera un string de 60 caracteres.
        $hash = password_hash($this->clave, PASSWORD_DEFAULT);
        $sql = 'INSERT INTO Clientes( nombreCliente, apellidoCliente, telefonoCliente, correoCliente, estadoCliente, nickname, contraseñaCliente)
                VALUES(?, ?, ?, ?, ?, ?, ?)';
        $params = array($this->nombres, $this->apellidos, $this->telefono, $this->correo, $this->estado, $this->direccion, $this->nickname, $hash);
        return Database::executeRow($sql, $params);
    }

    public function readAll()
    {
        $sql = 'SELECT idCliente, nombreCliente, apellidoCliente, telefonoCliente, correoCliente, estadoCliente, nickname
                FROM Clientes
                ORDER BY apellidoCliente';
        $params = null;
        return Database::getRows($sql, $params);
    }

    public function readOne()
    {
        $sql = 'SELECT  idCliente, nombreCliente, apellidoCliente, telefonoCliente, correoCliente, estadoCliente, nickname
                FROM Clientes
                WHERE idCliente = ?';
        $params = array($this->id);
        return Database::getRow($sql, $params);
    }

    public function updateState()
    {
        $sql = 'UPDATE Clientes
                SET estadoCliente = ?
                WHERE idCliente = ?';
        $params = array($this->id);
        return Database::executeRow($sql, $params);
    }

    public function deleteRow()
    {
        $sql = 'DELETE FROM Clientes
                WHERE idCliente = ?';
        $params = array($this->id);
        return Database::executeRow($sql, $params);
    }
}
