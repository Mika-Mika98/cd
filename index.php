<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certif-Mika</title>
    <link rel="stylesheet" href="asset/css/main.css">
    <script src="asset/js/script.js" defer></script>
</head>
<body id="b" class="orange">
    <main>
        <header>
            <a href="web gnezale.pdf" id="cv">Téléchargement CV</a>
        </header>

        <section>
                <article id="présentation" >
                        <h1 id="st">Mikael Gnezale</h1> 
                </article>
        </section>

        <section id="rub">
            <article id="rubrique">

                <div id="web">
                    <a href="un.html"><h1 id="titre">WEB</h1></a>
                </div>

                <div id="art">
                    <a href="deux.html"><h1 id="titre">ART</h1></a>
                </div> 

            </article>
        </section>

        <section id="barre">
            <div>
                <form id="recherche" action="formulaire.php" method="post">
                    <input type="text" id="nom" name="nom" placeholder="Nom" required/>
                    <br/>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" required/>
                    <br/>
                    <input type="text" id="mail" name="mail" placeholder="E-mail" required/>
                    <br/>
                    <textarea id="message" name="message"></textarea>
                    <br/>
                    <div id="b">
                        <button id="button">OK</button>
                    </div>
                </form>
            </div>

        </section>

    </main>
</body>
</html>