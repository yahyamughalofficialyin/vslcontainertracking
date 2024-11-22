<?php

include 'module.php';


// *****************************ADMIN CRUD*****************************


if (isset($_POST['create_admin'])) {


    $id = generateRandomId();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $addedBy = $adminId;

    // Check for duplicate email or phone
    $stmt = $conn->prepare("SELECT id FROM admin WHERE email = ? OR phone = ?");
    $stmt->bind_param("ss", $email, $phone);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Error: Email or Phone number already exists!";
        $stmt->close();
        exit;
    }
    $stmt->close();

    // Image Upload
    $image = $_FILES['image']['name'];
    $targetDir = "uploads/admin/";
    $uniqueImageName = uniqid() . "_" . basename($image);
    $targetFile = $targetDir . $uniqueImageName;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is valid
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    if (in_array($imageFileType, $allowedExtensions)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $stmt = $conn->prepare("INSERT INTO admin (id, name, email, phone, password, image, AddedBy) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $id, $name, $email, $phone, $password, $uniqueImageName, $addedBy);
            $stmt->execute();
            $stmt->close();
            echo "Admin added successfully!";
        } else {
            echo "Error uploading the image.";
        }
    } else {
        echo "Only JPG, JPEG, and PNG files are allowed.";
    }
}


// READ Operation
if (isset($_GET['fetch_admins'])) {
    $sql = "SELECT * FROM admin";
    $result = $conn->query($sql);
    $admins = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $admins[] = $row;
        }
    }
    echo json_encode($admins);
}

// UPDATE Operation
if (isset($_POST['update_admin'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if a new image file is uploaded
    if (!empty($_FILES['image']['name'])) {
        // Retrieve current image file name from database
        $stmt = $conn->prepare("SELECT image FROM admin WHERE id = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->bind_result($currentImage);
        $stmt->fetch();
        $stmt->close();

        // Delete the old image file if it exists
        if ($currentImage && file_exists("uploads/admin/" . $currentImage)) {
            unlink("uploads/admin/" . $currentImage);
        }

        // Upload new image
        $image = $_FILES['image']['name'];
        $targetDir = "uploads/admin/";
        $uniqueImageName = uniqid() . "_" . basename($image);
        $targetFile = $targetDir . $uniqueImageName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check and move the new file
        if (in_array($imageFileType, ['jpg', 'jpeg', 'png']) && move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            // Update admin details with new image
            $stmt = $conn->prepare("UPDATE admin SET name = ?, email = ?, phone = ?, password = ?, image = ? WHERE id = ?");
            $stmt->bind_param("ssssss", $name, $email, $phone, $password, $uniqueImageName, $id);
        }
    } else {
        // Update without changing the image
        $stmt = $conn->prepare("UPDATE admin SET name = ?, email = ?, phone = ?, password = ? WHERE id = ?");
        $stmt->bind_param("sssss", $name, $email, $phone, $password, $id);
    }
    $stmt->execute();
    $stmt->close();
    echo "Admin updated successfully!";
}

// DELETE Operation
if (isset($_POST['delete_admin'])) {
    $id = $_POST['id'];

    // Retrieve current image file name from database
    $stmt = $conn->prepare("SELECT image FROM admin WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->bind_result($currentImage);
    $stmt->fetch();
    $stmt->close();

    // Delete the image file if it exists
    if ($currentImage && file_exists("uploads/admin/" . $currentImage)) {
        unlink("uploads/admin/" . $currentImage);
    }

    // Delete the admin record from the database
    $stmt = $conn->prepare("DELETE FROM admin WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->close();
    echo "Admin deleted successfully!";
}

if ($container) {

    // Direct Container Creation
    if (isset($_POST['create_container_direct'])) {
        function generateContainerNo()
        {
            return "VSL" . strtoupper(substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 8));
        }

        $containerNo = generateContainerNo();
        $status = "In Queue";
        $addedBy = $adminId; // Adjust as needed
        $sql = "INSERT INTO container (id, ContainerNo, Status, AddedBy) VALUES (UUID(), ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $containerNo, $status, $addedBy);
        if ($stmt->execute()) {
            echo "Container created successfully!";
        } else {
            echo "Failed to create container!";
        }
    }

    if (isset($_POST['delete_container']) && !empty($_POST['id'])) {
        $sql = "DELETE FROM container WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $_POST['id']);
        if ($stmt->execute()) {
            echo "Container deleted successfully!";
        } else {
            echo "Failed to delete container!";
        }
    }

    if (isset($_POST['update_container'])) {
        $sql = "UPDATE container SET Status = ?, GateIn = ?, GateOut = ?, POL = ?, POD = ?, VIAPORT = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "sssssss",
            $_POST['status'],
            $_POST['gatein'],
            $_POST['gateout'],
            $_POST['pol'],
            $_POST['pod'],
            $_POST['viaport'],
            $_POST['id']
        );
        if ($stmt->execute()) {
            echo "Container updated successfully!";
        } else {
            echo "Failed to update container!";
        }


        // Read Containers
        if (isset($_GET['fetch_containers'])) {
            $sql = "SELECT * FROM container";
            $result = $conn->query($sql);
            $containers = [];
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $containers[] = $row;
                }
            }
            echo json_encode($containers);
        }
    }


    // Read Containers
    if (isset($_GET['fetch_containers'])) {
        $sql = "SELECT * FROM container";
        $result = $conn->query($sql);
        $containers = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $containers[] = $row;
            }
        }
        echo json_encode($containers);
    }

    
}


// ******************************************************************CONNECTION CLOSED******************************************************************


$conn->close();
