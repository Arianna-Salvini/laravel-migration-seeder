# Descrizione
Creiamo una tabella trains e relativa Migration

Ogni treno dovrà avere almeno:

- Azienda
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Numero Carrozze
- In orario
- Cancellato

<!-- È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto  -->

Inserite inizialmente i dati tramite PhpMyAdmin o artisan tinker per chi ne ha capito l'utilizzo.

Create il modello Model relativo alla migrazione che avete predisposto al fine di mappare la tabelle del db ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.

# Descrizione 2:

- Aggiungiamo un seeder per la classe Train usando un array di dati fittizzi fatta a mano.

## BONUS: 
- Implementare il seeder tramite FakerPHP

<!-- Problemi di branch: Head detached

ariannasalvini@MBP-di-Arianna laravel-migration-seeder % git branch
* (HEAD detached from d4ffe75)
  main
ariannasalvini@MBP-di-Arianna laravel-migration-seeder % git checkout main
Warning: you are leaving 1 commit behind, not connected to
any of your branches:

  03918bd Add second decription in readme file

If you want to keep it by creating a new branch, this may be a good time
to do so with:

 git branch <new-branch-name> 03918bd

Switched to branch 'main'
Your branch is up to date with 'origin/main'.
ariannasalvini@MBP-di-Arianna laravel-migration-seeder % 
ariannasalvini@MBP-di-Arianna laravel-migration-seeder % git branch readme-edit 03918bd      
ariannasalvini@MBP-di-Arianna laravel-migration-seeder %                    

Infine andare sul comitt da pushare, click col desto create branch
Poi cliccare sulla brach (nella scheda che si apre) e fare Merge branch. -->