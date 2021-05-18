<?php
require_once('../../helpers/database.php');
require_once('../../helpers/validator.php');
require_once('../../models/tipo_articulos.php');

// Se comprueba si existe una acción a realizar, de lo contrario se finaliza el script con un mensaje de error.
if (isset($_GET['action'])) {
    // Se crea una sesión o se reanuda la actual para poder utilizar variables de sesión en el script.
    session_start();
    // Se instancia la clase correspondiente.
    $tipo_articulo = new TipoArticulo;
    // Se declara e inicializa un arreglo para guardar el resultado que retorna la API.
    $result = array('status' => 0, 'message' => null, 'exception' => null);
    // Se verifica si existe una sesión iniciada como administrador, de lo contrario se finaliza el script con un mensaje de error.
    if (isset($_SESSION['id_usuario'])) {
        // Se compara la acción a realizar cuando un administrador ha iniciado sesión.
        switch ($_GET['action']) {
            case 'readAll':
                if ($result['dataset'] = $tipo_articulo->readAll()) {
                    $result['status'] = 1;
                } else {
                    if (Database::getException()) {
                        $result['exception'] = Database::getException();
                    } else {
                        $result['exception'] = 'No hay tipos de artículos registrados';
                    }
                }
                break;
            case 'search':
                $_POST = $tipo_articulo->validateForm($_POST);
                if ($_POST['search'] != '') {
                    if ($result['dataset'] = $tipo_articulo->searchRows($_POST['search'])) {
                        $result['status'] = 1;
                        $rows = count($result['dataset']);
                        if ($rows > 1) {
                            $result['message'] = 'Se encontraron ' . $rows . ' coincidencias';
                        } else {
                            $result['message'] = 'Solo existe una coincidencia';
                        }
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'No hay coincidencias';
                        }
                    }
                } else {
                    $result['exception'] = 'Ingrese un valor para buscar';
                }
                break;
            case 'create':
                $_POST = $tipo_articulo->validateForm($_POST);
                //$POST es ID del campo
                if ($tipo_articulo->setTipo($_POST['tipo_articulo'])) {
                    if ($tipo_articulo->setDescripcion($_POST['descripcion_tipo_articulo'])) {
                        if (is_uploaded_file($_FILES['foto_tipo_articulo']['tmp_name'])) {
                            if ($tipo_articulo->setFoto($_FILES['foto_tipo_articulo'])) {
                                if ($tipo_articulo->createRow()) {
                                    $result['status'] = 1;
                                    if ($tipo_articulo->saveFile($_FILES['foto_tipo_articulo'], $tipo_articulo->getRuta(), $tipo_articulo->getFoto())) {
                                        $result['message'] = 'Tipo de artículo creado correctamente';
                                    } else {
                                        $result['message'] = 'Tipo de artículo creado, pero no se guardó la imagen';
                                    }
                                } else {
                                    $result['exception'] = Database::getException();
                                }
                            } else {
                                $result['exception'] = $tipo_articulo->getImageError();
                            }
                        } else {
                            $result['exception'] = 'Seleccione una imagen';
                        }
                    } else {
                        $result['exception'] = 'Descripción incorrecta';
                    }
                } else {
                    $result['exception'] = 'Tipo de artículo incorrecto';
                }
                break;
            case 'readOne':
                if ($tipo_articulo->setId($_POST['id_tipo_articulo'])) {
                    if ($result['dataset'] = $tipo_articulo->readOne()) {
                        $result['status'] = 1;
                    } else {
                        if (Database::getException()) {
                            $result['exception'] = Database::getException();
                        } else {
                            $result['exception'] = 'Tipo de artículo inexistente';
                        }
                    }
                } else {
                    $result['exception'] = 'Tipo de artículo incorrecto';
                }
                break;
            case 'update':
                $_POST = $tipo_articulo->validateForm($_POST);
                if ($tipo_articulo->setId($_POST['id_tipo_articulo'])) {
                    if ($data = $tipo_articulo->readOne()) {
                        if ($tipo_articulo->setTipo($_POST['tipo_articulo'])) {
                            if ($tipo_articulo->setDescripcion($_POST['descripcion_tipo_articulo'])) {
                                if (is_uploaded_file($_FILES['foto_tipo_articulo']['tmp_name'])) {
                                    if ($tipo_articulo->setFoto($_FILES['foto_tipo_articulo'])) {
                                        if ($tipo_articulo->updateRow($data['foto_tipo_articulo'])) {
                                            $result['status'] = 1;
                                            if ($tipo_articulo->saveFile($_FILES['foto_tipo_articulo'], $tipo_articulo->getRuta(), $tipo_articulo->getFoto())) {
                                                $result['message'] = 'Tipo de artículo modificado correctamente';
                                            } else {
                                                $result['message'] = 'Tipo de artículo modificado, pero no se guardó la imagen';
                                            }
                                        } else {
                                            $result['exception'] = Database::getException();
                                        }
                                    } else {
                                        $result['exception'] = $tipo_articulo->getImageError();
                                    }
                                } else {
                                    if ($tipo_articulo->updateRow($data['foto_tipo_articulo'])) {
                                        $result['status'] = 1;
                                        $result['message'] = 'Tipo de artículo modificado correctamente';
                                    } else {
                                        $result['exception'] = Database::getException();
                                    }
                                }
                            } else {
                                $result['exception'] = 'Descripción incorrecta';
                            }
                        } else {
                            $result['exception'] = 'Nombre incorrecto';
                        }
                    } else {
                        $result['exception'] = 'Categoría inexistente';
                    }
                } else {
                    $result['exception'] = 'Categoría incorrecta';
                }
                break;
            case 'delete':
                if ($tipo_articulo->setId($_POST['id_tipo_articulo'])) {
                    if ($data = $tipo_articulo->readOne()) {
                        if ($tipo_articulo->deleteRow()) {
                            $result['status'] = 1;
                            if ($tipo_articulo->deleteFile($tipo_articulo->getRuta(), $data['foto_tipo_articulo'])) {
                                $result['message'] = 'Tipo de artículo eliminado correctamente';
                            } else {
                                $result['message'] = 'Tipo de artículo eliminado, pero no se borró la imagen';
                            }
                        } else {
                            $result['exception'] = Database::getException();
                        }
                    } else {
                        $result['exception'] = 'Tipo de artículo inexistente';
                    }
                } else {
                    $result['exception'] = 'Tipo de artículo incorrecto';
                }
                break;
            default:
                $result['exception'] = 'Acción no disponible dentro de la sesión';
        }
        // Se indica el tipo de contenido a mostrar y su respectivo conjunto de caracteres.
        header('content-type: application/json; charset=utf-8');
        // Se imprime el resultado en formato JSON y se retorna al controlador.
        print(json_encode($result));
    } else {
        print(json_encode('Acceso denegado'));
    }
} else {
    print(json_encode('Recurso no disponible'));
}
