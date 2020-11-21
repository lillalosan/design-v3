---
Title: Kmom03
Description: SASS och typografi
Template: kmom
---

Kursmoment 2
==================
SASS känns ovant, kanske just för att jag är så van vid att bara använda vanlig CSS. Jag är heller inte bekant med Node, npm eller npm scripts sedan tidigare. Det känns som att det är bra verktyg att lära sig, men det var en brant uppförsbacke att försöka hänga med i vad man faktiskt gör med de olika kommandona och hur allt hänger ihop.

Jag fann det svårt att försöka påbörja detta kmom på förhand, eftersom det för mig inte var tillräckligt tydligt med de skriftliga genomgångarna. Var det något stycke man inte fick att fungera, så visste man inte riktigt hur man skulle komma runt det. När däremot inspelningarna kom gick det otroligt mycket enklare och då förstod jag det bättre!

Jag valde att skapa ett nytt tema för detta kmom, men har följt strukturen från temat jag gjorde i kmom01. Jag har även påbörjat en uppdelning av koden till scss under shared/, men känner mig ändå lite avvaktande med detta.

Kompileringen från SASS till CSS kändes lite bökigt från början, men genom att sätta igång den automatiska komplieringen med 'sass --watch', kändes det smidigare. Dock bör sägas att jag fastnade lite när jag arbetade med scss-filerna under shared och hade igång automatisk kompilering. Tog jag bort saker från 'old.css' som jag lagt över i 'shared/layout' så dök inte ändringarna inte upp. En första tanke var då att 'sass --watch' kanske bara kompilerar just 'css/style' och inte de scss-filer som är importerade. När jag körde 'npm run style-min' på min teams-folder, så fungerade ändringarna. Kontentan är att det gäller att ha koll på läget för att inte fastna på grund av enkla misstag.

Min TIL för detta kmom är framför allt en begynnande förståelse för SASS och även att commit och push nu äntligen börjar att sätta sig :)
