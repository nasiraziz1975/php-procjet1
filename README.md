## Instrukser for � lage et nytt git repository og laste det opp til github.com:

```

// Starter et nytt git prosjekt i mappen du er i i kommandovinduet.
git init

// 
git add *

// Viser status til git. 
git status

git commit -m "First commit."

// Etter dette kan du lage et repository p� github.com. Kopier URL'en til repositoriet p� nettet og fyll ut nedenfor.

// Deretter legg til repositoriet som en remote, s�nn at vi kan laste opp til nettet.
git remote add origin 'URL_TIL_REPOSITORY'

// Og til slutt last opp den nyeste commiten v�r til nettet
git push -u origin master
```