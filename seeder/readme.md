# HOW TO USE

1. verrander je gegevens in de index.php naar jouw database gegevens.
2. ga via je cmd in de seerder folder en type:

```
PHP -S 127.0.0.1:8000
```

3. ga vervolgens naar het bovenstaande IP
4. Stop de PHP server door middel van crtl+c in je cmd te gebruiken

Als je nu in je database manager kijkt is er een database "gezondheidsmeter" aangemaakt met de benodigde velden.

Als er updates zijn aan de database pas dit aan in de seeder.sql en type hier onder wat er is aangepast:

- Sql file toegevoegd.
- Benodigde velden toegevoegd.
- Relaties toegevoegd. door middel van een ALTER TABLE (90 - 97)
