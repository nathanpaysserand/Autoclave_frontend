# Adresse de connexion
http://localhost/autoclave_roquelaure/login.html

# Requete SQL pour faire varier la temperature
INSERT INTO mesures (temperature, consigne, cycle, etat)
VALUES (102, 100, 'Stérilisation', 'run');

# Modif le code

faire une courbe plus petite et garder la meme largeur des points (en fonction de la préférence du prof)

Lundi 23/03/2026 : Partie réseaux (Wazuh)


# Note perso

La courbe (tout le site) est en temps réelle.

Si on met autre chose que "run" ou "off" cela affiche quand même les mots que l'on met (aucune couleur affichées)

Couleur et alertes quand la témp est trop haute ou trop basse (40°C - 150°C)

c quoi qui change entre ca : INSERT INTO mesures (temperature, consigne, cycle, etat) VALUES (30, 100, 'Stérilisation', 'run'); et ca : INSERT INTO mesures (temperature, consigne, cycle, etat)
VALUES (102, 100, 'Stérilisation', 'run');