<?php
header('Content-Type: application/json');

try {
    // Connexion à la base de données avec les nouveaux paramètres
    $pdo = new PDO(
        "mysql:host=db;dbname=contact_form_cv",
        "hafidaEl",
        "password"
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Nettoyage et validation des données
    $data = json_decode(file_get_contents('php://input'), true);
    if (!$data) {
        error_log('Aucune donnée reçue.');
    } else {
        error_log('Données reçues : ' . json_encode($data));
    }
    $nom = filter_var(trim($data['nom'] ?? ''), FILTER_SANITIZE_STRING);
    $prenom = filter_var(trim($data['prenom'] ?? ''), FILTER_SANITIZE_STRING);
    $societe = filter_var(trim($data['societe'] ?? ''), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($data['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $telephone = filter_var(trim($data['telephone'] ?? ''), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($data['message'] ?? ''), FILTER_SANITIZE_STRING);

    // Validation des champs obligatoires
    if (empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($message)) {
        throw new Exception('Tous les champs marqués d\'un astérisque sont obligatoires');
    }

    // Validation de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('L\'adresse email n\'est pas valide');
    }

    // Validation du numéro de téléphone (format français)
    if (!preg_match("/^[0-9]{10}$/", str_replace([' ', '.', '-'], '', $telephone))) {
        throw new Exception('Le numéro de téléphone n\'est pas valide');
    }

    // Préparation et exécution de la requête
    $stmt = $pdo->prepare("
        INSERT INTO messages (nom, prenom, societe, email, telephone, message)
        VALUES (:nom, :prenom, :societe, :email, :telephone, :message)
    ");

    $stmt->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':societe' => $societe,
        ':email' => $email,
        ':telephone' => $telephone,
        ':message' => $message
    ]);

    echo json_encode(['success' => true, 'message' => 'Message enregistré avec succès']);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
