<?php
// Vérifiez si un message d'erreur est défini
$error_message = isset($_GET['error_message']) ? htmlspecialchars($_GET['error_message']) : 'Une erreur inconnue est survenue.';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur</title>
    <link rel="stylesheet" href="assets/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" w-full h-full flex justify-center items-center">
    <div class="w-full flex items-center justify-center bg-red-100 h-screen">
        <div class="p-8 rounded-lg shadow-lg text-center bg-red-500">
            <h1 class="text-4xl  mb-4"><?php
            if (isset($_GET['id'])) {
                echo 'Erreur ' .($_GET['id']);
            } else {
                echo 'Erreur';
            }
            
            ?></h1>
            <p class="text-xl text-gray-700 mb-4"><?php echo "error is ". htmlspecialchars($_GET['id'])?></p>
            <a href="../form/" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Retour FORM</a>
        </div>
    </div>
</body>
</html>