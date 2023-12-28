<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<form id="tvaForm">
    <label for="prixHT">Prix HT :</label>
    <input type="number" id="prixHT" step="0.01" value="" oninput="calculateTVA()">
    
    <label for="tauxTVA">Taux de TVA :</label>
    <input type="number" id="tauxTVA" step="0.01" value="" oninput="calculateTVA()">
    
    <label for="montantTVA">Montant TVA :</label>
    <input type="text" id="montantTVA" readonly>
    
    <label for="prixTTC">Prix TTC :</label>
    <input type="text" id="prixTTC" readonly>
</form>

<script>
    function calculateTVA() {
        // Récupérer les valeurs saisies
        var prixHT = parseFloat(document.getElementById("prixHT").value) || 0;
        var tauxTVA = parseFloat(document.getElementById("tauxTVA").value) || 0;

        // Calculer le montant de la TVA
        var montantTVA = prixHT * (tauxTVA / 100);
        
        // Calculer le prix TTC
        var prixTTC = prixHT + montantTVA;

        // Mettre à jour les zones de texte
        document.getElementById("montantTVA").value = montantTVA.toFixed(2);
        document.getElementById("prixTTC").value = prixTTC.toFixed(2);
    }

    // Appeler calculateTVA au chargement de la page pour afficher les valeurs par défaut
    calculateTVA();
</script>

</body>
</html>
