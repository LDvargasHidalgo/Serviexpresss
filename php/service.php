<?php
class ServiceCRUD {
    private $conexion;

    function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Create a new service
    public function createService($user_id, $name, $category_id, $image, $active) {
        $sql = "INSERT INTO service (user_id, name, category_id, image, active) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("issbs", $user_id, $name, $category_id, $image, $active);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Read all services
    public function readServices() {
        $sql = "SELECT * FROM service";
        $result = $this->conn->query($sql);
        return $result;
    }

    // Update a service
    public function updateService($id, $user_id, $name, $category_id, $image, $active) {
        $sql = "UPDATE service SET user_id=?, name=?, category_id=?, image=?, active=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("issbsi", $user_id, $name, $category_id, $image, $active, $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Delete a service
    public function deleteService($id) {
        $sql = "DELETE FROM service WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
