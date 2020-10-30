# HorlogeDeBerlin
L'implementation du code à été fait via la méthode TDD, mon collègue (Alexandre Pronce) a eu des problèmes de version php, ce qui fait que je suis la seule à avoir fait des commits, mais durant tout le temps passé à coder, il était présent en vocal avec moi, et je partageais mon écran, il voyait donc tout ce que j'écrivais et me corrigeait quand celà était nécéssaire.

Pour ce qui est de l'implémentation, nous avons décidé d'afficher des indexes de tableau.  
Nous avons 4 tableau de string pré-remplis avec les valeurs que nous affichons entre "[]".
Nous n'affichons que ce qui est "allumé" sur l'horloge, je m'explique : 
Prenons un exemple : 11h42 et 3 secondes, l'horloge affichera ceci : 

OFF
[5hours][10hours]
[1st hour]
[5min][10min][15MIN][20min][25min][30MIN][35min][40min]
[1st Minute][2nd Minute]


mais quelques explications s'imposent : 

OFF  --> 3 secondes, c'est impair donc ampoule éteinte.
[5hours][10hours]   --> 10 heures, 2 ampoules sur 4 sont allumées.
[1st hour]          --> 1 heure, 1 ampoule sur 4 est allumées.
[5min][10min][15MIN][20min][25min][30MIN][35min][40min]   --> 40 minutes, 8 ampoules allumées sur les 11 au total.
[1st Minute][2nd Minute]  --> 2 minutes, 2 ampoules allumées sur les 4.

(selon le schéma de l'hormoge de berlin  :: https://en.wikipedia.org/wiki/Mengenlehreuhr )
pour ce qui est des 11 ampoules "5 minutes" (dont l'ampoule des 15, 30 et 45 minutes sont rouges) nous avons représenté cette "différence de couleur" par des majuscules dans les tableaux : 
[5min][10min][15MIN][20min][25min][30MIN][35min][40min]

j'espère que ces informations pu aider à la compréhension de notre code :)
j'ai codé une version de l'horloge de berlin en java pour le fun (le code est loin d'être propre... désolé pour ça :/ ).
Merci et bonne lecture ! :) 
