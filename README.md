# shop-online

## cosa fare
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 - L'e-commerce vende **prodotti** per animali.
 - I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
 - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo 
che si sta visualizzando (cibo, gioco, cuccia).

Il **cliente** potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un **account** per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel *carrello* con la **carta di credito**, che non deve essere scaduta.

## gestione progetto

CATEGORIES---caratteristiche categoria---> tipo(cane, gatto), icona_categoria

PRODUCT extends CATEGORIES---caratteristiche di un prodotto generale---> titolo, prezzo, immagine

PRODUCTS extends PRODUCT---tipi di prodotto venduti---> tipo_prodotto (giochi, cucce, cibo)

## come prendere inserire i dati 
<!-- per categories.php -->
reparto: echo $product1-> getType(); (cane o gatto)
logoCane: echo $product1-> getCategory(); (o logo gatto)
<!-- per product.php -->
titolo prodotto: echo $product1-> getTitle(); 
prezzo prodotto: echo $product1-> getPrice(); 
immagine prodotto: echo $product1-> getImage(); 
<!-- per productType.php -->
tipo del prodotto: echo $product1-> getProdType(); 