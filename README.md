# shop-online

## cosa fare
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 - L'e-commerce vende **prodotti** per animali.
 - I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
 - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo 
che si sta visualizzando (cibo, gioco, cuccia).

## gestione progetto

CATEGORIES---caratteristiche categoria---> tipo(cane, gatto), icona_categoria

PRODUCT extends CATEGORIES---caratteristiche di un prodotto generale---> titolo, prezzo, immagine

PRODUCTS extends PRODUCT---tipi di prodotto venduti---> tipo_prodotto (giochi, cucce, cibo)