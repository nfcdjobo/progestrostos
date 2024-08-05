
const transforme_text_on_image = ()  => {
    // Récupérer le canvas et son contexte 2D
const canvas = document.getElementById("roundedCanvas");
const ctx = canvas.getContext("2d");

const fullnameUser = document.getElementById("fullnameUser").textContent.split(" ");

// Dessiner le texte sur le canvas
const text = fullnameUser.length > 1 ? fullnameUser[0][0]+"."+fullnameUser[1][0] : fullnameUser[0][0];
const fontSize = 20;


// Définir la taille et le style de la police
ctx.font = `${fontSize}px Arial`;
ctx.fillStyle = "black";
ctx.textAlign = "center";
ctx.textBaseline = "middle";

// Coordonnées pour centrer le texte
const x = canvas.width / 2;
const y = canvas.height / 2;

// Dessiner le texte
ctx.fillText(text.toLocaleUpperCase(), x, y);

// Récupérer les données de l'image du canvas
const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);

// Effacer le canvas pour redessiner avec des coins arrondis et une bordure
ctx.clearRect(0, 0, canvas.width, canvas.height);

// Dessiner un rectangle avec des coins arrondis et une bordure noire
const cornerRadius = 20;
const borderWidth = 5;

// Dessiner le rectangle avec coins arrondis
ctx.beginPath();
ctx.moveTo(cornerRadius + borderWidth, 0);
ctx.arcTo(
    canvas.width - borderWidth,
    0,
    canvas.width - borderWidth,
    canvas.height - borderWidth,
    cornerRadius
);
ctx.arcTo(
    canvas.width - borderWidth,
    canvas.height - borderWidth,
    cornerRadius + borderWidth,
    canvas.height - borderWidth,
    cornerRadius
);
ctx.arcTo(
    cornerRadius + borderWidth,
    canvas.height - borderWidth,
    cornerRadius + borderWidth,
    cornerRadius + borderWidth,
    cornerRadius
);
ctx.arcTo(
    cornerRadius + borderWidth,
    cornerRadius + borderWidth,
    canvas.width - borderWidth,
    cornerRadius + borderWidth,
    cornerRadius
);
ctx.closePath();

// Remplir le rectangle avec une couleur de fond blanche
ctx.fillStyle = "#ffffff";
ctx.fill();

// Appliquer une bordure noire au rectangle avec coins arrondis
ctx.strokeStyle = "black";
ctx.lineWidth = borderWidth;
ctx.stroke();

// Appliquer un masquage pour des coins arrondis
ctx.clip();

// Redessiner l'image avec des coins arrondis
ctx.putImageData(imageData, 0, 0);

}

setTimeout(() =>  transforme_text_on_image(), 500);
